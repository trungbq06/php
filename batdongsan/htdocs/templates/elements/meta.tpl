<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<meta http-equiv="content-language" content="vi" />
<meta charset="UTF-8">
<base href="{$domain}"></base>
<title>{if $seo.title neq NULL} {$seo.title} - {/if}{$info.web_title}</title>
<link rel="icon" href="http://chungcuviet247.com/uploads/galleries/96-2016.05.27.032157.png" type="image/png" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="keywords" content="{if $seo.keyword neq NULL} {$seo.keyword} {else} {$info.web_keyword} {/if}" />
<meta name="description" content="{if $seo.description neq NULL} {$seo.description} {else} {$info.web_description} {/if}" />
<meta name="robots" content="noodp,index,follow" />
<meta name='revisit-after' content='1 days' />
<meta property="og:title" content="{if $seo.keyword neq NULL} {$seo.keyword} {else} {$info.web_keyword} {/if}" />
<meta property="og:type" content="{$domain}">
<meta property="og:url" content="{$this_link}" />
<meta property="og:image" content="{$domain}{$value.img}" />
<meta property="og:image:secure_url" content="{$domain}{$value.img}" >

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
<link rel="stylesheet" type="text/css" href="webroot/libs/bootstrap-3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="webroot/libs/jquery.bxslider/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="webroot/css/mobile.css" />
<link rel="stylesheet" type="text/css" href="webroot/libs/etalage/css/hoverZoomEtalage.css">

<script src="webroot/js/jquery-2.1.3.min.js"></script>
<script src="webroot/js/main.js"></script>
<script src="webroot/js/jquery.validate.js"></script>
<script src="webroot/libs/bootstrap-3.3.4/js/bootstrap.min.js"></script>
<script src="webroot/js/cart.js"></script>

<script type="text/javascript" src="webroot/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="webroot/libs/etalage/js/hoverZoomjquery.etalage.min.js"></script>
<script type="text/javascript" src="webroot/libs/analyzer/google.js"></script>