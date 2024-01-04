
    <!--header start-->
    <?php include 'require/header1.php'; ?>
    <!-- Inner page hedaing start -->
    <section class="irs-inner-page-heading irs-layer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><br><br>
                    <div class="irs-inner-heading">
                        <h2>Mandatory</h2>
                        <i class="icofont icofont-education"></i>
                        <p><a href="index.php">HOME</a> > <a href="mandatory.php">Mandatory</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner page hedaing end -->
    <!--  -->

    <section class="irs-gallery-field">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-6 col-md-offset-3"> -->
                    <div class="col-md-12">
                    <div class="irs-section-title">
                        <h2 style="font-size:24px;"><span>MANDATORY</span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
    
                      
    
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam est dolorem quaerat harum sequi, nesciunt consequatur magni voluptatem similique </p> -->
                    </div>
                </div>
            </div>
        </div></section>
          <embed src="mandatory.pdf" width="100%"
        height="500px">
           <a href="mandatory.pdf" class='download-btn'>Download</a>
        
        <style>
            @media(min-width:520px){
             .download-btn{
               display: none;
             }
            }
            @media (max-width: 520px){
                embed{
                    display: none;

                }
                .download-btn{
               display: block;
               padding: 10px 20px;
               text-align: center;
               background: white;
               border: 1px solid black;
               color: black;
               font-weight: 900;
               margin: 20px;    
               transition: 0.4s;     
             }
             .download-btn:hover{
               background: #f4a460;
               border: 0;
               color: white;

             }
            }
        </style>
    <!--------------footer start----------------->
    <?php include 'require/footer.php'; ?>
    <!-- Footer end -->

