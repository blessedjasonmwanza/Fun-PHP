<?php
//LAST UPDATE 
// 02 - May - 2019	

function common_error($msg)
	{
		echo('<label style="display:block;overflow-x:hidden; width:100%; text-align:center; margin:0px; line-height:25px; background-color:rgb(125, 0, 192); color:#FFF;font-family:cambria; box-shadow:0px 1px 1px 0px; text-shadow: 1px 1px 1px grey;font-size:small;"><b style="color:red; text-shadow: 1px 1px 1px #000; ">Problem Detected : </b>'.$msg.'</label>');
	}

// echos a report based on a past in msg
function report($msg)
	{
		echo('<label style="display:block;overflow-x:hidden; width:100%; text-align:center; margin:0px; line-height:25px; background-color:rgba(0, 132, 192, 1) !important; color:#FFF;font-family:cambria; box-shadow:0px 1px 1px 0px;"><b style="color:#c3cc00;">Report: </b>'.$msg.'</label>');
	}


function import($file)
	{
		file_exists($file) ? @require $file : common_error("Could not find => ".$file);
	}

function  link_css($file)
	{
			file_exists($file) ? printf('<link rel="stylesheet" type="text/css" href="'.$file.'" >') : common_error("Could not find => ".$file);
	}

function redirect($site){
	header('Location:'.$site);
}


function html_comment($msg){
	echo "	<!--".$msg."	 -->
		  "
		;
}
function php_comment($msg){
	echo "	/*--".$msg."	 */
		  "
		;
}
function cut_story($str, $length)
{
if(strlen($str)<=$length){
	echo $str. '...';

}else{
	$y=substr($str,0,$length) . '...';
	echo $y;
}
}
function cut_story_inner($str, $length)
{
	if(strlen($str)<=$length){
		return $str. '...';

	}else{
		$y=substr($str,0,$length) . '...';
		return $y;
	}
}

//upload a photo from a stated input name
function upload_image($img_field_name, $upload_destination, $new_img_name){
    
    $img_name = $_FILES[$img_field_name]['name'];

    $extension =  pathinfo($img_name, PATHINFO_EXTENSION);
    
    $temp_location = $_FILES[$img_field_name]['tmp_name'];
    chmod($temp_location, 0755);
    if(move_uploaded_file($temp_location, $upload_destination.$new_img_name.'.'.$extension)){
        return true;
    }else{
        return false;
    }
}
//display a note area
function note($msg){
	echo '<section style="display: inline-flex;
	width: 100%;
	height: 45px;
	align-content: center;
	align-items: center;
	justify-content:center;
	padding-left: 1px;
	margin-bottom: 5px;
	background: rgba(255, 255, 255, 0.897);
	border-bottom: 1px solid rgba(0,0,0,.1);">
	'.$msg.'
	</section>';
}
// returns Ip Address
function ip()
{
	# code..
	$client_ip = @$_SERVER['HTTP_CLIENT_IP'];
	$fwd = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote = @$_SERVER['REMOTE_ADDR'];
	if (!empty($client_ip)) {
		$ip_adress = $client_ip;
		return $ip_adress;
	}elseif(!empty($fwd)){
		$ip_adress = $fwd;
		return $ip_adress;
	}else{
		$ip_adress = $remote;
		return $ip_adress;
	}
}
function stop_resubmition(){
	echo "<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>";
}
function hr(){
    echo '<span class="hr2"></span>';
}
function hr1(){
    echo '<span class="hr1 t-2px"></span>';
}
?>
