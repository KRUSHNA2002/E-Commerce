<div class="container bg-white p-3">
    <div class="row table-responsive">
        <div class="col-md-12">
            <h4>Dispatch Order</h4>
            <table class="table table-bordered">
                <tr>
                    <th></th>
                    <th>SrNo</th>
                    <th>Customer Name</th>
                    <th>Customer Mobile</th>
                    <th>Order Date</th>
                    <th>Amount</th>
                    <th>Payment</th>
                    <th>Address</th>
                </tr>
                <?php
                foreach ($orders as $key => $row) {
                    ?>
                    <tr>
                        <th>
                            <a href="<?= base_url() ?>admin/order_details/<?= $row['order_tbl_id'] ?>">
                                <button class="btn btn-primary btn-sm p-1"><i class="fa fa-info"></i> INFO</button>
                            </a>
                        </th>
                        <th>
                            <?= $key + 1 ?>
                        </th>
                        <th>
                            <?= $row['customer_name'] ?>
                        </th>
                        <th>
                            <?= $row['mobile_no'] ?>
                        </th>
                        <th><?= date('d-m-Y', strtotime($row['order_date'])) ?></th>
                        <th>&#8377;
                            <?= number_format1($row['order_amt']) ?>
                        </th>
                        <th>
                            <?= $row['payment_method'] ?>
                        </th>
                        <th>
                            <?= $row['city'] ?>
                            <?= $row['pincode'] ?>
                        </th>
                    </tr>

                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>