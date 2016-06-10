{foreach from=$product item=data}
<div class="col-item col-md-3 col-sm-6 col-xs-6 col-default">
    <div class="item">
         <a href="{$data.link}"><img src="{$data.img}"></a>
         <p class="name">
             <a href="{$data.link}">{$data.name}</a>
         </p>
    </div>
</div>

{/foreach}

<div class="paging mar-top">{$paging}</div>

