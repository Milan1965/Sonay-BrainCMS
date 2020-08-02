<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Rooster</title>
</head>

<body>

	<div class="container">
        <div class="row">
			<div class="col-12">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#d32f2f;background-image:url(/templates/david_vox/img/party.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">Rooster</font></div>
						<div class="desc"><font color="white">Het rooster van <?= $config['hotelName'] ?>Radio</font></div>
					</div>
					<div class="png20">
						<div style="display:block;overflow:hidden;width:100%;height: 1500px;">
							<iframe src="kankeraap" frameborder="0" allowtransparency="true" style="margin-top:-260px;width: 100%;height: 2200px; border: 0;"></iframe>
						</div>
					</div>
				</div>
			</div>
        </div>
			
<?php
include "includes/footer.php"
?>
        </div>
    </div>
    </body>
<?php
include "includes/scripts.php"
?>
</html>