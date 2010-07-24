<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to RADII Solutions </title>
<?php $this->load->view('inc-css');?>
<?php $this->load->view('inc-js');?>


</head>
<body onload="alternate('thetable');">
<?php $this->load->view('header-new');?>
{admin_menu}
	<form action="" method="post">
		
		<table class="std" border="0" cellpadding="0" cellspacing="1" width="100%">
		<tr><th colspan="2"><h3>General</h3></th></tr>
		<tr><td>Admin User:</td><td><input name="admin_user" type="text" size=25 value="{admin_user}" /></td></tr>
		<tr><td>Debug Mode:</td><td><input name="debug_mode" type="checkbox" {debug_mode} /></td></tr>
		</table>

		<table class="std" border="0" cellpadding="0" cellspacing="1" width="100%">
		<tr><th colspan="2"><h3>Calendar</h3></th></tr>
		<tr><td>Start Time:</td><td><input name="cal_starttime" type="text" size=10 value="{cal_starttime}" /></td></tr>
		<tr><td>End Time:</td><td><input name="cal_endtime" type="text" size=10 value="{cal_endtime}" /></td></tr>
		<tr><td>Working Days:</td><td><input name="cal_workingdays" type="text" size=25 value="{cal_workingdays}" /></td></tr>
		</table>

		<input type="submit" name="submit" value="Submit" class="button" />
		
	</form>	

</div>



<?php $this->load->view('footer-new');?>            
</body>
</html>