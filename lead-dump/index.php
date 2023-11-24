<?php 
// session_start();
// if ($_SESSION['username'] == '') {
// 	header("Location: index.php");
// 	exit;
// }

?>
<!DOCTYPE html>
<html>

<head>
	<title>Export CSV Demo</title>
	<link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
	</script>
</head>

<body>
	<style>
		select,
		input {
			display: block;
			margin-bottom: 0px;
		}
	</style>

	<form name="exportdump" method="POST" action="lead-dump.php" autocomplete="off">
		<!-- <label>Lead Type</label>
		<select name="leadtype">
			<option value="enquiry">Enquiry</option>
			<option value="sitevisit">Site Visit</option>
			<option value="brocher">Brochure Download</option>
			<option value="fblead">FB Leads</option> 
		</select>

		<br /> -->
		<label>Start Date</label>
		<input type="text" name="startdate" id="startdate" required="required">
		<br />
		<label>End Date</label>
		<input type="text" name="enddate" id="enddate" required="required">
		<br />
		<!-- <input id="exportcsv" type="button" value="Export CSV" /> -->
		<input type="submit" name="submit" value="Export CSV">
	</form>

	<script>
		$(document).ready(function() {

			$(function() {
				$("#startdate").datepicker({
					changeYear: true,
					changeMonth: true,
					dateFormat: 'yy-mm-dd',
					maxDate: 0
				});
				$("#enddate").datepicker({
					changeYear: true,
					changeMonth: true,
					dateFormat: 'yy-mm-dd',
					maxDate: 0
				});
			});
		})
	</script>

</body>

</html>