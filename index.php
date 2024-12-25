<?php

use Controller\AttractionController;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$ctrlAttraction = new AttractionController();
