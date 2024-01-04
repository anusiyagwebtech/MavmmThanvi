<!--header start-->
<?php include 'require/header1.php'; ?>

<section class="irs-inner-page-heading irs-layer-black">
  <div class="container">
    <div class="row">
      <div class="col-md-12"><br><br>
        <div class="irs-inner-heading">
          <h2>Registration Form</h2>
          <i class="icofont icofont-education"></i>
          <p><a href="index.php">HOME</a> > <a href="registerForm.php">Registration</a>
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
          <h2 style="font-size:24px;"><span>Registration Form Details</span></h2>
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

<!-- <section class="FormSection">
       <form>
          <h2>Enter Your Details</h2>
          <p>
            <label for="name">Name</label>
            <input type="text" placeholder="Enter your Name..." id="name" required>
          </p>
          <p>
            <label for="fname">Father's Name</label>
            <input type="text" placeholder="Enter your Father Name..." id="fname" required>
          </p>
  
          <p>
            <label for="mobile">Mobile Number</label>
            <input type="number" placeholder="Enter your Mobile Number..." id="mobile" required>
          </p>
  
          <p>
            <label for="Email">Email Id</label>
            <input type="email" placeholder="Enter your Email Id..." id="Email" required>
          </p>
  
          <p>
            <label for="school">School or Polytechnic Name</label>
            <input type="text" placeholder="Enter your School Name..." id="school" required>
          </p>


          <p>
            <label for="course">Select Your Interested Course</label>
            <select class="form-select" id="course" required>
            <option selected disabled value="">Choose...</option>
            <option>Mechanical Engineering</option>
            <option>Civil Engineering</option>
            <option>Electrical and Electronics Engineering</option>
            <option>Electronics and Communication Engineering</option>
          </select>

          </p>
          <button  id="sub-btn" class="sub-btn">submit</button>
          
       </form>
    </section>
    <style type="text/css">
      section{
        width: 100vw !important;
      }
      .FormSection{
        min-height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(255, 255, 244, 0.1);
        margin: 20px 0px 30px;
      }
      .FormSection form{
        background: white;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
        padding: 15px;
        border-radius: 5px;
      }
      .FormSection form h2{
        font-size: 21px;
        font-weight: 700;
        color: #F4A460;
        text-align: center;
        margin-bottom: 20px;
      }
      .FormSection form p{
        display: flex;
        flex-direction: column;
        margin-bottom: 14px;
      }
      .FormSection form p input,select{
        padding: 0px 10px;
       height: 27px;
       border: 1px solid rgba(0,0,0,0.3);

      }
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
         -webkit-appearance: none;
      }
      .FormSection form p input:focus{
       outline: 3px solid #F4A460;
       border: 0;
      }
      .FormSection form p select:focus{
       outline: 3px solid #F4A460;
       border: 0;
      }
      .sub-btn{
        width: 100%;
        margin-top: 5px;
        height: 27px;
        text-align: center;
        background: #F4A460;
        color: black;
        font-weight: 900;
        border:0;
        border-radius: 5px;
      }
      @media (max-width: 450px){
      .FormSection form{
        width: 99vw !important;
      }

      }
      
    </style> -->

