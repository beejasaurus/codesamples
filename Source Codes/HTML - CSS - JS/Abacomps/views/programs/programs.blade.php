@extends('master')

@section('title')
Programs - Abacomps
@endsection

@section('body')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="pull-left">Our Program</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Programs &amp; Services</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid">
    	<!-- Our Services -->
		<div class="row-fluid">
            <p><h3>Here is what is included with membership:</h3></p><br>

			<div class="row-fluid servive-block">
                <div class="span4">
                    <h4>After School Pickup</h4>
                    <p><i class="icon-truck"></i></p>
                    <p>Don't worry about waiting making it in time to pick your child up, or waiting in those long lines. We transport to a number of local schools.</p>
                </div>
                <div class="span4">
                    <h4>Online Lesson Access</h4>
                    <p><i class="icon-code-fork"></i></p>
                    <p>Your child will be able to learn wherever is convenient for them.<br />&nbsp;</p>
                    
                </div>
                <div class="span4">
                    <h4>Materials</h4>
                    <p><i class="icon-book"></i></p>
                    <p>Worksheets to practice and a physical Abacus are included with your tuition<br />&nbsp;</p>
                    
                </div>
            </div><!--/row-fluid-->

			<div class="row-fluid servive-block">
                <div class="span4">
                    <h4>X Hours of lessons a week</h4>
                    <p><i class="icon-group"></i></p>
                    <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
                </div>
                <div class="span4">
                    <h4>Unique learning method</h4>
                    <p><i class="icon-fighter-jet"></i></p>
                    <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
                </div>
                <div class="span4">
                    <h4>On site computer access</h4>
                    <p><i class="icon-desktop"></i></p>
                    <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
                </div>
            </div><!--/row-fluid-->
        </div><!--/row-fluid-->        
    	<!--//End Our Services -->
    	
    	<div class="text-center purchase"><a href="{{ URL::to('programs/pricing') }}" class="btn-buy hover-effect">Go to pricing</a></div>
    </div><!--/row-fluid-->

</div><!--/container-->		
<!--=== End Content Part ===-->
@stop

