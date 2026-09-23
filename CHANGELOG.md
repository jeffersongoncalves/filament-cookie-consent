# Changelog

All notable changes to this project will be documented in this file.

## 3.5.0 - 2026-09-23

### Changed

- **Built on `filament-analytics-core`:** the plugin now extends `AbstractAnalyticsPlugin` and depends on `jeffersongoncalves/filament-analytics-core` (matching major), like the other analytics plugins. `filament/spatie-laravel-settings-plugin` now comes in through that package. The plugin id, the `settingsPage()` API and the defaults are unchanged.
- On the 1.x branch of filament-cookie-consent and filament-metrics-matomo, the PHP requirement is now `^8.2`, which analytics-core already required.

### What's Changed

* refactor: build on filament-analytics-core (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/40
* ci: standardize dependabot config by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/41

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/3.4.0...3.5.0

## 3.4.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#37)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/19
* chore: add GitHub Sponsors to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/22
* ci: standardize update-changelog workflow (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/28
* ci: standardize dependabot config by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/29
* build(deps): update jeffersongoncalves/laravel-cookie-consent requirement from ^3.0 to ^4.0 in the composer-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/32
* feat(i18n): add translations (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/37

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/3.3.0...3.4.0

## 3.3.0 - 2026-06-23

Refactor onto filament-plugin-core base (BasePlugin + registerRenderHooks); drop redundant dependencies (provided transitively).

## v3.2.1 - 2026-03-04

### Breaking Changes

- **Minimum Filament version bumped to `^5.3`** — required due to the new `PageConfiguration` parameter added to `Page::routes()` in [filamentphp/filament#19225](https://github.com/filamentphp/filament/pull/19225)

### What's Changed

- Update `composer.json` to require `filament/filament: ^5.3`

## 3.2.1 - 2026-02-24

### What's Changed

- Add Laravel 13.x support (orchestra/testbench ^11.0)

## v3.2.0 - 2026-02-23

### What's Changed

* build(deps): bump dependabot/fetch-metadata from 2.4.0 to 2.5.0 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/15

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/v3.1.0...v3.2.0

## v3.1.0 - 2026-02-22

### Added

- Cookie Consent Settings Page for managing all settings from the Filament panel
- `CookieConsentPlugin` class for panel registration with `settingsPage()` option
- Translation support (English and Brazilian Portuguese)

### Changed

- Upgraded `jeffersongoncalves/laravel-cookie-consent` dependency from `^1.0` to `^2.0` (database-driven settings via `spatie/laravel-settings`)
- Added `filament/spatie-laravel-settings-plugin` as dependency

## v3.0.0 - 2025-12-27

### What's Changed

* Bump aglipanci/laravel-pint-action from 2.5 to 2.6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/8
* Bump actions/checkout from 4 to 5 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/9
* Bump stefanzweifel/git-auto-commit-action from 6 to 7 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/11

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/v2.0.0...v3.0.0

## v2.0.0 - 2025-07-17

### What's Changed

* Bump dependabot/fetch-metadata from 2.3.0 to 2.4.0 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/1
* Bump stefanzweifel/git-auto-commit-action from 5 to 6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/3
* Configure Renovate by @renovate[bot] in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/4
* Delete .github/FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/6
* Delete renovate.json by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/7

### New Contributors

* @dependabot[bot] made their first contribution in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/1
* @renovate[bot] made their first contribution in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/4
* @jeffersongoncalves made their first contribution in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/6

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/v1.0.4...v2.0.0

## v1.0.4 - 2025-03-03

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/v1.0.3...v1.0.4

## v1.0.3 - 2025-03-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/v1.0.2...v1.0.3

## v1.0.2 - 2025-03-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/v1.0.1...v1.0.2

## v1.0.1 - 2025-03-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/v1.0.0...v1.0.1

## v1.0.0 - 2025-03-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/commits/v1.0.0
