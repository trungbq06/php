<div class="header">
            <div class="container">
              <div class="col-md-4 col-sm-4 col-xs-5 col-default">
                        <div class="logo pull-left">
                        {foreach from = $gallery_p1 item=list}
                            <a href="./"><img src="{$list.img}" ></a>
                        {/foreach}    
                            <p style="text-align: center;font-size: 19px;font-family: 'Roboto', sans-serif">HOTLINE: {$info.phone}</p>
                        </div>  
                                                      
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-7 col-default ban-ner">
                        <div class="banner pull-right">
                           <img src="{foreach from=$gallery_p3 item=data}{$data.img}{/foreach} ">
                        </div>
                       <!--  <div class="slogan">
                            <h1>MHTEC PANEL</h1>
                            <p>Giải pháp tối ưu - Giá cả cạnh tranh - Chất lượng vượt trội</p>
                        </div>      -->
                    </div> 
          </div>
        </div>