<!DOCTYPE html>
<html>
    <head>
        <title>DOS Example</title>
    </head>
    <body>
        <p>
            Hello. Today is <?= date('l \t\h\e jS') ?>.
        </p>
        <h4>
                <?php
                    echo $_SERVER['HTTP_USER_AGENT'];
                ?>
        </h4>
    </body>
</html>
