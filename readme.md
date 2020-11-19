# DOCKER WEB DEV SCAFOLDING or D.W.D.S

DWDS is a blank docker containers to provide robust development environment to build a web applications. It is based on the article mentioned on special thanks section below. But, the main reason I made this is as a self preservation to my docker-compose setting that saved me headache for a project that is not working under XAMPP and Laragon.

DWDS was built with a laravel project in mind, but it suppose to work on most web app.

The Technologies DWDS is using are:
 - Docker, Docker-compose [cekidot](https://www.docker.com/)
 - webserver is using NginX alpine [image](https://hub.docker.com/layers/nginx/library/nginx/1.17-alpine/images/sha256-51da5a4440f897dec32f5ac0e9f98483bd8f511f9f0844a82a347fe55a1fb6ed?context=explore)
 - mysql is using MySQL:5 image
 - PHPMyAdmin is using phpmyadmin/phpmyadmin:5-fpm-alpine image
 - PHP is using php:7.4-fpm-alpine image. (manual build) 

## Usage

First and foremost, you will need Docker and docker-compose setup and running on your host machine. (Google on how to set it up if you haven't)

everything else should be self-explanatory at this point. 

You may setup the project name using the root .env file.

place your web application inside "./src/app" (create it if it is not exist) folder. Configure everything inside your app's .env to point to the services in the docker-compose.yml file in root of this git

note:
``
you might need to add entries to your host file. (just in case you've forgotten)
``

Running the app
```bash
docker-compose up -d
``` 

If everything is okay, open your web browser to the address you've set up previously in the ``./.docker/nginx/conf.d/`` .conf files.

 
## License
[MIT](https://choosealicense.com/licenses/mit/)

##Special Thanks
- Yannick : for his [article](https://tech.osteel.me/posts/docker-for-local-web-development-introduction-why-should-you-care) that build this stack's base.
