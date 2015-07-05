OnesignalApiBundle
========================

Integrate OneSignal API in Symfony with ease.

Use the [PHP library made by Norkunas](https://github.com/norkunas/onesignal-php-api).

## Setup

Install with Composer

    composer require dizda/onesignal-api-bundle

## Configuration

Add this to your `config.yml`:

```yaml
dizda_onesignal_api:
    app_id:       %onesignal_app_id%
    app_auth_key: %onesignal_app_auth_key%
```

## Use

Send a simple notification:

```php
$client = $this->get('dizda_onesignal_api.service.client');

$client->notifications->add([
    'headings' => [
        'en' => 'Withdraw'
    ],
    'contents' => [
        'en' => 'Your withdraw has been sent!'
    ],
    'included_segments' => ['All'],
    'url' => 'http://google.fr'
]);
```

## License

MIT Licensed, see LICENSE.