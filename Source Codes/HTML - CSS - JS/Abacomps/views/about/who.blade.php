@extends('master')

@section('title')
About Us - Abacomps
@endsection

@section('body')
<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="pull-left">About Us</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="{{ URL::to('/about') }}">About Us</a> <span class="divider">/</span></li>
            <li class="active">Who we are</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid margin-bottom-30">
    	<div class="span9">
    	<div class="headline"><h3>Who are we?</h3></div>
    	
            <p>Abacomps is run by Jae Sic Choi, and our facilities are associated with US Royal Martial Arts. We are located within Loehman's plaza in Rockville, MD. Our focus is to bring this incredible Mental Math training to the United States using our experience gained from the World's #1 rated education system in South Korea.</p>
            

            <!-- Blockquotes -->
            <blockquote>
                <p>Every child has great potential</p>
                <small>Jae Sic Choi</small>
            </blockquote>
            
        </div>
        
        <ul class="thumbnails team">
	        <li class="span3">
	            <div class="thumbnail-style">
	                <img src="{{ asset('assets/img/others/2.jpg') }}" alt="" />
	                <h3><a>Jae Sic Choi</a> <small>Chief Executive Officer / President</small></h3>
	                <p>Originally from Korea, he has studied for years in Abacus training and has been certified as an instructor. </p>
	                <ul class="unstyled inline">
	                	<li><a href="#"><i class="icon-facebook"></i></a></li>
	                	<li><a href="#"><i class="icon-google-plus"></i></a></li>
	                </ul>
	            </div>
	        </li>
	    </ul>
    	
    </div><!--/row-fluid-->

	

</div><!--/container-->		
<!--=== End Content Part ===-->
@stop

