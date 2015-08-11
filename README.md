This project isn't maintained anymore
===============

Yii Boilerplate
===============
<big>**based on Yii v1.1.10**</big>

This project can be used as a quicker start for your yii app. I know Yii is fast. But I've found out I was doing the same steps for every little project, so I though I could set up a more complete bootstrap app then the one yiic command gives me.

The Branches
-------------

As different projects require different setups, so does (or will do) the branches of this repo. For now there is only one branch, but there will be more. All branches have the following setup in common:

* .gitignore ignores auto-generated assets and runtime files
* Beautiful URLs

### [Haml branch](https://github.com/theblacksmith/yii-boilerplate/tree/haml)

* Adds [Yiihppie](https://github.com/theblacksmith/Yiihppie) extension

  Yiihppie extension uses [HamlPHP](https://github.com/hamlphp/HamlPHP) to enable haml views in Yii.
  
* Adds [giix-haml](https://github.com/theblacksmith/giix-haml) extension to generate haml views using Gii

### [Bootstrap branch](https://github.com/theblacksmith/yii-boilerplate/tree/bootstrap)

* Adds a fork of [YiiBootstrap](https://github.com/theblacksmith/YiiBootstrap) extension created by [By VisualAppeal](https://github.com/VisualAppeal/YiiBootstrap)

  YiiBootstrap adds nice widgets to render [Twitter Bootstrap](http://twitter.github.com/bootstrap) based pages
  
* Adds a bootstrap theme (set as default theme)

### Coming soon...

* Bootstrap-haml
* Bootstrap-haml-sass
* Bootstrap-haml-less

Awesome! How do I use it?
----------------

### The yiib command

So you've hear enough and wanna try it out? I have good news for you, I've made it easier:

1. download the [yiib.sh gist](https://gist.github.com/3088198) ([direct link](https://raw.github.com/gist/3088198/6e9f7345e33671d1bfaa54617bd734b5455da6e3/yiib.sh)) and save it somewhere
2. Add a shortucut to it by running

		$ sudo ln -s /path/to/where/you/put/yiib.sh /usr/sbin/yiib 

3. now, whenever you wanna create a project from one of this branches you just run

   `$ yiib <template> <project_name>`
		
   Where `<template>` is the name of one of the branches in this repo. e.g:

   `$ yiib bootstrap MyAwesomeApp`
		 
That's it! 

### Ow.. you want the long way? ok.

	git clone -b <template> https://github.com/theblacksmith/yii-boilerplate <project>

	cd <project>
	git remote rm origin
	git branch -m <template> master
