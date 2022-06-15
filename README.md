# Virtua Shopware App Logger

### Description
This bundle contains fully functional logger for Shopware Applications.

------------

### Requirements
- PHP >= 8.0
- Symfony 6
- ShopwareShop Entity

------------

### Installation
- Add bundle repository to composer.json
```json
"virtua/shopware-app-logger-bundle": "^1.0"
```
- Add bundle to bundles.php
```php
Virtua\ShopwareAppLoggerBundle\VirtuaShopwareAppLoggerBundle::class => ['all' => true]
```
- Add bundle routes to routes.yaml
```yaml
shopware_app_logger_bundle_routes:
    resource: "@VirtuaShopwareAppLoggerBundle/Resources/config/routes.yaml"
```
- Create new file ```config/packages/virtua_shopware_app_logger.yaml```, with data:
```yaml
imports:
    - { resource: '@VirtuaShopwareAppLoggerBundle/Resources/config/config.yml' }
```
- Run migrations ```bin/console doctrine:migrations:migrate```

------------

### Usage
This bundle is fully functional right after installation. To create new log, use **log()** method from **Logger** service.

Logs are displayed in **/logs/list/{shopId}** route, implemented in **AppLoggerController**