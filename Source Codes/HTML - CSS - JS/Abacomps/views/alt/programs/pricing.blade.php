@extends('alt/master2')

@section('title')
Pricing - Abacomps
@endsection

@section('body')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="pull-left">Register</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="{{ URL::to('programs/programs')}}">Programs &amp; Services</a> <span class="divider">/</span></li>
            <li class="active">Pricing</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid">
        <!-- Pricing -->
        <div class="row-fluid margin-bottom-40">
        	<div class="span3 pricing hover-effect">
            	<div class="pricing-head">
                	<h3>After School <span>&nbsp;</span></h3>
                    <h4><i>$</i>5<i>.49</i> <span>Per Month</span></h4>
                </div>
                <ul class="pricing-content unstyled">
                    <li><i class="icon-tags"></i> At vero eos</li>
                    <li><i class="icon-asterisk"></i> No Support</li>
                    <li><i class="icon-heart"></i> Fusce condimentum</li>
                    <li><i class="icon-star"></i> Ut non libero</li>
                    <li><i class="icon-shopping-cart"></i> Consecte adiping elit</li>
                </ul>
            	<div class="pricing-footer">
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</p>
                	<button type="submit">Sign Up Now</button>
                </div>
            </div>
        	<div class="span3 pricing hover-effect">
            	<div class="pricing-head">
                	<h3>After School<span>With Pickup</span></h3>
                    <h4><i>$</i>8<i>.69</i> <span>Per Month</span></h4>
                </div>
                <ul class="pricing-content unstyled">
                    <li><i class="icon-tags"></i> At vero eos</li>
                    <li><i class="icon-asterisk"></i> No Support</li>
                    <li><i class="icon-heart"></i> Fusce condimentum</li>
                    <li><i class="icon-star"></i> Ut non libero</li>
                    <li><i class="icon-shopping-cart"></i> Consecte adiping elit</li>
                </ul>
            	<div class="pricing-footer">
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</p>
                	<button type="submit">Sign Up Now</button>
                </div>
            </div>
        	<div class="span3 pricing hover-effect">
            	<div class="pricing-head">
                	<h3>Weekly Class <span>&nbsp;</span></h3>
                    <h4><i>$</i>13<i>.99</i> <span>Per Month</span></h4>
                </div>
                <ul class="pricing-content unstyled">
                    <li><i class="icon-tags"></i> At vero eos</li>
                    <li><i class="icon-asterisk"></i> No Support</li>
                    <li><i class="icon-heart"></i> Fusce condimentum</li>
                    <li><i class="icon-star"></i> Ut non libero</li>
                    <li><i class="icon-shopping-cart"></i> Consecte adiping elit</li>
                </ul>
            	<div class="pricing-footer">
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</p>
                	<button type="submit">Sign Up Now</button>
                </div>
            </div>
        	<div class="span3 pricing hover-effect">
            	<div class="pricing-head">
                	<h3>Seasonal Camp <span>&nbsp;</span></h3>
                    <h4><i>$</i>99<i>.00</i> <span>Per Month</span></h4>
                </div>
                <ul class="pricing-content unstyled">
                    <li><i class="icon-tags"></i> At vero eos</li>
                    <li><i class="icon-asterisk"></i> No Support</li>
                    <li><i class="icon-heart"></i> Fusce condimentum</li>
                    <li><i class="icon-star"></i> Ut non libero</li>
                    <li><i class="icon-shopping-cart"></i> Consecte adiping elit</li>
                </ul>
            	<div class="pricing-footer">
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</p>
                	<button type="submit">Sign Up Now</button>
                </div>
            </div>
        </div><!--/row-fluid-->
        <!--//End Pricing -->
    </div><!--/row-fluid-->
</div><!--/container-->	
<!--=== End Content Part ===-->
@stop

