@extends('alt/master2')

@section('title')
Practice Games - Abacomps
@endsection

@section('head_items')
<link rel="stylesheet" href="{{ asset('assets/plugins/bxslider/jquery.bxslider.css') }}">
@stop

@section('body')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-green pull-left">Game 1 Name</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/')}}">Home</a> <span class="divider">/</span></li>
            <li><a href="{{ URL::to('learning')}}">Learning Center</a> <span class="divider">/</span></li>
            <li><a href="{{ URL::to('learning/practice')}}">Practice Games</a> <span class="divider">/</span></li>
            <li class="active">Game 1 Name</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container portfolio-item"> 	
	<div class="row-fluid margin-bottom-20"> 
		<!-- Carousel -->
        <div class="span7">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset('assets/img/carousel/5.jpg') }}" alt="">
                        <div class="carousel-caption">
                            <h4>First Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/img/carousel/4.jpg') }}" alt="">
                        <div class="carousel-caption">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/img/carousel/3.jpg') }}" alt="">
                        <div class="carousel-caption">
                            <h4>Third Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-arrow">
                    <a data-slide="prev" href="#myCarousel" class="left carousel-control"><i class="icon-angle-left"></i></a>
                    <a data-slide="next" href="#myCarousel" class="right carousel-control"><i class="icon-angle-right"></i></a>
                </div>
            </div>
        </div><!--/span7-->
        <!-- //End Tabs and Carousel -->
        
        <div class="span5">
        	<h3>Game 1 Name</h3>
            <p>Description of game and what it teaches at vero eos et accusamus et iusto odio dignissimos <a href="#">ducimus qui blanditiis</a> praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus.</p>
            <p>Molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus.</p>
            <ul class="unstyled">
            	<li><i class="icon-user color-green"></i> Bryan Neva [Author Name]</li>
            	<li><i class="icon-calendar color-green"></i> 13 Jun 2013 [Upload Date]</li>
            	<li><i class="icon-user color-green"></i> Bryan Neva [Current High Score Holder]</li>
            	<li><i class="icon-tags color-green"></i> Counting, Bead Visualization, Speed [Keyword Tags]</li>
            </ul>
            <p><a class="btn-u btn-u-large" href="#">PLAY GAME 1 NAME</a></p>
        </div>
    </div><!--/row-fluid-->

	<!-- Recent Works -->
    <div class="headline"><h3>Related Games</h3></div>
    <div class="row-fluid margin-bottom-40">
        <ul id="list" class="bxslider recent-work">
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/2.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 3</strong>
                        <i>Anim pariatur cliche reprehenderit</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/9.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 7</strong>
                        <i>Responsive Bootstrap Template</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/4.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 8</strong>
                        <i>Pariatur prehe cliche reprehrit</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/5.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 11</strong>
                        <i>Craft labore wes anderson cred</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/6.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 12</strong>
                        <i>Anim pariatur cliche reprehenderit</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/7.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 1</strong>
                        <i>Responsive Bootstrap Template</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/8.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 2</strong>
                        <i>Pariatur prehe cliche reprehrit</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/9.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 4</strong>
                        <i>Craft labore wes anderson cred</i>
                    </span>
                </a>
            </li>
        </ul>        
	</div><!--/row-->
	<!-- //End Recent Works -->                
</div><!--/container-->	 	
<!--=== End Content Part ===-->
@stop

@section('js_items')
<script type="text/javascript" src="{{ asset('assets/plugins/bxslider/jquery.bxslider.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initBxSlider1();
    });
</script>
@stop

