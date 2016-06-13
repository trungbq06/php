<div class="title home"><h3 class="cont">{$trans.product_search}</h3></div>

<div id="product">
    {foreach from=$data item=list}
        <div class="wap-x25">
            {include file='../elements/product.tpl'}
        </div>
    {/foreach}
    <div class="clear"></div>
    {if $num_fields > 20}<div class="paging">{$paging}</div>{/if}
</div>



<div class="bor pad align-cen">
    <p>{$list.mess}</p>
</div>



