<?php
session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login'] == 'Yes')
	{
		include '../model/clsNews.php';
		include '../model/clsRootImageNews.php';
		include '../model/clsDescriptionNews.php';
		include '../dao/NewsDAO.php';
		include '../dao/RootImageNewsDAO.php';
		include '../dao/DescriptionNewsDAO.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Xóa Tin Tức</title>
<?php include"templates/styles.php" ?>
</head>
<body>
	<!-- Menu Task -->
	<?php include"templates/Menu_Task.php" ?>
	<!-- End Menu Task -->

	<!-- Menu -->
	<?php include"templates/Menu.php" ?>
	<!-- End Menu -->
	
	<br>
	
	<div style="padding-left: 50px;">	
		<table class="hovertable">
		<caption>Danh Sách Tin Tức</caption>
			<tr>
				<th>STT</th>
				<th>Tiêu Đề</th>
				<th>Xóa</th>
			</tr>
			<?php
			$News=readNews();
			$count = 0;
				foreach($News as $item)
				{
					$count++;
			?>
			<tr onmouseover="this.style.backgroundColor='#ffff66';"
				onmouseout="this.style.backgroundColor='#d4e3e5';">
                
				<form action="../controller/NewsController.php" method="post">
                <input type="hidden" name="id" value="<?php echo $item->Id ?>">
				<td><?php echo $count ?></td>
				<td><?php echo $item->Title ?></td>
				<td>
					<p class="submit">
					<input type="submit" name="commit" value="Xóa">
					</p>
				</td>
                
                </form>
			</tr>	
			<?php
				}
			?>
		</table>
	</div>
</body>
</html>
<?php
		}
	}
?>
