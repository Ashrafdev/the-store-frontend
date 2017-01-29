<!DOCTYPE html>
<html lang="en" id="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Store Html</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-reset.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="/css/theme.css" rel="stylesheet">
    <link rel="/stylesheet" href="/css/flexslider.css"/>
    <link rel="stylesheet" type="text/css" href="/css/gallery.css" />
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet"/>
    @stack('style')
</head>
<header class="header white-bg">
    <div class="sidebar-toggle-box">
        <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
    </div>
    <a href="/" class="logo">The <span>Store</span></a>
    <div class="horizontal-menu navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="/">See All Ads</a></li>
            <li><a href="/post_item">Post Item</a></li>
            <li v-if="!auth"><a href="#myModal-login" data-toggle="modal">Login</a></li>
            <li v-if="!auth"><a href="#myModal-signup" data-toggle="modal">Sign Up</a></li>
        </ul>
    </div>

        <div class="top-nav" v-if="userdata.name">
            <ul class="nav pull-right top-menu">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="username">
                            @{{ userdata.name }}
                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a v-bind:href="'/profile/'+userdata.id"><i class="fa fa-users" aria-hidden="true"></i>Profile</a></li>
                        <li><a href="/my/items/"><i class="fa fa-list" aria-hidden="true"></i>My Items</a></li>
                        <li><a href="/password/reset"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Reset Pass</a></li>
                        <li>
                            <a href="#" v-on:click="Logout">
                                <i class="fa fa-key" aria-hidden="true"></i>Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

</header>
<body>
@yield('content')
<footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
@yield('scripts')
@stack('scripts')
</footer>
</body>
</html>