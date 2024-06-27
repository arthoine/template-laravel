# Laravel Sandbox

## Infos

* Laravel 10.9
* PHP 8.2

## Cache

Redis is used by default.

If you want change it on your local instance please update your `.env` file with :

```text
CACHE_DRIVER=file
```

# Sail (docker)

### Start the Docker containers:
    ```bash
    ./vendor/bin/sail up -d
    ```

### Stop the Docker containers:
    ```bash
    ./vendor/bin/sail down
    ```
### Migration :
    ```bash
    ./vendor/bin/sail artisan:migrate
    ```
### Entering the Container Shell
To enter the shell of the Laravel container:

    ```bash
    ./vendor/bin/sail shell
    ```
