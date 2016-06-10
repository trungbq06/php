<div class="navbar-inner">
    <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <a class="brand" href="{$admin}"> <img alt="Charisma Logo" src="webroots/img/logo20.png" /> <span>Administrator</span></a>
        
        <!-- theme selector starts -->
        <div class="btn-group pull-right theme-container" >
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="icon-tint"></i><span class="hidden-phone"> Change languages</span>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-user" id="languages">
                <li {if $admin_language eq 0}class="active"{/if}><a data-value="0" href="#"><i class="icon-blank"></i> Default</a></li>
            	{foreach from=$gen_lang key=k item=list}
                <li {if $admin_language eq $k}class="active"{/if}><a data-value="{$k}" href="#"><i class="icon-blank"></i> {$list.name}</a></li>
                {/foreach}
            </ul>
        </div>
        <!-- theme selector ends -->
        
        <!-- user dropdown starts -->
        <div class="btn-group pull-right" >
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="icon-user"></i><span class="hidden-phone"> {$account.name}</span>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-user">
                <li><a href="?mod=user&site=edit">Change Profile</a></li>
                <li><a href="?mod=user&site=password">Change password</a></li>
                <li class="divider"></li>
                <li><a href="?mod=user&site=logout">Logout</a></li>
            </ul>
        </div>
        <!-- user dropdown ends -->
        
        <div class="top-nav nav-collapse">
            <ul class="nav">
                <li><a href="{$domain}" target="_blank">Visit Site</a></li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query span2" name="query" type="text">
                    </form>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
