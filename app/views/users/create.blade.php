  @extends('users.layouts.master')     

    @section('content')   


        <div id="login" class="animate form">





          {{ Form::open(array('route' => 'users.store') ) }}
          
            <h1 style="color:white"> Sign up </h1>

            @if ($errors->has())
            <div class="">
            @foreach ($errors->all() as $error)
              <h6 style="color:red"> {{ $error }}<br></h6>        
            @endforeach
        </div>
            @endif

            <p>
              <label class="uname" data-icon="u" style="color:white"><b>First name</b></label>
              <input required type="text" placeholder="First name" name="fname" value="{{{ Form::getValueAttribute('fname',  null) }}}"/>
            </p>

        <p>
              <label class="uname" data-icon="u" style="color:white"><b>Last name</b></label>
              <input required type="text" placeholder="Last name" name="lname" value="{{{ Form::getValueAttribute('lname',  null) }}}"/>
            </p>

        <p>
            <label data-icon="e" style="color:white"><b>Email Id</b></label>
            <input type="email" required placeholder="Write Email Address" name="email" value="{{{ Form::getValueAttribute('email',  null) }}}"/>
            </p>
          
            
            <p>
              <label class="youpasswd" data-icon="p" style="color:white">Password</label>
              <input id="passwordsignup" name="password" required type="password" placeholder="password"/>
            </p>
            <p>
              <label class="youpasswd" data-icon="p" style="color:white">Confirm password </label>
              <input id="passwordsignup_confirm" name="password_confirm" required type="password" placeholder="password"/>
            </p>
            <p class="signin button">
              <input type="submit" value="Sign up"/>
            </p>
            <p class="change_link" style="color:white; font-size:150%"> Already a member ? <a href="/users" class="to_register"> Go and log in </a> </p>
          
          {{ Form::close() }}
        </div>

    @stop