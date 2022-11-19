<form action="index.php" method="POST">
    <?php require('action.php');
    ?>
    <div id="appeal-form">
        <label class="standart" for="full_name">Фамилия, Имя, Отчество
            <span class="asterisk">*</span>
        </label>
        <input type="text" id="full_name" name="full_name" placeholder="Введите ФИО..." value="<?php echo (string)$defaults['full_name']?>">
        <?php if (isset($errors['full_name'])) {?>
            <p class="error"><?php echo $errors['full_name'] ?></p>
        <?php } ?>
        <label class="standart" for="email">E-mail
            <span class="asterisk">*</span>
        </label>
        <input type="email" id="email" name="email" placeholder="Введите e-mail..." value="<?php echo (string)$defaults['email']?>">
        <?php if (isset($errors['email'])) { ?>
            <p class="error"><?php echo $errors['email'] ?></p>
        <?php } ?>
    </div>
    <div id="submit-button-div">
        <input type="submit" id="button">
    </div>
    <?php if (!count($errors)) {
        echo "<p> Обращение отправлено </p>";
    }?>
</form>