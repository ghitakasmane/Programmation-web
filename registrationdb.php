
<?php
session_start();
include('connectbd.php');
if (isset($_POST['signup']) && !empty($_FILES['image'])) {
 $user=$_POST['login'];
 $pass=$_POST['passwd'];
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
 
 $s="select * from utilisateur where login='".$user."'";
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
        $newfilename=explode(".",$file_name);
        move_uploaded_file($file_tmp,"uploads/".$newfilename[0].".".$file_ext);
        echo "Success";
        echo "<script>window.close();</script>";

      }
            $req="insert into utilisateur values ('$user','$pass','$cne','$name','$prenom','$filiere','$file_name')";
             $done=mysqli_query($reg,$req); 
             if($done){
                 echo "Registration sucefull";
                 header('location:liste.php');
                }
                 else {echo "something went wrong";}

            }
    }
    else{echo "<h2> Vous devez remplir tous les champs requis </h2>";}
?>

     
     






















<!--
$file=$_FILES['picture'];     
$fileName = $_FILES['picture']['name'];
 $fileTmpName = $_FILES['picture']['tmp_name'];
 $fileSize = $_FILES['picture']['size'];
 $fileError = $_FILES['picture']['error'];
 $fileType = $_FILES['picture']['type'];
 $fileExtension = explode('.', $fileName);
 $fileActualExtension = strtolower(end($fileExtension));
 $allowedExtensions = array('jpeg', 'jfif', 'png', 'jpg', 'pdf');

 if(in_array($fileActualExtension, $allowedExtensions)) {
        if($fileError === 0){

            if($fileSize < 100000){

                $fileNewName = uniqid('', true) . "." . $fileActualExtension;
                $fileDestination = 'uploads/' . $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);

 else{
                echo 'your file size is too big !';
            }




-->