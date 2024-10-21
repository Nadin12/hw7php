<?php

/**
 * Read storage and return names array
 * @return array
 */
function getNames(): array {
    $namesArray = ['girls' => [], 'boys' => []];
    if (file_exists(STORAGE_NAMES_FILE)) {
        $jsonNames = file_get_contents(STORAGE_NAMES_FILE);
        if ($jsonNames === false) {
            echo 'Ошибка чтения файла: ' . STORAGE_NAMES_FILE;
            return $namesArray; // Возвращаем пустой массив
        }

        $names = json_decode($jsonNames, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo 'Ошибка декодирования JSON: ' . json_last_error_msg();
            return $namesArray; // Возвращаем пустой массив
        }

        $namesArray = $names;
    } else {
        echo 'Файл не найден: ' . STORAGE_NAMES_FILE;
    }
    return $namesArray;
}



/**
 * Write names to the storage
 * @param array $names
 */
function setNames(array $names) {
    $jsonNames = json_encode($names);
    if ($jsonNames === false) {
        echo 'Ошибка кодирования JSON: ' . json_last_error_msg();
        return;
    }

    if (file_put_contents(STORAGE_NAMES_FILE, $jsonNames) === false) {
        echo 'Ошибка записи в файл: ' . STORAGE_NAMES_FILE;
    }
}
