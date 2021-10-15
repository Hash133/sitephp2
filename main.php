<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>PHP site</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="flex-container">
        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>

        </div>
        <div class="aboutme">
            <h1><?php echo $p ?></h1>
            <div class="data">
                <div class="Img">
                    <?php
                    echo '<img src="/img/php.jpg"';
                    ?>
                </div>
                <div class="fullname">
                    <p> my name
                        <?php echo $name, ' ', $surname . '<br>';
                        echo 'city', ' ', $city; ?>
                    </p>

                    <p> My
                        <?php echo $age; ?>
                        age </p>
                    <p> Мы научились создавать перменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                <?php include 'knowledge.inc.php'; ?>
                <?php
                    echo $a, ' ', $b, ' ', $c;
                    ?> <br>

                <?php
                    $a = 10;
                    $b = 20;
                    $c = $a + $b;
                    echo $c;
                    ?> <br>
                        <?php
                        echo $d;
                        ?>
            </div>
            <div class="article">
                <p class="text">
                    Word processors (StarOffice Writer, Microsoft Word, Abiword, etc.) In most cases, not suitable for editing
                    PHP files. If you still want to use any of them for a test script, be sure to save the file as
                    plain text, otherwise PHP will not be able to read and run your script.
                </p>
            </div>
        </div>
        <?php include 'footet.inc.php'; ?>
