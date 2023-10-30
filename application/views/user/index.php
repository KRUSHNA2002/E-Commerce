<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-warning">
            <h1 class="display-4 fw-bolder " >Shop in style</h1>
            <img src="<?= base_url() ?>uploads/arrow1.png.png" width="300px" height="150px"  >
            <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>

        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
            foreach ($new_products as $key => $row) {
                ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            <?php
                            echo dis($row['product_price'], $row['duplicate_price']);
                            ?>
                            % Off
                        </div>
                        <img class="card-img-top" src="<?= base_url() ?>uploads/<?= $row['product_image'] ?>" width="100%"
                            height="300px" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">
                                    <?= $row['product_name'] ?>
                                </h5>
                                <!-- Product price-->
                                &#8377;
                                <?= $row['product_price'] ?> -<strike> &#8377;
                                    <?= $row['duplicate_price'] ?>
                                </strike>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="<?= base_url() ?>in/product_detail/<?= $row['product_id'] ?>">View options</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    </div>
    </div>
</section>