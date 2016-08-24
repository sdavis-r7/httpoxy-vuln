#!/bin/sh

docker stop httpoxy-vuln
docker rm httpoxy-vuln
docker build -t httpoxy-vuln-proxy .
docker run -d -p 80:80 --name httpoxy-vuln httpoxy-vuln-proxy
