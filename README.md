# jobadder-api-client

A PHP API client for [JobAdder](https://jobadder.com/), produced via [jane-openapi](https://github.com/janephp/openapi/)

## Installation

```bash
composer require varspool/jobadder-api-client
```

## Usage

The namespace is `Varspool\JobAdder`. The main client is `Varspool\JobAdder\Client`. The Client class provides access to
a set of API resources:

```php
$contacts = $client->contacts()->findContacts(['limit' => 3]);
$ads = $client->jobAds()->getJobAds();
```

You can also access the resources directly from the `Varspool\JobAdder\V2\Resource` namespace.

### Instantiating a Client

The Client (and any Resource objects you create yourself) need to be given a configured HTTP client to be able to
communicate with JobAdder. This HTTP client should implement the `HttpClient` or the `HttpAsyncClient` from
[HTTPlug](http://docs.php-http.org/en/latest/httplug/introduction.html). There are HTTPPlug adapters for most popular
HTTP clients in PHP (e.g. Guzzle)

Here's how you might use a Guzzle 6 client with this library:


* Install the Guzzle adapter: `composer require php-http/guzzle6-adapter`
* Pass the Guzzle client into the JobAdder client via an adapter:

  ```php
  use GuzzleHttp\Client as GuzzleClient;
  use Varspool\JobAdder\Client as JobAdderClient;
  use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

  $guzzle = new GuzzleClient($options);
  $http = new GuzzleAdapter($guzzle);
  $jobadder = new JobAdderClient($http);
  ```

### OAuth and the Authorization header

Because the client is injected, you can configure things like the base URI (you should probably use the `api` part of the
OAuth response from JobAdder), and the Authorization header:

```php
// Get these both from the OAuth token response
$api = 'https://localapi.jobadder.com/v2';
$token = 'abcdef01234567890';

$guzzle = new GuzzleClient([
    'base_uri' => $api,
    'headers' => [
        'Authorization' => 'Bearer ' . $token
    ]
]);
```

Note that this client doesn't deal with the OAuth flow; it can take over once you have a valid access token.
