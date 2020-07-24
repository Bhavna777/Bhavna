<?php

$name = $_POST['name'];

if($name == "Papa"){
    header('location:../Family/Papa/Papa.html');
}else if($name == "Mummy"){
    header('location:../Family/Mummy/Mummy.html');
}else if($name == "Ritu Didi"){
    header('location:../Family/RituDidi/RituDidi.html');
}else if($name == "Ankit Bhaiya"){
    header('location:../Family/AnkitBhaiya/AnkitBhaiya.html');
}else if($name == "Atul Bhaiya"){
    header('location:../Family/AtulBhaiya/AtulBhaiya.html');
}else{
    header('location:../Login/login1.php?Login=error');
}
    


?>