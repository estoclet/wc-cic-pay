# CIC Pay for WooCommerce

Passerelle de paiement Monetico pour WooCommerce, compatible CIC, Credit Mutuel et OBC.

## Statut

Ce projet est en developpement. La branche initiale fournit le scaffold du plugin, la configuration de qualite et l'infrastructure de tests.

## Prerequis

- PHP 8.1 ou superieur
- WordPress 6.3 ou superieur
- WooCommerce 8.0 ou superieur
- Composer 2

## Installation locale

1. Placer le dossier du plugin dans `wp-content/plugins/wc-cic-pay`.
2. Installer les dependances de developpement :

```bash
composer install
```

3. Activer le plugin depuis l'administration WordPress.

## Qualite

```bash
vendor/bin/phpcs
vendor/bin/phpunit
```

## Licence

GPL-2.0-or-later.
