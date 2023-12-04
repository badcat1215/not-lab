FROM php:7.2-apache
COPY src/ /var/www/html/

RUN groupadd -g 9999 jack \
    && useradd -r -u 9999 -g jack -ms /bin/bash jack
RUN echo 'jack:Captain' | chpasswd
RUN chmod a+r /etc/shadow
