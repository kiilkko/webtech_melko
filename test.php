<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест по веб-программированию</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .nav-container {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .nav-container a {
            background-color: rgba(255, 255, 255, 0.3);
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            margin-right: 10px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
            transition: background-color 0.3s ease;
            
        }

        .nav-container a:hover {
            background-color: lightgray;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .column {
            width: 45%;
            margin-bottom: 20px;
        }

        .question {
            margin-bottom: 15px;
        }

        .question label {
            display: block;
            margin-bottom: 5px;
        }

        .submit-btn {
            background-color: green;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 18px;
        }
    </style>
</head>
<body>

<!-- Навигационные кнопки -->
    <div class="nav-container">
        <a href="http://localhost/login_form/.vscode/test.php">Тест</a>
        <a href="http://localhost/login_form/.vscode/gallery.php">Галерея</a>
        <a href="http://localhost/login_form/.vscode/login.php">Выход</a>
    </div>
    
    <div class="wrapper_test">
        <h1>Тест по веб-программированию</h1><br><br>
        <form id="testForm">
            <div class="container">
                <!-- Первая колонка -->
                <div class="column">
                    <div class="question">
                        <label><h2>1. Какой тег используется для вставки ссылки?</h2></label>
                        <input type="radio" name="q1" value="a" required> &lt;a&gt;<br>
                        <input type="radio" name="q1" value="b"> &lt;link&gt;<br>
                        <input type="radio" name="q1" value="c"> &lt;href&gt;<br>
                    </div><br>

                    <div class="question">
                        <label><h2>Что такое CSS?</h2> </label>
                        <input type="radio" name="q2" value="a" required> Язык программирования<br>
                        <input type="radio" name="q2" value="b"> Язык разметки<br>
                        <input type="radio" name="q2" value="c"> Язык стилей<br>
                    </div><br>

                    <div class="question">
                        <label><h2>3. Как правильно задать комментарий в HTML?</h2></label>
                        <input type="radio" name="q3" value="a" required> // комментарий<br>
                        <input type="radio" name="q3" value="b"> /* комментарий */<br>
                        <input type="radio" name="q3" value="c"> &lt;!-- комментарий --&gt;<br>
                    </div>
                </div>

                <!-- Вторая колонка -->
                <div class="column">
                    <div class="question">
                        <label><h2>4. Какой метод HTTP используется для получения данных с сервера?</h2></label>
                        <input type="radio" name="q4" value="a" required> POST<br>
                        <input type="radio" name="q4" value="b"> GET<br>
                        <input type="radio" name="q4" value="c"> PUT<br>
                    </div><br>

                    <div class="question">
                        <label><h2>5. Какой атрибут используется для указания альтернативного текста изображения?</h2></label>
                        <input type="radio" name="q5" value="a" required> src<br>
                        <input type="radio" name="q5" value="b"> alt<br>
                        <input type="radio" name="q5" value="c"> title<br>
                    </div><br>

                    <div class="question">
                        <label><h2>6. Какое расширение имеет PHP файл?</h2></label>
                        <input type="radio" name="q6" value="a" required> .html<br>
                        <input type="radio" name="q6" value="b"> .php<br>
                        <input type="radio" name="q6" value="c"> .css<br>
                    </div>
                </div>
            </div>
            <button type="button" class="submit-btn" onclick="checkTest()">Отправить</button>
        </form>

        <div id="result" style="margin-top: 20px;"></div>
    </div>

    <script>
        function checkTest() {
            const correctAnswers = {
                q1: 'a',
                q2: 'c',
                q3: 'c',
                q4: 'b',
                q5: 'b',
                q6: 'b'
            };

            let form = document.getElementById('testForm');
            let formData = new FormData(form);
            let correctCount = 0;
            let incorrectQuestions = [];

            formData.forEach((value, key) => {
                if (value === correctAnswers[key]) {
                    correctCount++;
                } else {
                    incorrectQuestions.push(key);
                }
            });

            let result = document.getElementById('result');
            result.innerHTML = `<h3>Результаты теста:</h3>
                                <p>Правильных ответов: ${correctCount}</p>
                                <p>Неправильные вопросы: ${incorrectQuestions.join(', ') || 'Нет'}</p>`;
        }
    </script>
</body>
</html>