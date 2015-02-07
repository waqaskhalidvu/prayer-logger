   @extends('users.layouts.master')     

    @section('content')


        <div id="login" class="animate form">
          

          {{ Form::open(array('route' => 'account-sign-in') ) }}

            <h1 style="color:white">Sign In</h1>

              @if ($errors->has())
                <div class="">
              @foreach ($errors->all() as $error)
              <h6 style="color:red"> {{ $error }}<br></h6>        
               @endforeach
               </div>
            @endif



            <p>
              <label data-icon="u" style="color:white" > Email ID </label>
              <input id="username" name="email" required type="email" placeholder="Write Email Address"/>
            </p>
            <p>
              <label class="youpasswd" data-icon="p" style="color:white" > Password</label>
              <input id="password" name="password" required type="password" placeholder="Write your password" />
            </p>
            <p class="keeplogin">
              <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
              <label style="color:white; font-size: 15px">Keep me logged in</label>
            </p>
            <p class="login button">
              <input type="submit" value="Sign in" />
            </p>
            <p class="change_link" style="color:white"> Not a member yet ? <a href="users/create" class="to_register">Join us</a> </p>
          
          {{ Form::token() }}


        </div>

    @stop