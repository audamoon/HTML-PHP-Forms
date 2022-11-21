<div id="appeal-form">
    <label class="standart" for="full_name">Фамилия, Имя, Отчество
        <span class="asterisk">*</span>
    </label>
    <input type="text" name="full_name" placeholder="Иванов Иван Иванович" value="<?php echo (string)$defaults['full_name'] ?>">
    <?php errorCheck($errorsObject,"full_name"); ?>
    <label class="standart" for="email">E-mail
        <span class="asterisk">*</span>
    </label>
    <input type="email" name="email" placeholder="Ivanov@ivanov.ru" value="<?php echo (string)$defaults['email'] ?>">
    <?php errorCheck($errorsObject, "email"); ?>
    <label class="standart" for="phone_number">Контактный телефон
        <span class="asterisk">*</span>:
    </label>
    <input type="tel" name="phone_number" placeholder="+79001112233" value="<?php echo (string)$defaults['phone_number'] ?>">
    <?php errorCheck($errorsObject,"phone_number"); ?>
    <label class="standart" for="message">Текст обращения
        <span class="asterisk">*</span>
    </label>
    <textarea name="message"></textarea>
    <label class="standart" for="messageType">Выберите категорию обращения
        <span class="asterisk">*</span>
    </label>
    <select name="messageType">
        <option>Пожелание</option>
        <option>Справка</option>
        <option>Обращение</option>
    </select>
    <div id="btnSubmit-div">
        <input type="submit" name="btnSubmit" id="btnSubmit">
    </div>
</div>
