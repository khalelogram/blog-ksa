<?php
  include_once '../../function/config.php';
  $upload_dir = '../../assets/uploaded-post-img/';
  if (isset($_POST['save'])) {
    $user_id = $_POST['userid'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

    if(empty($title)){
			$errorMsg = 'Please insert a Title';
		}elseif(empty($content)){
			$errorMsg = 'Please insert Content';
		// }elseif(empty($email)){
		// 	$errorMsg = 'Please input email';
		}else{

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$postImg = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$postImg);
				}else{
					echo $errorMsg = 'Image too large';
				}
			}else{
				echo $errorMsg = 'Please select a valid image';
			}
		}


		if(!isset($errorMsg)){
			$sql = "insert into post_collector_tbl(user_id, image, post_content, title)
					values('".$user_id."', '".$postImg."', '".$content."', '".$title."')";
			$result = mysqli_query($con, $sql);
			if($result){
				// $successMsg = 'New record added successfully';
				// header('Location: index.php');

				echo "<script>
                alert('Successfully Added');
                window.location.href='post-manipulation.php';
                </script>";

			}else{
				$errorMsg = 'Error '.mysqli_error($con);

				echo "<script>
                alert('".$errorMsg."');
                window.location.href='post-manipulation.php';
                </script>";

			}
		}
  }
?>
