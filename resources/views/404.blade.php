
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Free 404 White for Iphone, Android & Smartphone Mobile Website Template | Home :: w3layouts</title>
<style type="text/css">
body{
	font-family:Arial, Helvetica, sans-serif;
}
.wrap{
	width:1000px;
	margin:0 auto;
}
.logo{
	width:430px;
	position:absolute;
	top:25%;
	left:35%;
}
p a{
	color:#eee;
	font-size:13px;
	margin-left:30px;
	padding:5px;
	background:#FF3366;
	text-decoration:none;
	-webkit-border-radius:.3em;
	   -moz-border-radius:.3em;
	        border-radius:.3em;
}
p a:hover{
	color: #fff;
}
.footer{
	position:absolute;
	bottom:10px;
	right:10px;
	font-size:12px;
	color:#aaa;
}
.footer a{
	color:#666;
	text-decoration:none;
}

</style>
</head>
<body>
<div class="wrap">
<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0px;" >
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            
        </nav>
    <div class="logo">
        <img src="images/404.png" alt=""  />
        <p><a href="http://quangqa.com">Go back to Home</a></p>
    </div>
</div>

</body>
</html>