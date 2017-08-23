<a href="http://digota.com/">![Logo](http://i.imgur.com/hqEKC51.png)</a>
## Digota - ecommerce microservice

# digota-php
php client for digota

PREREQUISITES
* `php` >=5.5
* `phpize`
* `pecl`
* `phpunit`
* `composer`
* `protoc`

### Install

Composer

```bash
composer require digota/digota-php
```

```json
{
    "name": "your project",
    "require": {
      "digota/digota-php": "dev-master"
      }
  }
```

### Example

```php

<?php

require dirname(__FILE__).'/vendor/autoload.php';

 $client = new \Productpb\ProductServiceClient('localhost:3051', [
      // send client cert
     'credentials' => Grpc\ChannelCredentials::createSsl(file_get_contents(dirname(__FILE__).'/client.com.pem'))
     //'credentials' => Grpc\ChannelCredentials::createInsecure()
 ]);

$request = new Productpb\GetRequest();
$request->SetId("e5aae05c-880c-11e7-ba5e-6354e0d1e8c5");

// async 
var_dump($client->Get($request));

// sync
var_dump($client->Get($request)->wait());
