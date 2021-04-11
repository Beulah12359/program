<?php
session_start();
  include("connection.php");
include("functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

          if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
           {
                 $user_id = random_num(20);
                 $query = "insert into users(user_id,user_name,password) values('$user_id','$user_name','$password')";
                 mysqli_query($con,$query);

                 header("Location: login.php");
                 //die;
           }else
           {
                  echo "please enter some valid information!";
           }
     }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
</head>
<body>

   <style type="text/css">
     #text{
     height: 25px;
border-radius: 5px;
  padding: 4px;
  border: solid thin #aaa;
  width: 100%;
}
#button{
padding: 10px;
width: 100px;
color: white;
background-color: Lightblue;
border: none;
}
#box{
 backgroung-color: grey;
margin: auto;
width: 300px;
padding: 20px;
}


</style>
<div id="box">
  <form method="post">
    <div style="font-size: 20px;margin: 10px;color: black;">Signup</div>
    username:
    <input id="text" type="text" name="user_name"><br><br>
    password:
    <input id="text" type="password" name="password"><br><br>
   <label for="email">Enter your email:</label>
   <input type="email" id="email" name="email"><br><br>
<label for="phone">Enter your phone number:</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br><br>
Select your gender:
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br><br>
 date of birth:
   <input type="date" id="birthday" name="birthday"><br><br>

<input id="button" type="submit" value="Signup"><br><br>
  </form>
 </div>

</body>
</html>