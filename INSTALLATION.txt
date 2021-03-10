**update docker-compose.yml**

mysql:
    volumes:
       - ./docker/mysql/data:/var/lib/mysql
    user: mysql

**update DATABASE_URL**
      - DATABASE_URL=mysql://sylius:nopassword@mysql/sylius

**update nginx/conf.d/default.conf**
        #fastcgi_pass php:9000;
        resolver 127.0.0.11;
        set $upstream_host php;
        fastcgi_pass $upstream_host:9000;

**run**
sudo chmod -R a+w ./docker/mysql/data

docker-compose up --build

docker-compose exec php sh

INSIDE PHP CONTAINER: php bin/console sylius:install
