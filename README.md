[![Cosmic JS Logo](https://cosmicjs.com/images/marketing/logo-w-brand.jpg)](https://cosmicjs.com/)
## Cosmic JS Client for PHP

### Getting started
Go to [https://cosmicjs.com](https://cosmicjs.com), create an account and setup a bucket.

### Install
```
git clone https://github.com/cosmicjs/cosmicjs-php
```
### Usage
```php
<?php
/* !!!! CONFIGURE !!!!
==================================== */
$config = new stdClass();
$config->bucket_slug = "driver-example"; // bucket slug
$config->read_key = ""; // leave empty if not required
$config->write_key = ""; // leave empty if not required

$config->url = "https://api.cosmicjs.com/v1/" . $config->bucket_slug;
$config->objects_url = $config->url . "/objects";
$config->media_url = $config->url . "/media";
$config->add_object_url = $config->url . "/add-object";
$config->edit_object_url = $config->url . "/edit-object";
$config->delete_object_url = $config->url . "/delete-object";

include("cosmicjs.php");

/* Add
================================= */
$object_string = '{
	"type_slug" : "pages",
	"title" : "Test Title",
	"content" : "here is some test content",
	"write_key" : "' . $config->write_key . '"
}';

$object = $cosmic_class->addObject($object_string);


/* Edit
================================= */
$object_string = '{
	"slug" : "test-title",
	"title" : "New Title",
	"content" : "here is some NEW test content",
	"write_key" : "' . $config->write_key . '"
}';

$object = $cosmic_class->editObject($object_string);


/* Delete
================================= */
$object_string = '{
	"slug" : "test-title",
	"write_key" : "' . $config->write_key . '"
}';

$object = $cosmic_class->deleteObject($object_string);


/* Get Objects
================================= */
$cosmic_objects = $cosmic_class->getObjects();


/* Get Media
================================= */
$cosmic_media = $cosmic_class->getMedia();

?>
```
