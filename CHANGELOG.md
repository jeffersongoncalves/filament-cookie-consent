# Changelog

All notable changes to this project will be documented in this file.

## 1.6.0 - 2026-09-23

### Changed

- **Built on `filament-analytics-core`:** the plugin now extends `AbstractAnalyticsPlugin` and depends on `jeffersongoncalves/filament-analytics-core` (matching major), like the other analytics plugins. `filament/spatie-laravel-settings-plugin` now comes in through that package. The plugin id, the `settingsPage()` API and the defaults are unchanged.
- On the 1.x branch of filament-cookie-consent and filament-metrics-matomo, the PHP requirement is now `^8.2`, which analytics-core already required.

### What's Changed

* refactor: build on filament-analytics-core (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/38

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/1.5.0...1.6.0

## 1.5.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#35)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/20
* chore: add Buy Me a Coffee to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/25
* ci: standardize update-changelog workflow (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/26
* build(deps): update jeffersongoncalves/laravel-cookie-consent requirement from ^3.0 to ^4.0 in the composer-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/34
* build(deps): bump the actions-deps group with 4 updates by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/33
* feat(i18n): add translations (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-cookie-consent/pull/35

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/1.4.0...1.5.0

## 1.4.0 - 2026-06-23

Refactor onto filament-plugin-core base (BasePlugin + registerRenderHooks); drop redundant dependencies (provided transitively).

## v1.3.0 - 2026-02-23

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/v1.2.0...v1.3.0

## v1.2.0 - 2026-02-23

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/v1.1.0...v1.2.0

## v1.1.0 - 2025-12-27

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/v1.0.5...v1.1.0

## v1.0.5 - 2025-07-17

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

**Full Changelog**: https://github.com/jeffersongoncalves/filament-cookie-consent/compare/v1.0.4...v1.0.5

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
