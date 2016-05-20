<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 19.05.2016
 * Time: 17:19
 */

function json_message($message){
    $json['error'] = $message;
    echo json_encode($json);
    die();
}

if ($_POST) {
    $new_word = htmlspecialchars(trim($_POST["new_word"]));

    $category = $_POST['category'];
    $word =  $new_word . "\n";

    $file = "content/$category.txt";

    if($new_word != ''){
        if(file_exists($file)){
            if(strpos(file_get_contents($file), $new_word)){
                json_message('Слово уже существует!');
            } else {
                file_put_contents($file, $word, FILE_APPEND);
            }
        } else {
            file_put_contents($file, $word, FILE_APPEND);
        }
    } else {
        json_message('Зaпoлнитe пoлe!');
    }

    $json = array();

    $json['error'] = false;

    echo json_encode($json);
}