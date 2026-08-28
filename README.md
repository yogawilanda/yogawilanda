# Yoga Wilanda

Personal portfolio and authenticated application workspace for Yoga Wilanda.
The public landing page presents an interactive, terminal-inspired portfolio,
while the authenticated area provides a Laravel and Livewire application shell
with profile, appearance, security, two-factor authentication, and passkey
settings.

## Features

- Interactive portfolio landing page with About, Stack, Projects, and Contact sections.
- Keyboard and mouse/trackpad-friendly vertical section navigation with scroll snapping.
- Interactive terminal with command history, autocomplete, suggestions, and window controls.
- Terminal commands including `help`, `whoami`, `whoami -v`, `whoami -vv`, `skills`,
  `contact`, and `clear`.
- Contact retrieval flow with progress feedback and contact options for email,
  WhatsApp, Telegram, and LinkedIn.
- Light/dark appearance toggle.
- Authentication, registration, password reset, email verification, and password confirmation.
- User profile and appearance settings powered by Livewire.
- Two-factor authentication and recovery codes.
- Passkey enrollment and verification endpoints.
- React/Vite entry points for authenticated dashboard widgets.

## Technology Stack

- PHP 8.4
- Laravel 13
- Livewire 4
- Livewire Flux 2
- Laravel Fortify
- Laravel Passkeys
- Tailwind CSS 4
- Vite 8
- React 19
- Pest 5
- PHPStan/Larastan
- Laravel Pint
- SQLite by default for local development

## Requirements

Install the following before setting up the project:

- PHP 8.4 or newer
- Composer 2
- Node.js 22 or newer
- npm
- SQLite, or another database supported by Laravel

## Installation

Clone the repository and enter the project directory:

```bash
git clone https://github.com/yogawilanda/yogawilanda.git
cd yogawilanda
```

The project includes a complete setup script:

```bash
composer setup
```

This installs PHP dependencies, creates `.env` from `.env.example`, generates
the application key, runs migrations, installs JavaScript dependencies, and
builds the frontend assets.

If you prefer to run the steps individually:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
```

On Windows PowerShell, replace the `cp` command with:

```powershell
Copy-Item .env.example .env
```

## Development

Start the Laravel development environment:

```bash
composer dev
```

The project uses the Laravel development command to run the application and
supporting local processes. For frontend-only development, use:

```bash
npm run dev
```

The default application URL is:

```text
http://localhost:8000
```

Set `APP_URL` in `.env` if the application is served from a different host or
port.

## Useful Commands

### Frontend

```bash
npm run build       # Build production assets
npm run dev         # Start the Vite development server
```

### Laravel

```bash
php artisan migrate
php artisan route:list
php artisan optimize:clear
```

### Quality and tests

```bash
composer lint       # Format PHP files with Pint
composer lint:check # Check PHP formatting
composer types:check
composer test       # Formatting, static analysis, and Pest tests
composer ci:check   # CI test workflow
```

Run a focused Pest test when iterating:

```bash
php artisan test --compact tests/Feature/Auth/AuthenticationTest.php
```

## Application Structure

```text
app/
├── Actions/Fortify/       Fortify user and password actions
├── Concerns/              Shared validation rules
├── Http/                  Base HTTP controller
├── Livewire/              Settings components and logout action
├── Models/                Eloquent models
└── Providers/             Application and Fortify service providers

resources/
├── css/                   Application and guest-page styles
├── js/                    Vite entry points and interactive scripts
└── views/
    ├── layouts/guest/     Portfolio layout, sections, terminal, and navigation
    ├── livewire/          Authentication and settings views
    └── components/        Reusable Blade components

routes/
├── web.php                Public home and authenticated dashboard routes
├── settings.php           Profile, appearance, security, and passkey routes
└── console.php            Console routes

database/
├── migrations/            Users, jobs, cache, two-factor, and passkey tables
└── factories/             Test data factories
```

## Routes

| Route | Access | Purpose |
| --- | --- | --- |
| `/` | Public | Interactive portfolio landing page |
| `/login` | Public | User login |
| `/register` | Public | User registration |
| `/dashboard` | Authenticated and verified | Authenticated dashboard |
| `/settings/profile` | Authenticated | Profile settings |
| `/settings/appearance` | Authenticated and verified | Appearance settings |
| `/settings/security` | Authenticated and verified | Password, two-factor, and passkey settings |
| `/.well-known/passkey-endpoints` | Public | Passkey endpoint discovery |

Authentication routes are provided by Laravel Fortify and the Livewire views
under `resources/views/livewire/auth`.

## Configuration

The default local configuration uses SQLite:

```dotenv
DB_CONNECTION=sqlite
```

The default `.env.example` also configures database-backed sessions, cache,
and queues. Configure mail, Redis, AWS, or another database only when those
services are needed.

Never commit `.env`, credentials, API tokens, or private keys.

## Testing and CI

Tests are written with Pest and run against an in-memory SQLite database.
GitHub Actions runs on pushes to `main` and pull requests using PHP 8.4 and
Node.js 22. The workflow installs the application with `composer setup` and
then runs `composer ci:check`.

Before opening a pull request, run:

```bash
composer test
npm run build
```

## License

This project is released under the MIT License.
