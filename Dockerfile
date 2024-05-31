FROM ragilkbs/baliexperience:latest
ENV PATH="/composer/vendor/bin:$PATH" \
    COMPOSER_ALLOW_SUPERUSER=1
#RUN groupadd --force -g $WWWGROUP sail
#RUN useradd -ms /bin/bash --no-user-group -g WWWGROUP -u 1337 sail
COPY . /var/www/html
RUN rm /var/www/html/composer.lock
WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN chmod +x /usr/local/bin/start-container

RUN composer install
RUN npm install
RUN npm run build
RUN php artisan storage:link 
#RUN php artisan migrate --seed

EXPOSE 8000

ENTRYPOINT ["start-container"]