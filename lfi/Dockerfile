FROM php:7.2-apache
COPY src/ /var/www/html/

RUN groupadd -g 9999 Mr0 \
    && useradd -r -u 9999 -g Mr0 -ms /bin/bash Mr0
RUN echo 'Mr0:Captain1' | chpasswd
RUN chmod a+r /etc/shadow
