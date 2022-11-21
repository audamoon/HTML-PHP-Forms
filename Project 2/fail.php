<div id="appeal-form">
    <label class="standart" for="full_name">Фамилия, Имя, Отчество
        <span class="asterisk">*</span>
    </label>
    <input type="text" id="full_name" name="full_name" placeholder="Введите ФИО..." value="<?php echo (string)$defaults['full_name'] ?>">
    <?php errorCheck($errors,"full_name"); ?>
    <label class="standart" for="email">E-mail
        <span class="asterisk">*</span>
    </label>
    <input type="email" id="email" name="email" placeholder="Введите e-mail..." value="<?php echo (string)$defaults['email'] ?>">
    <?php errorCheck($errors, "email"); ?>
    <div id="btnSubmit-div">
        <input type="submit" name="btnSubmit" id="btnSubmit">
    </div>
</div>
