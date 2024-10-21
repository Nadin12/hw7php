<?php

const APP_DIR = 'app' . DIRECTORY_SEPARATOR;
include_once APP_DIR . 'config.php'; // Подключаем config.php первым
include_once FUNCTIONS_DIR . 'controllers.php';
include_once FUNCTIONS_DIR . 'storages.php';
include_once FUNCTIONS_DIR . 'responses.php';
include_once FUNCTIONS_DIR . 'functions.php';
