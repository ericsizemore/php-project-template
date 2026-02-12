# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).


## [2.0.1] - 2026-02-12

### Changed

  * Add PHP 8.5 support (mainly testing with workflows).
  * For dev dependencies, support PHPUnit 13.


## [2.0.0] - 2025-08-05

### Changed

  * Bumped **minimum** `PHP` version requirement to `8.3`.
  * Rewrote `SECURITY.md` to be a bit more thorough.
  * Rewrote `backward-compatibility.md`, my Backward Compatibility Promise, to be more thorough.
  * Updated dev-dependencies.
  * `.gitattributes` updated to not skip exporting files on GitHubs' `use template` or composers' `create-project`.

### Added

  * Added `.gitattributes.template` that can renamed to `.gitattributes` (replacing the one included in this repo) for proper export ignores, etc.


## [1.1.0] - 2024-12-17

### Added

  * `docs/available-tools.md` to list and describe the available dev-tools included with this project/repository.
  * Added important information and notes to README.

### Changed

  * Updated `phpstan` and related extensions/packages to `^2.0`.
  * Adds `rector/rector` to dev-dependencies for refactoring. The config file is located at [rector.php](./rector.php).
    * More information on `rector` can be found [here](https://getrector.com/) and configuration options [here](https://getrector.com/documentation).


## [1.0.0] - 2024-11-04

  * Initial release.

[unreleased]: https://github.com/ericsizemore/php-project-template/tree/main
[2.0.0]: https://github.com/ericsizemore/php-project-template/releases/tag/v2.0.0
[1.1.0]: https://github.com/ericsizemore/php-project-template/releases/tag/v1.1.0
[1.0.0]: https://github.com/ericsizemore/php-project-template/releases/tag/v1.0.0
