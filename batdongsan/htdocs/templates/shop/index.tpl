<div class="wap-x100 shop_container">
    <div class="list_shop">
        <div class="title_list_shop"><img src="{$webroot}images/img/bannercuahangnew.png" alt=""/></div>
        {foreach from=$list key=k item=item_list}
        <div class="item_list_shop">
            <div class="icon_title_list"></div>
            <p><a href="{$rootPath}cuahang">{$item_list.address} | {$item_list.name} | {$item_list.hotline}</a></p>
        </div>
        {/foreach}
        <div class="clear"></div>
    </div>

</div>