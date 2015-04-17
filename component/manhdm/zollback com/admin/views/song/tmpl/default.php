<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>

<?php $rows = $this->rows; ?>

<h3>Danh sách bài hát</h3>

<table cellspacing='0'>
	<thead>
		<th>Tên bài hát</th> <th>Mô tả</th> <th>Ảnh</th> <th>Tình trạng</th>
	</thead>

	<tbody>

	<?php foreach ($rows as $row) { ?>
		<!-- Table template -->
		<tr>
			<td> <?php echo $row[4]; ?> </td><!-- Name -->
		 	<td> <?php echo $row[5]; ?> </td><!-- Description -->
		 	<td> <img style="width:40%" src=" <?php echo $row[6]; ?>" alt="song image"> </td><!-- Image -->
		 	<td> <?php echo _zb_p($row[7]); ?> </td><!-- Published -->
		</tr>

	<?php } ?>

	</tbody>

</table>