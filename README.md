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

## Testing

Run the tests with:


```bash
./test.sh
```

Any modification must pass all the tests.
Any modification should be covered by a test.

## Code style

**php-cs-fixer**

Run php-cs with:

```bash
./cs.sh
```

**ESlint**

Run ESlint with:

```bash
./dev.sh lint:js
```

**Stylelint**

Run Stylelint with:

```bash
./dev.sh lint:css
```

**All together**

Run SCSS and JS lint with:

```bash
./dev.sh lint
```

save version node
```bash
Found '/data/www-local/web/lara_sites/sandbox-laravel/.nvmrc' with version <lts/hydrogen>
Now using node v18.19.1 (npm v10.2.4)

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
