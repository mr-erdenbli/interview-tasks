<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовые задания, Блиндер Денис Сергеевич</title>
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <h2>Задание 1</h2>
    <p class="simple-paragraph __toggled-paragraph" data-hidden-class="simple-paragraph_hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quia nemo dolorem enim iure, ad unde aperiam aspernatur architecto dicta commodi officia sapiente cum fuga ipsam maiores possimus, mollitia nostrum.</p>
    <button class="btn btn_primary __first-btn" type="button">Кнопка 1</button>
    <button class="btn btn_secondary __second-btn" type="button">Кнопка 2</button>

    <h2>Задание 2</h2>
    <form class="__validation-form" action="handler.php" method="POST">
        <label>
            <span>Строка для валидации</span>
            <input type="text" name="str" required>
        </label>
        <button class="btn btn_primary">Проверить</button>
    </form>

    <script src="js/custom.js"></script>
</body>
</html>