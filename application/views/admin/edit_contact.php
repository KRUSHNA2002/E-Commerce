<form action="save_edited_contact" method="post" enctype="multipart/form-data">
<div class="container-fluid bg-white p-4">
  <div class="row">
     <div class="col-md-12">
          <h1>Contact Form</h1>
     </div>
          <input type="hidden" name="contact_id" class="form-control" value="<?=$contact[0]['contact_id']?>">
     <div class="mt-2 col-md-6">
          <h6>Name</h6>
          <input type="text" name="contact_name" class="form-control" value="<?=$contact[0]['contact_name']?>">
     </div>
     <div class="mt-2 col-md-6">
          <h6>Mobile</h6>
          <input type="text" name="contact_mobile" class="form-control" value="<?=$contact[0]['contact_mobile']?>">
     </div>
     <div class="mt-2 col-md-6">
          <h6>Email</h6>
          <input type="text" name="contact_email" class="form-control" value="<?=$contact[0]['contact_email']?>">
     </div>
     <div class="mt-2 col-md-6">
          <h6>Address</h6>
          <input type="text" name="contact_add" class="form-control" value="<?=$contact[0]['contact_add']?>">
     </div>

     <div class="mt-2 col-md-12">
          <h6>Message</h6>
          <input type="text" name="contact_msg" class="form-control" value="<?=$contact[0]['contact_msg']?>">
     </div>
     <div class="mt-2 col-md-12">
          <h6>Message</h6>
          <input type="file" name="contact_image" class="form-control" >
          <!-- <h6>value="<?=$contact[0]['contact_image']?>"</h6> -->
     </div>
     <div class="mt-4 col-md-12 text-center">
          <button type="submit" class="bg-success p-2 rounded"> update info </button>
     </div>
  </div>
</div>
</form>

