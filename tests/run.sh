#!/bin/bash
dir=$(cd "$(dirname "$0")";pwd);

cd ${dir}/unit &&
./run.sh &&
cd ${dir}/integration &&
./run.sh
