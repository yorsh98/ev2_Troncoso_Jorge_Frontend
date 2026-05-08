# AGENTS.md

## Stack and Runtime (verified)
- Laravel 13 + Livewire 4 (class-based components under `app/Livewire`).
- PHP 8.4 in local work; CI tests matrix runs 8.3/8.4/8.5.
- Tailwind CSS v4 via Vite (`@tailwindcss/vite`).

## Repo Entry Points
- Public home route is a Livewire page component: `routes/web.php` -> `Route::livewire('/', App\Livewire\HomePage::class)`.
- Main UI pieces are split into:
  - Livewire state/components: `app/Livewire/*`
  - Blade presentational components: `resources/views/components/**/*`
  - Page view: `resources/views/livewire/home-page.blade.php`

## Commands You Should Actually Use
- Install: `composer install && npm install`
- Local dev (all processes): `composer dev`
- Frontend only: `npm run dev`
- Production assets: `npm run build`
- Format PHP: `vendor/bin/pint --dirty --format agent` (required after PHP edits)
- Focused tests: `php artisan test --compact tests/Feature/MunicipalHomeTest.php`
- Full tests: `php artisan test --compact`

## Test/DB Quirks
- Pest is the test runner (`tests/Pest.php`).
- Feature tests use `RefreshDatabase` globally.
- PHPUnit config uses SQLite in-memory (`phpunit.xml`), so tests depend on migrations being runnable.

## CI Reality (source of truth: `.github/workflows`)
- CI runs lint and tests separately.
- Test workflow always builds assets before tests (`npm run build` then `./vendor/bin/pest`).
- Lint workflow runs `composer lint` (Pint).

## Frontend/Asset Conventions Specific to This Repo
- Static municipal images are served from `public/img/*` and referenced with `asset('img/...')`.
- Favicon is intentionally set to `public/img/LogoAzul-bg4CKnlIXMNGnnMByzWzKw-mHg3fO9z4xvfUq9iMzlCKA.png` in `resources/views/partials/head.blade.php`.
- Tailwind v4 theme tokens are defined in `resources/css/app.css` (`--color-municipal-*`). Prefer reusing these values/patterns.

## Operational Constraints
- Do not add new dependencies without explicit user request.
- Keep architecture style: business data/providers in `app/Services` + contracts/DTOs, not hardcoded in large Blade blocks.
- For UI changes, verify with at least: `npm run build` and targeted feature test.
