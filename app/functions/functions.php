<?php

/**
 * Processes the input names and genders from the form.
 *
 * @param array &$girl_names Reference to the array of girls' names.
 * @param array &$boy_names Reference to the array of boys' names.
 * @return array An array of errors if they exist, otherwise an empty array.
 */
function handleNames(array &$girl_names, array &$boy_names): array {
    $errors = ['name' => '', 'gender' => ''];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);

        if (empty($name)) {
            $errors['name'] = 'Пожалуйста, введите имя.<br>';
        } elseif (!preg_match('/^[а-яА-ЯёЁa-zA-Z\s\-]+$/u', $name)) {
            $errors['name'] = 'Имя должно содержать только буквы.<br>';
        }

        if (empty($gender) || !in_array($gender, ['мальчик', 'девочка'])) {
            $errors['gender'] = 'Пожалуйста, выберите "мальчик" или "девочка".<br>';
        }

        if (empty($errors['name']) && empty($errors['gender'])) {
            addName($girl_names, $boy_names, $name, $gender);
            setNames(['girls' => $girl_names, 'boys' => $boy_names]);
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
    }

    return $errors;
}

/**
 * Adds a name to the corresponding array based on the specified gender.
 *
 * @param array &$girl_names Reference to the array of girls' names.
 * @param array &$boy_names Reference to the array of boys' names.
 * @param string $name The name to be added.
 * @param string $gender The gender to which the name belongs (boy or girl).
 */
function addName(array &$girl_names, array &$boy_names, string $name, string $gender): void {
    if ($gender === 'девочка') {
        $girl_names[] = htmlspecialchars($name);
    } elseif ($gender === 'мальчик') {
        $boy_names[] = htmlspecialchars($name);
    }
}

