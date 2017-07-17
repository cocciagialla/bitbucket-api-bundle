# Bitbucket API Client Symfony Bundle

A Symfony Bundle for the Bitbucket API Client (https://bitbucket.org/gentlero/bitbucket-api).

## Configuration

```yaml
bitbucket_api:
    client_id: < OAuth2 Client ID >
    client_secret: < OAuth2 Client Secret >
```

## Access the Service:

### By Service ID from the container
```php
$this->get('Bitbucket\API\Api');
```

### Symfony 3.3+ Autowiring
```php
public function __construct(\Bitbucket\API\Api $bitbucketApi)
{
    $this->bitbucketApi = $bitbucketApi;
}
```