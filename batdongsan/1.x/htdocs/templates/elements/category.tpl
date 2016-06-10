<div class="category box">
   {foreach from=$cate_news item=list}
    <h3>{$list.name}</h3>
    <ul>
   
 {foreach from=$list.child item=child}
        <li><a href="{$child.link}">{$child.name}</a></li>
 {/foreach}    
    </ul>
   {/foreach}   
</div>