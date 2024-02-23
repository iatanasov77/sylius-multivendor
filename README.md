# Vankosoft Sylius Multi-Vendor Project

Create Project
---------------

```bash
$ wget http://getcomposer.org/composer.phar
$ php composer.phar create-project vankosoft/sylius-multivendor Sylius_Multivendor
$ cd Sylius_Multivendor
```
Edit .env file to setup your Aplication Database Name and your host url If You Want.


Installation ( Setup Project )
-------------------------------
```
$ php bin/console sylius:install --fixture-suite=sampledata
$ yarn install
$ yarn build
```