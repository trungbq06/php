<section class="header-mobile">
            <div class="row col-default">
                <div class="container">
                    <div class="col-xs-4 col-default bar-mobile">
                        <i class="glyphicon glyphicon-list" style="font-size: 18px;"></i>
                    </div>
                    <div class="col-xs-4 col-default logo-mobile">
                        <div class="logo" style="text-align: center;"> 
                            <a href="index.php"><img src="{foreach from=$gallery_p1 item=data}{$data.img}{/foreach}" height="55px;"></a>
                        </div>  
                    </div>
                    <!--<div class="col-xs-4 col-default search-mobile">
                        <i class="glyphicon glyphicon-search" style="font-size: 18px;"></i>
                    </div>-->
                </div>
            </div>
            <div class="row col-default">
                <div class="menubar-mobile">
					<ul>
					{foreach from=$menu_p1 item=list}					
						<li><a href="{$list.link}">{$list.name}</a></li>
					{/foreach}    
					</ul>
   
 
        
 

                </div>
                <!--<form action="" method="" class="search-form" >
                    <div class="">
                        <input type="text" class="form-control" id="search" placeholder="Nhập tìm kiếm">
                        <input type="submit" class="" value="Tìm kiếm">
                    </div>
                </form>-->
            </div>
        </section>