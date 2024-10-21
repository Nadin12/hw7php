<?php
/**
 * home controller
 */
function home() {
    $data = handleFormSubmission(); // Обрабатываем форму и получаем данные
    $names = getNames(); // Получаем имена из файла
    render('home', [
        'girl_names' => $names['girls'],
        'boy_names' => $names['boys'],
        'errors' => [], // или передайте ошибки, если есть
    ]);
}


/**
 * process controller
 */
function process() {
    $data = handleFormSubmission(); // Обрабатываем форму и получаем данные
    redirect('/index.php');
}


/**
 * Контроллер для обработки формы добавления имен
 * Загружает имена, обрабатывает форму и возвращает данные для отображения
 *
 * @return array Возвращает массив с именами и ошибками
 */
function handleFormSubmission() {
    // Загружаем существующие имена из хранилища
    $names = getNames();
    $girl_names = $names['girls'];
    $boy_names = $names['boys'];

    // Обрабатываем форму
    $errors = handleNames($girl_names, $boy_names);

    // Возвращаем имена и ошибки
    return [
        'girl_names' => $girl_names,
        'boy_names' => $boy_names,
        'errors' => $errors,
    ];
}
