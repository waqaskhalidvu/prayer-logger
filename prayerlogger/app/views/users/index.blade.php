   @extends('users.layouts.master')     

    @section('content')


        
          

          {{ Form::open(array('route' => 'account-sign-in') ) }}

            <h2>Sign in to <span class="red"><strong>Prayer Logger</strong></span></h2>
              @if ($errors->has())
                <div class="">
              @foreach ($errors->all() as $error)
                <h6 style="color:red"> {{ $error }}<br></h6>        
                @endforeach
               </div>
              @endif  
                        

                        <label for="firstname">Email</label>
                        <input type="email" id="username" name="email" required onfocus='if(this.placeholder="Enter Email Address"){this.placeholder="";}' onblur="validate(this.value, this)"  maxlength="30" placeholder="Enter Email Address">
                        <div id="error" style="text-align: right;"></div>
                        <label for="lastname">Password</label>
                        <input type="password" id="login_password" required name="password" onfocus='if(this.placeholder="Enter Password"){this.placeholder="";}' onblur="password_validate(this.value, this)" minlength="4" maxlength="8" placeholder="Enter Password">
                        <div id="password_error" style="text-align: right;"></div>
                      <button type="submit">Sign in</button>  
            <h2><a href="users/create">Not a member yet <span class="green">.</span></a></h2>
          
          {{ Form::token() }}


        </div>

<!-- java script code for email format validition -->
        <script>
    function validate(val, id){
      document.getElementById("username").placeholder = "Enter Email Address";
      
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (val.match(mailformat))
        {
            document.getElementById("error").style.color = "green";
             document.getElementById("error").innerHTML = "";
            document.getElementById("username").style.borderColor = "green";
            

        }
        else 
          {
            document.getElementById("error").style.color = "red";
            document.getElementById("error").innerHTML="Please enter valid email address";
            document.getElementById("username").style.borderColor = "red";
            document.this.focus();
          }
      }
  </script>

  <!-- java script code for email format validition ends here-->

   <!-- java script code for password field validition -->
        <script>
    function password_validate(val, id){
      document.getElementById("login_password").placeholder = "Enter Password";
      var mailformat = /^[a-z0-9]+$/i;
      if (val.match(mailformat))
        {
            document.getElementById("password_error").style.color = "green";
            document.getElementById("login_password").style.borderColor = "green";
            document.getElementById("password_error").innerHTML = "";

        }
        else 
          {
            document.getElementById("password_error").style.color = "red";
            document.getElementById("password_error").innerHTML="No special characters are allowed";
            document.getElementById("login_password").style.borderColor = "red";
            document.this.focus();
          }
      }
  </script>

  <!-- java script code for password field validition ends here-->


    @stop