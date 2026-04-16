FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y \
    apache2 \
    php \
    php-mysql \
    libapache2-mod-php \
    && apt-get clean

RUN rm -f /var/www/html/index.html

RUN echo "display_errors=On" >> /etc/php/8.1/apache2/conf.d/custom.ini \
 && echo "display_startup_errors=On" >> /etc/php/8.1/apache2/conf.d/custom.ini \
 && echo "error_reporting=E_ALL" >> /etc/php/8.1/apache2/conf.d/custom.ini

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]