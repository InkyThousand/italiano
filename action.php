<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 19.05.2016
 * Time: 17:19
 */

$db_host = "localhost";
$db_user = "root";
$db_pass = "12345";
$db_base = "ital_db";


$mysqli = new mysqli("localhost", "root", "12345", "ital_db");

if (mysqli_connect_errno()) {
    printf("Соединение не удалось: %s\n", mysqli_connect_error());
    exit();
}

function json_message($message)
{
    $json['error'] = $message;
    echo json_encode($json);
    die();
}

if ($_POST) {

    $new_word = htmlspecialchars(trim($_POST["new_word"]));
    $new_word_translate = htmlspecialchars(trim($_POST["new_word_translate"]));
    $category = htmlspecialchars(trim($_POST["category"]));

    if ($new_word != '') {/*

        if ($result = $mysqli->query('SELECT `new_word` FROM `words_collection` WHERE `new_word`= ' . $new_word)) {
            $rows = $result->num_rows;
            if (!$rows) {
                $insert_sql = "INSERT INTO `words_collection` (`new_word`, `new_word_translate`, `category`)" . "VALUES('{$new_word}', '{$new_word_translate}', '{$category}');";
                $mysqli->query($insert_sql);
            } else {
                json_message('Слово - ' . $new_word . ' - уже существует!');
            }
        }*/
        
        $result = $mysqli->query('SELECT `new_word` FROM `words_collection` WHERE `new_word`= ' . $new_word);

        if($obj = $result->fetch_object()){
            $insert_sql = "INSERT INTO `words_collection` (`new_word`, `new_word_translate`, `category`)" . "VALUES('{$new_word}', '{$new_word_translate}', '{$category}');";
            $mysqli->query($insert_sql);
        }
        else
        {
            json_message('Слово - ' . $new_word . ' - уже существует!');
        }


    } else {
        json_message('Зaпoлнитe пoлe!');
    }

    $json = array();

    $json['error'] = false;

    echo json_encode($json);
}