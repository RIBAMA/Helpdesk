<?php
function connexobjet($base,$param) {
    global $error;
    require_once ($param.".inc.php");
    $idcom = new mysqli(HOST,USER,PASS,$base);
    if (!$idcom) {
        echo "<script type=text/javascript>";
        echo "alert('Connexion impossible à la base')</script>";
        $error = "<div class='alert-danger'>
                            Connexion impossible à la base
                        </div>";
        exit();
    }
    return $idcom;
}
function login ($idcom) {
    global $error;
    $request="SELECT * FROM admin";
    $result=$idcom->query($request);
    if(!$result)
        $error = "<div class='alert-danger'>
        we have an issue while reading database :(
            </div>";
    else {
        $password = null;
        $login = null;
        while ($row = $result->fetch_array(MYSQLI_NUM)) {
            $id = $row[0];
            $login = $row[1];
            $password = $row[3];
        }
        if ( $_POST['userName'] && $_POST['userPassword'] ) {

            if (  $_POST['userName'] === $pseudo && password_verify ( $_POST['userPassword'] , $password ) ){
            }
            if (  $_POST['userName'] == $login &&  $_POST['userPassword'] == $password ){
                $_SESSION['connected'] = 1;
                $_SESSION['login'] = $login;
                $_SESSION['id'] = $id;

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
        $result->free();
    }
}
