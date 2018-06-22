@extends('layouts.master_home') @section('content')

<style>
    #loginEmailError{
        color:red
    }   
    .col-white{
        color: #ffffff !important;
    }
 </style>
<!-- Page Loader -->
<div class="page-loader-wrapper">
	<div class="loader">
		<div class="preloader">
			<div class="spinner-layer pl-green">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>
		</div>
		<p>Please wait...</p>
	</div>
</div>
<!-- #END# Page Loader -->
<nav class="navbar navbar-transparent navbar-absolute">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a href="javascript:void(0);" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-collapse">
        		</a>
			<a class="navbar-brand" href="{{url('/')}}">
					<span class="col-orange">G</span><span class="col-white">S</span><span class="col-green">T</span><span class="text-uppercase">Tran</span>			
				</a>
		</div>

		<div class="collapse navbar-collapse" id="navigation-example">
			<ul class="nav navbar-nav navbar-right">
				

				<li>
					<a href="{{url('/')}}" class="btn">
    					Home
    				</a>
				</li>
				<li>
					<a href="#about" class="btn">
    					About Us
    				</a>
				</li>
				<li>
					<a href="#contact" class="btn">
    					Contact Us
    				</a>
				</li>
				<li>
					<a href="#video" class="btn">
    					Demo Video
    				</a>
				</li>
                                <li>
					<a href="#" class="btn">
    					Downloads
    				</a>
				</li>
				<!--<li>
    					<a href="#" class="btn" data-toggle="modal" data-target="#signUp" id="btnSignUp">
    						Sign Up
    					</a>
    				</li>-->
                                @if(session()->get('userAuthDetail'))
				<li><a class="btn" href="{{url('/logout')}}">Logout</a></li>
				@else
				<li>
					<a href="#" class="btn" data-toggle="modal" data-target="#logIn" id="btnlogIn">
    					Login
    				</a>
				</li>
				@endif
				<li>
					<a href="#" target="_blank" class="btn btn-simple">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="btn btn-simple">
						<i class="fa fa-facebook-square"></i>
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="btn btn-simple">
						<i class="fa fa-google-plus"></i>
					</a>
				</li>
                                <li>
                                    <img src="{{asset('vtran/images/onenation.png')}}" style="width: 110px;">
                                </li>
			</ul>
		</div>
	</div>
