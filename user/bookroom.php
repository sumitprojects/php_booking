<?php
	include 'header.php';
	include("dbconnection.php");
	include 'function.php';
	$selectedcity = selectalldataby("hotels");

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
            <h3>BOOK YOUR STAY HERE</h3>
            <span> <?php
					if ( !empty($_SESSION[ 'error' ]) ) {
						echo $_SESSION[ 'error' ];
					}
				?></span>
            <div class="tab-pane active tab1">
                <form class="form-horizontal" role="form" method="POST" action="validate.php" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Guest Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="guest_name">
                        </div>
                    </div>
                    <div id="wrapper">
                        <div class="header">
                            <div id="multiple" class="article">
                                <div class="title">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Select Dates for Booking</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="text-calendar" name="daterange" class="calendar form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Select Hotel By city</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="city" name="city">
								<?php foreach ( $selectedcity as $col => $row ) : ?>
                                    <option value="<?= $row[ 'hotel_id' ] ?>"><?= $row[ 'hotel_name' ] . " in " . $row[ 'city' ] ?></option>
								<?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Room Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="room" name="room_type">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Adult</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="adult">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Children</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="children">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input class="btn btn-primary" name="book" type="submit" value="submit" style="float: right;margin-right: 20px;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var helpers =
            {
                buildDropdown: function(result, dropdown, emptyMessage)
                {
                    // Remove current options
                    dropdown.html('');
                    // Add the empty option with the empty message
                    dropdown.append('<option value="">' + emptyMessage + '</option>');
                    // Check result isnt empty
                    if(result != '')
                    {
                        // Loop through each of the results and append the option to the dropdown
                        $.each(result, function(k, v) {
                            dropdown.append('<option value="' + v.room_type + '">' + v.room_type + '</option>');
                        });
                    }
                }
            }
        $(document).ready(function () {
            $("#city").change(function () {
                var city = $("#city option:selected").val();
                $.ajax({
                    type:'POST',
                    url:'validate.php',
                    data:'city='+city,
                    success:function(data){
                        helpers.buildDropdown(
                            jQuery.parseJSON(data),
                            $('#room'),
                            'Select an option'
                        );
                    }
                });
            });
            var city = $("#city option:selected").val();
            console.log(city);
            $.ajax({
                type:'POST',
                url:'validate.php',
                data:'city='+city,
                success:function(data){
                    console.log(data);
                    helpers.buildDropdown(
                        JSON.parse(data),
                        $('#room'),
                        'Select an option'
                    );
                }
            });
        });
    </script>
    <!--==============================footer=================================-->
	<?php
		if ( !empty($_SESSION[ 'error' ]) ) {
			unset($_SESSION[ 'error' ]);
		}
	?>
<?php include 'footer.php'; ?>