<!DOCTYPE html>
<html>
    <head>
        <title> NEWSPORTAL</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel= "stylesheet" type ="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
        <meta charset="utf-8">

    </head>
    <body>

        <nav class="one">
            <ul class="topmenu">
                <li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
                    <ul class="submenu">
                        <?php
                        Controller::AllCategory();
                        ?>
                    </ul>
                </li>
                <li><a href="testError">Info</a></li>
                <li><a href="./">Stardileht</a></li>
                <li><a href="registerForm">Register</a></li>
                <div class="pull-right">
                    <li>
                        <from action="search">
                            <input type="text" name="otsi">
                            <input type="submit" value="otsi">
                        </from>
                    </li>
                </div>
            </ul>			
        </nav>
        <section>
            <div class = 'divBox'>
                <?php
                if (isset($content)) {
                    echo $content;
                } else {
                    echo '<h1>Content is gone!</h1>';
                }
                ?>
            </div>
        </section>
        <hr>
        <p style="display:block; text-align:center;">2021 year</p>
    </body>
</html>