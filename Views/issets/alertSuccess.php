<?php
	require 'header.php';
?>

<title>Bootstrap Elegant Success Modal</title>
</head>
<body>
<div class="text-center">
	<a href="#myModal" data-toggle="modal">Click to Open Success Modal</a>
</div>

<!-- Modal HTML -->
<?php
$info1 = "Great!";
$info2 = "Your account has been created successfully";
$info3 = "Start Exploring";
	function alerteSuccess($info1,$info2,$info3){
		echo '<div id="myModal" class="modal fade">
				<div class="modal-dialog modal-confirm">
					<div class="modal-content">
						<div class="modal-header justify-content-center">
							<div class="icon-box">
								<i class="material-icons">&#xE876;</i>
							</div>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body text-center">
							<h4>'.$info1.'</h4>	
							<p>'.$info2.'.</p>
							<button class="btn btn-success" data-dismiss="modal"><span>'.$info3.'</span> <i class="material-icons">&#xE5C8;</i></button>
						</div>
					</div>
				</div>
			</div> ';
	}
	alerteSuccess($info1,$info2,$info3);
?>  
</body>
</html>                            