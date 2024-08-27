#!/bin/bash

# Create a directory for the SSL library
mkdir -p /var/task/lib

# Download and install the SSL library
curl -L https://github.com/openssl/openssl/archive/OpenSSL_1_1_1l.tar.gz | tar xz
cd openssl-OpenSSL_1_1_1l
./config --prefix=/var/task --openssldir=/var/task
make
make install

# Update the LD_LIBRARY_PATH
export LD_LIBRARY_PATH=/var/task/lib:$LD_LIBRARY_PATH

# Run composer install
composer install --no-dev