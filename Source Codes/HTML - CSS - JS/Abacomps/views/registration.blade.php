@extends('master')

@section('title')
Pricing - Abacomps
@endsection

@section('body')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="pull-left">Registration</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="{{ URL::to('programs/programs')}}">Programs &amp; Services</a> <span class="divider">/</span></li>
            <li class="active">Registration</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

	<div class="container">		
		<div class="row-fluid margin-bottom-10">
        	<form class="reg-page">
            	<h3>Register a new student</h3>
                <div class="controls">    
                    <div class="span6">
                    	<label>Sponsor First Name</label>
                    	<input type="text" class="span12" />
                    </div>
                    <div class="span6">
	                    <label>Sponsor Last Name</label>
	                    <input type="text" class="span12" />	
                    </div>
                    
                    <label>Student Name <span class="color-red">*</span></label>
                    <input type="text" class="span12" />
                    <label>Email Address <span class="color-red">*</span></label>
                    <input type="text" class="span12" />
                    <label>Phone Number <span class="color-red">*</span></label>
                    <input type="text" class="span12" />
                    <label>Street Address <span class="color-red">*</span></label>
                    <input type="text" class="span12" />
                    <label>City <span class="color-red">*</span></label>
                    <input type="text" class="span12" />
                    <label>State <span class="color-red">*</span></label>
                    <input type="text" class="span12" />
                    <label>Emergency Contact Name <span class="color-red">*</span></label>
                    <input type="text" class="span12" />
                    <label>Emergency Contact Phone <span class="color-red">*</span></label>
                    <input type="text" class="span12" />
                    <label>Any medical problems? <span class="color-red">*</span></label>
                    <input type="text" class="span12" />
                    <label>Level of Membership <span class="color-red">*</span></label>
                    <input type="text" class="span12" />
                </div>
                <div class="controls">
                    <div class="span6">
                        <label>Password <span class="color-red">*</span></label>
                        <input type="text" class="span12" />
                    </div>
                    <div class="span6">
                        <label>Confirm Password <span class="color-red">*</span></label>
                        <input type="text" class="span12" />
                    </div>
                </div>
                <div class="controls form-inline">
                    <label class="checkbox"><input type="checkbox" />&nbsp; I read <a href="">Terms and Conditions</a></label>
                    <button class="btn-u pull-right" type="submit">Register</button>
                </div>
                <hr />
				<p>Already Signed Up? Click <a href="page_login.html" class="color-green">Sign In</a> to login your account.</p>
            </form>
        </div><!--/row-fluid-->
	</div><!--/container-->		
</div><!--/body-->
<!--=== End Content Part ===-->
@stop

