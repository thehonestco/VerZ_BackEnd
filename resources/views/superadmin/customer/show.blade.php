@extends('layouts.superadmin.app')


@section('content')

<style>
.body-title
{
	float:left;
	width:30%;
}

</style>
<!-- main-content-wrap -->
<div class="main-content-inner">
	<!-- main-content-wrap -->
	<div class="main-content-wrap">
		<div class="flex items-center flex-wrap justify-between gap20 mb-27">
			<h3>Customer Details</h3>
			<ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
			<li>
				<a href="javascript:void(0)"><div class="text-tiny">Customer Management</div></a>
			</li>
			<li>
				<i class="icon-chevron-right"></i>
			</li>
			<li>
				<div class="text-tiny">Customer Details</div>
			</li>
		    </ul>
		</div>
		<!-- new-page-wrap -->
		<form class="form-new-page">
			<div class="new-page-wrap">
				<div class="left">
					<div class="wg-box">
						<div class="widget-tabs">
							<ul class="widget-menu-tab">
								<li class="item-title active">
									<span class="inner"><h6>Detail</h6></span>
								</li>
							</ul>
							<div class="widget-content-tab">
								<div class="widget-content-inner active">
									<fieldset class="name mb-24">
										<div class="body-title mb-10">Name </div>
										<div class="body-text">{{$customer->name}}</div>
									</fieldset>
									<fieldset class="text mb-24">
										<div class="body-title mb-10">Nickname </div>
										<div class="body-text">{{$customer->nickname??"N/A"}}</div>
									</fieldset>
									<fieldset class="description mb-24">
										<div class="body-title mb-10">Email </div>
										<div class="body-text">{{$customer->email}}</div>
									</fieldset>
									<fieldset class="description mb-24">
										<div class="body-title mb-10">Phone </div>
										<div class="body-text">{{$customer->phone??"N/A"}}</div>
									</fieldset>
									<fieldset class="description mb-24">
										<div class="body-title mb-10">DOB </div>
										<div class="body-text">{{$customer->dob ? date("d M, Y", strtotime($customer->dob)) : "N/A"}}</div>
									</fieldset>
									<fieldset class="description mb-24">
										<div class="body-title mb-10">Gender </div>
										<div class="body-text">
										@php 
										switch($customer->gender)
										{
											case 1 : echo "Male"; break;
											case 2 : echo "Female"; break;
											case 3 : echo "Other"; break;
										}
										@endphp
										</div>
									</fieldset>
									
									<fieldset class="description mb-24">
										<div class="body-title mb-10">Address </div>
										<div class="body-text">{{$customer->address ?? "N/A"}}</div>
									</fieldset>
									<fieldset class="description mb-24">
										<div class="body-title mb-10">Status </div>
										<div class="body-text">{{$customer->status ? "Active" : "Inactive"}}</div>
									</fieldset>
									<button class="tf-button" type="button" onclick="javascript:history.go(-1)">Done</button>
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