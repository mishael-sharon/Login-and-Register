<?php require_once("config.php");
if(isset($_POST['form_submit']))
{
	$name=trim($_POST['name']);
	$fname=trim($_POST['fname']);
	$mname=trim($_POST['mname']);
	$name=trim($_POST['name']);
	$gender=trim($_POST['gender']);
	$dob=trim($_POST['dob']);
	$address=trim($_POST['address']);
	$category=trim($_POST['category']);
	$course=trim($_POST['course']);
      // $course_2=trim($_POST['course_2']);
      // $course_3=trim($_POST['course_3']);
      // $course_4=trim($_POST['course_4']);
      // $course_5=trim($_POST['course_5']);
      $email=trim($_POST['email']);
	$mobile=trim($_POST['mobile']);
      $JEE=trim($_POST['JEE']);
      $CET=trim($_POST['CET']);
	// $pay_status='Paid'; 
	// $course_fees='6000'; 
	$reg_no='TS'.rand(99,10).time();
	//$folder = "uploads/";
// 	//Photo 
// $image_file=$_FILES['image']['name'];
//  $file = $_FILES['image']['tmp_name'];
//  $path = $folder . $image_file; 
//  $target_file=$folder.basename($image_file);
//   $file_name_array = explode(".", $image_file);
//  $extension = end($file_name_array);
//  $new_image_name = 'photo_'.rand() . '.' . $extension;

//  //Sign 
// $simage_file=$_FILES['simage']['name'];
//  $sfile = $_FILES['simage']['tmp_name'];
//  $spath = $folder . $simage_file; 
//  $starget_file=$folder.basename($simage_file);
//  $file_name_array = explode(".", $simage_file);
//  $extension = end($file_name_array);
//  $snew_image_name = 'sign_'.rand() . '.' . $extension;
// if($file!='')
// {
// move_uploaded_file($file,  $folder . $new_image_name); 
// }
// if($sfile!='')
// {
// move_uploaded_file($sfile, $folder . $snew_image_name); 
}

	$sql="INSERT into registrations(name,fname,mname,gender,dob,address,category,course,email,mobile,JEE,CET,reg_no) VALUES(:name,:fname,:mname,:gender,:dob,:address,:category,:course,:email,:mobile,:JEE,:CET,:reg_no)";
	    $stmt = $db->prepare($sql);
      $stmt->bindParam(':name', $name, PDO::PARAM_STR);
      $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
      $stmt->bindParam(':mname', $mname, PDO::PARAM_STR);
      $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
      $stmt->bindParam(':dob', $dob, PDO::PARAM_STR);
      $stmt->bindParam(':address', $address, PDO::PARAM_STR);
      $stmt->bindParam(':category', $category, PDO::PARAM_STR);
      $stmt->bindParam(':course', $course, PDO::PARAM_STR);
      // $stmt->bindParam(':course_2', $course_2, PDO::PARAM_STR);
      // $stmt->bindParam(':course_3', $course_3, PDO::PARAM_STR);
      // $stmt->bindParam(':course_4', $course_4, PDO::PARAM_STR);
      // $stmt->bindParam(':course_5', $course_5, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':mobile', $mobile, PDO::PARAM_STR);
      $stmt->bindParam(':JEE', $JEE, PDO::PARAM_STR);
      $stmt->bindParam(':CET',  $CET, PDO::PARAM_STR);
      $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
            // $stmt->bindParam(':image', $new_image_name, PDO::PARAM_STR);
      // $stmt->bindParam(':sign', $snew_image_name, PDO::PARAM_STR);
      $stmt->execute();
      $last_id = $db->lastInsertId();
      if($last_id!='')
      {
    header("location:preview.php?id=".$reg_no);
      }
      else 
      {
      	echo 'Something went wrong';
      }

