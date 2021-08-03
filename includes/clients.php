<?php

<<<<<<< HEAD
=======

>>>>>>> ce7ce54 (adding a region to the references)
require_once ("../admin/includes/functions.php");
require_once ("../admin/includes/new_config.php");
require_once ("../admin/includes/database.php");
require_once ("../admin/includes/db_object.php");
<<<<<<< HEAD
require_once ("../admin/includes/reference.php");
require_once ("../admin/includes/university.php");
=======
require_once ("../admin/includes/user.php");
require_once ("../admin/includes/country.php");
require_once ("../admin/includes/comment.php");
require_once ("../admin/includes/reference.php");
require_once ("../admin/includes/university.php");
require_once ("../admin/includes/session.php");
>>>>>>> ce7ce54 (adding a region to the references)


if (isset($_POST['send_data'])) {



    $_SESSION['message_client'] = "Murojaatingiz Yuborildi! Tez orada konsultantlarimiz siz bilan bog'lanishadi";
    $_SESSION['msg_type_client'] = "success";
    $_SESSION['formSubmitted'] = true;
    $formSubmitted = true;

    echo $_SESSION['formSubmitted'];

    $reference = new Reference();
    $reference->name = $_POST['name'];
    $reference->phone = $_POST['telefon'];
    $reference->target= $_POST['country'];
<<<<<<< HEAD
=======
    $reference->origin= $_POST['origin'];
>>>>>>> ce7ce54 (adding a region to the references)
    $reference->date= date("Y-m-d H:i");

    $reference->save();

    redirect("../index.php");
}
else{
    redirect("../index.php");

}
