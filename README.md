## Wordpress theme
Minimal blog theme for Wordpress.

It also provides theme development environment with Docker-Compose. 
When you developing theme, you don't need re-applying when source modified.


## Features
1. Support SCSS compile when git commit (pre-commit hook)
2. Docker-Compose Environment
3. Auto compiling SCSS (using node-sass)
4. Auto applying when theme modified. (/w docker volume sym link)

## How to use
1. Install Wordpress, MySQL via Docker
```
$ npm install
$ docker-compose up -d
```
2. Go http://localhost:8080/wp-admin, select wordpress-theme
3. Watch your SCSS stylesheet
```
$ npm run watch
```
4. Enjoy develop theme directory using your editor!

## Tips
When you apply immediately to your remote site, use [WP-Pusher](https://wppusher.com) and setting git repository webhook.