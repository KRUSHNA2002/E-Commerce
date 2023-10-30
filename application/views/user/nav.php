<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>/assets/user/css/styles.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= base_url() ?>">Shop Now</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            foreach ($cat_list as $key => $row) {
                                ?>

                                <li><a class="nav-link"
                                        href="<?= base_url() ?>in/view_product?category_id=<?= $row['category_id'] ?>"><?=
                                                $row['category_name'] ?></a>
                                </li>
                                <?php
                            }
                            ?>
                            <!-- <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="<?= base_url() ?>/in/contact">Contact Us</a>
                     </li>
                </ul>
                <?php
                if (!isset($_SESSION['user_tbl_id'])) {
                    ?>
                    <a href="<?= base_url() ?>/in/login" style="text-decoration:none;color:black;">Login / SignUp</a>
                    <?php
                }
                if (isset($_SESSION['user_tbl_id'])) {
                    ?>
                    <form class="d-flex" action="<?= base_url() ?>in/cart">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">
                                <?= $cart_qty ?>
                            </span>
                        </button>
                    </form>

                    <a href="<?= base_url() ?>/in/logout"
                        style="text-decoration:none;color:black;margin-left:30px;font-weight:bold;"
                        onclick="return confirm('are you sure')"> Log Out</a>
                    <?php
                }
                ?>
                

        </div>
    </nav>