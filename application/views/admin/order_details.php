<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="html2pdf.bundle.min.js"></script>
<button id="download-button" onclick="generatePDF()">Download as PDF</button>

<div id="invoice">
<br>
<div class="container bg-white ">
    <div class="row">
        <div class="col-md-5 p-4 table-responsive">
            <!-- echo "<pre>"; -->
            <!-- <?php print_r($order_det) ?> -->

            <!-- <h3>Order Details</h3> -->
            <table class="table table-bordered">
                <tr>
                    <th colspan="2" class="text-center bg-info"><big>Order Details</big></th>
                </tr>
                <tr>
                    <th>Customer Name :-</th>
                    <th>
                        <?= $order_det[0]['customer_name'] ?>
                    </th>
                </tr>
                <tr>
                    <th>Mobile No :-</th>
                    <th>
                        <?= $order_det[0]['mobile_no'] ?>
                    </th>

                </tr>
                <tr>
                    <th>Address :-</th>
                    <th>
                        <?= $order_det[0]['city'] ?> ,
                        <?= $order_det[0]['village'] ?> ,
                        <?= $order_det[0]['pincode'] ?>
                    </th>

                </tr>
                <tr>
                    <th>Payment Method :-</th>
                    <th>
                        <?= $order_det[0]['payment_method'] ?>
                    </th>
                </tr>
                <tr>
                    <th>Order Amount :-</th>
                    <th>&#8377;
                        <?= number_format1($order_det[0]['order_amt']) ?>
                    </th>
                </tr>
            </table>

        </div>
        <div class="col-md-7 p-4 mt-1 table-responsive" id="">
            <!-- echo "<pre>"; -->
            <!-- <?php print_r($order_product_det) ?>  -->
            <h4 class="bg-primary text-center p-2">Order Products</h4>

            <table class="table table-bordered ">
                <tr>
                    <th>SnNo</th>
                    <th>Product Name</th>
                    <th>Product Details</th>
                    <th>qty</th>
                    <th>Product Price</th>
                </tr>
                <?php
                foreach ($order_product_det as $key => $row) {
                    ?>
                    <tr>
                        <th>
                            <?= $key + 1 ?>
                        </th>
                        <th>
                            <?= $row['product_name'] ?>
                        </th>
                        <th>
                            <?= $row['product_details'] ?>
                        </th>
                        <th>
                            <?= $row['qty'] ?>
                        </th>
                        <th>&#8377;
                            <?= number_format1($row['product_price']) ?>
                        </th>
                    </tr>


                    <?php
                }
                ?>
            </table>
        </div>

        <div class="col-md-12 mt-4 text-center mb-3">
            <?php
            if ($order_det[0]['order_status'] == "pending") {
                ?>
                <a href="<?= base_url() ?>admin/send_to_dispatch/<?= $order_det[0]['order_tbl_id'] ?>">
                    <button class="bg-dark text-white rounded p-2 ">Confirm & Dispatch Order</button>
                </a>

                <a href="<?= base_url() ?>admin/delete_order/<?= $order_det[0]['order_tbl_id'] ?>">
                    <button class="bg-danger text-white rounded p-2 ">Delete Order</button>
                </a>

                <a href="<?= base_url() ?>admin/send_to_reject/<?= $order_det[0]['order_tbl_id'] ?>">
                    <button class="bg-danger text-white rounded p-2 ">Reject Order</button>
                </a>
                <?php
            }
            ?>

            <?php
            if ($order_det[0]['order_status'] == "dispatch") {
                ?>
                <a href="<?= base_url() ?>admin/send_to_delivered/<?= $order_det[0]['order_tbl_id'] ?>">
                    <button class="bg-success text-white rounded p-2 ">Confirm & Delivered Order</button>
                </a>
                <?php
            }
            ?>
            
        </div>
    </div>
</div>
<script>
        const button = document.getElementById('download-button');

        function generatePDF() {
            const element = document.getElementById('invoice');
            html2pdf().from(element).save();
        }

        // button.addEventListener('click', generatePDF);
</script>
</div>