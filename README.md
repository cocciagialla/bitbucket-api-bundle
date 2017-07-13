# Bitbucket API Client Symfony Bundle

A Symfony Bundle for the Bitbucket API Client (https://bitbucket.org/gentlero/bitbucket-api).

## Configuration

```yaml
bitbucket_api:
    client_id: < OAuth2 Client ID >
    client_secret: < OAuth2 Client Secret >
```

Access the Service
```php
$this->get('bitbucket.api.client');
```
