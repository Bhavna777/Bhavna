<?php

$name = $_POST['name'];

if($name == "Manvi"){
    header('location:../Friends/Manvi/Manvi.html');
}else if($name == "Shalu"){
    header('location:../Friends/Shalu/Shalu.html');
}else if($name == "Aayushi"){
    header('location:../Friends/Aayushi/Aayushi.html');
}else if($name == "Saloni"){
    header('location:../Friends/Saloni/Saloni.html');
}else if($name == "Abhishek"){
    header('location:../Friends/Abhishek/Abhishek.html');
}else if($name == "Ashish"){
    header('location:../Friends/Ashish/Ashish.html');
}else{
    header('location:../Login/login3.php?Login=error');
}
    


?>