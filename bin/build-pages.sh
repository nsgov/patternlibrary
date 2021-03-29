#!/bin/bash -e

cd "`dirname "$0"`/.."

[ -d public ] && rm -fr public
mkdir public

for i in *; do
	[ "$i" = "public" ] && continue	# skip; don't try to copy public into itself
	file="${i%.*}" # filename w/o extension
	[ "$i" != "$file" ] && ext="${i##*.}" || ext=""
	[ -d "$i" ] && type=dir || type=file
	case "$ext-$type" in
		"php-file" )	# process php files
			printf "%bphp %b%s.php %b> public/%b%s.html%b\n" \
				"\e[32m" "\e[36m" "$file" "\e[0m" "\e[35m" "$file" "\e[0;39m"
			php "$file.php" > "public/$file.html"
			;;
		*-dir )	# copy directory
			printf "%bcp %b-r %b%s%b/ public/\n" \
				"\e[32m" "\e[0m" "\e[33m" "$i" "\e[0;39m"
			cp -r "$i" public/
			;;
		*-file ) # copy file
			printf "%bcp %b%s%b public/\n" \
				"\e[32m" "\e[35m" "$i" "\e[0;39m"
			cp "$i" public/
			;;
	esac
done
