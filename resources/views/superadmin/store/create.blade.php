@extends('layouts.superadmin.app')

@section('content')

@include('topmessages')

<!-- main-content-wrap -->
<div class="main-content-inner">
	<!-- main-content-wrap -->
	<div class="main-content-wrap">
		<div class="flex items-center flex-wrap justify-between gap20 mb-27">
			<h3>Add New Store</h3>
			<ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
			<li>
				<a href="javascript:void(0)"><div class="text-tiny">Store Management</div></a>
			</li>
			<li>
				<i class="icon-chevron-right"></i>
			</li>
			<li>
				<div class="text-tiny">Add New Store</div>
			</li>
		    </ul>
		</div>
		<!-- new-page-wrap -->
		<form class="form-new-page" method="post" action="{{route('superadmin.store.store')}}">
			@csrf
			<div class="new-page-wrap">
				<div class="left">
					<div class="wg-box">
						<div class="widget-tabs">
							<ul class="widget-menu-tab">
								<li class="item-title active">
									<span class="inner"><h6>Add New</h6></span>
								</li>
							</ul>
							<div class="widget-content-tab">
								<div class="widget-content-inner active">
									<fieldset class="name mb-24">
										<div class="body-title mb-10">Store Name <span class="tf-color-1">*</span></div>
										<input class="" type="text" placeholder="Name" name="name" tabindex="0" value="{{old('name')}}" aria-required="true" required="">
									</fieldset>
									<fieldset class="text mb-24">
										<div class="body-title mb-10">License No <span class="tf-color-1">*</span></div>
										<input class="" type="text" placeholder="License No." name="license_no" tabindex="0" 
										value="{{old('license_no')}}" aria-required="true" required="">
									</fieldset>
									
									<fieldset class="name mb-24">
										<div class="body-title mb-10">Director Name </div>
										<input class="" type="text" placeholder="Name" name="director_name" tabindex="0" 
										value="{{old('director_name')}}">
									</fieldset>
									<fieldset class="text mb-24">
										<div class="body-title mb-10">Director No </div>
										<input class="" type="text" placeholder="" name="director_no" tabindex="0" value="{{old('director_no')}}">
									</fieldset>
									<fieldset class="text mb-24">
										<div class="body-title mb-10">Pharmacist ID No </div>
										<input class="" type="text" placeholder="" name="pharmacist_id_no" tabindex="0" 
										value="{{old('pharmacist_id_no')}}" >
									</fieldset>
									<fieldset class="text mb-24">
										<div class="body-title mb-10">Address </div>
										<input class="" type="text" placeholder="" name="address" tabindex="0" value="{{old('address')}}">
									</fieldset>
									<fieldset class="text mb-24">
										<div class="body-title mb-10">NIU No. </div>
										<input class="" type="text" placeholder="" name="niu_no" tabindex="0" value="{{old('niu_no')}}">
									</fieldset>
									
									
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
				<div class="right">
					<div class="wg-box">
						<div>
							<div class="body-title mb-10">Status</div>
							<div class="select">
								<select name="status" required>
									<option value="1">Active</option>
									<option value="0">Inactive</option>
								</select>
							</div>
						</div>
					</div>
					
					<div class="wg-box">
						<div>
							<div class="body-title mb-10">Publish</div>
							<div class="flex gap10">
								<button class="tf-button style-1 w-full" type="submit">Save</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- /new-page-wrap -->
	</div>
	<!-- /main-content-wrap -->
</div>

@endsection