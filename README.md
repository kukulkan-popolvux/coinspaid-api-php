# coinspaid-api-php

The package provides a convenient interface for interacting with the API (v2) for the service [CoinsPaid](https://coinspaid.com/)

## Installation

### composer

Use the package manager [composer](https://getcomposer.org/) to install coinspaid-api-php

```shell
composer require kukulkan-popolvux/coinspaid-api-php
```

---

## Usage

You can use the library immediately after configuration without specifying any additional values.

#### Example:

```php
\KukulkanPopolvux\CoinspaidApiPhp\Coinspaid::api()->ping()->getBody();
```

or

```php
\KukulkanPopolvux\CoinspaidApiPhp\Coinspaid::api()->run()->getBody();
```

> The Response object is returned. Calling the `getBody()` method will return the response body  
> The answer should return `OK`, it works without a secret key and an api key.  
> This is just a test of the library connection and its interaction with the [CoinsPaid](https://coinspaid.com/) service.  
> [documentation](https://docs.cryptoprocessing.com/api-documentation/api-reference#ping)

---

#### Example:

```php
\KukulkanPopolvux\CoinspaidApiPhp\Coinspaid::api($apiKey, $secretKey, $environment = 'prod')->getListCurrencies()->getBodyObject();
```

or

```php
\KukulkanPopolvux\CoinspaidApiPhp\Coinspaid::api($apiKey, $secretKey, $environment = 'prod')->getListCurrencies()->getBody(true);
```

> To obtain `$apiKey` and `$secretKey`, you must perform the following steps, which are described in the
> [documentation](https://docs.cryptoprocessing.com/api-documentation/obtaining-api-keys)  
> By default, the development environment is listed as production (`$environment = 'prod'`). You can select two values `test` and `prod`  
> `getBodyObject()` will return the response body converted to object or you can use `getBody(true)` method with parameter `true`  
> Get a list of all supported currencies.  
> [documentation](https://docs.cryptoprocessing.com/api-documentation/api-reference#get-list-of-supported-currencies)

---

#### Example:

```php
\KukulkanPopolvux\CoinspaidApiPhp\Coinspaid::api($apiKey, $secretKey, $environment = 'prod')->getListCurrencies()->getData();
```

> Returns the `data` value from the request response.  
> You can pass a parameter to a method `getData('currency')` that will return a value by the key that you passed as a parameter

---

## License

[MIT](https://choosealicense.com/licenses/mit/)
