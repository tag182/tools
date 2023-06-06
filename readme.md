# How to release on packagist

This is step by step how to release your PHP library into packagist so everyone can use it using `composer require` in their project

# Creating the repository for release

Make sure, your workstation is clean, only necessary file in the path. you can use different **branch** or new **repository**

 1. Do the `composer init` command, so composer would make `composer.json` in root path
	 ```bash
	{
	  "name": "tag182/php-tools", // name of your library
	  "type": "library", 
	  "license": "MIT", // opt : license
	  "autoload": {
	    "psr-4": {
	      "Tag182\\PhpTools\\": "src/"
	    }
	  },
	  "authors": [
	    {
	      "name": "tag182", // authors
	      "email": "super.tag182@gmail.com" // authors email
	    }
	  ],
	  "minimum-stability": "dev", // can be filled with : dev, alpha, beta, RC, stable
	  "require": {
	    "php": "^8.0" // dependency
	  }
	}
	 ```
 2. Commit and make sure you have push all your work into the repository
 3. Setup default `branch` for release. 1 package in packagist must be in 1 repository. you can't do multiple package to be in 1 repository with different branch for release. 
 4. login into packagist account, you can use the SSO with Github
 5. Click on submit
 6. set your Repository *url*