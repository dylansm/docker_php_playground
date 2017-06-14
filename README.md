## About this Repo

This is a test-case for running Craft 3 with Docker.

### Steps to use

1. Copy .env.example to .env

    These are made-up, one-off credentials — please, for the love of all that is good, change these before going live with a production application.

2. Install dependencies via Composer:

    ```
    docker run --rm -v $(pwd):/app composer/composer:alpine install
    ```

3. Start project:

    ```
    docker-compose up -d
    ```

4. The dev URL is http://craft-test.dev [http://craft-test.dev](http://craft-test.dev) and the first time you run the project you will have to go to /admin to initialize the database.

Please note: the dev URL assumes you are either running dnsmasq (see below) or editing your /etc/hosts file.

### Running dnsmasq

Run the following to have .dev local domain resolve:

```
docker run -d --name dnsmasq --restart always -p 53535:53/tcp -p 53535:53/udp --cap-add NET_ADMIN andyshinn/dnsmasq --address=/dev/127.0.0.1
```

This assumes you already have /etc/resolver/dev file with the following:

```
nameserver 127.0.0.1
port 53535
```
