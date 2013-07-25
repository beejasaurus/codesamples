@extends('master')

@section('title')
Abacomps
@endsection

@section('slider')
<!--=== Slider ===-->
<div class="slider-inner">
    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <h2><i>UNIQUE</i> <br /> <i>&amp; FUN</i> <br /> <i>LEARNING PROGRAM</i></h2>
            <p><i>Afterschool development program</i> <br /> <i>that uses an Abacus</i> <br /> <i>to do mental math</i></p>
            <div class="da-img"><img src="assets/img/178.jpg" alt="" /></div>
        </div>
        <div class="da-slide">
            <h2><i>AFTER SCHOOL PROGRAMS</i> <br /> <i>SUMMER CAMPS</i> <br /> <i>&amp; WEEKLY PROGRAMS</i></h2>
            <p><i>Learn &amp; socialize</i> <br /> <i>safe &amp; constructive environment</i></p>
            <div class="da-img span6">
            	<div class="span6">
					<iframe width="560" height="315" src="//www.youtube.com/embed/4uOxOgm5jQ4" frameborder="0" allowfullscreen></iframe> 
 				</div>
            </div>
        </div>
        <div class="da-slide">
            <h2><i>FOCUSING</i> <br /> <i>THE MIND</i> </h2>
            <p><i>Learn to focus your child's mind</i> <br /> <i>as they grow</i></p>
            <div class="da-img"><img src="assets/img/200.jpg" alt="image01" /></div>
        </div>
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>		
        </nav>
    </div><!--/da-slider-->
</div><!--/slider-->
<!--=== End Slider ===-->
@stop

@section('body')
<!--=== Purchase Block ===-->
<div class="row-fluid purchase margin-bottom-30">
    <div class="container">
		<div class="span9">
            <span>Unlock the full potential of your child's mind with the Abacus!</span>
            <p>The ABACOMPS program is designed to help your child advance their skills in both Mathematics, Computers, and general Memorization and Retention.</p>
        </div>
        <a href="#" class="btn-buy hover-effect">Sign up now</a>
    </div>
</div><!--/row-fluid-->
<!-- End Purchase Block -->

<!--=== Content Part ===-->
<div class="container">	
	<!-- Service Blocks -->
	<div class="row-fluid">
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-resize-small"></i>
    			<div class="desc">
    				<h4>Computer Learning</h4>
                    <p>With 20 computer stations, educational software, and art programs, we have the ability to teach children everything from internet research and safety to something else.</p>
    			</div>
    		</div>	
    	</div>
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-cogs"></i>
    			<div class="desc">
    				<h4>Mental math</h4>
                    <p>Children will learn to focus their mind as they grow. They will learn to imagine the abacus and see the beads move in their mind. These exercises will teach them to focus their concentration earlier than other children and with more precision.</p>
    			</div>
    		</div>	
    	</div>
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-plane"></i>
    			<div class="desc">
    				<h4>School Pick-Up</h4>
                    <p>We offer weekly programs, after school care, and summer camps. We transport from local elementary schools to pick up your children and get them here on time for Abacus class. We've got you covered!</p>
    			</div>
    		</div>	
    	</div>			    
	</div><!--/row-fluid-->
	<!-- //End Service Blokcs -->
	    
</div><!--/container-->		
<!-- End Content Part -->
@stop

