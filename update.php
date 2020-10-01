<?php require "config/config.php"; ?> 
 <?php
 

 
 if(isset($_GET['upd'])){
    $id =$_GET['upd'];
    $query = " SELECT   * FROM user WHERE id=$id";
    $fire = mysqli_query($con,$query) or die ("can not fetch data.".mysqli_error($con));
    $user = mysqli_fetch_assoc($fire);
    //* echo $user ['fullname'];
 }

         ?>
<!---Update Data--->
<?php

if(isset($_POST['btnupdate'])){

   $fullname = $_POST['Fullname'];
      $email = $_POST['Email'];
      $username = $_POST['username'];
   $password = md5($_POST['Password']);


  $query = "UPDATE user SET fullname = '$fullname',username = '$username', email = '$email', password = '$password'  WHERE id=$id ";
  $fire = mysqli_query($con,$query) or die ("can not update data..".mysqli_error($con));

  if($fire) header ("Location:crud.php");
   //*echo "Data Updated Successfully";
}




         ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>

<body style="background: linear-gradient(to right,  #5c7909,#fcb045,#22c1c3);">


     <div class="container">
       <div class="row">
       <div class="col-md-4">
       
         
                           <!---Update form--->
                            
             <h3>Update Data</h3>  
                   <hr>
                     <form  name="signup" id= "signup"action="<?php $_SERVER ['PHP_SELF'] ?>" method="POST">
                        <div class= "form-group">
                          <label for="Fullname">Fullname</label>
                             <input  value="<?php echo $user['fullname']?>"   name="Fullname" id="Fullname" type="text" class="form-control" placeholder="Fullname">
                             </div>

                             <div class= "form-group">
                          <label for="Email">Email</label>
                             <input  value="<?php echo $user['email']?>" name="Email" id="Email" type="Email" class="form-control" placeholder="Email">
                             </div>

                             <div class= "form-group">
                          <label for="Username">Username</label>
                             <input value="<?php echo $user['username']?>" name="username" id="username"  type="text" class="form-control" placeholder="username">
                             </div>
                                 

                             <div class= "form-group">
                          <label for="Password"> New Password</label>
                             <input  name="Password" id="Password" type="password" class="form-control" placeholder="Enter New password ">
                             </div>

                             <div class= "form-group">
                             <button   name="btnupdate"  id="btnupdate" class= "btn btn-primary btn-block">Update</button>
                             </div>
                             </form>
                             
                            
       </div>

       <div class="col-sm-6">
       
       
       </div>

                       </div>
               </div>
    </div>                   
        </div>
       </div>
            
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
    