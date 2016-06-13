<div class="">
{if $member.role eq 1}
    <h3 style="background: red">Sản phẩm chưa được phê duyệt</h3>
    <div class="products-box">
{foreach from=$product1 item=data}
<div class="col-item col-md-3 col-sm-6 col-xs-6 col-default">
    <div class="item">
         <a href="{$data.link}"><img src="{$data.img}"></a>
         <p class="name">
             <a href="{$data.link}">{$data.name}</a>
         </p>
    </div>
</div>
{/foreach}

    </div>
  {/if}  
    <div class="clearfix"></div>
    <h3>Sản phẩm</h3>
    <div class="products-box">

      
       
        	 {include file='../elements/item-product.tpl'}


        
    </div>
    
</div><!--end .content-->
{include file='../elements/feature.tpl'}