<br>
<br>
<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <h4>User Cart</h4>
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Delete</th>
                    <th>SN</th>
                    <th>IMAGE</th>
                    <th>NAME</th>
                    <th>QTY</th>
                    <th>RATE</th>
                    <th>TOTAL</th>
                </tr>

                <?php
                foreach ($cart_list as $key => $row) {
                    ?>
                    <tr>
                        <td>
                            <a href="<?= base_url() ?>/in/delete/<?= $row['user_cart_id'] ?>">
                                <button>Delete</button>
                            </a>
                        </td>
                        <td>
                            <?= $key + 1 ?>
                        </td>
                        <td>
                            <img src="<?= base_url() ?>uploads/<?= $row['product_image'] ?>" width="100px" height="100px"
                                alt="">
                        </td>
                        <td>
                            <?= $row['product_name'] ?>
                        </td>
                        <td width="1%" style="white-space:nowrap">

                            <button class="btn btn-primary btn-sm" onclick="dec_qty(<?= $row['user_cart_id'] ?>)">-</button>

                            <input type="number" disabled style="width:50px" id="my_inp_id<?= $row['user_cart_id'] ?>"
                                value="<?= $row['qty'] ?>" class="text-center">

                            <button class="btn btn-primary btn-sm" onclick="inc_qty(<?= $row['user_cart_id'] ?>)">+</button>

                        </td>
                        <td>
                            <input type="hidden" id="rate_id<?= $row['user_cart_id'] ?>"
                                value="<?= $row['product_price'] ?>">
                            <?= $row['product_price'] ?>
                        </td>
                        <td id="row_ttl<?= $row['user_cart_id'] ?>">
                            <?= $row['qty'] * $row['product_price'] ?>
                        </td>
                    </tr>

                    <?php
                }
                ?>
            </table>
            <br>
            <div class="text-center mb-4">
                <a href="<?= base_url() ?>in/confirm_order">
                    <button class="btn btn-primary">confirm order</button>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    function dec_qty(user_cart_id) {
        //alert(user_cart_id);
        $.ajax({
            url: '<?= base_url() ?>in/dec_qty',
            type: 'POST',
            dataType: 'json',
            data: { 'user_cart_id': user_cart_id },
        })
            .done(function (res) {
                console.log(res);
                // console.log("success", res['data']['qty']);
                $("#my_inp_id" + user_cart_id).val(res['data']['qty']);

                var rate = $("#rate_id" + user_cart_id).val();

                var ttl = rate * res['data']['qty'];

                $("#row_ttl" + user_cart_id).html(ttl);

            })
    }

    function inc_qty(user_cart_id) {
        // alert(user_cart_id);
        //var inp=document.getElementById("my_inp_id"+user_cart_id);
        //console.log(inp);
        $.ajax({
            url: '<?= base_url() ?>in/inc_qty',
            type: 'POST',
            dataType: 'json',
            data: { 'user_cart_id': user_cart_id }
        })
            .done(function (res) {
                //console.log(res);
                $("#my_inp_id" + user_cart_id).val(res['data']['qty']);

                var rate = $("#rate_id" + user_cart_id).val();

                var ttl = rate * res['data']['qty'];

                $("#row_ttl" + user_cart_id).html(ttl);


            })
    }
</script>