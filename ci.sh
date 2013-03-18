#!/bin/sh

## Fron Jenkins
INSTANCE="artesis-l-${BUILD_NUMBER}"

## Local vars
SELENIUM_BROWSER_URL=http://$INSTANCE.ci.inlead.dk

## Run tests
exec /usr/bin/env SELENIUM_BROWSER_URL=${SELENIUM_BROWSER_URL} ./run.sh --log-junit=logs/junit-${BUILD_NUMBER}.xml --testdox-html=logs/testdox-${BUILD_NUMBER}.html "$@"
