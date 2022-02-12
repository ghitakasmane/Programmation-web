<?php
session_start();
include('home.php');
include('connectbd.php');
 if(isset($_POST['signin']) && !empty($_POST['login']) && !empty($_POST['passwd'])){
 $user=$_POST['login'];
 $pass=$_POST['passwd'];
 $s="select * from utilisateur where login='".$user."' and password='".$pass."'";
 $result=mysqli_query($reg,$s);

 $num=mysqli_num_rows($result);
 if($num==1){
    $row = mysqli_fetch_assoc($result);
     header('location:liste.php');
 }
 else{
     header('location:home.php');
     echo "connection failed ";
 }

}
else{
    echo "<h2> Remplisez tous les champs d'informations </h2>";
}
?>