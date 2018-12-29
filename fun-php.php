<?php


function common_error($msg)
	{
		echo('<label style="display:block;overflow-x:hidden; width:100%; text-align:center; margin:0px; line-height:25px; background-color:rgb(125, 0, 192); color:#FFF;font-family:cambria; box-shadow:0px 1px 1px 0px; text-shadow: 1px 1px 1px grey;font-size:16.8px;"><b style="color:red; text-shadow: 1px 1px 1px #000; ">Problem Detected : </b>'.$msg.'</label>');
	}

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


function developer_html_watermark($msg){
	echo "	<!--".$msg."	 -->
		  "
		;
}


?>
