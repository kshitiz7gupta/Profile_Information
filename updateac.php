<?php include('function.php'); user_session(); if(isset($_POST['submit'])){ $id=session_value("id"); $image=$_POST['image_file']; $name=$_POST['name']; $email=$_POST['email']; $dob=$_POST['dob']; $gender=$_POST['gender']; $profession=$_POST['profession']; $location=$_POST['location']; $website=$_POST['website']; $about_me=$_POST['about_me']; $image_row=user_info($id,"image_check"); if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) { header("location: edit_profile.php?remarks=invalid_email"); }elseif($name=="") { header("location: edit_profile.php?remarks=invalid_email"); }else{ require_once('ImageManipulator.php'); $validExtensions = array('.jpg', '.jpeg', '.gif', '.png','.JPG', '.JPEG', '.GIF', '.PNG'); $fileExtension = strrchr($_FILES['image_file']['name'], "."); if (in_array($fileExtension, $validExtensions)) { $newNamePrefix = $id."_".time() . '_'; $manipulator = new ImageManipulator($_FILES['image_file']['tmp_name']); $width = $manipulator->getWidth();
$height = $manipulator->getHeight();
$newImage = $manipulator->resample(212,200,false);//Resizing Image to fit in profile
$manipulator->save('upload/pic_'.$newNamePrefix.$_FILES['image_file']['name']);// saving image to upload folder
$newImage = $manipulator->resample(120,120,false);//Shop resize 415px x 321px
$manipulator->save('upload/thumb_'.$newNamePrefix.$_FILES['image_file']['name']);// saving pic thumbnail to upload folder
$pic_url="".$newNamePrefix.$_FILES['image_file']['name']."";
echo '
 
success ...
 
';
} else {
echo '
 
You must upload an image...
 
';
}
if($pic_url==""){
$pic_url=user_info($id,"image");
}else{
$get_image=user_info($id,"image_check");
$image_url="upload/pic_".$get_image;
$image_thumb="upload/thumb_".$get_image;
unlink($image_url);
unlink($image_thumb);
}
 
mysql_query("Update member set image_url='$pic_url',name='$name',email='$email', dob='$dob',gender='$gender',profession='$profession', location='$location',
website='$website', about_me='$about_me' where mem_id='$id'");
 
header("location: welcome.php?remarks=updated");
}
}else{
header("location: welcome.php?remarks=access_denied");
}
 
?>