<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="refresh" content="1"/>
		<style>
			p {
				color:white;
				font-size:90px;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
			body { background-color:black; }
		</style>
		<p>
			<?php 
				/// If date displayed is wrong, add the below line. This indiactes that the timezone set was different. ///
				date_default_timezone_set("Asia/Kolkata");
				echo date(" h: i : s A");

			?> 
		</p>
	</head>