<div class="content" style="padding-left:0px !important;">
     {foreach from=$construction item=list}
    <h3>{$list.name}</h3>
    <div class="products-box">

        {foreach from=$list.article item=data}
        <div class="col-item col-md-3 col-sm-6 col-xs-6 col-default">
            <div class="item">
                 <a href="{$data.link}"><img src="{$data.img}"></a>
                 <p class="name">
                     <a href="{$data.link}">{$data.name}</a>
                 </p>
            </div>
        </div>
        {/foreach}
       {/foreach}
    </div>
</div><!--end .content-->
{foreach from = $gallery_p5 item = list}
<a href="{$list.link}"><img src="{$list.img}" width="100%"></a>
{/foreach}