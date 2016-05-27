<?php include('function.php'); user_session(); user_check(""); ?>
 
<div class="tp-contentwrap1">
 
<div class="left wt_25 side_1">
 
<div class="image_block">
<img src="<?php echo user_info(session_value("id"),"image_url");?>"/>
</div>
 
<div class="menu_list">
 
<li><a href="edit_profile.php">Edit Profile</a></li>
 
<li><a href="deleteac.php">Delete Account</a></li>
 
</div>
 
</div>
 
<div class="right wt_75">
<?php $id=session_value("id"); $user=$_POST['user']; $sql="SELECT * FROM member where name LIKE '%$user%' and username LIKE '%$user%'"; $result=mysql_query($sql); ?>
 
<div class="tp-contentwrap2">
 
<div class="strip-profile">You searched for terms related to "<?php echo $user;?>"</div>
 
<table>
<?php while($rows=mysql_fetch_array($result)){ $id=$rows['mem_id']; ?>
 
<tr>
 
<td class="td_1">
<?php $image=user_info($id,"image_thumb");?>
<a href="profile.php?id=<?php echo $id;?>" target="_blank"><img src="<?php echo $image;?>" width="50px"/></a>
</td>
 
<td class="left"><a href="profile.php?id=<?php echo $id;?>" target="_blank"><?php echo $rows['username']; ?></a></td>
 
</tr>
 
<?php } ?>
</table>
 
</div>
 
</div>
 
</div>