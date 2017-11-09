<?php include 'views/includes/header.php'; ?>



		<div class="container">

			<div class="col-offset-2 col-md-8">
				<img src="https://media.giphy.com/media/26n6113wG9kzJjfTq/giphy.gif" alt="kpop">

			</div>
			
			<div class="row">
				<div class="col-md-6"> 
					<p>
						Hey,<br><span class="gras"><?php echo $_GET["firstname"]; ?></span> <span class="gras"><?php echo $_GET["name"]; ?></span>, <br />
						I will call you soon on <span class="gras"><?php echo $_GET["phone"]; ?></span> cause I think you are so cute, like a kitten... <br>
						If you don't accept my call, I will hack your email : <span class="gras"><?php echo $_GET["email"]; ?></span> and crashing system banking with, so be kind :) ... ! <br />
						Thank you for your little story about "<span class="gras"><?php echo $_GET["message"]; ?></span>", I will use it for my next book about Licorn and Kitten. <br> Bye !
					</p>
				
				</div>

				<p><a href="index.php">Return Home page</a></p>
			</div>

			

			<div class="result">
				<p><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></p>
				<p><a href="update.php?id=<?php echo $data['id']; ?>">Update</a></p>  
							
			</div>
		</div>
	

	</body>
</html>		
