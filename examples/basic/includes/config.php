<?php
/* !!!! CONFIGURE !!!!
==================================== */
$config = new stdClass();
$config->bucket_slug = "driver-example";
$config->read_key = "CtGWg3wHF2jxCpVbn6LsbGFBLse8Z1gFJWpRe1XSZofRiG6fDS"; // leave empty if not required
$config->write_key = "0oJq8jkH2QRryC34qWQr4zqeGzorhakz8P8JTi9UFM17MRjxvu"; // leave empty if not required

// Do not edit
$config->url = "https://api.cosmicjs.com/v1/" . $config->bucket_slug;
$config->objects_url = $config->url . "/objects";
$config->media_url = $config->url . "/media";
$config->add_object_url = $config->url . "/add-object";
$config->edit_object_url = $config->url . "/edit-object";
$config->delete_object_url = $config->url . "/delete-object";
?>