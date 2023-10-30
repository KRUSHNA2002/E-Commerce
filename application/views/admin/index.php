
<div class="container p-0">
  <div class="row">
    <div class="col-md-12 text-center mb-3">
       <i> <h1 class="bg-secondary text-white p-1">Welcome <?=$_SESSION['admin']?></h1></i>
        <marquee behavior="up" direction="left" class="bg-danger p-1"> This Admin panel dashboard view only PC does not support in any other gadget...</marquee>
    </div>
  </div>
</div>
<hr>
<hr class="mb-3">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
<div class="col-md-12 mt-3">
<div class="row">
<canvas id="myChart" style="width:100%;max-width:600px" ></canvas>

</div>
</div>

<script>
  var xValues = [

    '<?php
    $dates = array_column($daygraph, 'date');
    echo implode("','", $dates);
    ?>' 
               
               ];
  var yValues = [

    '<?php
    $dates = array_column($daygraph, 'orders');
    echo implode("','", $dates);
    ?>'
            
];
  // generateData("Math.sin(x)", 0, 10, 0.5);

  new Chart("myChart", {
    type: "line",
    data: {
      labels: xValues,
      datasets: [{
        fill: false,
        pointRadius: 2,
        borderColor: "rgba(0,0,255,0.5)",
        data: yValues
      }]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: "y = sin(x)",
        fontSize: 16
      }
    }
  });
  function generateData(value, i1, i2, step = 1) {
    for (let x = i1; x <= i2; x += step) {
      yValues.push(eval(value));
      xValues.push(x);
    }
  }
</script>

<div class="col-md-12 mt-4">
  <div class="mt-5">
    <hr>
      <h6 class=" text-center"> This graph is display the how many orders in this days ... </h6>
      <hr>
  </div>
</div>

<!-- <table>
  <tr>
     <th>Sr.NO</th>
     <th>Pending Order</th>
     <th>Dispached Order</th>
     <th>Delivetred Order</th>
     <th>Reject Order</th>
  </tr>
  <?php
 
  ?>
</table> -->