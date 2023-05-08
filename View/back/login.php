<style>
	.captcha{
		width: 100%;
		background:rgb(250, 250, 210);
		text-align:center;
		font-size:24px;
		font-weight:700;
	}
</style>
<?php
	$rand=rand(9999,1000);
?>
<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold mt-4x" style="color:#fff">Admin | Sign in</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form method="post" action="index.php?action=AdminController&act=login_action" class="login-form">
									<label for="" class="text-uppercase text-sm">Your Email </label>
									<input type="email" placeholder="Email" name="email" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb">
									<div class="col-md-6 form-group">
										<label  for="captcha">Captcha</label>
										<input type="text" name="captcha" placeholder="Enter Captcha" required 
										data-parsley-trigger="key-up" class="form-control">
										<input type="hidden" name="captcha-rand" value="<?php echo $rand;?>">
									</div>
									<div class="col-md-6 form-group">
										<label for="captcha-code">Captcha Code</label>
										<div class="captcha"><?php echo $rand;?></div>
									</div>
									<button class="btn btn-primary btn-block" id="login" name="login" type="submit">LOGIN</button>
									
								</form>

			<p style="margin-top: 4%" align="center"><a href="">Back to Home</a>	</p>
							</div>

						</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>