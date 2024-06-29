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
				<a href="javascript:void(0)"><div class="text-tiny">Store Admin Management</div></a>
			</li>
			<li>
				<i class="icon-chevron-right"></i>
			</li>
			<li>
				<div class="text-tiny">Store Admin Details</div>
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
										<div class="body-text">{{$user->name}}</div>
									</fieldset>
									<fieldset class="text mb-24">
										<div class="body-title mb-10">Nick Name </div>
										<div class="body-text">{{$user->nickname}}</div>
									</fieldset>
                                    <fieldset class="text mb-24">
										<div class="body-title mb-10">Number </div>
										<div class="body-text">{{$user->phone}}</div>
									</fieldset>
                                    <fieldset class="text mb-24">
										<div class="body-title mb-10">Email </div>
										<div class="body-text">{{$user->email}}</div>
									</fieldset>
									<fieldset class="description mb-24">
										<div class="body-title mb-10">Pharmacist ID No </div>
										<div class="body-text">{{$user->pharmacist_id_no}}</div>
									</fieldset>
                                    <fieldset class="description mb-24">
										<div class="body-title mb-10">SPL Code </div>
										<div class="body-text">{{$user->splcode}}</div>
									</fieldset>
                                    <fieldset class="description mb-24 ">
										<div class="body-title mb-10 w-20">Stores </div>
                                        <div class="body-text d-flex">
                                            @foreach ($user->stores as $store)
                                               <p class="m-2"> {{$store->name}},</p>
                                            @endforeach
                                        </div>
									</fieldset>
									<fieldset class="description mb-24">
										<div class="body-title mb-10">Status </div>
										<div class="body-text @if($user->status == 1) block-available @else block-pending @endif">{{$user->status == 1 ? 'Active' : 'Inactive'}}</div>
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
