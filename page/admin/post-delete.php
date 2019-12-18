<?php
	include_once '../../function/config.php';
	$id = $_GET['id'];

		// sql to delete a record
		$sql = "DELETE FROM post_collector_tbl WHERE id = $id";

		if ($con->query($sql) === TRUE) {
                echo "<script>
                alert('Record deleted successfully');
                window.location.href='post-manipulation.php';
                </script>";

	        // echo "<script>alert('Record deleted successfully')window.location.href='post-manipulation.php'</script>";
		} else {
            // echo "<script>
            // alert('".$statusMsg."');
            // window.location.href='post-manipulation.php';
            // </script>";

			echo "<script>alert('Error deleting record:".$conn->error."')window.location.href='post-manipulation.php'</script>";
		}

		$con->close();
	
?>