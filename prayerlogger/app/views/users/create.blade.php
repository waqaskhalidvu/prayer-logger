  @extends('users.layouts.master')     

    @section('content')   






          {{ Form::open(array('route' => 'users.store') ) }}
          
           <h2>Sign up to <span class="red"><strong>Prayer Logger</strong></span></h2>
              @if ($errors->has())
                <div class="">
              @foreach ($errors->all() as $error)
                <h6 style="color:red"> {{ $error }}<br></h6>        
                @endforeach
               </div>
              @endif

                        <label for="firstname">First Name</label>
                        <input type="text" required id="firstname" name="fname" onblur="validate_fname(this.value, this)" minlength="5" maxlength="15" placeholder="enter your first name...">
                        <div id="error" style="text-align: right;"></div>
                        <label for="lastname">Last Name</label>
                        <input type="text" required id="lastname" name="lname" onblur="validate_lname(this.value, this)" minlength="5" maxlength="15" placeholder="enter your last name...">
                        <div id="lname_error" style="text-align: right;"></div>
                        <label for="email">Email</label>
                        <input type="email" required id="email" name="email" onblur="email_validate(this.value, this)" maxlength="30"placeholder="enter your email...">
                        <div id="email_error" style="text-align: right;"></div>
                        <label for="password">Password</label>
                        <input type="password" required id="password" name="password" onblur="password_validate(this.value, this)" minlength="4" maxlength="8" placeholder="choose a password...">
                        <div id="password_error" style="text-align: right;"></div>
                        <label for="password">Confirm Password</label>
                        <input type="password" required id="confirm_password" name="password_confirm" onblur="cpassword_validate(this.value, this)" minlength="4" maxlength="8" placeholder="re-enter password...">
                        <div id="cpassword_error" style="text-align: right;"></div>
                       
                      <button type="submit">Register</button>  
            <h3><a href="/users">Already a member ?<span class="green">.</span></a></h3>
          
         {{ Form::token() }}

         <!-- java script code for first name validition -->
        <script>
    function validate_fname(val, id){
      
      var nameformat = /^([a-zA-Z]+\s)*[a-zA-Z]+$/;
      if (val.match(nameformat))
        {
            document.getElementById("error").style.color = "green";
            document.getElementById("error").innerHTML = "";
            document.getElementById("firstname").style.borderColor = "green";
            

        }
        else 
          {
            document.getElementById("error").style.color = "red";
            document.getElementById("error").innerHTML="Only characters are allowed";
            document.getElementById("firstname").style.borderColor = "red";
            document.this.focus();
          }
      }
  </script>

  <!-- java script code for first name validition ends here-->

   <!-- java script code for last name validition -->
        <script>
    function validate_lname(val, id){
      
      var nameformat = /^([a-zA-Z]+\s)*[a-zA-Z]+$/;
      if (val.match(nameformat))
        {
            document.getElementById("lname_error").style.color = "green";
            document.getElementById("lname_error").innerHTML = "";
            document.getElementById("lastname").style.borderColor = "green";
           

        }
        else 
          {
            document.getElementById("lname_error").style.color = "red";
            document.getElementById("lname_error").innerHTML="Only characters are allowed";
            document.getElementById("lastname").style.borderColor = "red";
            document.this.focus();
          }
      }
  </script>

  <!-- java script code for last name validition ends here-->

  <!-- java script code for email format validition -->
        <script>
    function email_validate(val, id){
      
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (val.match(mailformat))
        {
            document.getElementById("email_error").style.color = "green";
            document.getElementById("email_error").innerHTML = "";
            document.getElementById("email").style.borderColor = "green";
            

        }
        else 
          {
            document.getElementById("email_error").style.color = "red";
            document.getElementById("email_error").innerHTML="Please enter valid email address";
            document.getElementById("email").style.borderColor = "red";
            document.this.focus();
          }
      }
  </script>

  <!-- java script code for email format validition ends here-->

  <!-- java script code for password field validition -->
        <script>
    function password_validate(val, id){
      
      var mailformat = /^[a-z0-9]+$/i;
      if (val.match(mailformat))
        {
            document.getElementById("password_error").style.color = "green";
            document.getElementById("password_error").innerHTML = "";
            document.getElementById("password").style.borderColor = "green";
            

        }
        else 
          {
            document.getElementById("password_error").style.color = "red";
            document.getElementById("password_error").innerHTML="No special characters are allowed";
            document.getElementById("password").style.borderColor = "red";
            document.this.focus();
          }
      }
  </script>

  <!-- java script code for password field validition ends here-->
      

      <!-- java script code for password field validition -->
        <script>
    function cpassword_validate(val, id){
      
      var mailformat = /^[a-z0-9]+$/i;
      if (val.match(mailformat))
        {
            document.getElementById("cpassword_error").style.color = "green";
            document.getElementById("cpassword_error").innerHTML = "";
            document.getElementById("confirm_password").style.borderColor = "green";
            

        }
        else 
          {
            document.getElementById("cpassword_error").style.color = "red";
            document.getElementById("cpassword_error").innerHTML="No special characters are allowed";
            document.getElementById("confirm_password").style.borderColor = "red";
            document.this.focus();
          }
      }
  </script>

  <!-- java script code for password field validition ends here-->

    @stop