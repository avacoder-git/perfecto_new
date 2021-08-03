
<!--<main>-->
<div class="back-blue overflow-hidden">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <img src="image/Group%2052.png" class="" width="100%" alt="">
        </div>
    </div>
</div>

<div class="margin1"></div>

<div class="loader">

    <div class="loader-anim">
        <div class="rect"></div>
    </div>

</div>

<?php


if(isset($_SESSION['formSubmitted']) && $_SESSION['formSubmitted'] === true) {
    echo "<script>$('#zayavka').modal('show')</script>"; // Show modal
    unset($_SESSION['formSubmitted']); // IMPORTANT - this will unset the value of $_SESSION['formSubmitted'] and will make the value equal to null
}

?>

<!-- Modal -->
<div class="modal fade" id="zayavka" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="includes/clients.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php  echo $nav[$lang]['send']?> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-3">
                    <?php
                    if (isset($_SESSION['message_client'])):
                        ?>

                        <div class="alert  mt-3  alert-<?=$_SESSION['msg_type_client']?>">
                            <h3 class="text-center">
                                <?php
                                echo "<script>$('#zayavka').modal('show')</script>";
                                echo $_SESSION['message_client'];
                                unset($_SESSION['message_client']);

                                ?>
                            </h3>
                        </div>
                    <?php
                    endif
                    ?>
                    <div class="card-body">
                        <input type="text" class="form-control rounded-pill" name="name" placeholder="<?php  echo $nav[$lang]['name']?> " required>
<<<<<<< HEAD
=======
                      
>>>>>>> ce7ce54 (adding a region to the references)
                        <input type="tel" class="form-control mt-3 rounded-pill" name="telefon" placeholder="<?php  echo $nav[$lang]['tel']?> " required>
                        <select name="country" class="form-control mt-3" id="" required>
                            <option value="0"><?php  echo $nav[$lang]['country']?> </option>
                            <option value="Rossiya">Rossiya</option>
                            <option value="Turkiya">Turkiya</option>
                            <option value="Qozogiston">Qozog'iston</option>
                            <option value="Tojikiston">Tojikiston</option>
                            <option value="Avstriya">Avstriya</option>
                            <option value="Kipr">Kipr</option>
                            <option value="Boshqa">Boshqa</option>
                        </select>
<<<<<<< HEAD
=======
                        <select name="origin" class="form-control mt-3" id="" required>
                            <option value="0"><?php  echo $nav[$lang]['origin']?> </option>
                                <option value="Toshkent shahri"><?php  echo $nav[$lang]['tcity']?> </option>
                                <option value="Toshkent viloyati"><?php  echo $nav[$lang]['tregion']?> </option>
                                <option value="Samarqand"><?php  echo $nav[$lang]['samarkand']?> </option>
                                <option value="Farg'ona"><?php  echo $nav[$lang]['fergana']?> </option>
                                <option value="Andijon"><?php  echo $nav[$lang]['andijan']?> </option>
                                <option value="Namangan"><?php  echo $nav[$lang]['namangan']?> </option>
                                <option value="Sirdaryo"><?php  echo $nav[$lang]['syrdarya']?> </option>
                                <option value="Jizzax"><?php  echo $nav[$lang]['jizzakh']?> </option>
                                <option value="Buxoro"><?php  echo $nav[$lang]['bukhara']?> </option>
                                <option value="Navoiy"><?php  echo $nav[$lang]['navai']?> </option>
                                <option value="Qashqadaryo"><?php  echo $nav[$lang]['kashka']?> </option>
                                <option value="Surxondaryo"><?php  echo $nav[$lang]['surxon']?> </option>
                                <option value="Xorazm"><?php  echo $nav[$lang]['kharezm']?> </option>
                                <option value="Qoraqalpog'iston"><?php  echo $nav[$lang]['karakalpak']?> </option>
                                <option value="Boshqa"><?php  echo $nav[$lang]['other']?> </option>
                        </select>
>>>>>>> ce7ce54 (adding a region to the references)
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php  echo $nav[$lang]['close']?> </button>
                    <button type="submit" name="send_data" class="btn btn-primary"><?php  echo $nav[$lang]['send']?> </button>
                </div>
            </form>
        </div>
    </div>
</div>
