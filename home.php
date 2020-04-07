<?php
$title="Home";
$faveIcon="rsc/img/fav_home.png";
include 'header.php';
$error = null;
$pseudo = 'John';
$password = '$2y$10$DVmY2HXaXaU4QAIGsSrHVOxbh8Byt5WeM/WwVZyoK8nIkzcRGFqVS';
if ( $_SESSION['connected'] ) {
    header ("HTTP/1.1 301 Moved Permanently");
    header ("Location: /tickets.php?reconnection=1");
    exit();
}
if ( $_GET['notConnected'] ) {
   $error = "<div class='alert-danger'>
                You must be connected to become allowed on tickets
            </div>";
    unset ( $_GET['notConnected']);
}
if ( $_POST['userName'] && $_POST['userPassword'] ) {

    if (  $_POST['userName'] === $pseudo && password_verify ( $_POST['userPassword'] , $password ) ){
        $_SESSION['connected'] = 1;
        header ("HTTP/1.1 301 Moved Permanently");
        header ("Location: /tickets.php");
        exit();
    } 
    else {
        $error = "  <div class='alert-danger'>
                        One or more identifier(s) are wrong(s)!
                    </div>";
    }
}
?>
    <div class="main">
        <div class="center">
            <?php if ( $error ) { echo $error; } ?>
            <form class="login" action="" method="post" accept-charset="utf-8">
                <div class="input">
                    <label for="userName">Name</label>
                    <input type="text" name="userName" id="userName" value="">
                </div>
                <div class="input2">
                    <label for="userPassword">Password</label>
                    <input type="password" name="userPassword" id="userPassword" value="">
                </div>
                <input type="submit" name="send" id="send" value="Login">
            </form>
        </div>
    </div>    
<?php
include 'footer.php';
?>
