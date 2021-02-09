<?php 
    include_once __DIR__."/views/partials/layout.php";

    function get_content(){ 
    ?>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/index.css">
    <header class="w-full py-16 relative" style="height:85vh; background:liner;">
        <img src="/assets/img/virus.png" alt="" class="w-20 h-20" style="--i:1.4;">
        <img src="/assets/img/virus.png" alt="" class="w-20 h-20" style="--i:2;">
        <img src="/assets/img/virus.png" alt="" class="w-20 h-20" style="--i:1;">
        <img src="/assets/img/virus.png" alt="" class="w-20 h-20" style="--i:2.4;">
        <img src="/assets/img/virus.png" alt="" class="w-20 h-20" style="--i:5;">
        <img src="/assets/img/virus.png" alt="" class="w-20 h-20" style="--i:2.5;">
        <img src="/assets/img/virus.png" alt="" class="w-20 h-20" style="--i:1.8;">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <h1 class="text-10x4 font-bold text-white">Covid-19 declaration form site</h1>
            <h1 class="text-10x4 font-bold text-white text-center">For Sime Darby</h1>
        </div>
    </header>
    <section>
    <figure class="highcharts-figure">
  <div id="graph"></div>
  <p class="highcharts-description text-center">
    The above table is showing the Covid-19 Reported Cases in 2021 Feburary
    <code></code> .
  </p>
</figure>


<div class="section">
  <div class="container">
    <div class="row align-item-center">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading mt-5 text-center">
            <h2>States In Malaysia</h2>
            <p class="large">It is based according to covid-19 cases in each states in Malaysia.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row " >
      <div class="card m-3" style="width: 18rem;">
        <div>
          <div> <img class="img-responsive w-100" src="assets/img/johor.png" alt=""> </div>
          <div>
            <div class="center">
              <h4 class="text-center"><a href="">Johor</a></h4>
            </div>
          </div>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem;">  
        <div class="product_list">
          <div class="product_img w-100"> <img class="img-responsive w-100 " src="assets/img/kedah.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4 class="text-center"><a href="">Kedah</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-3" style="width: 18rem;"> 
        <div class="product_list">
          <div class="product_img w-100"> <img class="img-responsive w-100" src="assets/img/kelantan.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4 class="text-center"><a href="">Kelantan</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-3" style="width: 18rem;"> 
        <div class="product_list">
          <div class="product_img w-100"> <img class="img-responsive w-100" src="assets/img/negeri.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4 class="text-center"><a href="">Negeri Sembilan</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-3" style="width: 18rem;"> 
        <div class="product_list">
          <div class="product_img w-100"> <img class="img-responsive w-100" src="assets/img/pahang.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4 class="text-center"><a href="">Pahang</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
        <div class="product_list">
          <div class="product_img w-100"> <img class="img-responsive w-100" src="assets/img/penang.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4 class="text-center"><a href="">Penang</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
        <div class="product_list">
          <div class="product_img w-100"> <img class="img-responsive w-100" src="assets/img/perak.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4 class="text-center"><a href="">Perak</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive w-100" src="assets/img/perlis.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4 class="text-center"><a href="">Perlis</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive w-100" src="assets/img/sabah.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4 class="text-center"><a href="">Sabah</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-3" style="width: 18rem; m-5">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive w-100" src="assets/img/sarawak.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4 class="text-center"><a href="">Sarawak</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-3" style="width: 18rem; m-5">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive w-100" src="assets/img/selangor.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4 class="text-center"><a href="">Selangor</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive w-100" src="assets/img/terengganu.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4 class="text-center"><a href="">Terengganu</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </section>

    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50; */
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  /* background-color: #f2f2f2; */
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.tree img {
    height:500px;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
    <body>
<div class="container"> 
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column tree">
      <img src="/assets/img/oil.jpg" style="width:100% height:800px">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email address..">
        <label for="subject">Description</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input class="w-100 mx-auto" type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
Highcharts.chart('graph', {

title: {
  text: 'Covid-19 Cases in Malaysia'
},

subtitle: {
  text: 'Source: Covid-19 cases Malaysia'
},

yAxis: {
  title: {
    text: 'Number of Infections Reported'
  }
},

xAxis: {
  accessibility: {
    rangeDescription: 'Range:  1th  to 8th '
  }
},

legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

plotOptions: {
  series: {
    label: {
      connectorAllowed: false
    },
    pointStart: 1 
  }
},

series: [{
  name: 'Infections People',
  data: [1500, 2800, 3900, 2300, 4100, 5800, 3600, 4900]
}, ],

responsive: {
  rules: [{
    condition: {
      maxWidth: 500
    },
    chartOptions: {
      legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
      }
    }
  }]
}

});
</script>
    <?php
    };
?>