<section class="FormSection">
  <form id="c_form">
    <h2>Enter Your Details</h2>
    <div class="detail">
      <label for="name">NAME <span>*</span></label>
      <input type="text" placeholder="Enter your Name..." id="name" required>
    </div>
    <div class="detail">
      <label for="fname">FATHER/GUARDIAN NAME <span>*</span></label>
      <input type="text" placeholder="Enter your Father/Guardian Name..." id="fname" required>
    </div>

    <div class="detail">
      <label for="address">ADDRESS <span>*</span></label>
      <input type="text" placeholder="Address1..." required>
      <input type="text" placeholder="Address2..."  required>
      <input type="text" placeholder="Address3..."  required>

    </div>

    <div class="detail">
      <label for="mobile1">Phone Number(1)<span>*</span></label>
      <input type="number" placeholder="Enter your Mobile Number..." id="mobile1" required>
    </div>

    <div class="detail">
      <label for="mobile2">Phone Number(2)</label>
      <input type="number" placeholder="Enter your Mobile Number..." id="mobile2">
    </div>
    <div class="detail">
      <label for="dob">Date of Birth<span>*</span></label>
      <input type="text" placeholder="Ex: January 7, 2015" id="dob" required>
    </div>
    <div class="radios detail">

      <div class="labels">
        <label>Gender<span>*</span></label>
        <p>Mark only one oval</p>
      </div>
      
      <div class="radio-content">
        <div class="content">
          <input type="radio" value="Male" id="male" name="Gender" required><label for="male">Male</label>
        </div>
        <div class="content">
          <input type="radio" value="Female" id="female" name="Gender" required><label for="female">Female</label>
        </div>
      </div>
    </div>

    <div class="radios detail">
      <div class="labels">
        <label>Religion Details<span>*</span></label>
        <p>Mark only one oval</p>
      </div>
      <div class="radio-content">
        <div class="content">
          <input type="radio" value="Hindu" id="Hindu" name="Religion"  required><label for="Hindu">Hindu</label>
        </div>
        <div class="content">
          <input type="radio" value="Muslim" id="Muslim" name="Religion"   required><label for="Muslim">Muslim</label>
        </div>
        <div class="content">
          <input type="radio" value="Christian" id="Christian" name="Religion"  required><label for="Christian">Christian</label>
        </div>
        <div class="content">
          <input type="radio" value="Others" id="Others" name="Religion"  required><label for="Others">Others</label>
        </div>
      </div>
    </div>
    <div class="radios detail">
      <div class="labels">
        <label>Community Details<span>*</span></label>
        <p>Mark only one oval</p>
      </div>
      <div class="radio-content">
        <div class="content"><input type="radio" value="OC" id="OC" name="Community"  required>
          <label for="OC">OC</label>
        </div>
        <div class="content">
          <input type="radio" value="BC" id="BC" name="Community"  required><label for="BC">BC</label>
        </div>
        <div class="content">
          <input type="radio" value="MBC/DNC" id="MBC/DNC" name="Community"  required><label for="MBC/DNC">MBC/DNC</label>
        </div>
        <div class="content">
          <input type="radio" value="SC" id="SC" name="Community"  required><label for="SC">SC</label>
        </div>
        <div class="content">
          <input type="radio" value="ST" id="ST" name="Community"  required><label for="ST">ST</label>
        </div>
      </div>
    </div>
    <div class="radios detail">
      <div class="labels">
        <label  >10TH / 12TH<span>*</span></label>
        <p>Mark only one oval</p>
      </div>
      <div class="radio-content">
        <div class="content">
          <input type="radio" value="10TH" id="10TH" name="10th/12th" required><label for="10TH">10TH</label>
        </div>
        <div class="content">
          <input type="radio" value="12TH" id="12TH" name="10th/12th" required><label for="12TH">12TH</label>
        </div>
      </div>
    </div>

    <div class="detail">
      <label for="mark">10TH/12TH Mark<span>*</span></label>
      <input type="text" placeholder="10th or 12th Mark..." required>
    </div>

    <div class="radios detail">
      <div class="labels">
        <label>Year of Admission<span>*</span></label>
         <p>Mark only one oval</p>
      </div>
      <div class="radio-content">
        <div class="content">
          <input type="radio" value="I YEAR" id="I YEAR" name="yoa"required>
          <label for="I YEAR">I Year</label>
        </div>
        <div class="content">
          <input type="radio" value="Direct II YEAR" id="Direct II YEAR" name="yoa"required>
          <label for="Direct II YEAR">Direct II Year</label>
        </div>
      </div>
    </div>
    <div class="detail radios">
      <div class="labels">
        <label for="course">Department<span>*</span></label>
        <p>Mark only one oval</p>

      </div>
      <div class="radio-content">
        <div class="content">
          <input type="radio" id="CIVIL" name="Department" value="CIVIL" required>
          <label for="CIVIL">CIVIL</label>
        </div>
        <div class="content">
          <input type="radio" id="MECH" name="Department" value="MECH" required>
          <label for="MECH">MECH</label>
        </div>
        <div class="content">
          <input type="radio" id="EEE" name="Department" value="EEE" required>
          <label for="EEE">EEE</label>
        </div>
        <div class="content">
          <input type="radio" id="ECE" name="Department" value="ECE" required>
          <label for="ECE">ECE</label>
        </div>
        <div class="content">
          <input type="radio" id="COMPUTER" name="Department" value="COMPUTER" required>
          <label for="COMPUTER">COMPUTER</label>
        </div>
      </div>
    </div>
    <div class="detail">
      <label for="referStaff">Reference Staff Name<span>*</span></label>
      <input type="text" placeholder="Reference Staff Name..." id="referStaff" required>
    </div>
    <div class="detail">
      <label for="staffMobile">Staff Mobile Number<span>*</span></label>
      <input type="text" placeholder="Staff Mobile Number..." id="staffMobile" required>
    </div>

    <div class="detail">
      <label for="payment">Fees Payment Amount Rs:<span>*</span></label>
      <input type="text" placeholder="Fees Payment..." id="payment" required>
    </div>

    <div class="radios detail">
      <div class="labels">
        <label >Mode of Payment<span>*</span></label>
        <p>Mark only one oval</p>

      </div>
      <div class="radio-content">
        <div class="content">
          <input type="radio" id="net" name="ThroughPayment" required><label for="net">Net Banking</label>
        </div>
        <div class="content">
          <input type="radio" id="google" name="ThroughPayment" required><label for="google">Google Pay</label>
        </div>
        <div class="content">
          <input type="radio" id="cdm" name="ThroughPayment" required><label for="cdm">CDM(Cash Deposit Machines)</label>
        </div>
      </div>
    </div>

    <div class="detail">
      <label for="payReference">Pay Reference Number <span>*</span></label>
      <input type="text" placeholder="Pay Reference Number..." id="payReference" required>
    </div>
    <div class="detail">
      <label for="dat">Date and Time <span>*</span></label>
      <input type="text" placeholder="Date and Time..." id="dat" required>
    </div>

    <div class="text-box detail">
      <input type="text" id="g_captcha" value="<?php echo rand(0000, 9999); ?>" readonly
        style="border: 1px solid rgba(0,0,0,0.3)">
      <input type="text" id="e_captcha" style="border: 1px solid rgba(0,0,0,0.3)" required>
    </div>

    <input id="sub-btn" class="sub-btn" type="submit">
    
  </form>
