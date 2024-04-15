<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Practice </title>
    <link rel="stylesheet" href="style.css" />
    <link rel = "shorcut icon" type = "image/jpg" href = "img/favicon.ico">
</head>

<body>
<style>
    body {
        background: #000 url(img/0.jpg);
        color: #fff;
        background-attachment: fixed;
        background-repeat: repeat-x;
    }
</style>

<div class="flex-container">

    <div class="header">

        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>

    </div>

    <div class="about_me">

        <h1>  <?php  echo $p  ?> </h1>

        <div class="data">
            <div class="myImg">
                <?php  echo '<img src="img/12.jpg" style = "width: 290px">'; ?>
            </div>

            <div class="fullname">
                <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                    echo 'город', ' ', $city; ?>
                </p>

                <p> Мне
                    <?php  echo $age;   ?>
                    лет
                </p>
                <p> Мы научились создавать переменные </p>
                <p> Изучили простые операции с ними </p>
            </div>
        </div>

        <div class="knowledge">

            <?php  include 'knowledge.inc.php'; ?>
            <?php   echo $a, ' ', $b, ' ', $c; ?> <br>

            <?php
                        $a = 987;
                        $b = 245;
                        $c = $a + $b;
                        echo $c;
            ?>   <br>
            <?php
                        echo $d;
            ?> <br>
            <?php echo ' ',
                $number,' ', $string,' ', $answer,' ', //Eсли сложить число $number и '$string', ответ будет $answer <br>
                $answer_2,' ', //Если к '$string' добавить "10", тогда получится $answer_2 <br>
                $answer_3, ' ', //9*15 = $answer_3 <br>
                $answer_4 //Если возвестри $answer_3 в квадрат то получится $answer_4
            ?>
        </div>

        <div class="article">
            <p class="text">
                Место для счатья здесь, время для счастья сейчас! Будьте счастливы, мои дорогие друзья!
        </div>
    </div>

    <?php include 'footer.inc.php' ?>

</div>


</body>
</html>