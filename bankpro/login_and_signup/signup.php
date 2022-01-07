<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<style>
body{
    background: rgba(129, 186, 134, 0.631) linear-gradient(45deg, rgba(34, 213, 195, 0.631), rgb(94, 77, 56), rgb(90, 99, 81)) fixed;
}


</style>
    <div class="columns">
        <div class="column btn-group offset-3">
        <h1 class="card-title text-danger pt-5">CODEWORLD BANK</h1>
        </div>

    </div>


    <form action="\banking/backend/backendsignup.php" method="POST">
    <div class="columns">
       <div class="column offset-3">
       <label for="" class="btn-lg text-primary pt-3">Username</label><br>
       <input type="text" class="form-control" style="width: 32rem;" name="username">
       <label for=""class="btn-lg text-primary">Email</label><br>
       <input type="email" class="form-control"style="width: 32rem;" name="email">
       <label for=""class="btn-lg text-primary">4 Digit pin </label><br>
       <input type="text" class="form-control"style="width: 32rem;" name="pin">
       <label for=""class="btn-lg text-primary">Phone Number</label><br>
       <input type="email" class="form-control"style="width: 32rem;" name="phone_number">
       <label for=""class="btn-lg text-primary">Date of Birth</label><br>
       <input type="date" class="form-control"style="width: 32rem;" name="date_birth">
       <label for=""class="btn-lg text-primary">Address</label><br>
       <input type="text" class="form-control"style="width: 32rem;" name="location">
       <label for=""class="btn-lg text-primary">Password</label><br>
       <input type="text" class="form-control"style="width: 32rem;" name="password">
       <label for=""class="btn-lg text-primary">Repeat Password</label><br>
       <input type="email" class="form-control"style="width: 32rem;" name="password_pass">
       <div class="pt-3">
           <button class="btn btn-success col-2 " type="submit">Sign Up</button>
           <button  class="btn btn-primary col-2 offset-2" role="button">Log In</button>
       </div>



       </div>
    </div>
    
    
    </form>





  <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>  
</body>
</html>