</section>
<style type="text/css">
  * {
    box-sizing: border-box;
  }
   span{
    padding-left: 10px;
     color: #c9080b;
     font-size: 15px;
   }
  textarea::-webkit-scrollbar {
    width: 2px;
  }

  section {
    width: 100vw !important;
  }

  .FormSection {
    min-height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(255, 255, 244, 0.1);
    margin: 20px 0px 30px;
  }

  .FormSection form {
    width: 60vw;
    height: fit-content;
    background: white;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    padding: 15px;
    border-radius: 5px;
  }

  .FormSection form h2 {
    font-size: 27px;
    font-weight: 700;
    color: #F4A460;
    text-align: center;
    margin-bottom: 20px;
  }

  .FormSection form div {
    font-weight: 700;
    display: flex;
    flex-direction: column;

    margin-bottom: 14px;
  }

  .FormSection form div label {
    margin-bottom: 8px;
    font-weight: 900 !important;
    font-size: 16px;
  }

  .FormSection form div input,
  select {
    height: 35px;
    border: 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.3);

  }

  textarea {
    resize: none;
    padding: 10px;
    height: 60px;
  }

  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
  }

  .FormSection form div input:focus {
    border-bottom: 3px solid #F4A460;
    outline: 0;

  }

  .FormSection form div select:focus {
    outline: 3px solid #F4A460;
    border: 0;
  }

  .sub-btn {
    cursor: pointer;
    width: 100%;
    margin-top: 5px;
    height: 30px;
    text-align: center;
    background: #F4A460;
    color: black;
    font-weight: 900;
    border: 0;
    border-radius: 5px;
  }

  .detail {
    margin-bottom: 20px !important;
  }

  .radios .radio-content {
    display: flex;
    flex-direction: row;
    gap: 20px;
    flex-wrap: wrap;
  }

  .radios .radio-content .content {
    display: flex;
    flex-direction: row;
    gap: 5px;
  }

  .radios .radio-content input:focus {
    outline: none;
  }

  .text-box input {
    width: 45%;
    padding: 10px;
  }

  .text-box {
    flex-direction: row !important;
    justify-content: space-between;
  }

  .text-box input:focus {
    outline: 2px solid #F4A460 !important;
    border: 0 !important;
  }

  .FormSection form {
    width: 550px !important;
  }

  @media (max-width: 450px) {
    .FormSection form {
      width: 350px !important;
    }

    .text-box input {
      width: 40vw;
    }

  }

  @media (max-width: 350px) {
    .FormSection form {
      width: 95vw !important;
      margin: 0px;
    }

  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

  $(document).ready(function () {
    $("#c_form").submit(function () {
      var g = $("#g_captcha").val();
      var e = $("#e_captcha").val();
      if (g != e) {
        alert("invalid captcha...");
        return false;

      }
      else {
        return true;
      }
    });
  });
</script>
<?php include 'require/footer.php'; ?>