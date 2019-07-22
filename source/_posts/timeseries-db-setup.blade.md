---
extends: _layouts.post
section: content
title: Configuring a time series database
date: 2019-06-23
description: Time series data is everywhere. Let's understand how to setup some infrastructure optimized for it.
categories: []
--- 

My initial guide.

https://blog.hasura.io/using-timescaledb-with-hasura-graphql-d05f030c4b10/

My `docker-compose` script.

``` {bash}
version: '3.6'
services:
  timescale:
    image: timescale/timescaledb:latest-pg11
    restart: always
    ports:
    - "5432:5432"
    environment:
      POSTGRES_PASSWORD: password
    volumes:
    - db_data:/var/lib/postgresql/data
  graphql-engine:
    image: hasura/graphql-engine:v1.0.0-beta.2
    ports:
    - "8080:8080"
    depends_on:
    - "timescale"
    restart: always
    environment:
      HASURA_GRAPHQL_DATABASE_URL: postgres://postgres:password@timescale:5432/postgres
      HASURA_GRAPHQL_ENABLE_CONSOLE: "true" # set to "false" to disable console
      ## uncomment next line to set an admin secret
      HASURA_GRAPHQL_ADMIN_SECRET: YOUR_HASURA_LOGIN
volumes:
  db_data:
```

It was a bit confusing why things were not working.  
Running `docker-compose up` without the `-d` option allowed me to see the logs of where the error was happening.

It turned out the `POSTGRES_PASSWORD` environment variable was not being set.

I followed this help post to login and manually reset the password.

https://github.com/sameersbn/docker-postgresql/issues/112

Ideally, I'd like to add this steps to the docker compose file.

Another change from the tutorial was that I had to expose the 5432 port.  
I controlled access to this port through the firewall rules on Digital Ocean.

