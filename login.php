<?php include 'header.php';?>
	<body>
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<?php
							include 'menu.php';
						?>
						<div class="clear"></div>
					</div>
				</div>
				
			</div>
		</header>	
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="grid_5">
					<h3>NOT A MEMBER?</h3>
					<div class="map">
						<p>Register Now And Find Our Special Offers</p>
						<a href="regs.php" data-type="submit" name="submit" class="btn">Register Now</a>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_6 prefix_1">
					<h3>LOGIN HERE</h3>
					<form class="form-horizontal" role="form" method="POST" action="validate.php">

						<div class="success_wrapper">
						</div>
						<div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="uname">
                        </div>
                      </div>
						<div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputEmail3" placeholder="password" name="password">
                        </div>
                      </div>
						<div>
							<div class="clear"></div>
							<div class="btns">
								<input  type="submit" class="btn btn-primary" name="userlogin" style="float: right;margin-right: 20px;" value="Login">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
<?php include 'footer.php';?>