#!/bin/sh

SELENIUM=./selenium.jar
DISPLAY_NUMBER=80

Xvfb :${DISPLAY_NUMBER} -screen 0 1024x768x24 2>&1 >/dev/null &
echo $! > xvfb.pid

sleep 2

DISPLAY=:${DISPLAY_NUMBER} java -jar ${SELENIUM} 2>&1 >/dev/null &
echo $! > selenium.pid

sleep 3

