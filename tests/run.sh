#!/bin/bash
dir=$(cd "$(dirname "$0")";pwd);

cd ${dir}/unit
/usr/bin/php ../../vendor/bin/phpunit . &&
cd ${dir}/integration &&
/usr/bin/php ../../vendor/bin/phpunit .
