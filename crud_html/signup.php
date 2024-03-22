<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  background-color: #4b111b;
  width: 100%;
  min-height: 100vh;

  display: flex;
  align-items: center;
  justify-content: center;
}

button,
input {
  border: none;
  outline: none;
}

/****************
      FORM
*****************/
.signup {
  background-color: white;
  width: 100%;
  max-width: 500px;
  padding: 50px 70px;
  display: flex;
  flex-direction: column;
  justify-content: center;

  border-radius: 20px;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
    0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

h1 {
  text-align: center;
  color: #a4243b;
}
h2 {
  text-align: center;
  font-size: 1.2rem;
  font-weight: lighter;

  margin-bottom: 40px;
}

h2 span {
  text-decoration: underline;
  cursor: pointer;
  color: #a4243b;
}

/*  Field */
.signup__field {
  display: flex;
  flex-direction: column;
  width: 100%;
  position: relative;
  margin-bottom: 50px;
}

.signup__field:before {
  content: "";
  display: inline-block;
  position: absolute;
  width: 0px;
  height: 2px;
  background: #a4243b;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  transition: all 0.4s ease;
}

.signup__field:hover:before {
  width: 100%;
}

/*  Input */
.signup__input {
  width: 100%;
  height: 100%;
  font-size: 1.2rem;
  padding: 10px 2px 0;
  border-bottom: 2px solid #e0e0e0;
}

/*  Label */
.signup__label {
  color: #bdbdbd;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 2px;
  font-size: 1.2rem;
  transition: all 0.3s ease;
}

.signup__input:focus + .signup__label,
.signup__input:valid + .signup__label {
  top: 0;
  font-size: 1rem;
  background-color: white;
}

/*  Button */
.button {
  background: #a4243b;
  color: white;
  padding: 12px 0;
  font-size: 1.2rem;
  border-radius: 25px;
  cursor: pointer;
}

button:hover {
  background: #4b111b;
}

    </style>
</head>
<body>
    <form class="signup" autocomplete="off" action="signupdata.php" onsubmit="return validate(event)"  id="form1">
    <h1>Create account</h1>
    <h2>Already have an account? <a href="login.php"> <span>Sign in</span></a></h2>

    <div class="signup__field">
        <input class="signup__input" type="text" name="username" id="username" />
        <label class="signup__label" for="username">Username</label>
    </div>

    <div class="signup__field">
        <input class="signup__input" type="text" name="email" id="email" />
        <label class="signup__label" for="email">Email</label>
    </div>

    <div class="signup__field">
        <input class="signup__input" type="password" name="password" id="password" />
        <label class="signup__label" for="password">Password</label>
    </div>
    

    <div class="signup__field">
        <input class="signup__input" type="password" name="confirmpassword" id="confirmpassword"  />
        <label class="signup__label" for="password">Confirm Password</label>
    </div>

    <input class="button" id="submit" type="submit" value="submit" name="signup" onclick="validate()">
    <!-- <button onclick="validateEmail(email)">Submit</button> -->
    </form>
</body>
<script>
    //Email validation
    // var mail = document.getElementById("email" ).value;
    //         console.log(mail)
    //         function validateEmail(email){
      //             var  re = /^[^/s@]+@[^/s@]+\.[^/s@]+$/;
      //             return re.test(String(email).toLowerCase())
      //             if(!validateEmail(mail)){
        //                 alert("Mail is not valid")
        //             }
        //         }
        
        
        //Email Validation********************
        
        function validate(){
          var mail = document.getElementById( "email" ).value;
          var pattern = /^[^/s@]+@[^/s@]+\.[^/s@]+$/; 
          var submit = document.getElementById('submit')
          if( !pattern.test( mail )){
            alert("You have provided an invalid email address")
            return false
            // const form = document.getElementById("form1")
            event.preventDefault();
            
          }
        }




  // function validateEmail(emaiId){
  //   const keyword = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  //   const email = document.getElementById("email").value;
  //   return keyword.test(email); 
  // }
  //   if(validateEmail(emailId) == false ) {
  //     alert('Invalid email! Please provide a valid email address');
  //     return false;
  //    }else{
  //      return true;
  //    }
  
  // var mail = document.getElementById(email).value
  //       function validateEmail(email){
  //           var kw = /\S+@\S+\.\S+/;
  //           return  (kw.test(email)) ? true : alert("not a valid email") ;
  //       }
     
    
  // var field =document.getElementsByClassName('signup__input')[0].value;
  //       // var button = document.getElementById()
  //       function fieldCheck(){
  //       if(field.value.length() == 0){
  //           alert("All fields are required")
  //           window.location.href = " http://localhost/crud3/crud_html/signup.php"
  //           }
  //       }
      

    // var mail = document.getElementById("email");
    // var form = document.getElementById("form1");

    // function validateEmail(mail){
    //     var keyword = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    //     if(!mail.value.match(keyword)){
    //         alert("not a valid mail");
    //         returnToPreviousPage()
    //         return false;
    //     }else{
    //         form.submit();
    //     }
    //     }   

    // registrationForm.addEventListener("submit", function(event){
      //   // Prevent the default form submission
  //   event.preventDefault();
  // })
  


  

</script>

</html>