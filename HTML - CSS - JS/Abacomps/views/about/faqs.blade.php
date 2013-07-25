@extends('master')

@section('title')
Frequently Asked Questions - Abacomps
@endsection

@section('body')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-30">
	<div class="container">
        <h1 class="color-green pull-left">Frequently Asked Questions</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="{{ URL::to('about') }}">About Us</a> <span class="divider">/</span></li>
            <li class="active">FAQs</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid">            
        <div class="span9">
			<!-- Other Questions -->
            <div class="headline"><h3>General Questions</h3></div>
            <!-- Accardion -->
            <div class="accordion acc-home margin-bottom-40" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      What is an Abacus
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body in collapse" style="height: auto;">
                    <div class="accordion-inner">
                      <p>An Abacus is anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
                    </div>
                  </div>
                </div><!--/accordion-group-->
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      How does Abacomps improve my child's development
                    </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse" style="height: 0px;">
                    <div class="accordion-inner">
                      Our program teaches children to perform math mentally by visualizing beads in their head. This anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!--/accordion-group-->
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                      Do I have to pay for materials?
                    </a>
                  </div>
                  <div id="collapseThree" class="accordion-body collapse" style="height: 0px;">
                    <div class="accordion-inner">
                      No, materials are included in the cost of tuition. You can buy extras here anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div><!--/accordion-group-->
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                      Where are you located? 
                    </a>
                  </div>
                  <div id="collapseFour" class="accordion-body collapse" style="height: 0px;">
                    <div class="accordion-inner">
                      We are located in Rockville, MD in the Loehmann's shopping center between subway and something. We are associated with US Royal Martial Arts, so look for the Martil Arts sign. 
                    </div>
                  </div>
                </div><!--/accordion-group-->
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
                      How do I register? 
                    </a>
                  </div>
                  <div id="collapseFive" class="accordion-body collapse" style="height: 0px;">
                    <div class="accordion-inner">
                      Register in person at ADDRESS or online through this link. 
                    </div>
                  </div>
                </div><!--/accordion-group-->
            </div><!--/accardion-->


		</div><!--/span8-->
        
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

        </div><!--/span4-->            		
    </div><!--/row-fluid-->
</div><!--/container-->		
<!--=== End Content Part ===-->
@stop

