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
                {include file='../elements/category.tpl'}

                {include file='../elements/sidebar-content.tpl'}
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12 col-default content">
                {include file='../elements/slider.tpl'}
<!-- 
                <div class="sidebar">
                    {foreach from=$article_news item=list}
                     <div class="news-mobile box mobile">
                        <h3 style="padding-top: 0px; line-height:34px;">{$list.name} <i class="glyphicon glyphicon-plus pull-right" style="margin-top: 7px;"></i></h3>
                        <ul>
                        {foreach from = $list.article item = article}
                            <li>
                                <p class="tit"><a href="{$article.link}">{$article.name}</a></p>
                                <div class="{$article.link}">
                                    <a href="{$article.link}"><img src="{$article.img}"></a>
                                    <span>{$article.description}</span>
                                </div>
                            </li>
                         {/foreach}
                         </ul>
                      </div>
                      {/foreach}
                </div>
      -->          

                {include file=$content}

                
            </div>
        </div>
    </div>
    {include file='../elements/sidebar-mobi-cont.tpl'}
    {include file='../elements/footer.tpl'}

</div>
</body>
</html>