<!DOCTYPE html>
<html>

<head>
    <title>Project 2</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="style.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?hl=ru"></script>
</head>

<body>
    <script>
    function onSubmit(token) {
        document.getElementById("demo-form").submit();
    }
    </script>
    <div id="all-content">
        <div id="main_text">
            <h1>Категории обращений:</h1>
            <ol id="appeal">
                <li><b>Пожелание.</b> Вы можете высказать Ваше мнение о деятельности лечебного учреждения. Данная форма обращения не требует ответа и времени исполнения.</li>
                <li><b>Справка.</b> Мы можем разъяснить ту или иную ситуацию, связаннную с оказанием медицинских услуг. Ответ будет направен Вам по указанной электронной почте не позднее 5 рабочих дней со дня отправки Вашего запроса.</li>
                <li><b>Обращение.</b> Срок исполнения 30 дней. Обращение передается лицу, ответственному за работу с обращениями граждан и обрабатывается в обычном порядке. Ответ будет направлен на указанный электронный адрес не позднее 30 дней со дня отправки Вашего обращения.</li>
            </ol>
        </div>
        <div id="form-tag">
            <form action=" " method="POST">
                <?php 
                require "functions.php"; //подключение файла с функциями
                require "configure.php"; //подключение конфигурационного файла
                if (isset($_POST['btnSubmit']) and !count($errorsObject->errors)) {
                    require "sendMailConfig.php";
                } else {
                    require "form.php"; } ?>
                
            </form>

        </div>
    </div>
    <footer></footer>
</body>

</html>