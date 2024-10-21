<?php

/**
 * Show front
 * @param string $page
 * @param array $data
 * @param string $template
 */
function render(string $page, array $data = [], string $template = VIEWS_TEMPLATE_DEFAULT){
    extract($data); // Это сделает переменные из массива $data доступными в шаблоне
    include_once VIEWS_TEMPLATES_DIR . $template . '.php'; // Подключаем шаблон
}

/**
 * Redirect to specify url
 * @param string $url
 */
function redirect(string $url){
    header('Location: ' . $url);
    exit();
}