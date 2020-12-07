FROM httpd:2.4

COPY httpd-vhosts.conf /usr/local/apache2/conf/extra/httpd-vhosts.conf
COPY httpd.conf /usr/local/apache2/conf/httpd.conf
 
RUN chgrp -R www-data /usr/local/apache2/conf/httpd.conf \
 && chgrp -R www-data /usr/local/apache2/conf/extra/httpd-vhosts.conf
 
RUN usermod -u 1000 www-data \
 && groupmod -g 1000 www-data \
 && chgrp -R www-data /usr/local/apache2
