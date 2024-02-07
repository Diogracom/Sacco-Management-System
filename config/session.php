<?php include ('connect.php');
 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['tid']) || (trim($_SESSION['tid']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php 
}
$session_id=$_SESSION['tid'];

$user_query = mysqli_query($link, "SELECT * FROM user WHERE id = '$session_id'")or die(mysqli_error());
$user = mysqli_fetch_array($user_query);
$name = $user['username'];
$email = $user['email'];

?>