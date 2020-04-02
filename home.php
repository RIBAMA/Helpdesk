<?php
$title="Home";
include 'header.php';
?>
    <div class="main">
        <div class="center">
            <form class="login" action="home.php" method="post" accept-charset="utf-8">
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
