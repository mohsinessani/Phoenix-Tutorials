<?php
include_once("tutorial.php");
$post = new Post();
if($_POST['id']){
	//previous post data
	$prev_record = $post->get_rows($_POST['id']);
	//previous total likes
	$prev_like = $prev_record['like_num'];
	//previous total dislikes
	$prev_dislike = $prev_record['dislike_num'];
	
	//calculates the numbers of like or dislike
	if($_POST['type'] == 1){
		$like = ($prev_like + 1);
		$dislike = $prev_dislike;
		$return_count = $like;
	}else{
		$like = $prev_like;
		$dislike = ($prev_dislike + 1);
		$return_count = $dislike;
	}
	
	//store update data
	$data = array('like_num'=>$like,'dislike_num'=>$dislike);
	//update condition
	$condition = array('id'=>$_POST['id']);
	//update post like dislike
	$update = $post->update($data,$condition);
	
	//return like or dislike number if update is successful, otherwise return error
	echo $update?$return_count:'err';
}
?>