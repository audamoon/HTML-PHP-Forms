<!DOCTYPE html>
<html>
<head>
    <title>Project 2</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div id="all-content">
        <div id="main_text">
            <p>Категории обращений:</p>
            <ol id="appeal">
                <li>Пожелание;</li>
                <li>Справка;</li>
                <li>Обращение;</li>
            </ol>
        </div>
        <form action="action.php" method="POST">
            <div id="appeal-form">
            <label class="standart" for="full_name">Фамилия, Имя, Отчество
                <span class="asterisk">*</span>
            </label>
            <input type="text" id="full_name" name="full_name" placeholder="Введите ФИО...">
            <label class="standart" for="email">E-mail
                <span class="asterisk">*</span>
            </label>
            <input type="email" id="email" name="email" placeholder="Введите e-mail">
            </div>
            <div id="submit-button-div">
                <input type="submit" id="button">
            </div>
        </form>
        
        
</div>
    </body>
</html>