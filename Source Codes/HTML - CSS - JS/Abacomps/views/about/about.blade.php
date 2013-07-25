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
            <li class="active">About Us</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid margin-bottom-30">
    	<div class="span6">
    		<div class="headline"><h3>What is Abacomps?</h3></div>
            <p>Abacomps is a child learning development program. We've designed the program to help your child advance their skills in both mathematics, computers, and general memorization and retention. </p>
            <p>Watch your child's confidence sky-rocket as they learn to solve complex arithmetic, mentally, at <b>speeds surpassing the use of a calculator!</b></p>
            <p>Using Abacomps, your child will improve their...</p>
            <ul class="unstyled">
                <li><i class="icon-asterisk color-green"></i> Focus</li>
                <li><i class="icon-asterisk color-green"></i> Memory</li>
                <li><i class="icon-asterisk color-green"></i> Retention</li>
                <li><i class="icon-asterisk color-green"></i> Math Skills</li>
                <li><i class="icon-asterisk color-green"></i> Computer Skills</li>
            </ul><br />
            <blockquote>
                <p>Abacomps is a whole brain development experience</p>
            </blockquote>
        </div>
    	<div class="span6">
            <iframe width="100%" height="315" src="//www.youtube.com/embed/s-EKxq1oTPw" frameborder="0" allowfullscreen></iframe> 
        </div>
    </div><!--/row-fluid-->

	
   <div class="row-fluid margin-bottom-30">
        <div class="span6 text-center">
            <p><img src="{{ asset('assets/img/tomoecloseup.jpg') }}" width="75%" class="img-polaroid"></p>
            <p><small>The soroban, a Japanese version of the abacus.</small></p>
        </div>
        
        <div class="span6">
        	<div class="headline"><h3>How does it work?</h3></div>
        	<p>Try to add 5 and 7 without writing anything down. Did you do it? This is how a child using the Abacomps method does it.</p>
        	<p><a href="http://news.stanford.edu/news/2011/august/abacus-mental-math-080311.html">Stanford researcher explores whether language is the only way to represent numbers</a></p>
        </div>
	</div>
	
	<div class="row-fluid margin-bottom-30">
		<div class="span6">
            <div class="headline"><h3>Who uses it?</h3></div>
            <p>China, Korea, Singapore, and Japan are among the leaders in teaching the Abacus. And it shows, in 2008, these 5 countries were the top scorers in math among eighth grade students.</p>
            <p>See for yourself: <a href="http://www.all4ed.org/files/Facts_For_Education_Adv_Jan2009.pdf">International Comparison</a></p>
        </div>
        
        <div class="span6">
        	<p><img src="{{ asset('assets/img/student_performance_graph.png') }}" width="100%" class="img-polaroid"></p>
        	
        </div>
	</div>

</div><!--/container-->		
<!--=== End Content Part ===-->
@stop

