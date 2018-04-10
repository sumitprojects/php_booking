<?php
include 'header.php';
?>
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
				<h3><a href="rooms.php">ROOMS</a>/<a href="suits.php">SUITS</a>/COMPARE ROOM TYPES</h3>
				<div class="banners">
					<div class="grid_4">
						<div class="banner">
							<img src="images/E.jpg" alt="">
							<div class="label">
								<div class="title">DELUXE GUEST ROOM</div>
								<div class="price">from<span>$ 1.600</span></div>
								<a href="deluxe.php">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/F.png" alt="">
							<div class="label">
								<div class="title">SUPERIOR GUEST ROOM</div>
								<div class="price">from<span>$ 2000</span></div>
								<a href="sup.php">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/G.jpg" alt="">
							<div class="label">
								<div class="title">CLUB LEVEL GUEST ROOM</div>
								<div class="price">from<span>$ 1.500</span></div>
								<a href="guest.php">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
<?php include 'footer.php';?>