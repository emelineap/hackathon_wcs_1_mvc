<?php include 'includes/header.php'; ?>

		<div class="container">
			
			<div class="heading">
				<h2>Register</h2>
			</div>

			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">

					<form id="contact-form" method="POST" action="index.php?section=add" role="form">
						<div class="row">
							<div class="col-md-6">
								<label for="username">Username <span class="blue">*</span></label>
								<input type="text" id="username" name="username" class="form-control" placeholder="Username"  value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
								<p class="error"><?php if (isset($error['username'])) echo $error['username'];?></p>
							</div>

							<div class="col-md-6">
								<label for="email">Email <span class="blue">*</span></label>
								<input type="text" id="email" name="email" class="form-control" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
								<p class="error"><?php if (isset($error['email'])) echo $error['email'];?></p>
							</div>

							<div class="col-md-6">
								<label for="birthday">Birthday <span class="blue">*</span></label>
								<input type="date" id="birthday" name="birthday" class="form-control" placeholder="Birthday" value="<?php if(isset($_POST['birthday'])) echo $_POST['birthday']; ?>">
								<p class="error"><?php if (isset($error['birthday'])) echo $error['birthday'];?></p>
							</div>

							<div class="col-md-6">
								<label for="phone">Phone <span class="blue">*</span></label>
								<input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>">
								<p class="error"><?php if (isset($error['phone'])) echo $error['phone'];?></p>	
							</div>

							<div class="col-md-6">
								<label for="zipcode">Zipcode <span class="blue">*</span></label>
								<input type="number" id="zipcode" name="zipcode" class="form-control" placeholder="Zipcode" value="<?php if(isset($_POST['zipcode'])) echo $_POST['zipcode']; ?>">
								<p class="error"><?php if (isset($error['zipcode'])) echo $error['zipcode'];?></p>	
							</div>

								<div class="col-md-6">
								<label for="avatar">Avatar <span class="blue">*</span></label>
								<input type="url" id="avatar" name="avatar" class="form-control" placeholder="http://" value="<?php if(isset($_POST['avatar'])) echo $_POST['avatar']; ?>">
								<p class="error"><?php if (isset($error['avatar'])) echo $error['avatar'];?></p>	
							</div>
								
								<div class="col-md-12">
									<p class="blue"><span>* These informations are required.</span></p>
								</div>

								<div class="col-md-12">
									<input type="submit" name="formulaire_post"class="button1" value="Submit">
								</div>
								
						</div>
					</form>
				</div>
			</div>	
		</div>



<?php include 'includes/footer.php'; ?>
