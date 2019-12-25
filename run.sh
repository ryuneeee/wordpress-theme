#!/bin/sh

trap 'docker-compose down' SIGINT
trap 'pkill node-sass' SIGINT

docker-compose up & 
P1=$1; 

npm run watch & 
P2=$2; 


wait $P1 $P2
