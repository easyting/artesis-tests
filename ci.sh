#!/bin/sh
cd $(dirname $0)

## Fron Jenkins
INSTANCE="artesis-ls-${BUILD_NUMBER}"

## Local vars
SELENIUM_BROWSER_URL=http://$INSTANCE.ci.inlead.dk

## Run tests 
## Will exit with code 1 on failure, 2 on exceptions, 0 on success
SELENIUM_BROWSER_URL=${SELENIUM_BROWSER_URL} ./run.sh --log-junit=logs/junit-${BUILD_NUMBER}.xml --testdox-html=logs/testdox-${BUILD_NUMBER}.html "$@"
exit $?
