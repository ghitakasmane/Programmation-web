<?php
session_start();
$bdd= "phps5"; // Base de données
 $host= "127.0.0.1";
 $user= "root"; // Utilisateur
 $pass= "";
 $reg=mysqli_connect($host,$user,$pass,$bdd) or die ("Impossible de se connecter à la base de données");
 $s="select * from utilisateur";
 $result=mysqli_query($reg,$s);

 ?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="form2.css">

 <link rel="stylesheet" type="text/css" href="main.css">
  <ul>
  <li> <a href="deconnexion.php" >Déconnexion </a></li>
  <li> <a href="liste.php" > Actualiser </a> </li>
 <li><button class="open-button" onclick="openForm()"> Ajouter un eleve </button></li>
 
</ul>
</head>  
<body>

<div class="container-table100">

<h1 align=center style="color:white"> LISTE DES ELEVES </h1> 
<table align=center border="5px" >
<div class="limiter">
<tr>
   <th> CNE </th>
   <th> NOM </th>
   <th> PRENOM </th>
   <th> FILIERE </th>
   <th> Image </th>
   </tr>
   
<?php   // LOOP TILL END OF DATA 
  while($rows=$result->fetch_assoc())
    {
 ?>
  <tr>
    <td class="column1"><?php echo $rows['CNE'];?> </td>
    <td class="column2"><?php echo $rows['nom'];?></td>
    <td class="column3"><?php echo $rows['prenom'];?></td>
    <td class="column4"><?php echo $rows['Filiére'];?></td>
    <td class="column5"><img src=<?php echo "uploads/".$rows['image']; ?> alt="student_picture" height="100" width="100"></td>
           
  </tr>
  <?php
   }
?>
 
 </div>
</table>
  </div>
  

    
  <table  align="center">
<div class="form-popup" id="myForm">
<form action="" method="post"  enctype="multipart/form-data" class="form-container">
<div align=center>
NOM          :
<input type="text" name="name" value=<?php $name ?>><br>
</div>
<br>
<div align=center>
Prenom: 
<input type="text" name="prenom" value=<?php $prenom ?>><br>
</div>
<br>
<div align=center>
FILIERE:
 <input type="text" name="filiere" value=<?php $filiere ?>><br>
</div>
<br>
<div align=center>
CNE    :
<input type="text" name="cne" value=<?php $cne ?>><br>
</div>
<br>
<div align=center>
<input type="file" name="image" > 
</div>
<br>
<div class="ghost" align=center>
<button type="submit" name="ajout" value="Ajouter un eleve " class="btn">Ajout élève </button>
</div>
<br>
<div class="ghost" align=center>
<button type="button"  class="btncancel" onclick="closeForm()">Close</button>
  </div>
<br>

</form>
</div>
</table>

<script language="javascript"> 
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

</script>
</body>
</html>
<?php

if (isset($_POST['ajout']) && !empty($_FILES['image'])) {
     $cne=$_POST['cne'];
     $name=$_POST['name'];
     $prenom=$_POST['prenom'];
     $filiere=$_POST['filiere'];
     $errors= array();
          $file_name = $_FILES['image']['name'];
          $file_size =$_FILES['image']['size'];
          $file_tmp =$_FILES['image']['tmp_name'];
          $file_type=$_FILES['image']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
          $expensions= array("jpeg","jpg","png","jfif");
     
     $s="select * from utilisateur where CNE='".$cne."'";
     $requete=mysqli_query($reg,$s);
     $num=mysqli_num_rows($requete);
      if($num==1){
          echo "login already taken";
      }
      else{
    
        if(file_exists($file_name)) {
            echo "Sorry, file already exists.";
            }
          if(in_array($file_ext,$expensions)=== false){
             $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }
    
          if($file_size > 2097152){
             $errors[]='File size must be excately 2 MB';
          }
    
          if(empty($errors)==true){
          
            move_uploaded_file($file_tmp,"uploads/".$file_name);
            echo "Success";
            
    
          }
                $req="insert into utilisateur('CNE','nom','prenom','Filiére','image') values ('$cne','$name','$prenom','$filiere','$file_name')";
                 $done=mysqli_query($reg,$req); 
                 if($done){
                     echo "Student Added  sucefully";
                     header('location:liste.php');
                    }
                     else {echo "something went wrong";}
    
                }
        }
        else{echo "<h2> Vous devez remplir tous les champs requis </h2>";}
    ?>