# About
Docker base with PHP, Composer, Apache, Mariadb, and Xdebug configured

To start the docker use:
```
docker compose up -d
```
## Custom CLI Commands
There are some custom commands in the `bin/` folder to make using certain resources easier on a daily basis.

- `bin/composer` run composer commands 
- `bin/php` run php commands

If you encounter any permission issues when using any of the commands, you just need to adjust the permissions of the `bin/` folder
```
chmod +x bin/*  
```


This docker uses the image [php:8.3-apache](https://hub.docker.com/_/php)

## License

[MIT](https://opensource.org/licenses/MIT)