FROM wordpress:5.9-apache

RUN apt-get update
RUN apt-get install -y libcap2-bin

# this is necessary so that we can run container as www-data, not as root
RUN setcap 'cap_net_bind_service=+ep' /usr/sbin/apache2
RUN getcap /usr/sbin/apache2

# copy all of our development code
COPY ./wp-content /var/www/html/wp-content

# switch to www-data
USER www-data
