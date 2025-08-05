# PHP Project Template

[![Build Status](https://scrutinizer-ci.com/g/ericsizemore/php-project-template/badges/build.png?b=main)](https://scrutinizer-ci.com/g/ericsizemore/php-project-template/build-status/main)
[![Code Coverage](https://scrutinizer-ci.com/g/ericsizemore/php-project-template/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/ericsizemore/php-project-template/?branch=main)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ericsizemore/php-project-template/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/ericsizemore/php-project-template/?branch=main)
[![Continuous Integration](https://github.com/ericsizemore/php-project-template/actions/workflows/continuous-integration.yml/badge.svg)](https://github.com/ericsizemore/php-project-template/actions/workflows/continuous-integration.yml)
[![Type Coverage](https://shepherd.dev/github/ericsizemore/php-project-template/coverage.svg)](https://shepherd.dev/github/ericsizemore/php-project-template)
[![Psalm Level](https://shepherd.dev/github/ericsizemore/php-project-template/level.svg)](https://shepherd.dev/github/ericsizemore/php-project-template)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fericsizemore%2Fphp-project-template%2Fmain)](https://dashboard.stryker-mutator.io/reports/github.com/ericsizemore/php-project-template/main)
[![Latest Stable Version](https://img.shields.io/packagist/v/esi/php-project-template.svg)](https://packagist.org/packages/esi/php-project-template)
[![Downloads per Month](https://img.shields.io/packagist/dm/esi/php-project-template.svg)](https://packagist.org/packages/esi/php-project-template)
[![License](https://img.shields.io/packagist/l/esi/php-project-template.svg)](https://packagist.org/packages/esi/php-project-template)

`ericsizemore/php-project-template` started as a template to be used for my own future repos/libraries, with the goal of eventually bringing my current repos to parity with this setup.

This package can be used to create a basic PHP library package/repository, complete with a directory structure and starting files (i.e., README, LICENSE, issue templates, PHPUnit configuration, etc.) commonly found in PHP libraries.

> [!IMPORTANT]
> Once you create a new repository based on this template, or a project if via Composer, it is important
> that you change all mention of 'esi/php-project-template' and 'ericsizemore/php-project-template' to 
> your `vendor/library` and `github-username/repository` name.
> 
> Obviously, this is also necessary for the `vendor\namespace` and filenames inside the `src` and `tests` folders. 
> It is also important to setup and modify workflows per [Workflow Setup](#workflow-setup).

> [!NOTE]
> Files that may need changed per the above `IMPORTANT` information: all files within the `.github` directory, `composer.json`, 
> `$header` block in `.php-cs-fixer.dist.php`, `CONTRIBUTING.md`, `LICENSE`, `README.md`, and `SECURITY.md`.

> [!NOTE]
> The issue templates in `.github/ISSUE_TEMPLATE`, the pull request template at `.github/pull_request_template.md`, and the
> Renovate config at `renovate.json` assume you have created labels for: `bug`, `dependency`, enhancement`, `fix`, `unverified`, 
> and `verified`.

> [!NOTE]
> You should replace the contents of the included `.gitattributes` file with the contents of `.gitattributes.template` 
> for proper export ignores, etc.


## Installation

You can install the package via composer:

``` bash
$ composer create-project ericsizemore/php-project-template YOUR-PROJECT-NAME
```

You can also [create a repository from this template](https://docs.github.com/en/repositories/creating-and-managing-repositories/creating-a-repository-from-a-template) on GitHub.

**If you still need PHP 8.2 support, install v1.0.x of this project.**

### Workflow Setup

The [`continuous-integration.yml`](.github/workflows/continuous-integration.yml) workflow expects the project to exist on [Scrutinizer](https://scrutinizer-ci.com) so that it can upload coverage reports. 
It also makes use of [CodeCov](https://about.codecov.io), so it will require a new [repository/action secret](https://docs.github.com/en/actions/security-guides/using-secrets-in-github-actions) named `CODECOV_TOKEN`. 

[`Renovate`](https://github.com/apps/renovate) is used to handle automated updating of `composer` dependencies with a config file at `renovate.json`. A [`merge-me.yml`](.github/workflows/merge-me.yml) workflow is provided to automatically merge PR's created by Renovate. This requires `Allow auto-merge` to be enabled in repository settings, and a new [repository/action secret](https://docs.github.com/en/actions/security-guides/using-secrets-in-github-actions) named `MERGE_TOKEN`.

```bash
          # Create a token with repository permissions:
          # https://github.com/settings/tokens/new?scopes=repo&description=Merge+Me!+GitHub+Actions+Workflow
          #
          # Set MERGE_TOKEN as an environment variable on your repository:
          # https://github.com/yourname/repo-name/settings/secrets/actions/new
```

The `mutation-test` portion of the [`continuous-integration.yml`](.github/workflows/continuous-integration.yml) workflow sends mutation coverage (handled with [Infection](https://github.com/infection/infection)) information to [Stryker](https://dashboard.stryker-mutator.io) and requires a new [repository/action secret](https://docs.github.com/en/actions/security-guides/using-secrets-in-github-actions) named `STRYKER_DASHBOARD_API_KEY`.

## Usage

```php
// usage information here
```

## About

### Requirements

* PHP >= 8.3

### Credits

- [Eric Sizemore](https://github.com/ericsizemore)
- [All Contributors](https://github.com/ericsizemore/php-project-template/contributors)
- Special thanks to [JetBrains](https://www.jetbrains.com/?from=esi-php-project-template) for their Licenses for Open Source Development.

### Available Tools

See [Available Tools](./docs/available-tools.md).

### Contributing

See [CONTRIBUTING](./CONTRIBUTING.md).

Bugs and feature requests are tracked on [GitHub](https://github.com/ericsizemore/php-project-template/issues).

### Contributor Covenant Code of Conduct

See [CODE_OF_CONDUCT.md](./CODE_OF_CONDUCT.md)

### Backward Compatibility Promise

See [backward-compatibility.md](./backward-compatibility.md) for more information on Backwards Compatibility.

### Changelog

See the [CHANGELOG](./CHANGELOG.md) for more information on what has changed recently.

### License

See the [LICENSE](./LICENSE) for more information on the license that applies to this project.

### Security

See [SECURITY](./SECURITY.md) for more information on the security disclosure process.