</nav>
<div class="nav-modal modal animated fadeInDown" id="signUp" tabindex="-1" role="dialog" aria-labelledby="signUpLabel" data-backdrop="static" data-keyboard="false">
	<i class="material-icons close" id="signupClose" >close</i>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 m-t-30">
			<div class="signup-box">
				<div class="card">
					<div class="body">
						<form class="form_validation" method="POST" action="{{url('/signup')}}" id="signup-form">
							{{ csrf_field() }}
							<div class="msg">Register a new user </div>
							<div class="error-list"></div>
							<div class="input-group">
								<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
								<div class="form-line">
									<input type="email" id="signup_email" class="form-control" name="email" placeholder="Email" required autofocus>
								</div>
                                                               <label id="singnUpemailError" class="error customEror" for="email"></label>
							</div>
							<div class="input-group">
								<span class="input-group-addon">
										<i class="material-icons">lock</i>
									</span>
								<div class="form-line">
									<input type="password" id="signup_password" class="form-control" name="password" minlength="6" placeholder="Password" required>
								</div>
                                                            <label id="singnUppasswordError" class="error customEror" for="password" ></label>
							</div>
							<div class="input-group">
								<span class="input-group-addon">
										<i class="material-icons">lock</i>
									</span>
								<div class="form-line">
									<input type="password" id="signup_confirm" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password"
									 required>
								</div>
                                                            <label id="singnUpconfirmError" class="error customEror" for="password"></label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="terms" id="terms" class="filled-in chk-col-indigo">
								<label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
								 <label id="singnUptermsError" class="error customEror" for="password"></label>
							</div>
							<button class="btn btn-block btn-raised btn-lg bg-green waves-effect" type="submit" id="submit-signup">SIGN UP</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="nav-modal modal  animated fadeInDown" id="logIn" tabindex="-1" role="dialog" aria-labelledby="logInLabel" data-backdrop="static" data-keyboard="false">
	<i class="material-icons close" id="loginClose" ata-dismiss="modal" aria-label="Close">close</i>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 m-t-30">
			<div class="login-box">
				<div class="card">
					<div class="body">
						<form class="form_validation" method="POST" action="{{url('/login')}}" id="login-form">
							{{ csrf_field() }}
							<div class="msg">Sign in for Existing User</div>
							  <label id="loginEmailVerification" class="" for="emailVerifcation"></label>
							<div class="input-group">
								<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
								<div class="form-line">
									<input type="text" class="form-control" name="email" value="{{isset($_COOKIE['email'])?$_COOKIE['email']:''}}" placeholder="Email" required autofocus>
								</div>
                                                            <label id="loginemailError" class="error customEror" for="email"></label>
							</div>
							<div class="input-group">
								<span class="input-group-addon">
										<i class="material-icons">lock</i>
									</span>
								<div class="form-line">
									<input type="password" class="form-control" name="password" placeholder="Password" value="{{isset($_COOKIE['password'])?$_COOKIE['password']:''}}" required>
								</div>
                                                             <label id="loginpasswordError" class="error customEror" for="password"></label>
							</div>
							<div class="form-group text-center">

								<div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                                                                   <label id="loging-recaptcha-responseError" class="error customEror" for="password"></label>
							</div>
							<div class="row">
								<div class="col-xs-7 p-t-5">
									<input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-indigo">
									<label for="rememberme">Remember Me</label>
								</div>
								<div class="col-xs-5">
									<button class="btn btn-block btn-raised btn-lg bg-green waves-effect" type="submit" id="submit-login">SIGN IN</button>
								</div>
							</div>
							<div class="row m-t-15 m-b--20">
								<div class="col-xs-6"></div>
								<div class="col-xs-6 align-right">
									<a href="#" data-toggle="collapse" data-target="#forgot_password" id="btnForgot">Forgot Password?</a>
								</div>
							</div>
						</form>
                                            <form class="collapse form_validation" id="forgot_password" method="POST" action="{{url('/forgot-password-link')}}">
                                                {{ csrf_field() }}
							<div class="msg">Forgot Password</div>
							<div class="input-group">
								<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
								<div class="form-line">
									<input type="email" class="form-control" name="forgot_email" placeholder="Email" required autofocus>
								</div>
							</div>
							<button class="btn btn-block btn-raised bg-green waves-effect" type="submit" id="forgotSubmitButton">CONTINUE</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--RESET PASSWORD-->
