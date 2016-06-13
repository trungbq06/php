
<div class="row col-default footer">
    <div class="container">
        <div class="col-md-9 col-sm-9 col-xs-12" style="border-right: 1px #3775db solid; padding: 10px 0px !important;">
           {$info.description}
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
        {foreach from = $gallery_p1 item = list}
            <a href="{$list.link}"><img src="{$list.img}" width="250"></a>
        {/foreach}
        </div>
    </div>
</div>
{literal}
<script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('meta[property="og:title"]').getAttribute('content') );var ga = document.createElement('script'); ga.type = 'text/javascript';ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=56b60a3d6bd0c68b1f1f36b97b61583b&data=eyJzc29faWQiOjM5MzE1NzEsImhhc2giOiJkZmNkMGI0NTdjZTUxN2Y3MzlhZjFhODRiNzA1MmNiYyJ9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script><noscript><a href="http://www.vatgia.com" title="vatgia.com" target="_blank">Tài trợ bởi vatgia.com</a></noscript><noscript><a href="http://vchat.vn" title="vchat.vn" target="_blank">Phát triển bởi vchat.vn</a></noscript>	
{/literal}      
