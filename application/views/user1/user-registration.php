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
<style>
	
	.focs:focus
	{
		box-shadow: 5px 5px 5px 5px grey ;
	}


	select:focus
	{
		box-shadow: 5px 5px 5px 5px grey ;
	}

	b
	{
		text-shadow: 1px 5px 10px grey;
	}

	img
		{
			margin-top: 8px;
			margin-left: 43%;
			height: 65px;
			width: 180px;
		}



</style>
<style type="text/javascript">
	

</style>
	


</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include_once("LoginHeader.php"); ?>
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="<?php echo base_url("resources/user/") ?>images/home-background.jpg">
	
	<div class="container">

		<center>
	
		<form enctype="multipart/form-data" method="post" action="<?php echo site_url("user/UserRegister/insertregdata")?>">
			<table width="700px" style="mar">
				<tr><td colspan="3" ><b><h1><u>Registration</u><br><br></h1></b></td></tr>
			<tr>
				<td colspan="2" align="center">
						<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
										<img class="profile-pic" src="images/user-avatar-placeholder.png"  alt="" />
										<div class="upload-button"></div>
										<input class="file-upload" type="file" name="profilepic" accept="image/*"/>
									</div>
								</div>

				</td>
			</tr>
			<tr>
				<td colspan="2"><input class="focs" type="" name="uname" id="txtuname" onblur="a()" placeholder="enter name"></td>
				<td><p id="p1"></p></td>
			</tr>

			<tr>
				<td colspan="2"><input class="focs" name="email" id="txtemail" onblur="c()" placeholder="enter email id"></td>
				<td><p id="p3"></p></td>
			</tr>
			
			<tr >
			<div class="input-with-icon-left">
				<td style="margin-left: -10%" align="center">selcet gender:- </td>

				<td style="position: absolute; height: 20px;margin-top:5px ;">
					<input class="male" type="radio" name="gender" value="male">
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
			</div>	
			</tr>
			<tr>
				<td colspan="2">
					<select name="selcat" class="focs">
						<option>select category</option>
					<?php
						foreach ($categorydata as $cat) 
						{ 
					?>
						<option value="<?= $cat->CategoryID  ?>"><?php echo $cat->CategoryName ?></option>
					<?php
						}
					?>		
					</select>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<select name="selcat" class="focs">
						<option>select subcategory</option>
					<?php
						foreach ($subcategorydata as $subcat) 
						{ 
					?>
						<option value="<?= $subcat->SkillID  ?>"><?php echo $subcat->SkillName ?></option>
					<?php
						}
					?>		
					</select></td>
			</tr>

			<tr>
				<td colspan="2"><textarea class="focs" name="bios" id="txtemail" onblur="c()" placeholder="Bios"></textarea></td>
				<td><p id="p3"></p></td>
			</tr>
			
			<tr>
				<td colspan="2">	
					<select name="city" class="focs">
						<option>select city</option>
					<?php
						foreach ($citydata as $c) 
						{ 
					?>
						<option value="<?=$c->CityID  ?>"><?php echo $c->CityName ?></option>
					<?php
						}
					?>	
					</select>
				</td>
			</tr>
			<tr>
				<td align="center">select date</td>
				<td><input class="focs" type="date" name="badate" placeholder="select date"></td>
			</tr>

			<tr>
				
				<td colspan="2"><input class="focs" type="" name="fields" id="qili" onblur="d()" placeholder="enter your qualification"></td>
				<td><p id="p4"></p></td>
			</tr>

			<tr>
				<td colspan="2">
					<?php
						$a=1;
					?>		
					<select name="selexp" class="focs">
						<option>
							select experince
						</option>
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
				<td colspan="2"><input class="focs" type="password" name="txtpwd" id="pwd1" onblur="e()" placeholder="enter password"></td>
				<td><p id="p5"></p></td>
			</tr>
			<tr>
				<td colspan="2"><input class="focs" type="password" name="txtcpwd" id="cpwd1" onblur="f()" placeholder="conform password " ></td>
				<td><p id="p6"></p></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" style="width: 22%;background-color: white;
					color: grey" name="btnsubmit" value="submit">
					<input type="reset" name="btnreset" style="width: 22%;" value="reset">
				</td>
			</tr>
			</table>
		</form>
		</center>
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