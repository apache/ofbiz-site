#!/bin/bash

# wipe public dir
echo "Wiping public/ dir..."
rm -rf public

# run Hugo
echo "Running Hugo..."
hugo --gc --minify
