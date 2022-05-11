<?php
   require "../config/connection.php";

   if(isset($_POST["btn"])){
       $post_firstname = $_POST["firstname"];
       $post_lastname = $_POST["lastname"];
       $post_sex = $_POST["sex"];
       $post_email = $_POST["email"];
       $post_username = $_POST["username"];
       $post_password = $_POST["password"];
       if($post_firstname == "" || $post_lastname == "" || $post_sex == "" || $post_email== "" || $post_username =="" || $post_password == ""){
           echo '<script> alert("Make sure all fields are filled") </script>';
       }
       else{
        $query = mysqli_Query($conn, 'INSERT INTO registration (username, First_name, Last_name, email, sex, password) VALUE("'.$post_username.'","'.$post_firstname.'", "'.$post_lastname.'","'.$post_email.'","'.$post_sex.'","'.$post_password.'") ');
        if($query){
            echo '<script> alert("post submitted") </script>';
        }
       }
    

   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
  <div class="form"> 

  <h2>Coders Hub</h2>
  <form method="POST" action="">
      <div class="content">
          <input type="text" name="firstname" id="" placeholder="First Name">
          <input type="text" name="lastname" id="" placeholder="Last Name">
          <input type="text" name="sex" id="" placeholder="male">
          <input type="email" name="email" id="" placeholder="Email">
          <input type="text" name="username" id="" placeholder="@xcoder12">
          <input type="password" name="password" id="" placeholder="@235ebube">
      </div>  
      
      <button type="submit" name="btn">SIGN UP</button>
  </form>




  </div>
  
</body>
</html>