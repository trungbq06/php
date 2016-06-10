<div class="menu-box">
    <div class="container">
        <ul class="menu">
            {foreach from=$menu_p1 item=data}
            <li><a href="{$data.link}">{$data.name}</a>
                {if $data.child neq null}
                    <ul>
                     {foreach from=$data.child item=child}
                     <li><a href="{$child.link}">{$child.name}</a></li> 
                     {/foreach}
                    </ul>
                {/if}
            </li>
            {/foreach}
           
        </ul>
        
        <!--<ul style="float: right" class="menu">
         {if $member.id eq 0}
        <li><a href="dang-nhap.html">Đăng nhập</a></li>
        <li><a href="dang-ky.html">Đăng ký</a></li>
        {else}
        <li><a href="tai-khoan.html">Hi, {$member.name}</a></li>
        <li><a href="?mod=member&site=logout" onclick="return confirm('Bạn có chắc chắn muốn thoát không?')">Đăng xuất</a></li>
        {/if}
        </ul>

         <div class="pull-right search-input">
            <input type="text" name="search">
        </div> -->

    </div>
</div>