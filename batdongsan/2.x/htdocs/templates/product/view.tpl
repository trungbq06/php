<div class="content" style="margin-bottom: 20px;">
                        {include file="../elements/breadcrumb.tpl"}
                       
                        <div class="data-info">
                            <div class="col-md-6 col-sm-4 col-xs-12">
                                <ul id="etalage">
                                    <li>
                                        <img class="etalage_source_image" src="{$value.img}"
                                        title="{$value.name}" /> 
                                        <img class="etalage_thumb_image" src="{$value.img}" />
                                        </li>
                                </ul>
                                <img class="img-detailt-sp" src="{$value.img}"
                                        title="{$value.name}" style="width: 100%; margin-bottom: 10px;" /> 
                            </div>
                            <div class="col-md-6 col-sm-8 col-xs-12">
                                <h1>{$value.name}</h1>
                                <div class="sp-info">
                               	    <p><label>Giá bán:</label> <strong style="color: #f40;">{$value.price_sale}</strong></p>
                                    <!--<p><label>Giá cũ:</label> <strong style="text-decoration:line-through;">{$value.price}</strong></p>-->
                                    <p><label>Chủ đầu tư:</label> {$value.maker}</p>
                                    <p><label>Danh mục:</label> {$value.category}</p>
                                    <p><label>Địa chỉ:</label> {$value.code}</p>
                                    <p style="font-size: 13px;">{$value.description}</p>
                                </div>
                               <!--  <div class="btn_cart">
                                    <button class="addtocart add_cart" data-id="{$value.id}">Thêm giỏ hàng</button>
                                    <button class="buynow-notlogin">Liên Hệ</button> 
                                </div>
                                 -->
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 detailt-sp" style="margin-top: 20px !important;">
                                <h3 style="margin-bottom: 15px;">Thông tin chi tiết</h3>
                            {$value.content}</div>
                        </div>
                    </div><!--end .content-->

                    <div class="content" style="padding-left:0px !important;">
    <h3>Sản phẩm liên quan</h3>
    <div class="products-box">

        {foreach from=$max_view item=data}
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
</div><!--end .content-->