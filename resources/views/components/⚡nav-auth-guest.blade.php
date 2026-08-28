<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

@guest
    <a href="{{ route('login') }}"
        class="inline-flex items-center bg-emerald-500 px-4 py-2 text-xs font-semibold uppercase tracking-wider text-zinc-950 transition hover:bg-emerald-400">
        Login
    </a>
@endguest

@auth
    <a href="{{ route('dashboard') }}"
        class="inline-flex items-center bg-emerald-500 px-4 py-2 text-xs font-semibold uppercase tracking-wider text-zinc-950 transition hover:bg-emerald-400">
        Dashboard
    </a>

    <form method="POST" action="{{ route('logout') }}" class="inline">
        @csrf
        <button type="submit"
            class="inline-flex items-center border border-zinc-200 bg-zinc-50 px-4 py-2 text-xs font-semibold uppercase tracking-wider text-zinc-700 transition hover:border-rose-500 hover:text-rose-500 dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-200">
            Logout
        </button>
    </form>
@endauth
