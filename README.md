[![Cosmic JS Logo](https://cosmicjs.com/images/marketing/logo-w-brand.jpg)](https://cosmicjs.com/)
## Cosmic JS Client for PHP

### Getting started
Go to [https://cosmicjs.com](https://cosmicjs.com), create an account and setup a bucket.

Check out [example.php](example.php) in this repo.

### Install
```
git clone https://github.com/cosmicjs/cosmicjs-php
```
### Usage
```php
<?php
include("includes/cosmicjs.php");
$cosmic = new Cosmic;

/* Add
================================= */
$object_string = '{
	"type_slug" : "pages",
	"title" : "Test Title",
	"content" : "here is some test content",
	"write_key" : "' . $config->write_key . '"
}';

$object = $cosmic->addObject($object_string);


/* Edit
================================= */
$object_string = '{
	"slug" : "test-title",
	"title" : "New Title",
	"content" : "here is some NEW test content",
	"write_key" : "' . $config->write_key . '"
}';

$object = $cosmic->editObject($object_string);


/* Delete
================================= */
$object_string = '{
	"slug" : "test-title",
	"write_key" : "' . $config->write_key . '"
}';

$object = $cosmic->deleteObject($object_string);


/* Get Objects
================================= */
$cosmic_objects = $cosmic->getObjects();


/* Get Media
================================= */
$cosmic_media = $cosmic->getMedia();

?>
```
