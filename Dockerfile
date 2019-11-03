#this file is for development environments only
FROM ubuntu:18.04

# dumb hack because tzdata tries to configure interactively
ENV TZ 'America/Detroit'
RUN echo $TZ > /etc/timezone && \
  apt-get update && apt-get install -y tzdata && \
  rm /etc/localtime && \
  ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && \
  dpkg-reconfigure -f noninteractive tzdata && \
  apt-get clean

RUN apt-get update && apt-get install -y \
 git \
 php7.2-fpm \
 php-curl \
 php7.2-zip \
 php-gd \
 php-intl \
 php-xml \
 php-mysql \
 php-mbstring \
 php7.2-json \
 php7.2-opcache \
 php7.2-mysql \
 php7.2-readline \
 php7.2-mbstring \
 php-imagick \
 php-redis \
 php-igbinary \
 php-pear \
 php7.2-dev \
 libmcrypt-dev \
 && pecl install xdebug-2.6.0 \
 && pecl install mcrypt-1.0.1

#docker-compose handles temp dirs in a weird way, so create them ourselves
RUN mkdir /run/php/
RUN chmod 777 /tmp

CMD php-fpm7.2 -F -O

EXPOSE 9000/tcp
EXPOSE 9090/tcp