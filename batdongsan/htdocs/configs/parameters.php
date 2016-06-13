<?php
$conf_product_type = array(
		1 => "m2",
		2 => "Bộ",
		3 => "Md",
		4 => "Chiếc",
        5 => "Kg",
        6 => "Cái",
        7 => "Tấn",
        8 => "Lít",
        9 => "Can",
        10 => "Lọ",
        11 => "Bao",
        12 => "Gói",
        13 => "Viên",
        14 => "Hộp",
        15 => "m3",
        16 => "Thùng",
        17 => "Gram"
);

$conf_posts_price_active = array(
		10 => '1 ngày',
		20 => '3 ngày',
		30 => '7 ngày',
		50 => '15 ngày',
		80 => '30 ngày',
		150 => '90 ngày'
);
$conf_posts_price_gold = array(
		10 => 1,
		20 => 3,
		30 => 7,
		50 => 15,
		80 => 30,
		150 => 90
);


$conf_product_statistic = array(
		1 => 'Sản phẩm mới',
		2 => 'Sản phẩm khuyến mại',
		3 => 'Sản phẩm nổi bật',
		4 => 'Được xem nhiều nhất'
);



# Ngay thang nam
$conf_year = array();
for ($i=1950; $i<=2000; $i++){
	$conf_year[$i] = $i;
}

$conf_month = array();
for ($i=1; $i<=12; $i++){
	$conf_month[$i] = $i;
}

$conf_day = array();
for ($i=1; $i<=31; $i++){
	$conf_day[$i] = $i;
}

$conf_feedback = array(
		1 => "Báo mạng",
		2 => "Bạn bè giới thiệu",
		3 => "Kênh khác"
);


$conf_price_type = array(
		0 => "Thỏa thuận",
		1 => "Nhập giá"
);

/* config cho bat dong san */
$conf_posts_type = array(
		1 => 'Nhà đất bán',
		2 => 'Nhà cho thuê'
);

$conf_posts_position = array(
		1 => 'Tin thường',
		2 => 'Tin Vip 1',
		3 => 'Tin Vip 2',
);


$conf_posts_direction = array(
		1 => 'Đông',
		2 => 'Tây',
		3 => 'Nam',
		4 => 'Bắc',
		5 => 'Đông - Bắc',
		6 => 'Tây - Bắc',
		7 => 'Tây - Nam',
		8 => 'Đông - Nam'
);

$conf_posts_price_type = array(
		1 => 'Trăm nghìn/ m2',
		2 => 'Triệu/ m2',
		3 => 'Trăm nghìn',
		4 => 'Triệu',
		5 => 'Tỷ'
);
$conf_posts_price_type_million = array(
		1 => 0.1,
		2 => 1,
		3 => 0.1,
		4 => 1,
		5 => 1000
);


$conf_posts_size = array(
		1 => 'Nhỏ hơn 20 m2',
		2 => 'Từ 20 đến 30 m2',
		3 => 'Từ 30 đến 50 m2',
		4 => 'Từ 50 đến 80 m2',
		5 => 'Từ 80 đến 120 m2',
		6 => 'Từ 120 đến 200 m2',
		7 => 'Từ 200 đến 400 m2',
		8 => 'Từ 400 đến 600 m2',
		9 => 'Lớn hơn 600 m2'
);
$conf_posts_size_search = array(
		1 => '0,20',
		2 => '20,30',
		3 => '30,50',
		4 => '50,80',
		5 => '80,120',
		6 => '120,200',
		7 => '200,400',
		8 => '400,600',
		9 => '600,100000'
);


$conf_posts_price = array(
		1 => 'Nhỏ hơn 1 triệu',
		2 => 'Từ 1 đến 3 triệu',
		3 => 'Từ 3 đến 5 triệu',
		4 => 'Từ 5 đến 10 triệu',
		5 => 'Từ 10 đến 100 triệu',
		6 => 'Từ 100 đến 200 triệu',
		7 => 'Từ 200 đến 500 triệu',
		8 => 'Từ 500 triệu đến 1 tỷ',
		9 => 'Từ 1 đến 2 tỷ',
		10 => 'Từ 2 đến 3 tỷ',
		11 => 'Từ 3 đến 5 tỷ',
		12 => 'Từ 7 đến 10 tỷ',
		13 => 'Từ 10 đến 20 tỷ',
		14 => 'Từ 20 đến 30 tỷ',
		15 => 'Lớn hơn 30 tỷ'
);
$conf_posts_price_search = array(
		1 => '0,1',
		2 => '1,3',
		3 => '3,5',
		4 => '5,10',
		5 => '10,100',
		6 => '100,200',
		7 => '200,500',
		8 => '500,1000',
		9 => '1000,2000',
		10 => '2000,3000',
		11 => '3000,5000',
		12 => '7000,10000',
		13 => '10000,20000',
		14 => '20000,30000',
		15 => '30000,1000000'
);

?>