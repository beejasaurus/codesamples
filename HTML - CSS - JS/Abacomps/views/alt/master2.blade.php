<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>@yield('title')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS Global Compulsory-->
    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/headers/header2.css') }}
    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap-responsive.min.css') }}
    {{ HTML::style('assets/css/style_responsive.css') }}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">        
    <!-- CSS Implementing Plugins -->
    {{ HTML::style('assets/plugins/font-awesome/css/font-awesome.css') }}
    <link rel="stylesheet" href="{{ asset('assets/plugins/flexslider/flexslider.css') }}" type="text/css" media="screen">
    {{ HTML::style('assets/plugins/parallax-slider/css/parallax-slider.css') }}
    <!-- CSS Theme -->   
    <link rel="stylesheet" href="{{ asset('assets/css/themes/default.css') }}" id="style_color">
    <link rel="stylesheet" href="{{ asset('assets/css/themes/headers/default.css') }}" id="style_color-header-1">    
</head>	

<body>


<!--=== Top ===-->    
<div class="top">
    <div class="container">                 
        <div class="row-fluid">
            <ul class="loginbar inline">
                <li><a href="mailto:abacomps@gmail.com"><i class="icon-envelope-alt"></i> abacomps@gmail.com</a></li> 
                <li><a><i class="icon-phone-sign"></i> 301 770 1007</a></li>
                <li><a href="page_login.html"><i class="icon-user"></i> LOGIN</a></li> 
            </ul>
        </div>                        
    </div><!--/container-->     
</div><!--/top-->
<!--=== End Top ===-->    

<!--=== Header ===-->
<div class="header">               
    <div class="container"> 
        <!-- Logo -->       
        <div class="logo">                                             
            <a href="{{ URL::to('alt') }}"><img id="logo-header" src="{{ asset('assets/img/abacomps_logo5.png') }}" alt="Logo"></a>
        </div><!-- /logo -->        
                                    
 <!-- Menu -->       
        <div class="navbar">                                
            <div class="navbar-inner">                                  
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a><!-- /nav-collapse -->                                  
                <div class="nav-collapse collapse">                                     
                    <ul class="nav">
                        <li {{ Request::is('alt') ? 'class="active"' : '' }}>
                            {{ HTML::link('alt', 'Home') }}
                        </li>
                        <li {{ Request::is('alt/about*') ? 'class="active"' : '' }}>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">About Us
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li>{{ HTML::link('alt/about', 'About Us') }}</li>
                                <li>{{ HTML::link('alt/about/faqs', 'FAQs') }}</li>
                                <li>{{ HTML::link('alt/about/gallery', 'Gallery') }}</li>
                                
                                
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        <li {{ Request::is('alt/programs*') ? 'class="active"' : '' }}>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Programs
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li>{{ HTML::link('alt/programs', 'Programs &amp; Services') }}</li>
                                <li>{{ HTML::link('alt/programs/pricing', 'Pricing') }}</li>
                                <li>{{ HTML::link('alt/registration', 'Registration') }}</li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        <li {{ Request::is('alt/learning*') ? 'class="active"' : '' }}>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Learning Center
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li>{{ HTML::link('alt/learning', 'Learning Center') }}</li>
                                <li>{{ HTML::link('alt/learning/lessons', 'Lessons') }}</li>
                                <li>{{ HTML::link('alt/learning/practice', 'Practice Games') }}</li>
                                <li>{{ HTML::link('alt/learning/tests', 'Test Your Knowledge') }}</li>
                                <li>{{ HTML::link('alt/login', 'Login') }}</li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        <li {{ Request::is('alt/store*') ? 'class="active"' : '' }}>
                            {{ HTML::link('alt/store', 'Store') }}
                        </li>
                        <li {{ Request::is('alt/contact*') ? 'class="active"' : '' }}>
                            {{ HTML::link('alt/contact', 'Contact') }}
                        </li>
                        <li><a class="search search-nav"><i class="icon-search search-btn"></i></a></li>                                
                    </ul>
                    <div class="search-open search-open-inner">
                        <div class="input-append">
                            <form>
                                <input type="text" class="span3" placeholder="Search" />
                                <button type="submit" class="btn-u">Search</button>
                            </form>
                        </div>
                    </div>
                </div><!-- /nav-collapse -->                                
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->                           
    </div><!-- /container -->               
</div><!--/header -->      
<!--=== End Header ===-->

@yield('slider')

@yield('body')


<!--=== Footer ===-->
<div class="footer">
	<div class="container">
		<div class="row-fluid">
			<div class="span4">
                <!-- About -->
		        <div class="headline"><h3>About</h3></div>	
				<p class="margin-bottom-25">Abacomps is a mental math program that teaches children between 5 and 14 years old to visualize an Abacus counting frame to perform calculations.</p>	

	            <!-- Monthly Newsletter -->
		        <div class="headline"><h3>Monthly Newsletter</h3></div>	
				<p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
				<form class="form-inline">
					<div class="input-append">
						<input type="text" placeholder="Email Address" class="input-medium">
						<button class="btn-u">Subscribe</button>
					</div>
				</form>							
			</div><!--/span4-->	
			
			<div class="span4">
                <div class="posts">
                    <div class="headline"><h3>Recent Events</h3></div>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="{{ asset('assets/img/sliders/elastislide/6.jpg') }}" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt><a href="#"><img src="{{ asset('assets/img/sliders/elastislide/10.jpg') }}" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt><a href="#"><img src="{{ asset('assets/img/sliders/elastislide/11.jpg') }}" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                        </dd>
                    </dl>
                </div>
			</div><!--/span4-->

			<div class="span4">
	            <!-- Monthly Newsletter -->
		        <div class="headline"><h3>Contact Us</h3></div>	
                <address>
					5244 Randolph Road<br />
					Rockville, MD 20852 <br />
					Phone: (301) 770-1007 <br />
					Email: <a href="mailto:RockvilleTKD@gmail.com" class="">RockvilleTKD@gmail.com</a>
                </address>

                <!-- Stay Connected -->
		        <div class="headline"><h3>Stay Connected</h3></div>	
                <ul class="social-icons">
                    <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                    <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                    <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                    <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                    <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
                    <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
                    <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
                </ul>
			</div><!--/span4-->
		</div><!--/row-fluid-->	
	</div><!--/container-->	
</div><!--/footer-->	
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
	<div class="container">
		<div class="row-fluid">
			<div class="span8">						
	            <p>2013 &copy; Abacomps. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
			</div>
			<div class="span4">	
				<a href="{{ URL::to('alt') }}"><img id="logo-footer" src="{{ asset('assets/img/abacomps_logo2.png') }}" class="pull-right" alt="" /></a>
			</div>
		</div><!--/row-fluid-->
	</div><!--/container-->	
</div><!--/copyright-->	
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->			
<script type="text/javascript" src="{{ asset('assets/js/jquery-1.8.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/modernizr.custom.js') }}"></script>		
<script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>	
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="{{ asset('assets/plugins/flexslider/jquery.flexslider-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/parallax-slider/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/parallax-slider/js/jquery.cslider.js') }}"></script> 
<script type="text/javascript" src="{{ asset('assets/plugins/back-to-top.js') }}"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/pages/index.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
    });
</script>
<!--[if lt IE 9]>
    <script src="{{ asset('assets/js/respond.js') }}"></script>
<![endif]-->

</body>
</html>	