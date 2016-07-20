<?php do_action('get_header'); ?>
<header class="header" role="banner">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#primary-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toogle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
            </div>
            <div class="collapse navbar-collapse" id="primary-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo home_url(); ?>">Link <span class="sr-only">(Current)</span></a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>">Link</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo home_url(); ?>">Action</a>
                            </li>
                            <li class="divider" role="separtor"></li>
                            <li>
                                <a href="<?php echo home_url(); ?>">Action</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Search&hellip;">
                    </div>
                    <button class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>
