 <div class="breadcrumb">
    <ul>
        {$site_map}
    </ul>
</div>
<div><h3>{$category}</h3></div>
<div>                 
    <div class="news-list full-content">

        {foreach from=$result item=data}
            <div class="row col-default list">
                <div class="col-md-2 col-sm-3 col-xs-3 col-default image">
                    <a href="{$data.link}"><img src="{$data.img}"></a>
                </div>
                <div class="col-md-10 col-sm-9 col-xs-9 infomation">
                    <h5><a href="{$data.link}">{$data.name}</a></h5>
                    <p style="font-style: italic;">Đăng ngày: {$data.created}</p>
                    <p>{$data.description}</p>

                    <p class="view-more"><a href="{$data.link}">Xem chi tiết >> </a></p>
                </div>
            </div> 
        {/foreach}
        <div class="pagging">
                                   {if $fields > $pagesize}<div class="paging">{$paging}</div>{/if}
                          
                        </div><!--end .pagging-->
    </div>
</div><!--end .content-->
                  