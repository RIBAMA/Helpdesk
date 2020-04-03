<?php
    function nav_item(string $route, string $lable):string{
        if ($_SERVER["SCRIPT_NAME"]===$route) {
            $class = " class='active'";
        }
        return "<li $class><a href=$route>$lable</a></li>";
    }
    
?>

    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width">
            <title>
                <?php if (isset($title)): ?>
                    <?=$title?>
                <?php else: ?>
                    HelpDesk
                <?php endif; ?>
            </title>
            <link rel="stylesheet" href="css/master.css" type="text/css" media="all">
        </head>
        <body>
            <header class="top-header">
                <nav class="top-nav">
                    <ul>
                    <?php//the functino nav_item yield the nav items and we remove the space for the presentation ?>
                    <?= nav_item("/home.php", "Home")?><?= nav_item("/tickets.php", "Tickets")?>
                    </ul>
                </nav>
            </header>
