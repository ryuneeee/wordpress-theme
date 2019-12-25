## Wordpress theme
Minimal blog theme for Wordpress.

It also provides theme development environment with Docker-Compose. 
When you developing theme, you don't need re-applying theme when source modified.


## Features
1. Docker-Compose Environment
2. Support auto compiling SCSS/SASS (using node-sass)
3. Support auto applying when theme modified. (/w docker volume sym link)

## How to use
1. Install Wordpress, MySQL via Docker
```
$ npm install
$ docker-compose up -d
```
2. Go http://localhost:8080/wp-admin, select wordpress-theme
3. Watch your SCSS/SASS stylesheet
```
$ npm run watch
```
4. Enjoy develop theme directory using your editor!

## Tips
When you apply immediately to your remote site, use [WP-Pusher](https://wppusher.com) and setting git repository webhook.