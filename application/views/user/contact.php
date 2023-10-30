
<div class="container-fluid ">
    <hr class="bg-danger  mt-5 p-2">
    <hr class="bg-warning  mt-1 p-2">
    <div class="row mt-3 p-3 text-center">
    <div class=" col-md-12">
        <div class="row" >
        <div class="col-md-4  bg-  p-4 mt-2 text-center" style="box-sizing:border-box;outline:2px solid brown ;outline-offset: -14px">
            <h1 class=""><i class="fa fa-phone bg-warning p-3 " style="font-size:20px;border-radius:50%;;outline:2px solid yellow;outline-offset:4px"></i></h1>
            <h6><?=$contact[0]['contact_name']?></h6>
            <h6><?=$contact[0]['contact_mobile']?></h6>
        </div>

        <div class="col-md-4    2 text-center p-4 mt-2" style="box-sizing:border-box;outline:2px solid brown ;outline-offset: -14px">
            <h1 class=""><i class="	fas fa-envelope bg-warning p-3 " style="font-size:20px;border-radius:50%;outline:2px solid yellow;outline-offset:4px"></i></h1>
            <h6><?=$contact[0]['contact_email']?></h6>

        </div>

        <div class="col-md-4  p-4 mt-2 text-center" style="box-sizing:border-box;outline:2px solid brown ;outline-offset: -14px">
            <h1 class=""><i class="fa fa-address-card bg-warning p-3 " style="font-size:20px;border-radius:50%;outline:2px solid yellow;outline-offset:4px;"></i></h1>
            <h6><?=$contact[0]['contact_add']?></h6>
        </div>
    </div>
</div>
        <div class="col-md-6  mt-5 mb-5 text-center rounded">
            <!-- <i class="fas fa-comment-alt bg-secondary p-3 " style="font-size:200px;border-radius:50%"></i> -->
            <!-- <img src="<?= base_url() ?>uploads/<?= $contact[0]['contact_image'] ?>" class="rounded" width="70%" height="500px" style=""> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120638.06452301095!2d74.67263216241152!3d19.1103091566109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb05d46788921%3A0x6677e92c1a5181b6!2sAhmednagar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1679140936930!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6  mt-5 p-5 mb-5 " >
            <div class="mt-5" style="border:1px solid black;box-shadow:0px 5px 5px 5px;" class="">
               <h2 class="text-center p-4 mt-2">Message</h2>
               <h6 class="p-0 mt-0 mb-0">***************</h6>
                <h3 class="p-4" ><?=$contact[0]['contact_msg']?></h3>
            </div>
        </div> 

    </div>
</div>
</html>