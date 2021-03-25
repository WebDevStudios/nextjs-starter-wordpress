# Next.js Starter WordPress <!-- omit in toc -->

The headless WordPress installation for our [Next.js WordPress Starter](https://github.com/webdevstudios/nextjs-wordpress-starter).

<a href="https://webdevstudios.com/contact/"><img src="https://webdevstudios.com/wp-content/uploads/2018/04/wds-github-banner.png" alt="WebDevStudios. Your Success is Our Mission."></a>

---

- [Contributing](#contributing)
- [Install](#install)
- [Development](#development)
  - [Git Workflow](#git-workflow)
  - [Code Linting](#code-linting)
  - [Tips to help your PR get approved](#tips-to-help-your-pr-get-approved)

## Contributing

Before submitting an issue or making a feature request, please search for existing [issues](https://github.com/WebDevStudios/nextjs-starter-wordpress).

If you do file an issue, be sure to fill out the report completely!

---

## Install

Clone the repo into a WordPress installation. This repo will replace `/wp-content`

```bash
git clone git@github.com:WebDevStudios/nextjs-starter-wordpress.git wp-content
```

Install the dependencies:

```bash
composer install
```

For more information, see the [Backend Setup wiki](https://github.com/WebDevStudios/nextjs-wordpress-starter/wiki/Backend-Setup).

## Development

### Git Workflow

1. Create a `feature` branch off `main`
2. Work locally adhering to coding standards
3. When ready, open a draft Pull Request on Github
4. When finished, fill out the PR template and publish your PR
5. Your PR must pass assertions and deploy successfully
6. After peer review, the PR will be merged back into `main`
7. Repeat ♻️

### Code Linting

This project uses PHPCS via Composer to enforce standards both [WebDevStudios](https://github.com/WebDevStudios/php-coding-standards) and [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).

Lint PHP with phpcs:

```bash
composer run lint
```

Format PHP with phpcbf:

```bash
composer run format
```

Check compatability:

```bash
composer run compat
```

### Tips to help your PR get approved

1. Make sure your code editor supports real-time linting and has the PHPCS extension installed
2. [PHP DocBlocks](https://docs.phpdoc.org/latest/guide/guides/docblocks.html) are required
3. Run `composer run lint` before submitting your PR
4. Be courteous in your communications

---
