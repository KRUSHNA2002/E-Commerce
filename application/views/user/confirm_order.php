<br>
<br>
<form action="<?= base_url() ?>in/placeorder" method="post">
    <div class="container">
        <div class="row mt-3 mb-5">
            <div class="col-md-6">
                <h4 class="text-center">Order Address,</h4>
                <br>
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <h6>Enter Contry</h6>
                        <input type="text" name="contry" class="form-control">
                    </div>

                    <div class="col-md-6 mb-2">
                        <h6>Enter State</h6>
                        <input type="text" name="state" class="form-control">
                    </div>

                    <div class="col-md-6 mb-2">
                        <h6>Enter Dist</h6>
                        <input type="text" name="dist" class="form-control">
                    </div>

                    <div class="col-md-6 mb-2">
                        <h6>Enter City</h6>
                        <input type="text" name="city" class="form-control">
                    </div>

                    <div class="col-md-6 mb-2">
                        <h6>Enter Village</h6>
                        <input type="text" name="village" class="form-control">
                    </div>

                    <div class="col-md-6 mb-2">
                        <h6>Enter Area</h6>
                        <input type="text" name="area" class="form-control">
                    </div>

                    <div class="col-md-6 mb-2">
                        <h6>Enter LandMark</h6>
                        <input type="text" name="landmark" class="form-control">
                    </div>

                    <div class="col-md-6 mb-2">
                        <h6>Enter Appartment/House NO</h6>
                        <input type="text" name="appartment_house" class="form-control">
                    </div>

                    <div class="col-md-6 mb-2">
                        <h6>Enter Pincode</h6>
                        <input type="text" name="pincode" class="form-control">
                    </div>

                    <div class="col-md-6 mb-2">
                        <h6>Enter Mobile No</h6>
                        <input type="text" name="mobile_no" class="form-control">
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <h4 class="text-center ">Order products,</h4>
                <table class="table table-bordered mt-5 p-3">
                    <?php
                    $ttl = 0;
                    foreach ($cart_list as $key => $row) {
                        ?>
                        <tr>
                            <td>
                                <?= $key + 1 ?>
                            </td>
                            <td>
                                <?= $row['product_name'] ?>
                            </td>
                            <td class="text-end">
                                <?= $row['qty'] ?> qty
                            </td>
                            <td class="text-end">&#8377;
                                <?= $row['product_price'] ?>/-
                            </td>
                            <td class="text-end">&#8377;
                                <?= $row['qty'] * $row['product_price'] ?>/-
                            </td>
                        </tr>

                        <?php
                        $ttl = $ttl + ($row['qty'] * $row['product_price']);
                    }
                    ?>
                    <tr>
                        <td class="text-end" colspan="5">
                            <h3>Total :- &#8377;
                                <?= $ttl ?> /-
                            </h3>
                        </td>
                    </tr>
                </table>
                <br>
                <h4>Payment Option </h4>
                <input class="btn btn-primary" type="radio" name="payment_method" value="online" checked> Online Payment
                <br>
                <input class="btn btn-primary" type="radio" name="payment_method" value="cod"> Cash on Delivery
                <br>
                <br>
            </div>

            <div class="col-md-12 text-center mt-5">
                <button onclick="return confirm('order confirm successfully')"
                    class="btn btn-primary">Placeorder</button>
            </div>
        </div>
    </div>
</form>