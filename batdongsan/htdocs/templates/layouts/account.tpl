<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

{include file='../elements/meta.tpl'}

</head>
<body>
<div id="page" class="full-content">
	<section class="header-desktop">
        <div class="row col-default">
    	    {include file='../elements/header.tpl'}
    	</div>
        <div class="row col-default">
            {include file='../elements/menu.tpl'}
        </div>
    </section>
    {include file='../elements/header-mobile.tpl'}

    <div class="row cate-mbile col-default">
        <div class="container">
            <div class="col-md-3 col-sm-4 col-xs-12 col-default sidebar">
            <div class="category box">
            <ul>
                {$bar} 
             </ul>
             </div>    
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12 col-default content">
                

                {include file=$content}

                
            </div>
        </div>
    </div>
    {include file='../elements/sidebar-mobi-cont.tpl'}
    {include file='../elements/footer.tpl'}

</div>
</body>
</html>