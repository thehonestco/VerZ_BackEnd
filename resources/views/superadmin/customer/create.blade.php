@extends('layouts.superadmin.app')

@section('content')

@include('topmessages')

<!-- main-content-wrap -->
<div class="main-content-inner">
	<!-- main-content-wrap -->
	<div class="main-content-wrap">
		<div class="flex items-center flex-wrap justify-between gap20 mb-10">
			<h6 class="font-weight-normal form-title">Add New Customer</h6>
			<ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
			<li>
				<a href="javascript:void(0)"><div class="text-tiny">Customer Management</div></a>
			</li>
			<li>
				<i class="icon-chevron-right"></i>
			</li>
			<li>
				<div class="text-tiny">Add New Customer</div>
			</li>
		    </ul>
		</div>
		<!-- new-page-wrap -->
		<form class="form-new-page" method="post" action="{{route('superadmin.customer.store')}}">
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
									<div class="row">
										<div class="col-md-6">
											<fieldset class="name mb-24">
												<div class="body-title mb-10">Name <span class="tf-color-1">*</span></div>
												<input class="" type="text" placeholder="Name" name="name" tabindex="0" value="{{old('name')}}" aria-required="true" required="">
											</fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="name mb-24">
												<div class="body-title mb-10">Nickname</div>
												<input class="" type="text" placeholder="Nick Name" name="nickname" tabindex="0" value="{{old('nickname')}}">
											</fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="name mb-24">
												<div class="body-title mb-10">Email <span class="tf-color-1">*</span></div>
												<input class="" type="email" placeholder="Email" name="email" tabindex="0" value="{{old('email')}}" aria-required="true" required="">
											</fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="name mb-24">
												<div class="body-title mb-10">Phone </div>
												<input class="" type="text" placeholder="Phone" name="phone" tabindex="0" value="{{old('phone')}}" >
											</fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="name mb-24">
												<div class="body-title mb-10">Password <span class="tf-color-1">*</span></div>
												<input class="" type="text" placeholder="Password" name="password" tabindex="0" value="{{old('password')}}" aria-required="true" required="">
											</fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="text mb-24">
												<div class="body-title mb-10">DOB</div>
												<input class="" type="date" placeholder="DOB" name="dob" tabindex="0" value="{{old('dob')}}"  >
											</fieldset>
										</div>
										
										<div class="col-md-6">
											<fieldset class="text mb-24">
												<div class="body-title mb-10">Gender <span class="tf-color-1">*</span></div>
												<select name="gender" aria-required="true" required>
												  <option value="1" @php if(old('gender') == 1) echo " selected='selected' "; @endphp>Male</option>
												  <option value="2" @php if(old('gender') == 2) echo " selected='selected' "; @endphp>Female</option>
												  <option value="3" @php if(old('gender') == 3) echo " selected='selected' "; @endphp>Other</option>
												</select>
											</fieldset>
										</div>
									
									
										<div class="col-md-6">
											<fieldset class="text mb-24">
												<div class="body-title mb-10">Address </div>
												<input class="" type="text" placeholder="" name="address" tabindex="0" value="{{old('address')}}">
											</fieldset>
										</div>
										
										<div class="col-md-6">
												<div>
													<div class="body-title mb-10">Status <span class="tf-color-1">*</span></div>
													<div class="select">
														<select name="status" aria-required="true" required="">
															<option value="1">Active</option>
															<option value="0">Inactive</option>
														</select>
													</div>
												</div>
										</div>
									</div>
									<div class="row mt-10">
										<div class="col-md-12 d-flex justify-content-end">
											<div class="w-20">
												{{-- <div class="body-title mb-10">Publish</div> --}}
												<div class="flex gap10">
													<button class="tf-button style-1 w-full text-white submit-button" type="submit">Save</button>
												</div>
											</div>
										</div>
									</div>
									
									
									
								</div>
								
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