

<form class="form_validation" method="POST" action="{{url('/verify-email')}}" id="signup-form">
	{{ csrf_field() }}
	<div class="msg">Email Verfication </div>
							
							<div class="input-group">
								<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
								<div class="form-line">
									<input type="email" id="verify_email" class="form-control" name="verify_email" placeholder="Email" required autofocus>
								</div>
							</div>
							
							<button class="btn btn-block btn-raised btn-lg bg-green waves-effect" type="submit" id="emailVerifcationSubmit">Verify Email</button>
						</form>