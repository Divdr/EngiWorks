<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Feb 2020 19:08:35 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<?php include_once("scripts.php") ?>
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include_once("header.php"); ?>
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="<?php echo base_url("resources/user/") ?>images/home-background.jpg">
	
	<div class="container">
			
		<form method="post" action="<?php echo site_url("user/UserRegister/insertregdata/")?>" >
			<table width="700px" style="mar">
				<tr><td colspan="3" ><b><h1><u>Registration</u><br><br></h1></b></td></tr>
			<tr>
				<td>enter name :- </td>
				<td><input type="" name="uname" id="txtuname" onblur="a()"></td>
				<td><p id="p1"></p></td>
			</tr>
			<tr>
				<td>enter address :- </td>
				<td>
					<textarea name="add" id="txtadd" cols="22" rows="3" onblur="b()"></textarea>
				</td>
				<td><p id="p2"></p></td>
			</tr>
			<tr>
				<td>enter email id :-</td>
				<td><input type="" name="email" id="txtemail" onblur="c()"></td>
				<td><p id="p3"></p></td>
			</tr>
			<tr >
				<td style="margin-left: -10%">selcet gender:- </td>

				<td style="position: absolute; height: 20px;margin-top:5px ;">
					<input  type="radio" name="gender" value="male">
				</td>
				 <td style="position: absolute ;width:50px;margin-left: 2%">
				 	male
				 </td>
				
				<td style="position: absolute; height: 20px;margin-top:5px;margin-left: 7%">
					<input  type="radio" name="gender" value="female">
				</td>
				 <td style="position: absolute ;width:50px;margin-left: 9%">
				 	female
				 </td>
					
					
		

			</tr>
			<tr>
				<td>select catagories :- </td>
				<td>
					<select name="selcat">
						<option value="civil engineer">civil engineer</option>	
						<option value="mechinical engineer">mechinical engineer</option>	
						<option value="it engineer">it engineer </option>	
						<option value="computer engineer">computer engineer </option>	
						<option value="dfj">dfj</option>	
					</select>
				</td>
			</tr>

			<tr>
				<td>enter bios</td>
				<td><input type="" name="bios"></td>
			</tr>

			<tr>
				<td>select date</td>
				<td><input type="date" name="badate"></td>
			</tr>

			<tr>
				<td>enter your qualification :</td>
				<td><input type="" name="fields" id="qili" onblur="d()"></td>
				<td><p id="p4"></p></td>
			</tr>

			<tr>
				<td>enter your experience</td>
				<td>
					<?php
						$a=1;
					?>		
					<select name="selexp">
					<?php
						for ($a=1; $a <= 20; $a++) 
						{ 
					?>
						<option value="<?php echo $a ; ?>"><?php echo $a; ?></option>
					<?php
						}
					?>	
					</select>
				</td>
			</tr>
			<tr>
				<td>enter password :-</td>
				<td><input type="password" name="txtpwd" id="pwd1" onblur="e()"></td>
				<td><p id="p5"></p></td>
			</tr>
			<tr>
				<td>conform password :-</td>
				<td><input type="password" name="txtcpwd" id="cpwd1" onblur="f()"></td>
				<td><p id="p6"></p></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" style="width: 22%;background-color: lightblue;
					color: grey" name="btnsubmit" value="submit">
					<input type="reset" style="width: 22%;background-color: lightblue;
					color: grey" name="btnreset" style="width: 22%;" value="reset">
				</td>
			</tr>
			</table>
		</form>

	</div>
</div>

<!-- Content
================================================== -->
<!-- Category Boxes -->

<!-- Category Boxes / End -->


<!-- Features Jobs -->

<!-- Featured Jobs / End -->


<!-- Features Cities -->

<!-- Features Cities / End -->


<!-- Highest Rated Freelancers -->

<!-- Highest Rated Freelancers / End-->


<!-- Membership Plans -->

<!-- Membership Plans / End-->

<!-- Footer
================================================== -->
<?php include_once("footer.php"); ?>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<?php include_once("scripts.php") ?>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places&amp;callback=initAutocomplete"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Feb 2020 19:09:48 GMT -->
</html>