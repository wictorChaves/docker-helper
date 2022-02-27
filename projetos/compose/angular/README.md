## .docker\node\Dockerfile

Install and configure Angular on node based container

```Dockerfile
FROM node:latest

RUN apt-get update && apt-get install -y vim

EXPOSE 4200

USER node

RUN mkdir /home/node/.npm-global
ENV PATH=/home/node/.npm-global/bin:$PATH
ENV NPM_CONFIG_PREFIX=/home/node/.npm-global

RUN npm install -g @angular/cli@8.0.6
```

## docker-compose.yml

 - Build the above Dockerfile
 - expose port 4200, run the command:

    ng serve --host 0.0.0.0 --poll=2000

> `--host 0.0.0.0` listen to all container interfaces\
> `--poll=2000` listen for changes in the folder

```yaml
version: "2.1"

services:
  node:
    container_name: angularcontainer
    build: ./.docker/node/
    ports:
      - 4200:4200
    volumes:
      - "./:/var/www/html"
    working_dir: /var/www/html
    command: ng serve --host 0.0.0.0 --poll=2000
```

## Start

Run in project root

    docker compose up

And done!

### Referencias:

 - [Docker-Angular-CLI](https://github.com/Axiol/Docker-Angular-CLI)
 - [ng serve not detecting file changes automatically](https://stackoverflow.com/a/49975130/7986223)