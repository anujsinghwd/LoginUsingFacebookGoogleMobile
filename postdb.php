<?php require_once 'connect.php'; ?>
<?php 
session_start();
$user_id = $_SESSION['id'];
$post = $_POST['post'];
$d = date("Y-m-d H:i:s");
$data = array();
if ($post == '') {
	echo "post can not be empty";
}
else {
$sql = "INSERT INTO posts (user_id,dayt,post)VALUES ('$user_id','$d','$post')";
mysqli_query($db,$sql); /*{
	$sql = "SELECT *FROM posts WHERE user_id = '$user_id' ";
	$rest = mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($rest)){
			array_push($data, 
				array('user_id'=>$row[0],'dayt'=>$row[1],'post'=>row[2]));
			
		}	*/
		//echo json_encode(array('result'=>$data));
			//echo json_encode($data);

		//print_r($date);
mysqli_close($db);		
}

mysqli_close($db);
?>
		