# CWUSTARTUP WEB APP
## Running Locally

#Structure of the app
Folders:
	Vendor
	 	Web
			bower_component
			components
				php
				   header.php
				   footer.php
				   login.php
				   signup.php
				   admin.php
			includes
				controllers
			js
			css
			images
	.gitignore
	composer.json
	Procfile
	README.md




Make sure you have PHP, Apache and Composer installed.  Also, install the [Heroku Toolbelt](https://toolbelt.heroku.com/).

```sh
$ git clone git@github.com:heroku/php-getting-started.git # or clone your own fork
$ cd php-getting-started
$ composer update
$ foreman start web
```

Your app should now be running on [localhost:5000](http://localhost:5000/).

## Deploying to Heroku

```
$ heroku create
$ git push heroku master
$ heroku open
```

## Documentation

For more information about using PHP on Heroku, see these Dev Center articles:

- [PHP on Heroku](https://devcenter.heroku.com/categories/php)
