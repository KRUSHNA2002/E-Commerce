<div class="container">
  <div class="row ">
    <div class="col-md-6 mb-5 mt-5">
      <img src="<?= base_url() ?>uploads/<?= $product_det[0]['product_image'] ?>" width="100%">
    </div>
    <div class="col-md-6  mb-5 mt-5">
      <h3>
        <?= $product_det[0]['product_name'] ?>
      </h3>

      <p> &#8377;
        <?= $product_det[0]['product_price'] ?> <strike> &#8377;
          <?= $product_det[0]['duplicate_price'] ?>
        </strike><span class="text-success">
          <?php
          echo dis($product_det[0]['product_price'], $product_det[0]['duplicate_price']);
          ?>
          % Off
        </span>
      </p>
      <h5>
        <?= $product_det[0]['product_details'] ?>
      </h5>
      <h5>
        <?= $product_det[0]['product_color'] ?>
      </h5>

      <?php
      if (!isset($cart[0])) {
        ?>
        <a href="<?= base_url() ?>in/add_to_cart/<?= $product_det[0]['product_id'] ?>">
          <button class="btn btn-primary ">Add to Cart</button>
        </a>
        <?php
      } else {

        echo "Added in Cart";
        ?>
        <!-- <button class="btn btn-primary btn-sm">+</button>
             <input type="number" style="width:50px">
             <button class="btn btn-primary btn-sm">-</button> -->


        <?php

      }
      ?>

    </div>
  </div>
</div>