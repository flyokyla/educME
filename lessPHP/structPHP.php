<!DOCTYPE html>

<html lang="ru">
    
<head>
    <title>СТРУКТУРА PHP</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="structPHP.css"/>
    <meta name="description" content="База по php" />
    <meta name="keywords" content="php" />
    <?php
    require("../components/nav1.php");
    ?>
    <header>
        <h1>ОСНОВЫ PHP</h1>
    </header>

    <main>
        <dl>
            <fieldset>
                <legend><dt><h2>ТЕСТОВЫЕ САЙТЫ</h2></dt></legend>
                <dd>
                    <p><a href="123.php">Hello World!</a></p>
                </dd>
            </fieldset>
            <fieldset>
                <legend><dt><h2>ОСНОВНЫЕ ПОНЯТИЯ</h2></dt></legend>
                <dd>
                    <p>// - комментарий</p>
                    <pre> <code>&lt;?php
              // код на php внутри .html или .php   
              require('footer.php'); // - вставка php кода из файла; - так можно разбить весь код на несколько файлов     
?&gt;</code></pre>
                </dd>
            </fieldset>
        </dl>

    </main>





    <footer>

    </footer>
</body>

</html>