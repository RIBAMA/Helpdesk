<?php
session_start();
if ( empty ( $_SESSION['connected'] ) ) {
    header ("HTTP/1.1 301 Moved Permanently");
    header ("Location: /home.php?notConnected=true");
    exit();
}
else {
    $info =     "<div class='alert-info'>
                    Bonjour <?= login ?>, :) Vous etes bien connecte!
                </div>";
}
if ( $_GET['reconnection'] ) {
    $error =    "<div class='alert-danger'>
                    You're now connected. Log out if you want to login again
                </div>";
}
$title="Tickets";
$faveIcon="rsc/img/fav_submit.png";
require_once 'header.php';
?>
    <div class="main">
        <div class="center">
            <?php if ( $error ) { echo $error; } ?>
            <?php if ( $info ) { echo $info; } ?>
            <form action="tickets.php" method="post" accept-charset="utf-8">
                <div class="input">
                    <label for="object">Object</label>
                    <input type="text" name="userName" id="userName" value=""
                    placeholder="please write the object of the ticket" required checked>
                </div>
                <div class="input2">
                    <label for="dateDay">Date</label>
                    <input type="date" name="dateDay" id="dateDay"
                    value="" required/>
                </div>
                <div class="input3">
                    <label for="timeHour">Time</label>
                    <input type="time" name="timeHour" id="timeHour"
                    value="" required/>
                </div>
                <div class="input4">
                    <label id="lbDescription" for="description">Description</label>
                    <textarea name="description" id="description" rows="5" placeholder="write a minimal description off the problem"></textarea>
                </div>

                <input type="submit" name="send" id="send" value="Open a ticket">
                <input type="reset" name="cancel" id="cancel" value="Cancel">
                
            </form>
        </div>
    </div>    
<?php
require_once 'footer.php';
?>
