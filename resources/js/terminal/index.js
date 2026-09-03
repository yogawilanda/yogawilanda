// loc    : resources/js/terminal/index.js
// usage  : Main controller terminal, mengurus DOM element binding, event listener utama form submit, tab auto-complete, window controls, dan orkestrasi modul.

import { COMMANDS, commandHandlers, findClosestCommand } from "./commands.js";
import { escapeHTML } from "./helpers.js";
import { startOpenAuthentication } from "./auth.js";
import { initContactModule, startContactRetrieval } from "./contact.js";

export function initTerminal() {
    const windowEl = document.getElementById("terminal-window");
    const bodyEl = document.getElementById("terminal-body");
    const btnMinimize = document.getElementById("btn-minimize");
    const btnMaximize = document.getElementById("btn-maximize");
    const btnClose = document.getElementById("btn-close");
    const btnRestoreFloating = document.getElementById("btn-restore-floating");

    const cliInput = document.getElementById("cli-input");
    const cliForm = document.getElementById("terminal-form");
    const logsContainer = document.getElementById("terminal-logs");

    if (!windowEl || !cliInput) return;

    let isMaximized = false;
    let contactFlowState = "idle";

    const { openContactModal } = initContactModule();

    // --- 1. WINDOW CONTROLS ---
    btnMinimize?.addEventListener("click", (e) => {
        e.stopPropagation();
        bodyEl?.classList.toggle("hidden");
    });

    btnMaximize?.addEventListener("click", (e) => {
        e.stopPropagation();
        if (bodyEl?.classList.contains("hidden")) {
            bodyEl.classList.remove("hidden");
            cliInput.focus();
            return;
        }
        windowEl.classList.toggle("max-w-5xl", !isMaximized);
        windowEl.classList.toggle("max-w-2xl", isMaximized);
        isMaximized = !isMaximized;
    });

    btnClose?.addEventListener("click", (e) => {
        e.stopPropagation();
        windowEl.classList.add("opacity-0", "scale-95", "pointer-events-none");
        setTimeout(() => {
            windowEl.classList.add("hidden");
            btnRestoreFloating?.classList.remove("hidden");
        }, 300);
    });

    btnRestoreFloating?.addEventListener("click", () => {
        btnRestoreFloating.classList.add("hidden");
        windowEl.classList.remove("hidden");
        setTimeout(() => {
            windowEl.classList.remove(
                "opacity-0",
                "scale-95",
                "pointer-events-none",
            );
            bodyEl?.classList.remove("hidden");
        }, 10);
    });

    // --- 2. CLI ENGINE & AUTO-COMPLETE ---
    cliInput.addEventListener("keydown", (e) => {
        if (e.key === "Tab") {
            e.preventDefault();
            const val = cliInput.value.trim().toLowerCase();
            if (!val) return;

            const matches = Object.keys(COMMANDS).filter((cmd) =>
                cmd.startsWith(val),
            );
            if (matches.length === 1) {
                cliInput.value = matches[0];
            } else if (matches.length > 1) {
                appendLog(
                    val,
                    `<p class="text-zinc-500">Suggested: ${matches.join(", ")}</p>`,
                );
            }
        }
    });

    cliForm?.addEventListener("submit", (e) => {
        e.preventDefault();
        const rawVal = cliInput.value;
        const cmd = rawVal.trim().toLowerCase();
        cliInput.value = "";

        if (contactFlowState === "awaiting-confirmation") {
            if (!cmd || cmd === "y" || cmd === "yes") {
                contactFlowState = "idle";
                cliInput.placeholder = "type 'help' or 'whoami -vv'...";
                appendSystemLog("Opening contact protocol...");
                openContactModal();
                return;
            }

            if (cmd === "n" || cmd === "no") {
                contactFlowState = "idle";
                cliInput.placeholder = "type 'help' or 'whoami -vv'...";
                appendSystemLog(
                    "Contact services canceled. Type a new command when you are ready.",
                );
                return;
            }

            appendSystemLog("Please answer with y/yes or n/no. Default is y.");
            cliInput.focus();
            return;
        }

        if (!cmd) return;
        if (cmd === "clear") {
            logsContainer.innerHTML = "";
            return;
        }

        if (commandHandlers[cmd]) {
            appendLog(rawVal, commandHandlers[cmd]());
            return;
        }

        if (cmd === "contact") {
            startContactRetrieval(
                rawVal,
                logsContainer,
                cliInput,
                (newState) => {
                    contactFlowState = newState;
                },
                appendLog,
                appendSystemLog,
            );
            return;
        }

        if (cmd === "login") {
            startOpenAuthentication(logsContainer);
            return;
        }

        const suggestion = findClosestCommand(cmd);
        const responseHTML = `
            <div class="text-rose-400">
                <p>zsh: command not found: ${escapeHTML(rawVal)}</p>
                ${suggestion ? `<p class="text-amber-400 mt-1">Did you mean <span class="underline font-bold text-emerald-400 cursor-pointer cmd-suggestion-link" data-cmd="${suggestion}">'${suggestion}'</span>?</p>` : `<p class="text-zinc-500 mt-1">Ketik <span class="text-emerald-400 font-bold">'help'</span> untuk daftar perintah.</p>`}
            </div>`;
        appendLog(rawVal, responseHTML);
    });

    function appendLog(inputCmd, outputHTML) {
        const logItem = document.createElement("div");
        logItem.className = "space-y-1";
        logItem.innerHTML = `
            <p class="text-white font-bold flex items-center gap-1.5">
                <span class="text-emerald-500">$</span><span>${escapeHTML(inputCmd)}</span>
            </p>
            <div class="text-zinc-300 pl-3">${outputHTML}</div>
        `;
        logsContainer.appendChild(logItem);
        if (bodyEl) bodyEl.scrollTop = bodyEl.scrollHeight;

        logItem
            .querySelector(".cmd-suggestion-link")
            ?.addEventListener("click", (e) => {
                const targetCmd = e.target.getAttribute("data-cmd");
                if (targetCmd) {
                    cliInput.value = targetCmd;
                    cliForm.dispatchEvent(new Event("submit"));
                }
            });
    }

    function appendSystemLog(outputHTML) {
        const logItem = document.createElement("div");
        logItem.className = "space-y-1";
        logItem.innerHTML = `<div class="text-zinc-300 pl-3">${outputHTML}</div>`;
        logsContainer.appendChild(logItem);
        if (bodyEl) bodyEl.scrollTop = bodyEl.scrollHeight;
    }
}

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initTerminal);
} else {
    initTerminal();
}
