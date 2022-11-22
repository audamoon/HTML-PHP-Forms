<div id="appeal-form">
    <label class="standart" for="full_name">Фамилия, Имя, Отчество
        <span class="asterisk">*</span>
    </label>
    <input class = "text" type="text" name="full_name" placeholder="Иванов Иван Иванович" value="<?php echo (string)$defaults['full_name'] ?>">
    <?php errorCheck($errorsObject,"full_name"); ?> <!-- Проверка на правильность введённой формы -->
    <label class="standart" for="email">E-mail
        <span class="asterisk">*</span>
    </label>
    <input class = "text" type="email" name="email" placeholder="Ivanov@ivanov.ru" value="<?php echo (string)$defaults['email'] ?>">
    <?php errorCheck($errorsObject, "email"); ?>
    <label class="standart" for="phone_number">Контактный телефон
        <span class="asterisk">*</span>:
    </label>
    <input class = "text" type="tel" name="phone_number" placeholder="+79001112233" value="<?php echo (string)$defaults['phone_number'] ?>">
    <?php errorCheck($errorsObject,"phone_number"); ?>
    
    <label class="standart" for="message">Текст обращения
        <span class="asterisk">*</span>
    </label>    
    <textarea name="message" id="message"><?php echo (string)$defaults['message'] ?> </textarea>
    <?php errorCheck($errorsObject,'message'); ?>

    <label class="standart" for="messageType">Выберите категорию обращения
        <span class="asterisk">*</span>
    </label>
    <select name="messageType" id="messageType">
        <option value="wish">Пожелание</option>
        <option value="certificate">Справка</option>
        <option value="appeal">Обращение</option>
    </select>
    <div id="checkboxes">
    <p><input type="checkbox" name="personal_data_argeement"><a href="https://youtu.be/dQw4w9WgXcQ">Согласен на обработку персональных данных</a></p>
    <p><input type="checkbox" name="personal_data_policy"><a href="https://youtu.be/dQw4w9WgXcQ">Ознакомлен с политикой обработки персональных данных на сайте учреждения</a></p>
    <?php errorCheck($errorsObject,"personal_data"); ?>    
</div>

    <div id="btnSubmit-div">
        <input type="submit" name="btnSubmit" id="btnSubmit">
    </div>
</div>
