## Wordpress theme
Minimal blog theme for Wordpress.

It also provides theme development environment with Docker-Compose. 
When you developing theme, you don't need re-applying when source modified.


## Features
1. Support SCSS compile when git commit (pre-commit hook)
2. Docker-Compose Environment
3. Auto compiling SCSS (/w node-sass 00watch)
4. Auto applying when theme modified. (/w docker volume sym link)

## How to use
```
$ npm install
$ docker-compose up -d
$ npm watch
```

and Enjoy it!

## Tips
When you apply immediately to your remote site, use [WP-Pusher](https://wppusher.com) and setting git repository webhook.