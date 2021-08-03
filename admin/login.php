<?php

require_once ("includes/header.php");

if ($session->is_signed_in())
{
    redirect("index.php");
}


if (isset($_POST['submit']))
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $user = User::verify_user($username,$password);

    if ($user)
    {


        $session->login($user);
        redirect("index.php");


    }
    else{
        $message = "Login yoki Parol noto'g'ri";
    }



}else{

    $message = "";

}







?>
<div class="col-md-4 col-md-offset-3">

    <h4 class="bg-danger"><?php echo $message; ?></h4>

    <form id="login-id" action="" method="post">

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" >

        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">

        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </div>


    </form>


</div>


