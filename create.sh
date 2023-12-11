#!/bin/bash

# 宣告目前的路徑
CURRENT_DIR=$(pwd)

# 第一個Lab架設
cd "$CURRENT_DIR/xss" || exit
docker build -t my-php-xss-lab .
docker run -d -p 9001:80 --name xss-lab --restart always my-php-xss-lab

# 第二個Lab架設
cd "$CURRENT_DIR/lfi" || exit
docker build -t my-php-lfi-lab .
docker run -d -p 9002:80 --name lfi-lab --restart always my-php-lfi-lab

# 第三個Lab架設
cd "$CURRENT_DIR/enum" || exit
docker build -t my-php-enum-lab .
docker run -d -p 9003:80 --name enum-lab --restart always my-php-enum-lab

# 第四個Lab架設
cd "$CURRENT_DIR/drupal" || exit
docker run --name drupal -d -p 9004:80 --restart always vulhub/drupal:8.5.0
docker cp ./ drupal:/var/www/html

# 第五個Lab架設
cd "$CURRENT_DIR/jupyter" || exit
docker-compose up -d

# 回傳完成
echo "Done!"