<div class="nav-modal modal animated fadeInDown" id="resetPassword" tabindex="-1" role="dialog" aria-labelledby="resetPasswordLabel" >
	<i class="material-icons close" data-dismiss="modal" aria-label="Close">close</i>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 m-t-30">
			<div class="login-box">
				<div class="card">
					<div class="body">
						<form id="reset_password" method="POST" class="form_validation">
							<div class="msg">Reset Password</div>
							<div class="input-group">
								<span class="input-group-addon">
										<i class="material-icons">lock</i>
									</span>
								<div class="form-line">
									<input type="password" class="form-control" name="password" minlength="6" placeholder="New Password" required>
								</div>
							</div>
							<div class="input-group">
								<span class="input-group-addon">
										<i class="material-icons">lock</i>
									</span>
								<div class="form-line">
									<input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm New Password" required>
								</div>
							</div>
							<button class="btn btn-block btn-raised btn-lg bg-green waves-effect" type="submit">RESET PASSWORD</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('vtran/images/home.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
						<h1 class="title">
							A Transition Solution
							<!--<i class="col-orange">G</i><i class="col-white">S</i><i class="col-green">T</i><i class="text-uppercase">Tran</i>
							GST<i class="text-uppercase">Tran</i> makes life
							<span data-id="1">simpler</span>
							<span data-id="2">better</span>
							<span data-id="3">faster</span>
							<span data-id="4">easier</span>-->
						</h1> 
						<h3 id="changethewords"> 
							for <span data-id="1"><i class="col-orange">easy</i></span>
							<span data-id="2"><i class="col-white">quick</i></span><span data-id="3"><i class="col-green">smooth</i></span><br>
							 transition into the new GST regime</h3>
						<br />
                                                <!-- <p><img src="{{asset('vtran/images/onenation.png')}}" class="img-responsive" /></p> -->
						<a href="#" class="btn bg-green btn-raised btn-lg waves-effect" data-toggle="modal" data-target="#signUp" id="btnSignUp">
							<i class="fa fa-play"></i> Register Now
						</a>
						<!--<a href="#" class="btn btn-default btn-raised btn-lg waves-effect">
							<i class="fa fa-comment-o"></i> Chat with us
						</a>-->
					</div>
			</div>
		</div>
	</div>

	<!-- video Modal -->
	<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content modal-col-black">
				<div class="modal-body">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/4H1vPlL_OZ4" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
				</div>
			</div>
		</div>
	</div>

	<div class="main main-raised">
		<div class="container">
			<div class="section text-center section-landing" id="about">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="title">Our Product</h2>
						<p><img src="{{asset('vtran/images/pregst.png')}}" class="img-responsive center-block" /></p>
						<h5 class="description">Carry forward of input tax credit into GST regime with simplified transition solution</h5>
					</div>
				</div>
				<div class="features">
					<div class="row">
						<div class="col-md-3">
							<div class="feature feature-warning">
								<i class="material-icons">important_devices</i>
								<h4 class="title">Quick and easy online filing of GST transition forms</h4>
								<p class="description">Complicated Transition Provisions made simple using technology. Follow simple steps, fill only relevant data, submit
									GST Tran 1 and welcome to GST with input tax credit. Step-by-step guide for filing the TRAN forms. Online filing
									of all transitions forms- TRAN 1, TRAN 2, TRAN 3, TRAN 3A, TRAN 3B</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature feature-primary">
								<i class="material-icons">spellcheck</i>
								<h4 class="title">Auto filling of GST Tran 2</h4>
								<p class="description">Easy TRAN-2 filing. Just fill in the outward sales data of the pre-GST stock each month and get Tran 2 auto calculated
									and auto-populated, ready to file in  2 minutes every time.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature feature-primary">
								<i class="material-icons">directions_walk</i>
								<h4 class="title">On the go</h4>
								<p class="description">Access all your data and forms anytime anywhere, from any platform with our cloud based solution. You can edit and
									file your forms and returns on the go. Free secured storage of data and transition forms for 12 months</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature feature-success">
								<i class="material-icons">fingerprint</i>
								<h4 class="title">Banking level security</h4>
								<p class="description">Rest assured with our ISO certified highly secured servers where data is transferred with 128 bit encryption making
									data breaches a history.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section text-center" id="testimonials">
				<h2 class="title">Testimonials</h2>
				<div class="team">
					<div class="row">
						<div class="col-md-4">
							<div class="team-player">
								<img src="{{asset('vtran/images/avatarA.jpg')}}" alt="Thumbnail Image" class="img-raised img-circle">
								<h4 class="title">CA CHANDRAMOHAN <br />
									<small class="text-muted">Past President ICAI, Mangalore</small>
								</h4>
								<p class="description">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
									consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.</p>
								<!--<a href="#" class="btn btn-just-icon"><i class="fa fa-twitter"></i></a>
								<a href="#" class="btn btn-just-icon"><i class="fa fa-instagram"></i></a>
								<a href="#" class="btn btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>-->
							</div>
						</div>
						<div class="col-md-4">
							<div class="team-player">
								<img src="{{asset('vtran/images/avatarB.jpg')}}" alt="Thumbnail Image" class="img-raised img-circle">
								<h4 class="title">Mr Jayaram Panjigar<br />
									<small class="text-muted">Senior Tax Consultant</small>
								</h4>
								<p class="description">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim
									assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
								<!--<a href="#" class="btn btn-just-icon"><i class="fa fa-twitter"></i></a>
								<a href="#" class="btn btn-just-icon"><i class="fa fa-linkedin"></i></a>-->
							</div>
						</div>
						<div class="col-md-4">
							<div class="team-player">
								<img src="{{asset('vtran/images/avatarC.jpg')}}" alt="Thumbnail Image" class="img-raised img-circle">
								<h4 class="title">Mr. Mithun Chowter<br />
									<small class="text-muted">KCCI Member</small>
								</h4>
								<p class="description">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera
									gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per.</p>
								<!--<a href="#" class="btn btn-just-icon"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="btn btn-just-icon"><i class="fa fa-youtube-play"></i></a>
								<a href="#" class="btn btn-just-icon btn-default"><i class="fa fa-twitter"></i></a>-->
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="section video-section" id="video">
			<h2 class="title">Watch GST video</h2>
			<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum</p>
			<a href="#" class="play-btn" data-toggle="modal" data-target="#videoModal"><i class="material-icons">play_circle_outline</i></a>
		</div>

		<div class="container">
			<div class="section landing-section" id="contact">
				<div class="row">
                                    <h2 class="text-center title">Get in touch with us</h2>
					<div class="col-md-8">						
                                                <form class="contact-form" method="POST" name="getInTouchWith" id="getInTouchWith" action="">
                                                    {{ csrf_field()}}
                                                    <span id="mailFormSent" style="color: green;"></span>
							<div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="yourName" id="yourName" value="" />
                                                                        <label class="form-label">Your Name</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="yourPhone" id="yourPhone" value="" />
                                                                        <label class="form-label">Phone Number</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="email" class="form-control"  name="yourEmail" id="yourEmail" value="" />
                                                                        <label class="form-label">Your Email</label>
                                                                    </div>
                                                                </div>
                                                            </div>
							</div>
							<div class="form-group form-float">
                                                            <div class="form-line">
                                                                <textarea class="form-control" name="yourMsg" id="yourMsg"></textarea>
                                                                <label class="form-label">Your Messge</label>
                                                            </div>
							</div>
							<div class="row">
                                                            <div class="col-md-4 col-md-offset-4 text-center">
                                                                <button class="btn bg-green btn-raised waves-effect" id="sendMessage">
                                                                    Send Message
                                                                </button>
                                                                <span id="messageSendingLoader" style="display: none;"><img src="{{url("/images/loading.gif")}}"></img></span>
                                                            </div>
							</div>
						</form>
					</div>
                                        <div class="col-md-4">							
                                                <address class="address">
                                                <h3>Our Address</h3>
                                                Door # 000 Near Sub Station<br />
                                                Street Name<br />
                                                Landmark<br />
                                                City<br />
                                                India 654987<br />
                                                <i class="material-icons">email</i> info@vtransfer.com<br />
                                                <i class="material-icons">phone</i> +91 9876543210
                                                </address>
                                        </div>
				</div>
			</div>
		</div>
	</div>


	@push('script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js" integrity="sha384-tIwI8+qJdZBtYYCKwRkjxBGQVZS3gGozr3CtI+5JF/oL1JmPEHzCEnIKbDbLTCer"
	 crossorigin="anonymous"></script>
	<script>
            $('#signupClose').click(function(){
                $(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
           $('.customEror').html('');
                     $('#signUp').modal('toggle');
              
            });
              $('#loginClose').click(function(){
               // $(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
           $('.customEror').html('');
                     $('#logIn').modal('toggle');
              
            });
            
            //forgot password link
          /*  $('#forgotSubmitButton').on("click", function (e) {

			e.preventDefault();
			var formDataValues = document.forms.namedItem("forgot_password");
			var formValues = new FormData(formDataValues);


			$.ajax({
				type: 'POST',
				url: siteUrl + '/forgot-password-link',
				processData: false,
				contentType: false,
				dataType: 'json',
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				data: formValues,

				success: function (data) {

					console.log(data);

alert();
					
					
				},
				error: function (data) {

					console.log(data);
				

				}
			});
		});*/
            
            
            
		$('#submit-signup').on("click", function (e) {

			e.preventDefault();
			var formDataValues = document.forms.namedItem("signup-form");
			var formValues = new FormData(formDataValues);


			$.ajax({
				type: 'POST',
				url: siteUrl + '/signup',
				processData: false,
				contentType: false,
				dataType: 'json',
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				data: formValues,

				success: function (data) {

					console.log(data);


					if (data.status == 'success' && data.message == 'USER_CREATED') {
						location.href = siteUrl + '/billing-address';
					} else if (data.status == 'error' && data.message == 'EMAIL_ALREADY_EXIST') {
						$('.error-list').html('Email Already Registered').css("color", "red");

					} else {
						
					}
					
				},
				error: function (data) {
                             $('.customEror').html('');
					console.log(data);
					$("#formSuccess").hide();
					$(".error-block").html("");
					errors = $.parseJSON(data.responseText);
					$("input[name='" + Object.keys(errors)[0] + "']").focus();
					var error_list = '';
					$.each(errors, function (key, value) {
                                            $('#singnUp'+key+'Error').html(value).focus();
                                             $('#singnUp'+key+'Error').css({'color':'red'});
						error_list += value + '<br>';

					});
					//$('.error-list').html(error_list).css("color", "red");

				}
			});
		});



		//login ajax
		$('#submit-login').on("click", function (e) {

			e.preventDefault();

			var formDataValues = document.forms.namedItem("login-form");
			var formValues = new FormData(formDataValues);


			$.ajax({
				type: 'POST',
				url: siteUrl + '/login',
				processData: false,
				contentType: false,
				dataType: 'json',
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				data: formValues,

				success: function (data) {
                                    $('#loginEmailError').html('');
                                     $('#loginPasswordError').html('');
                                        if (data.status == 'error' && data.message == 'emailFailed') {
						$('#loginemailError').html('Entered Email is Wrong');
						return false;
					}
                                        if (data.status == 'error' && data.message == 'passwordWrong') {
						$('#loginpasswordError').html('Entered password is Wrong');
						return false;
					}
                                         if (data.status == 'error' && data.message == 'emailVerificationPending') {
						
                                                location.href = siteUrl + '/verify-email';
                                               // $('#loginEmailVerification').html('Please verify your Email Address to continue');
						//return false;
					}
                                        
					console.log(data);
					if (data.status == 'error' && data.redirect == 'login') {
						$('.login-error-list').html('Email or Password is Invalid').css("color", "red");
						return false;
					}
					if (data.status == 'success' && data.redirect == 'billing') {
						// alert(data.redirect);
						location.href = siteUrl + '/billing-address';
					} else if (data.status == 'success' && data.redirect == 'license') {
						location.href = siteUrl + '/license';
					} else if (data.status == 'success' && data.redirect == 'dashboard') {

						location.href = siteUrl + '/dashboard';

					}

					

				},
				error: function (data) {
                                        $('.customEror').html('');
					var error_list = '';
					errors = $.parseJSON(data.responseText);
					$.each(errors, function (key, value) {
                                              $('#login'+key+'Error').html(value).focus();
						error_list += value + '<br>';

					});
					//$('.login-error-list').html(error_list).css("color", "red");


					console.log(data);

				}
			});
		});
        var getInTouchWithForm = $("#getInTouchWith").validate({
        rules: {
            yourMsg: {
                required: true,
                minlength: 10,
            },
            yourEmail: {
                required: true,
                email: true
            },
            yourPhone: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            yourName:{
                required: true,                          
            }
        }
    });
        $(function(){
            $('#getInTouchWith').submit( function(e){
                var siteUrl = '<?php echo url('/'); ?>';
                e.preventDefault();
                var getInTouchWithFormCheck = $("#getInTouchWith").valid();
                if (!getInTouchWithFormCheck) 
                {
                    getInTouchWithFormCheck.focusInvalid();
                    return false;
                }
                else
                {
                    $('#sendMessage').attr('disabled', true);
                    $('#messageSendingLoader').show();
                    var name = $.trim($('#yourName').val());
                    var email = $.trim($('#yourEmail').val());
                    var phone = $.trim($('#yourPhone').val());
                    var message = $.trim($('#yourMsg').val());
                    var datastring = 'name='+name+'&email='+email+'&phone='+phone+'&message='+message;
                    $.ajax({
                        type: "POST", 
                        data: datastring,
                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                        url: siteUrl+'/get-in-touch-with-us', //The url where the server req would we made.
                        success: function(data) {
                            $('#sendMessage').attr('disabled', false);
                            $('#messageSendingLoader').hide();
                            $('#mailFormSent').html('<b>Message Sent Successfully..</b>');
                            setTimeout(function(){$('#mailFormSent').html(''); }, 2000);
                        }
                    });
                }
            })
        })       
	</script>
	@endpush @endsection