@extends('master')

@section('title')
Login - Abacomps
@endsection

@section('body')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="pull-left">Login</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a> <span class="divider">/</span></li>
            <li class="active">Login</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

	<div class="container">		
		<div class="row-fluid margin-bottom-10">
			<div class="span6">
	        	<form class="reg-page">
	            	<h3>Register a new online account</h3>
	                <div class="controls">    
	                    <label>First Name</label>
	                    <input type="text" class="span12" />
	                    <label>Last Name</label>
	                    <input type="text" class="span12" />
	                    <label>Email Address <span class="color-red">*</span></label>
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
            </div>
            <div class="span6">
            	<form class="log-page">
		            <h3>Login to your account</h3>    
		            <div class="input-prepend">
		                <span class="add-on"><i class="icon-user"></i></span>
		                <input class="input-xlarge" type="text" placeholder="Username">
		            </div>
		            <div class="input-prepend">
		                <span class="add-on"><i class="icon-lock"></i></span>
		                <input class="input-xlarge" type="text" placeholder="Username">
		            </div>
		            <div class="controls form-inline">
		                <label class="checkbox"><input type="checkbox" /> Stay Signed in</label>
		                <button class="btn-u pull-right" type="submit">Login</button>
		            </div>
		            <hr />
		            <h4>Forget your Password ?</h4>
		            <p>no worries, <a class="color-green" href="#">click here</a> to reset your password.</p>
		        </form>
            </div>
        </div><!--/row-fluid-->
	</div><!--/container-->		
</div><!--/body-->
<!--=== End Content Part ===-->
@stop

