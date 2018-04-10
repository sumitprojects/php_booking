<?php
include ("dbconnection.php");
?>
<?php
$msg='';
$errormsg='';
if(isset($_POST["save"]))
{
  
      include ("dbconnection.php");
      $name    = $_POST['name'];
            $email   = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $contact_no = $_POST['contact_no'];
            $query  = "INSERT into feedback (name,email,subject,message,contact_no) VALUES('" . $name . "','" . $email . "','" . $subject . "','" . $message . "','". $contact_no ."')";

      if (mysqli_query($dbconnection, $query)) 
                {
                   header("Location: index.php");
                }
          else
                {
            $errormsg='<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Got some Error.</strong>
                </div>';
                }

}

include 'header.php';
?>
	<body>
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<?PHP
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
					<h3>CONTACT INFO</h3>
					<div class="map">
						<p>TemplateMonster provides 24/7 support for all its <span class="col1"><a href="http://www.templatemonster.com/website-templates.php" rel="nofollow">premium products</a></span>. Freebies go without it.</p>
						<p>If you have any questions regarding the customization of the chosen free theme, ask <span class="col1"><a href="http://www.templatetuning.com/" rel="nofollow">TemplateTuning</a></span> to help you on a paid basis.</p>
						<div class="clear"></div>
						<figure class="">
							<iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
						</figure>
						<address>
							<dl>
								<dt>The Company Name Inc. <br>
									8901 Marmora Road,<br>
									Glasgow, D04 89GR.
								</dt>
								<dd><span>Freephone:</span>+1 800 559 6580</dd>
								<dd><span>Telephone:</span>+1 800 603 6035</dd>
								<dd><span>FAX:</span>+1 800 889 9898</dd>
								<dd>E-mail: <a href="#" class="col1">mail@demolink.org</a></dd>
							</dl>
						</address>
					</div>
				</div>
				<div class="grid_6 prefix_1">
					<h3>GET IN TOUCH</h3>
					<form class="form-horizontal" role="form" method="POST">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword3" name="email" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3"  class="col-sm-2 control-label">Subject</label>
                        <div class="col-sm-10">
                          <input type="text"  name="subject" class="form-control">
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="message" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Contact No</label>
                        <div class="col-sm-10">
                          <input type="text" name="contact_no" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                  <div class="col-lg-12">
                    <button class="btn btn-primary" name="save" style="float: right;margin-right: 20px;">Submit</button>
                    <!-- <button class="btn btn-danger">BACK</button> -->
                  </div>
                </div>
                    </form>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<?php include 'footer.php';?>