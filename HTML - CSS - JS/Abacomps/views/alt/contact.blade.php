@extends('alt/master2')

@section('title')
Contact Us - Abacomps
@endsection

@section('body')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
        <h1 class="color-green pull-left">Contact Us</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a> <span class="divider">/</span></li>
            <li class="active">Contact</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!-- Google Map -->
<div id="map" class="map margin-bottom-40">
</div><!---/map-->
<!-- End Google Map -->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid">
		<div class="span9">
            <div class="headline"><h3>Send Us a Message</h3></div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit landitiis.</p><br />
			<form>
                <label>Name</label>
                <input type="text" class="span7 border-radius-none" />
                <label>Email <span class="color-red">*</span></label>
                <input type="text" class="span7 border-radius-none" />
                <label>Message</label>
                <textarea rows="8" class="span10"></textarea>
                <p><button type="submit" class="btn-u">Send Message</button></p>
            </form>
        </div><!--/span9-->
        
		<div class="span3">
        	<!-- Contacts -->
            <div class="headline"><h3>Contacts</h3></div>
            <ul class="unstyled who margin-bottom-20">
                <li><a href="#"><i class="icon-home"></i>5244 Randolph Road, Rockville, MD 20852</a></li>
                <li><a href="#"><i class="icon-envelope-alt"></i>RockvilleTKD@gmail.com</a></li>
                <li><a href="#"><i class="icon-phone-sign"></i>(301) 770-1007</a></li>
                <li><a href="#"><i class="icon-globe"></i>http://www.abacomps.com</a></li>
                <li><a href="#"><i class="icon-globe"></i>http://www.rockvilletkd.com</a></li>
            </ul>

        	<!-- Business Hours -->
            <div class="headline"><h3>Business Hours</h3></div>
            <ul class="unstyled">
            	<li><strong>Monday-Friday:</strong> 1pm to 9pm</li>
            	<li><strong>Saturday:</strong> 9:30am to 1pm</li>
            	<li><strong>Sunday:</strong> Closed</li>
            </ul>

        	<!-- Why we are? -->
            <div class="headline"><h3>Who we are?</h3></div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
            <ul class="unstyled">
            	<li><i class="icon-ok color-green"></i> Odio dignissimos ducimus</li>
            	<li><i class="icon-ok color-green"></i> Blanditiis praesentium volup</li>
            	<li><i class="icon-ok color-green"></i> Eos et accusamus</li>
            </ul>
        </div><!--/span3-->
    </div><!--/row-fluid-->        

</div><!--/container-->		
<!--=== End Content Part ===-->
@stop

@section('js_items')
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/gmap/gmap.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/pages/contact.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();                
        Contact.initMap();        
    });
</script>
@stop
