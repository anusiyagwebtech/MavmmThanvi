
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style type="text/css">
      *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
:root{
    --fheadC: purple;
}
body{
    min-height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(0, 0, 0, 0.1);
    flex-direction: column;
}
form{
    background: white;
    padding: 20px;
    border-radius: 7px;
    box-shadow: 1px 1px 3px black;
}
form h3{
    text-align: center;
    color: var(--fheadC);
    font-weight: 600;
}
form button{
    text-align: center;
    background: var(--fheadC) !important;
    border: 0 !important;
    color: aliceblue;
    padding: 10px;
    border-radius: 5px;
    width: 100%;
    margin-top: 10px;
}

.set{
    margin-bottom: 20px;
}
.set input,select{
    border: 1px solid black;
}


@media (max-width: 580px){
    form{
        width: 98%;
    }
    .set input, select{
        width: 98%;
    }
}
body h1{
    text-align: center;
    color: var(--fheadC);
    font-weight: 900;
    margin-bottom: 30px;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
    </style>
  </head>
  <body>
    <h1>Register Form</h1>
    <form class=" needs-validation" novalidate>
        <h3>Enter Your Details</h3>
        <div class="set">
          <label for="validationCustom01" class="form-label">Name</label>
          <input type="text" class="form-control" id="validationCustom01" required placeholder="Enter Your Name...">
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please Enter Your name.
          </div>

        </div>
        <div class="set">
          <label for="validationCustom02" class="form-label">Father's name</label>
          <input type="text" class="form-control" id="validationCustom02"  required placeholder="Enter your Father's Name...">
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please Enter Your Father's Name.
          </div>
        </div>
        <div class="set">
          <label for="validationCustom03" class="form-label">Name</label>
          <input type="number" class="form-control" id="validationCustom03" required placeholder="Enter Your Phone Number...">
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please Enter only Numbers
          </div>

        </div>

  
          </div>
          <div class="set">
            <label for="validationCustom04" class="form-label">Email Id</label>
            <input type="email" class="form-control" id="validationCustom04"  required placeholder="Enter your Email Id...">
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
                Please enter valid Email
              </div>
    
          </div>

          <div class="set">
            <label for="validationCustom05" class="form-label">School or Polytechnic Name</label>
            <input type="text" class="form-control" id="validationCustom05"  required placeholder="School Name...">
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
                Please Enter Your School Name.
              </div>    
          </div>
        <div class="set">
          <label for="validationCustom04" class="form-label">Select You Interested Course</label>
          <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <option>Mechanical Engineering</option>
            <option>Civil Engineering</option>
            <option>Electrical and Electronics Engineering</option>
            <option>Electronics and Communication Engineering</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid Course.
          </div>
        </div>
        <div>
          <!-- <div class="form-check">
          </div> -->
        </div>
        <div>
          <button  type="submit">Submit form</button>
        </div>
      </form>
      <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()


      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>