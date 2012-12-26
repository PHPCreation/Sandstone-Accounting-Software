Clone repository
===============
```
git clone -b develop git@github.com:PHPCreation/Sandstone-Accounting-Software.git
```

Install lib with composer
================
Need composer, see : http://getcomposer.org/download/
```
composer.phar update
```

Configs
==========
Copy app/config/parameters.yml.dist to app/config/parameters.yml
Edit content for your need.

Deploy Database
===============
```
./console doctrine:schema:update --force
```
