
    <!--header start-->
    <?php include 'require/header1.php'; ?>
    <!-- Inner page hedaing start -->

     <section class="irs-inner-page-heading irs-layer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><br><br>
                   <div class="irs-inner-heading">
                        <h2>Placement Details</h2>
                        <i class="icofont icofont-education"></i>
                        <p><a href="index.php">HOME</a> > <a href="placementdetails.php">Placement Details</a>
                        </p>
                    </div> 
                </div>
            </div>
        </div>
    </section>

   <section class="irs-gallery-field">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-6 col-md-offset-3"> -->
                    <div class="col-md-12">
                    <div class="irs-section-title">
                        <h2 style="font-size:24px;"><span>Placement Details</span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
    
                    </div>
                  
                </div>
            </div>
        </div>
    </section>

    <style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  
}
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  /*float: center;*/
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  width:30%
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: red;}
@media (max-width: 450px){
  .center{
    width: 100%;
  }
  ul{
    padding: 10px;
  }
}
</style>
</head>
<body>
<div class="center">
<div class="tab">
  <button class="tablinks" id="london_btn">London</button>
  <button class="tablinks" id="paris_btn">Paris</button>
  <button class="tablinks" id="tokyo_btn">Tokyo</button>
</div>



  <div class="irs-courses-col irs-blog-col" id="london_img">

        <img src="image/clg/place1.jpg" align="center" style="width:100%;">
   </div>
   <div class="irs-courses-col irs-blog-col" id="paris_img">

        <img src="image/clg/alumini1.jpg" align="center" style="width:100%;">
   </div>
    <div class="irs-courses-col irs-blog-col" id="tokyo_img">

        <img src="image/clg/alumini2.jpg" align="center" style="width:100%;">
   </div>

   <div class="irs-courses-col irs-blog-col" id="london_img1">

        <img src="image/clg/depart1.jpg" align="center" style="width:100%;">
   </div>
   <div class="irs-courses-col irs-blog-col" id="london_img2">

        <img src="image/clg/depart2.jpg" align="center" style="width:100%;">
   </div>

</div>
 <!-- <button>
  <div class="irs-courses-col irs-blog-col" id="london_img">

        <img src="image/clg/alumini1.jpg" align="center" style="width:100%;">
   </div>
 </button>
 <button>
  <div class="irs-courses-col irs-blog-col" id="london_img">

        <img src="image/clg/alumini2.jpg" align="center" style="width:100%;">
   </div>
 </button> -->
<!-- </div> -->


    <!-- <div class="irs-courses-col irs-blog-col">

        <img src="image/clg/place1.jpg" align="center" style="width:100%;">
   </div> -->
  <br><br>              
  <h4 align="center" style="color: #333333; font-size: 20px;">PLACEMENT PROCEDURE</h4>
<div style="padding-left: 5%;">
  <h4 style="color: #F4A460; font-size: 24px;">Steps</h4>
<ul style="color:#595959; list-style-type:disc;">
<li>Companies are invited to the college by the placement team.</li>
<li>To the responding companies, the details of the final year students opting for placement are sent as per their requirement.</li>
<li>The company is assigned a convenient date.</span></strong></li>
<li>After conformation by the company, a pre-placement talk is arranged.</li>
<li>The company conducts test and/or group discussion to short list the interested students.</li>
<li>The short listed students are then interviewed for final selection by the company.</li>
<li>The result is usually announced on the same day.</li>
</ul></div>
<!--------------footer start----------------->
    <?php include 'require/footer.php'; ?>
    <!-- Footer end -->

<script>
  $("#london_img").hide();
  $("#london_img1").hide();
  $("#london_img2").hide();
  $("#paris_img").hide();
  $("#tokyo_img").hide();
$(document).ready(function(){
  $("#london_btn").click(function(){ 
  $("#london_img").show();
  $("#london_img1").show();
  $("#london_img2").show();
  $("#paris_img").hide();
  $("#tokyo_img").hide();

  });
  $("#paris_btn").click(function(){ 
  $("#london_img").hide();
  $("#london_img1").hide();
  $("#london_img2").hide();
  $("#paris_img").show();
  $("#tokyo_img").hide();
  });
  $("#tokyo_btn").click(function(){ 
  $("#london_img").hide();
  $("#london_img1").hide();
  $("#london_img2").hide();
  $("#paris_img").hide();
  $("#tokyo_img").show();
  });
});
</script>