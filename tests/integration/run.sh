#!/bin/bash
dir=$(cd "$(dirname "$0")";pwd);

cd ${dir}
/usr/bin/php ./../../vendor/bin/phpunit $* .
