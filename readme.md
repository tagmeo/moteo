# Moteo

[![Build Status](https://travis-ci.org/tagmeo/moteo.svg?branch=master)](https://travis-ci.org/tagmeo/moteo) [![Latest Stable Version](https://poser.pugx.org/tagmeo/moteo/v/stable)](https://packagist.org/packages/tagmeo/moteo) [![Latest Unstable Version](https://poser.pugx.org/tagmeo/moteo/v/unstable)](https://packagist.org/packages/tagmeo/moteo) [![License](https://poser.pugx.org/tagmeo/moteo/license)](https://packagist.org/packages/tagmeo/moteo) [![composer.lock](https://poser.pugx.org/tagmeo/moteo/composerlock)](https://packagist.org/packages/tagmeo/moteo)

Moteo is a modern WordPress starter theme that must be used with [Tagmeo](https://github.com/tagmeo/tagmeo). It uses a modern development workflow using jQuery, Bootstrap, and Laravel Elixir.

## Installation

> The following examples assume you're using [Tagmeo](https://github.com/tagmeo/tagmeo)

### Via Composer

You can install Moteo by issuing the Composer `create-project` command:

```bash
composer create-project tagmeo/moteo public/themes/<your-theme-name>
```

### Via Git

If you prefer, you can install Moteo by cloning the repository:

```bash
git clone https://github.com/tagmeo/moteo public/themes/<your-theme-name>
```

## Theme Activation

### Via WP-CLI

```bash
wp theme activate <your-theme-name>
```

### Via WordPress Admin Panel

1. [Download the latest release](https://github.com/tagmeo/moteo/releases/latest) of Moteo
2. In the admin panel, go to `Appearance` and then `Themes`
3. Click the `Add New Theme` panel
4. Click the `Upload Theme` button
5. Upload the ZIP file that you downloaded

## Theme Development

Please refer to the [documentation for Tagmeo](https://github.com/tagmeo/tagmeo) to learn how to handle assets and other relevant information.