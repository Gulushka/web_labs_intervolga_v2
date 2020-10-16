<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>volsu_bootstrapp</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>



<body>
    <div class="center"> 
        <h2>Анкета</h2>
        <form method="POST">
            <p>Введите имя:<br> 
            <input type="text" name="name" /></p>
            <p>Максимальная вложенность: <br> 
                <input type="radio" name="hLevel" value="h1" />h1 </br>
                <input type="radio" name="hLevel" value="h2" />h2 </br>
                <input type="radio" name="hLevel" value="h3" />h3 </br>
                <input type="radio" name="hLevel" value="h4" />h4 </br>
                <input type="radio" name="hLevel" value="h5" />h5 </br>
                <input type="radio" name="hLevel" value="h6" />h6 </br>
            <input type="submit" value="Выполнить">
        </form>

        <?php
            if (isset($_POST['name']) && isset($_POST['hLevel'])) {
                require_once "laba3.php";
                $tocConfig = new TocConfig;
                $tocConfig->name = $_POST['name'];
                $tocConfig->hLevel = $_POST['hLevel'];
                echo getTocByHtml($_POST['name'], $tocConfig);
            }
        ?>

    </div>
</body>