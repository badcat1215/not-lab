#!/bin/bash

# 判斷傳入的參數
case "$1" in
    "start")
        # 啟動容器
        docker start jupyter_web_1 drupal lfi-lab xss-lab enum-lab
        ;;
    "stop")
        # 暫停容器
        docker stop jupyter_web_1 drupal lfi-lab xss-lab enum-lab
        ;;
    "remove")
        # 刪除容器
        docker rm jupyter_web_1 drupal lfi-lab xss-lab enum-lab
        ;;
    *)
        echo "Usage: lab.sh [start|stop|remove]"
        exit 1
        ;;
esac
