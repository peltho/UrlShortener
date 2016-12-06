Url Shortener
=====

Installation
=====

1) Download the archive or clone the repository
2) Install composer if you haven't done it before
3) Execute ‘php composer.phar update‘
4) Configure access to your database in app/config/parameters.yml file
5) Execute ‘php bin/console doctrine:schema:update --force‘ in order to setup the database
6) Launch your app with ‘php bin/console server:run‘
7) Open your brower at "localhost:8000" and shorten some URLs !