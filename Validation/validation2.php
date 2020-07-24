<?php

$name = $_POST['name'];

if($name == "Punit Rathi Sir"){
    header('location:../Teachers/PunitRathiSir/PunitRathiSir.html');
}else if($name == "Divyansh Sir"){
    header('location:../Teachers/DivyanshSir/DivyanshSir.html');
}else{
    header('location:../login/login2.php?Login=error');
}
    




?>