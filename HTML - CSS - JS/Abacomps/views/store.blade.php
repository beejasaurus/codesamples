@extends('master')

@section('title')
Practice Games - Abacomps
@endsection

@section('head_items')
<link rel="stylesheet" href="{{ asset('assets/plugins/portfolioSorting/css/sorting.css') }}">
@stop

@section('body')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-green pull-left">Store</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a> <span class="divider">/</span></li>
            <li class="active">Store</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container"> 	
	<div class="row-fluid"> 
        <div id="w">    
            <div class="sort" id="sort">
				<ul class="unstyled inline">
                	<li><a href="#" class="all selected">All</a></li>
                	<li><a href="#" class="web">Books</a></li>
                	<li><a href="#" class="ios">Abacus</a></li>
                	<li><a href="#" class="print">Misc</a></li>
                </ul>
            </div>
            
            <ul class="portfolio recent-work clearfix"> 
                <li data-id="id-1" class="ios">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/2.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-2" class="print">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/3.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-3" class="ios">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/4.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-4" class="print">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/5.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-5" class="web">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/6.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-6" class="web">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/7.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-7" class="print">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/8.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-8" class="web">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/2.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-9" class="ios">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/9.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-10" class="ios">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/10.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-11" class="web">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/5.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-12" class="web">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/3.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-13" class="ios">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/6.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-14" class="web">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/9.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
                <li data-id="id-15" class="web">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/7.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Happy New Year</strong>
                            <i>Anim pariatur cliche reprehenderit</i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>                
    </div><!--/row-fluid-->         
</div><!--/container-->	 	
<!--=== End Content Part ===-->
@stop

@section('js_items')
<script type="text/javascript" src="{{ asset('assets/plugins/portfolioSorting/js/jquery.quicksand.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/portfolioSorting/js/sorting.js') }}"></script>
@stop

