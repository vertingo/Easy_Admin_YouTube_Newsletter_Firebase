FROM php:7.2.5-apache

MAINTAINER Pierre-Henri Bourdeau

# Debian dep

RUN echo "deb http://archive.debian.org/debian stretch main contrib non-free" > /etc/apt/sources.list
RUN apt-get update
RUN apt-get install -y vim git libzip-dev zlib1g-dev zip unzip

# Install php extensions
RUN docker-php-ext-configure zip --with-libzip
RUN docker-php-ext-install pdo pdo_mysql zip opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Bashrc
RUN rm /root/.bashrc
COPY .bashrc /root/.bashrc

# Cleaning
RUN rm -rf /etc/apache2/sites-available/* && rm -rf /etc/apache2/sites-enabled/*
RUN service apache2 restart
RUN rm -rf /var/www/*

# Conf Apache2
RUN mkdir /var/www/app
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
COPY app.conf /etc/apache2/sites-available/app.conf
RUN usermod -u 1000 www-data
RUN a2ensite app.conf
RUN service apache2 restart

WORKDIR /var/www/app

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY ../../ .
RUN ls -la

#COPY ../../composer.json .
#RUN composer self-update --2.2

RUN composer install --prefer-dist --no-progress 

#VOLUME /var/www/app/vendor
#EXPOSE 80

####################################################
    ## [ ENV VARIABLES FOR HEROKU DEPLOY ] ##
####################################################

####################################################
                ## [ DATABASE ] ##
####################################################

ENV DB_ROOT_PASS=rootpass
ENV SYMFONY_DB_NAME=symfony
ENV SYMFONY_DB_USER=symfony
ENV SYMFONY_DB_PATH=symfonydbpass

####################################################
                ## [ SYMFONY ] ##
####################################################

ENV APP_ENV=dev
ENV SYMFONY_PATH=/home/ph/www/docker-symfony4

# This file is a "template" of which env vars need to be defined for your application
# Copy this file to .env file for development, create environment variables when deploying to production
# https://symfony.com/doc/current/best_practices/configuration.html#infrastructure-related-configuration

###> symfony/framework-bundle ###

ENV APP_SECRET=!ChangeMe!
ENV TRUSTED_PROXIES=10.0.0.0/8,172.16.0.0/12,192.168.0.0/16
ENV TRUSTED_HOSTS=localhost
#APP_SECRET=777647b3e12f26a43e548090915cb9ae
#TRUSTED_PROXIES=127.0.0.1,127.0.0.2
#TRUSTED_HOSTS=localhost,example.com
###< symfony/framework-bundle ###

###> symfony/swiftmailer-bundle ###
# For Gmail as a transport, use: "gmail://username:password@localhost"
# For a generic SMTP server, use: "smtp://localhost:25?encryption=&auth_mode="
# Delivery is disabled by default via "null://localhost"
ENV MAILER_URL=null://localhost
###< symfony/swiftmailer-bundle ###

###> doctrine/doctrine-bundle ###
# Format described at http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html#connecting-using-a-url
# For an SQLite database, use: "sqlite:///%kernel.project_dir%/var/data.db"
# Configure your db driver and server_version in config/packages/doctrine.yaml
ENV DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name
###< doctrine/doctrine-bundle ###

#####################################################################

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]