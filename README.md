[![Latest Stable Version](https://poser.pugx.org/dizda/onesignal-api-bundle/v/stable)](https://packagist.org/packages/dizda/onesignal-api-bundle) [![Total Downloads](https://poser.pugx.org/dizda/onesignal-api-bundle/downloads)](https://packagist.org/packages/dizda/onesignal-api-bundle) [![Latest Unstable Version](https://poser.pugx.org/dizda/onesignal-api-bundle/v/unstable)](https://packagist.org/packages/dizda/onesignal-api-bundle) [![License](https://poser.pugx.org/dizda/onesignal-api-bundle/license)](https://packagist.org/packages/dizda/onesignal-api-bundle)

OnesignalApiBundle
========================

Integrate OneSignal API in Symfony with ease.

Use the [PHP library made by Norkunas](https://github.com/norkunas/onesignal-php-api).

## Setup

Install with Composer

    composer require dizda/onesignal-api-bundle
    
Add bundle to app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            ....
            new Dizda\OnesignalApiBundle\DizdaOnesignalApiBundle()
        );
    }

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
