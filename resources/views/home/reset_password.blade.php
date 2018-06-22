  <form class="collapse form_validation" id="forgot_password" method="POST" action="{{url('/update-user-password')}}">
                                                {{ csrf_field() }}
							<div class="msg">Enter New Password</div>
								<div class="input-group">
								<span class="input-group-addon">
										<i class="material-icons">lock</i>
									</span>
								<div class="form-line">
									<input type="password" class="form-control" name="password" placeholder="Password" value="" required>
								</div>
                                                             <label id="resetPassword" class="" for="password"></label>
							</div>
                                                        	<div class="input-group">
								<span class="input-group-addon">
										<i class="material-icons">lock</i>
									</span>
								<div class="form-line">
									<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" value="" required>
								</div>
                                                             <label id="resetConfirmPassword" class="" for="password"></label>
							</div>
							<button class="btn btn-block btn-raised bg-green waves-effect" type="submit" id="forgotSubmitButton">Update Password</button>
						</form>