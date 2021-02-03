#!/bin/sh

mkdir .public
php index.php > .public/index.html
php accordion.php > .public/accordion.html
php animation.php > .public/animation.html
php buttons.php > .public/buttons.html
php content.php > .public/content.html
php coronavirus.php > .public/coronavirus.html
php forms.php > .public/forms.html
php grid-system.php > .public/grid-system.html
php icons.php > .public/icons.html
php lists.php > .public/lists.html
php logos.php > .public/logos.html
php messages.php > .public/messages.html
php metadata.php > .public/metadata.html
php navigation.php > .public/navigation.html
php pages.php > .public/pages.html
php tables.php > .public/tables.html
php typography.php > .public/typography.html
php widgets.php > .public/widgets.html
php videos.php > .public/videos.html
cp -r * .public
mv .public public
