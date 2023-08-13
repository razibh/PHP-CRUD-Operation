<!-- <?php
session_start();
require('login.php');
 $sql = "SELECT * FROM login";
   $result= $conn->query($sql);
 if($result){
    while ($data=   mysqli_fetch_assoc($result)){

   
    echo $data['email'];
    echo "<br>";
    echo $data['password'];
    echo "<br>";
    
 }
}

// $email = $_POST['email'];
// $password =$_POST['pass'];
// $address='Mohammadpur';
// $phone='019834534';
// $fname ='Razib';
// $pass='1234';
// if($email==$fname && $password==$pass){

//     $_SESSION['address']=$address;
//     $_SESSION['phone']=$phone;
//     header('location:output.php');
// }
// else{
//     header('location:login.php');
// }




// echo $email;
// echo $password;
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA SHOW</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10 pt-4 mt-4 border border-success">
        <h3 class="text-center p-2 m-2 bg-success text-white">User INformation</h3>
        <?php
session_start();
require('login.php');
 $sql = "SELECT * FROM login";
   $result= $conn->query($sql);
   echo "<table class='table table-success'>
   <tr><th>id</th>
   <th>email</th> <th>password</th> ";
 if($result){
    while ($data=   mysqli_fetch_assoc($result)){

   echo "<tr><td>$id</td>
   <td>$email</td>
   <td>$password</td>
   <td> <span class='btn btn-success'>
    Edit
   </span>
   <td> <span class='btn btn-danger'>
   Delete
   </span> </td></tr>";
    // echo $data['email'];
    // echo "<br>";
    // echo $data['password'];
    // echo "<br>";
    
 }
}
?>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>
</body>
</html>