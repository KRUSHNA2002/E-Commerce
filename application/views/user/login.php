<form action="<?= base_url() ?>in/login_process" method="post">

    <div class="container" id="logincontainer">
        <div class="row justify-content-center ">
            <div class="col-md-5 shadow  mt-5 mb-5 p-5 " style="border-radius:30px">
                <br>
                <h3 class="text-center">User Login</h3>
                <br>
                <input type="text" name="mobile_email" class="form-control text-center"
                    placeholder="Enter mobile or Email">
                <br>
                <input type="password" name="password" class="form-control text-center" placeholder="Enter Password">
                <br>
                <div class="text-center">
                    <button class="rounded bg-dark text-white">Login Now</button>
                    <br>
                    <br>
                    <a href="" style="text-decoration:none;color:;">Forgot Password ?</a>
                    <br><br>

                    <a onclick="toggle()" style="text-decoration:none;color:black;cursor:pointer">New user , Create a
                        Account <br><br> <button class="p- rounded ">Resister Here</button></a>

                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
</form>

<form action="<?= base_url() ?>in/resister_user" method="post">

    <div class="container" id="resistercontainer" style="display:none;">
        <div class="row justify-content-center ">
            <div class="col-md-5 shadow  mt-5 mb-5 p-5 " style="border-radius:30px">
                <br>
                <h3 class="text-center">User Resister</h3>
                <br>
                <input type="text" name="username" class="form-control text-center" placeholder="Enter your Name">
                <br>
                <input type="text" name="useremail" class="form-control text-center" placeholder="Enter  Email">
                <br>
                <input type="text" name="usermobile" class="form-control text-center" placeholder="Enter  Mobile">
                <br>
                <input type="password" name="password" class="form-control text-center" placeholder="Enter Password">
                <br>
                <div class="text-center">
                    <button class="rounded bg-dark text-white">Resister</button>
                    <br>
                    <br>


                    <a onclick="toggle()" style="text-decoration:none;color:black;cursor:pointer">Already have a acoount
                        ? <br><br> </a>

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