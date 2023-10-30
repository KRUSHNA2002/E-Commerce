<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>/assets/user/css/styles.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <body>


        <form action="<?= base_url() ?>admin/login_process" method="post">

            <div class="container" id="logincontainer">
                <div class="row justify-content-center ">
                    <div class="col-md-5 shadow  mt-5 mb-5 p-5 " style="border-radius:30px">
                        <br>
                        <h3 class="text-center">admin Login</h3>
                        <br>
                        <input type="text" name="admin" class="form-control text-center" placeholder="Enter Admin">
                        <br>
                        <input type="password" name="password" class="form-control text-center"
                            placeholder="Enter Password">
                        <br>
                        <div class="text-center">
                            <button class="rounded bg-dark text-white">Login Now</button>
                            <br>
                            <br>
                            <a href="" style="text-decoration:none;color:;">Forgot Password ?</a>
                            <br><br>

                            <a onclick="toggle()" style="text-decoration:none;color:black;cursor:pointer;line-height:50px">New user ,
                                Create a Account <br> <b>Resister Here</b><br></a>

                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </form>

        <form action="<?= base_url() ?>admin/resister_user" method="post">

            <div class="container" id="resistercontainer" style="display:none;">
                <div class="row justify-content-center ">
                    <div class="col-md-5 shadow  mt-5 mb-5 p-5 " style="border-radius:30px">
                        <br>
                        <!-- <h3 class="text-center">User Resister</h3>
                        <br>
                        <input type="text" name="admin" class="form-control text-center" placeholder="Enter Admin Name">
                        <br>
                        <input type="password" name="password" class="form-control text-center"
                            placeholder="Enter Password">
                        <br> -->
                        <h1 class="text-center">Only one admin aceess a details</h1>
                        <div class="text-center">
                            <!-- <button class="rounded bg-dark text-white">Resister</button>
                            <br>
                            <br> -->


                            <a onclick="toggle()" style="text-decoration:none;color:black;cursor:pointer">Already have a
                                acoount ? <br><b>BACK</b><br> </a>

                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </form>

        <script>
            function toggle() {

                $('#resistercontainer').toggle();
                $('#logincontainer').toggle();
            }
        </script>


    </body>

    </html>