
    <!--header start-->
    <?php include 'require/header1.php'; ?>
    <!-- Inner page hedaing start -->
    <!--<section class="irs-inner-page-heading irs-layer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="irs-inner-heading">
                        <h2>Courses</h2>
                        <i class="icofont icofont-education"></i>
                        <p><a href="index-layout1.html">HOME</a> > <a href="#">Courses</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Inner page hedaing end -->
    <section class="irs-inner-page-heading irs-layer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><br><br>
                    <div class="irs-inner-heading" style="border: none;">
                        <!-- <h2>Alumni Registration</h2>
                        <i class="icofont icofont-education"></i>
                        <p><a href="index-layout1.html">HOME</a> > <a href="alumniregistration.php">Alumni Registration</a>
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="irs-gallery-field">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="irs-section-title">
                        <h2><span style="font-size:24px;">Student Login</span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
                       
                         <p>LOGIN</p> 

             
         <form action="" method="post" name="form1">
                       <table border="0" align="center" >
                              <tr width="100%">
                    <td>

       <input name="adm_login_id" type="text" class="area username" placeholder="username" autofocus  id="login_id" maxlength="30" style="width:100%;" />
        <br />
                 <br />
       <input type="password" class="area password" placeholder="password" name="adm_password" id="login_pwd" maxlength="15" style="width:100%;" /><br />
         <input type="submit" alt="Submit" border="0" id="Submit" name="Submit" class="button submit" value="log in" style=" background:#F4A460; color: #fff; margin-top:5px; border:none;" />
                                    <br>
                             </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
           </div></div></div></div></section>
                 -->
  <section>
      <div class="login-Form">
       
        <div class="FORM">
           <div class="FORM-title">
            <h2>
                <span style="font-size: 24px ;">Staff Login</span>
            </h2>
            <div class="form-title-line">
              <div class="form-title-icon">
                <i class="icofont icofont-education"></i>
              </div>
            </div>
           </div> 
           <p>LOGIN</p>
           <input type="text" placeholder="username">
           <input type="password" placeholder="password">
            <button>Login</button>

      </div>
      <div class="FORM">
           <div class="FORM-title">
            <h2>
                <span style="font-size: 24px ;">Student Login</span>
            </h2>
            <div class="form-title-line">
              <div class="form-title-icon">
                <i class="icofont icofont-education"></i>
              </div>
            </div>
           </div> 
           <p>LOGIN</p>
           <input type="text" placeholder="username">
           <input type="password" placeholder="password">
            <button>Login</button>
        </div>
  </section>
  <style>
    .login-Form{
        display: flex;
        justify-content: space-evenly;
        padding: 40px 0px;
        margin: 40px 0px;
        flex-wrap: wrap;
        gap: 15px;
        
    }
    .login-Form .FORM{
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .login-Form .FORM .FORM-title{
      text-align: center;
      display: inline-block;
    }
    .login-Form .FORM .FORM-title h2{
        margin-bottom: 0px !important;
    }
    .login-Form .FORM .FORM-title h2 span{
        color: #F4A460;
    }
    .login-Form .FORM .FORM-title i{
       color: #F4A460;
       font-size: 30px;
       line-height: 50px;
    }
    .login-Form .FORM .FORM-title .form-title-icon::before,
    .login-Form .FORM .FORM-title .form-title-icon::after
    {
        content: "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        width: 60px !important;
        height: 3px !important;
        background: black;
        font-size: 2px;
    }
    .login-Form .FORM p{
        text-align: center;
        font-weight: 500;
    }
    .login-Form .FORM input{
        border: 1px solid rgba(0, 0, 0, 0.4);
    }
    .login-Form .FORM input:focus{
        border: 0;
        outline: 2px solid #F4A460;
    }

    .login-Form .FORM button{
     background: #F4A460;
     color: white;
     border: 0;
    }
    

  </style>
    <!--------------footer start----------------->
    <?php include 'require/footer.php'; ?>
    <!-- Footer end -->

   