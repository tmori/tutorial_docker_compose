FROM php:8.1-fpm
ENV LARAVEL_VERSION="9.*"

RUN apt-get update
RUN apt-get -y install locales && \
    localedef -f UTF-8 -i ja_JP ja_JP.UTF-8
ENV LANG ja_JP.UTF-8
ENV LANGUAGE ja_JP:ja
ENV LC_ALL ja_JP.UTF-8
ENV TZ JST-9
ENV TERM xterm

RUN apt update -y && apt upgrade -y && apt install -y tcpdump
RUN apt install -y iputils-ping net-tools
RUN apt-get install -y python3-pip


# install php-ext
RUN apt-get update && apt-get install -y git wget gnupg vim unzip libxml2-dev libpng-dev libzip-dev libonig-dev \
  && docker-php-ext-install mbstring dom gd zip \
  && apt-get clean


RUN apt-get install -y default-mysql-client && docker-php-ext-install pdo_mysql


# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# install exment
#RUN mkdir /var/www/hako
WORKDIR /var/www/hako
#RUN COMPOSER_MEMORY_LIMIT=-1 composer create-project laravel/laravel=${LARAVEL_VERSION} .
