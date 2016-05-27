<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 19.05.2016
 * Time: 17:23
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
</head>
<body>
    <div class="main">
        <div class="form">
            <form action="" method="post" id="add_word">
                <input type="text" placeholder="Слово" name="new_word" pattern="^[A-Za-zА-Яа-яЁё\s]+$">
                <input type="text" placeholder="Перевод" name="new_word_translate" pattern="^[A-Za-zА-Яа-яЁё\s]+$">
                <select name="category" id="">
                    <option value="noun">Существительное</option>
                    <option value="verb">Глагол</option>
                    <option value="not_right_verb">Неправильный глагол</option>
                    <option value="question">Вопрос</option>
                    <option value="part">Частица</option>
                    <option value="other">Другое</option>
                </select>

<!--                <input type="">-->
                <input type="submit" value="Добавить слово">
            </form>

            <div class="add_word_message"></div>
        </div>

        <div class="sentences">
            <h2>Генерация предложения</h2>
            <form action="" method="post" id="sentences_generate">
                <input type="checkbox" name="question" value="yes" id="question"><label for="question">Вопрос?</label>
                <input type="checkbox" name="pronoun" value="yes" checked id="pronoun"><label for="pronoun">Местоимение</label>
                <input type="checkbox" name="deny" value="yes" id="deny"><label for="deny">Отрицательная форма</label>
                <input type="checkbox" name="past" value="yes" id="past"><label for="past">Прошедшее время</label>
                <input type="checkbox" name="verb" value="yes" id="verb" checked><label for="verb">Глагол</label>

                <input type="submit" value="Сгенерировать предложение">
            </form>

            <h2>Результат</h2>
            <p></p>
        </div>
    </div>
</body>
</html>
