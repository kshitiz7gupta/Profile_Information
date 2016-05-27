<?php
include('session1.php');
?>
<!DOCTYPE  html>
<html>
<head>
<meta  content='text/html;  charset=UTF-8'  http-equiv='Content-Type'/>
<link  rel="stylesheet"  type="text/css"  href="style1.css"  />
<title>7topics  -  Login  Demo</title>
</head>
<body>
<header>
<nav>
<ul>
<li>7topics  Demo</li>
<li>Tutorial</li>
</ul>
</nav>
</header>
<div class="tp-content">
 
<div class="">
 
<div class="navigator left">
 
<ul>
 
<li><a href="index.php">HOME</a></li>
 
<span> &raquo; </span>
 
<li>Display user image on search in php.</li>
 
</ul>
 
</div>
 
</div>
 
<div class="wt_99 center left">
 
<div class="right search_form">
 
<form action="search.php" method="post">
<input type="text" name="user" placeholder="Search.."/>
<input type="submit" name="submit" value="Search"/>
</form>
 
</div>
 
</div>
 
<div class="tp-contentbox">
 
<div class="tp-infostrip">
 
<nav>
 
<ul>
 
<li class="left"><a href="welcome.php">Profile</a></li>
 
<li class="left"><a href="logout.php">Logout</a></li>
 
<li class="right"><a href="welcome.php">Hello <?php echo session_value("username"); ?></a></li>
 
<ul>
</nav>
 
</div>
 
<div class="tp-contentwrap1">
 
<div class="left wt_25 side_1">
 
<div class="image_block">
<img src="<?php echo user_info(session_value("id"),"image_url");?>"/>
</div>
 
<div class="menu_list">
 
<li><a href="edit_profile.php">Edit Profile</a></li>
 
</div>
 
</div>
 
<div class="right wt_75">
<?php $id=session_value("id"); $sql="SELECT * FROM member where mem_id='$id'"; $result=mysql_query($sql); $rows=mysql_fetch_array($result); ?>
 
<div class="tp-contentwrap2">
 
<div class="strip-profile">General Info</div>
 
<table>
 
<tr>
 
<td class="td_1">Username :</td>
 
<td class="left"><?php echo $rows['username']; ?></td>
 
</tr>
 
<tr>
 
<td class="td_1">Name :</td>
 
<td class="left"><?php echo $rows['name']; ?></td>
 
</tr>
 
<tr>
 
<td class="td_1">Email id :</td>
 
<td class="left"><?php echo $rows['email']; ?></td>
 
</tr>
 
<tr>
 
<td class="td_1">Date Of Birth :</td>
 
<td class="left"><?php echo $rows['dob']; ?></td>
 
</tr>
 
<tr>
 
<td class="td_1">Gender :</td>
 
<td class="left"><?php echo $rows['gender']; ?></td>
 
</tr>
 
<tr>
 
<td class="td_1">Profession :</td>
 
<td class="left"><?php echo $rows['profession']; ?></td>
 
</tr>
 
<tr>
 
<td class="td_1">Location :</td>
 
<td class="left"><?php echo $rows['address']; ?></td>
 
</tr>
 
<tr>
 
<td class="td_1">Contact No :</td>
 
<td class="left"><?php echo $rows['contact_no']; ?></td>
 
</tr>
 
</table>
 
<div class="strip-profile">About me</div>
 
<div class="wt_99 left">
<span class="left about"><?php echo $rows['about_me']; ?></span>
</div>
 
</div>
 
</div>
 
</div>
 
</div>
 
</div>
</body>
</html>