#!/bin/bash -e

cd "`dirname "$0"`/.."

[ -d .public ] && rm -fr .public
mkdir .public

for php_file in *.php; do
	file="`basename "$php_file" .php`" # filename w/o extension
	echo "php $file.php > public/$file.html"
	php "$file.php" > ".public/$file.html"
done

cp -r * .public
mv .public public
