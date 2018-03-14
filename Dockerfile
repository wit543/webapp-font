FROM php:7.0-apache
COPY src/ /var/www/html/

#  docker run -v /root/webapp-font/src/:/var/www/html/ -p 34555:80 php:7.0-apache