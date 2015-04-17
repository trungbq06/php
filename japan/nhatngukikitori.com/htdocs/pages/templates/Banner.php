<?php
		include '../model/clsBanner.php';
		include '../dao/BannerDAO.php';

?>
<a href="CacKhoaHoc.php"><image src="<?php echo getBannerById(1)->Url ?>" style="display: block; position: fixed; top: 20px; left: 30px; width:150px"></a>
<a href="https://docs.google.com/forms/d/1_h2CY1hlJisBh_w9UVT0NuXSk1b0wh-zzZDVcdgVbWQ/viewform?pli=1&edit_requested=true"><image src="<?php echo getBannerById(2)->Url ?>" style="display: block; position: fixed; top: 20px; right: 30px; width:150px"></a>
