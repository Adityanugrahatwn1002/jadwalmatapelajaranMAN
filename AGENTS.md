# AGENTS.md

Fresh Laravel 12 app (PHP 8.2+, PHPUnit 11, Vite 6 + Tailwind v4) for a school subject schedule (DB `jadwalmapelman`). Still close to the skeleton — most directories contain only defaults.

## Setup

```bash
composer install
npm install
php artisan key:generate   # only if .env has no APP_KEY
php artisan migrate
```

Local dev runs on Laragon (Windows): MySQL at `127.0.0.1`, database `jadwalmapelman` (see `.env`). Note `.env.example` says `sqlite` — the actual dev environment uses MySQL; trust `.env`, not the example file.

## Common commands

- `composer dev` — runs `artisan serve`, `queue:listen`, `pail`, and `npm run dev` together (concurrently). Or run `php artisan serve` / `npm run dev` separately.
- `php artisan test` — full suite (Unit + Feature). Single test: `php artisan test --filter=TestClassName` or `vendor/bin/phpunit --filter=test_method_name`.
- `vendor/bin/pint` — code style (Laravel preset, no pint.json). Run before committing PHP changes.
- `npm run build` — production assets; `npm run dev` for HMR.
- `php artisan db:seed` — creates one user: `test@example.com`.

## Testing gotcha

`phpunit.xml` leaves `DB_CONNECTION`/`DB_DATABASE` commented out, so tests use the `.env` connection (MySQL here), not sqlite. Run `php artisan migrate` before the suite, or uncomment those lines in `phpunit.xml` to use sqlite `:memory:`.

## Conventions

- No CI, no existing instruction files, no `opencode.json` — this file is the only agent guidance.
- Stack defaults otherwise: `app/` PSR-4 `App\`, routes in `routes/web.php`, config in `config/`.
