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
			<h3>Store Details</h3>
			<ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
			<li>
				<a href="javascript:void(0)"><div class="text-tiny">Store Management</div></a>
			</li>
			<li>
				<i class="icon-chevron-right"></i>
			</li>
			<li>
				<div class="text-tiny">Store Details</div>
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
										<div class="body-title mb-10">Store Name </div>
										<div class="body-text">{{$store->name}}</div>
									</fieldset>
									<fieldset class="text mb-24">
										<div class="body-title mb-10">License No. </div>
										<div class="body-text">{{$store->license_no}}</div>
									</fieldset>
									<fieldset class="description mb-24">
										<div class="body-title mb-10">Director Name </div>
										<div class="body-text">{{$store->director_name}}</div>
									</fieldset>
									<fieldset class="description mb-24">
										<div class="body-title mb-10">Director Number </div>
										<div class="body-text">{{$store->director_no}}</div>
									</fieldset>
									
									<fieldset class="description mb-24">
										<div class="body-title mb-10">Pharmacist ID Number </div>
										<div class="body-text">{{$store->pharmacist_id_no}}</div>
									</fieldset>
									<fieldset class="description mb-24">
										<div class="body-title mb-10">Address </div>
										<div class="body-text">{{$store->address}}</div>
									</fieldset>
									<fieldset class="description mb-24">
										<div class="body-title mb-10">NIU No. </div>
										<div class="body-text">{{$store->niu_no}}</div>
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