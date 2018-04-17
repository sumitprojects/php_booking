<?php
	include 'header.php';
	include 'function.php';
?>

    <body>
<!--==============================header=================================-->
<header>
    <div class="container_12">
        <div class="grid_12">
            <div class="menu_block">
				<?PHP include 'menu.php'; ?>
                <div class="clear"></div>
            </div>
        </div>

    </div>
</header>
<!--==============================Content=================================-->
<div class="content">
    <div class="container_12">
        

        <div class="grid_12">
                    <h3>Payment Info</h3>
                    <div class="clear cl1"></div>
                    <form method="POST" class="form-horizontal" role="form" id="form" action="validate.php" enctype="multipart/form-data">
                        <div class="form-group">
                        <label for="check_in" class="col-sm-2 control-label">Card No:</label>
                        <div class="col-sm-10">
                          <input type="text" name="card_no" class="form-control" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}">
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="check_in" class="col-sm-2 control-label">CVV No:</label>
                        <div class="col-sm-10">
                          <input type="text" name="cvv" class="form-control" pattern="[0-9]{3}" maxlength="3">
                        </div>
                      </div>      
                      <div class="row">
                  <div class="col-lg-12">
                    <input class="btn btn-primary" name="payment" style="float: right;margin-right: 20px;" type="submit" value="Paynow">
                    
                  </div>
                </div>
                    </form>
                    
            
                </div>
    </div>
</div>
<!--==============================footer=================================-->
<?php include 'footer.php'; ?>