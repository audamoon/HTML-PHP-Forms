<html>
<head>
    <title>WAMP server</title>
</head>
<body>
<form action="response.php" method="post">
    <label for="addresses">Выберите адрес:</label>
        <select name="addresses">
            <?php include "select.php" ?>
        </select>
    <br><br>
    <input type="submit" value="Подтвердить">
</form>
</body>
</html>
