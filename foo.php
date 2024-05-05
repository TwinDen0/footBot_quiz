<?php
    error_reporting(0);
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'quizball';

    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // Проверка подключения
    if (!$link) {
        die("Ошибка подключения: " . mysqli_connect_error());
    }

    $text = "aaaaa";
    if(isset($_POST['data'])){
        $text = mysqli_real_escape_string($link, $_POST['data']); // экранирование данных перед использованием в запросе
    }

    $sql = "INSERT INTO users (name, phone, info) VALUES ('$text', 121, 'aaaa')"; // Убрано поле id и значение NULL
    if ($result = mysqli_query($link, $sql)) {
        echo "Данные успешно добавлены в базу данных";
    } else {
        echo "Ошибка при выполнении запроса: " . mysqli_error($link);
    }

    // Закрываем соединение с базой данных
    mysqli_close($link);
?>