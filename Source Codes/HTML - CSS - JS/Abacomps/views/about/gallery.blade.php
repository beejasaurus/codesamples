@extends('master')

@section('title')
Picture Gallery - Abacomps
@endsection

@section('head_items')
{{ HTML::style('assets/plugins/fancybox/source/jquery.fancybox.css') }}
@stop

@section('body')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-50">
	<div class="container">
        <h1 class="color-green pull-left">Gallery</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li><a href="">Pages</a> <span class="divider">/</span></li>
            <li class="active">Gallery</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">				
	<div class="row-fluid gallery">
        <ul class="thumbnails">
            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project #1" href="{{ asset('assets/img/carousel/9.jpg') }}">
                    <div class="overlay-zoom">	
                        <img src="{{ asset('assets/img/carousel/9.jpg') }}" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
            </li>
            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project #2" href="{{ asset('assets/img/carousel/2.jpg') }}">
                    <div class="overlay-zoom">	
                        <img src="{{ asset('assets/img/carousel/2.jpg') }}" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
            </li>
            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project #3" href="{{ asset('assets/img/carousel/3.jpg') }}">
                    <div class="overlay-zoom">	
                        <img src="{{ asset('assets/img/carousel/3.jpg') }}" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
            </li>
            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project #4" href="{{ asset('assets/img/carousel/4.jpg') }}">
                    <div class="overlay-zoom">	
                        <img src="{{ asset('assets/img/carousel/4.jpg') }}" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
            </li>
        </ul><!--/thumbnails-->

        <ul class="thumbnails">
            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project #5" href="{{ asset('assets/img/carousel/5.jpg') }}') }}">
                    <div class="overlay-zoom">	
                        <img src="{{ asset('assets/img/carousel/5.jpg') }}" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
            </li>
            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project #6" href="{{ asset('assets/img/carousel/6.jpg') }}">
                    <div class="overlay-zoom">	
                        <img src="{{ asset('assets/img/carousel/6.jpg') }}" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
            </li>
            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project #7" href="{{ asset('assets/img/carousel/7.jpg') }}">
                    <div class="overlay-zoom">	
                        <img src="{{ asset('assets/img/carousel/7.jpg') }}" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
            </li>
            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project #8" href="{{ asset('assets/img/carousel/8.jpg') }}">
                    <div class="overlay-zoom">	
                        <img src="{{ asset('assets/img/carousel/8.jpg') }}" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
            </li>
        </ul><!--/thumbnails-->
        
        <ul class="thumbnails">
            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project #9" href="{{ asset('assets/img/carousel/9.jpg') }}">
                    <div class="overlay-zoom">	
                        <img src="{{ asset('assets/img/carousel/9.jpg') }}" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
            </li>
            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project #10" href="{{ asset('assets/img/carousel/10.jpg') }}">
                    <div class="overlay-zoom">	
                        <img src="{{ asset('assets/img/carousel/10.jpg') }}" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
            </li>
        </ul><!--/thumbnails-->

        <div class="pagination pagination-right">
            <ul>
                <li><a href="#">Prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><a>3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>			
    </div><!--/row-fluid-->
</div><!--/container-->		
<!--=== End Content Part ===-->
@stop

@section('js_items')
<script type="text/javascript" src="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initFancybox();
    });
</script>
@stop

