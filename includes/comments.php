<div class="my-5 container-fluid position-relative" id="otziv">

    <div class="row justify-content-center my-4">
        <div class="home-text text-center main-color font-weight-bold"><?php  echo $nav[$lang]['xursand']?></div>
    </div>
    <div class="container p-0  w-100">
        <div class="owl-carousel  owl-theme p-0 m-0"  id="owl-demo1">
            <?php

            $students = Comment::find_all();
<<<<<<< HEAD

            foreach ($students as $student) :
=======
            foreach ($students as $student) :

>>>>>>> ce7ce54 (adding a region to the references)
                ?>
                <div class="item">
                    <div class=" admitted pt-4">
                        <div class="rounded-circle align-items-center">
                            <img src="admin/<?php echo $student->picture_path() ?>" class="card-img" height="100%" alt="">
                            <div class="card-img-overlay p-0">
<<<<<<< HEAD
                                <button type="button" data-toggle="modal" data-target="#student_<?php echo  $student->id ?>">
=======
                                <button type="button" data-toggle="modal" class="modalButton" data-name="<?php echo $student->link ?>" data-target="#video">
>>>>>>> ce7ce54 (adding a region to the references)
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="title-text text-center t"><?php echo  $student->name ?></div>
                            <div class="main-text text-center t"><?php echo  $student->university ?></div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
=======

>>>>>>> ce7ce54 (adding a region to the references)
            <?php
            endforeach;
            ?>
        </div>


<<<<<<< HEAD



        <?php


        foreach ($students as $student):

            ?>


            <div class="modal fade students bd-example-modal-lg" id="student_<?php echo $student->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <?php echo $student->link ?>
=======
            <div class="modal fade students bd-example-modal-lg" tabindex="-1" id="video" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body1">
>>>>>>> ce7ce54 (adding a region to the references)
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        <?php
        endforeach;
        ?>
=======
>>>>>>> ce7ce54 (adding a region to the references)
    </div></div>
