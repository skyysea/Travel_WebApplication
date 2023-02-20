<?php
include_once("server.php");
$page_id = $_SESSION['page_id'];
$commentQuery = "SELECT comment_id, page_id, comment, username, date FROM comment WHERE page_id = '$page_id' ORDER BY comment_id DESC";
$commentsResult = mysqli_query($conn, $commentQuery) or die("database error:". mysqli_error($conn));
$commentHTML = '';
while($comment = mysqli_fetch_assoc($commentsResult)){
	$commentHTML .= '
		<div class="detail-box">
		<h5>By <b>'.$comment["username"].'</b> on <i>'.$comment["date"].'</i><h5>
		<p>'.$comment["comment"].'</p>
		</div> <br />';
}
echo $commentHTML;

// function getCommentReply($conn, $parentId = 0, $marginLeft = 0) {
// 	$commentHTML = '';
// 	$commentQuery = "SELECT comment_id, parent_id, comment, username, date FROM comment WHERE parent_id = '".$parentId."'";	
// 	$commentsResult = mysqli_query($conn, $commentQuery);
// 	$commentsCount = mysqli_num_rows($commentsResult);
// 	if($parentId == 0) {
// 		$marginLeft = 0;
// 	} else {
// 		$marginLeft = $marginLeft + 48;
// 	}
// 	if($commentsCount > 0) {
// 		while($comment = mysqli_fetch_assoc($commentsResult)){  
// 			$commentHTML .= '
// 				<div class="panel panel-primary" style="margin-left:'.$marginLeft.'px">
// 				<div class="panel-heading">By <b>'.$comment["username"].'</b> on <i>'.$comment["date"].'</i></div>
// 				<div class="panel-body">'.$comment["comment"].'</div>
// 				</div>
// 				';
// 		}
// 	}
// 	return $commentHTML;
// }
?>