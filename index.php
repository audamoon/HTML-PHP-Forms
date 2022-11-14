<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css">
    <title>Управляющая компания Вектор</title>
</head>
<body>
<h1 id="name">Управляющая компания Вектор</h1>
<div id = "select-form">
    <form action="response.php" method="post">
        <label id="select-label" for="select-address">Выберите адрес:</label>
        
            <select id="select-address" name="addresses">
                <?php include "select.php" ?>
            </select>
        <br>
        <input id="select-submit" type="submit" value="Подтвердить">
    </form>
</div>
</body>
</html>
