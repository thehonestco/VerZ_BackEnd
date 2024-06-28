@extends('layouts.superadmin.app')

@section('content')

@include('topmessages')
<!-- main-content-wrap -->
<div class="main-content-wrap">
	<div class="flex items-center flex-wrap justify-between gap20 mb-27">
		<h3>Customer List</h3>
		<ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
			<li>
				<a href="javascript:void(0)"><div class="text-tiny">Customer Management</div></a>
			</li>
			<li>
				<i class="icon-chevron-right"></i>
			</li>
			<li>
				<div class="text-tiny">Customer List</div>
			</li>
		</ul>
	</div>
	<!-- order-list -->
	<div class="wg-box">
		<div class="flex items-center justify-between gap10 flex-wrap">
			<div class="wg-filter flex-grow">
				<form class="form-search">
					<fieldset class="name">
						<input type="text" placeholder="Search here..." class="" name="s" tabindex="2" value="" aria-required="true" required="">
					</fieldset>
					<div class="button-submit">
						<button class="" type="submit"><i class="icon-search"></i></button>
					</div>
				</form>
			</div>
			<a class="tf-button style-1 w208" href="{{route('superadmin.customer.create')}}"><i class="icon-file-text"></i>Add New Customer</a>
		</div>
		<div class="wg-table table-all-category border" >
			<ul class="table-title flex gap20 mb-14 " style="min-width:100% !important;">
				<li style="width:42px !important;">
					<div class="body-title">#ID</div>
				</li>
				<li>
					<div class="body-title">Name</div>
				</li>
				<li>
					<div class="body-title">Nickname</div>
				</li>
				<li>
					<div class="body-title">Email</div>
				</li>
				<li>
					<div class="body-title">Phone</div>
				</li>
				<li style="width:35%;text-align:center;">
					<div class="body-title">Status</div>
				</li>
				<li style="text-align:center;width:10%;">
					<div class="body-title" >Action</div>
				</li>
			</ul>
			<ul class="flex flex-column " style="min-width:100% !important;">
				@foreach($customers as $customer)
				<li class="product-item gap14" >
					<div class="flex items-center justify-between gap20 flex-grow">
						<div class="body-text" style="width:50px !important;text-align:center">{{$customer->id}}</div>
						<div class="body-text">{{$customer->name}}</div>
						<div class="body-text">{{$customer->nickname??"N/A"}}</div>
						<div class="body-text">{{$customer->email}}</div>
						<div class="body-text">{{$customer->phone??"N/A"}}</div>

						<div style="width:40%">
						    @if($customer->status == 1)
								<div class="block-available" style="margin:0 auto">Active</div>
							@else
								<div class="block-pending" style="margin:0 auto">Inactive</div>
							@endif
						</div>

						<div class="list-icon-function" style="text-align:center;width:10%;padding:0 20px;">
							<div class="item eye">
								<a title="View Details" href="{{route('superadmin.customer.show', $customer->id)}}"><i class="icon-eye"></i></a>
							</div>
							<div class="item edit">
								<a title="Edit Item" href="{{route('superadmin.customer.edit', $customer->id)}}"><i class="icon-edit-3"></i></a>
							</div>
							{{-- <div class="item trash">
								<i class="icon-trash-2"></i>
							</div> --}}
						</div>
					</div>
				</li>
				
				<hr class="table-row-horiziontal-line" >
				@endforeach

				@if(count($customers) == 0 )
					<li class="product-item gap14">
						<div class="flex items-center justify-between gap20 flex-grow" style="text-align:center;font-size:14px;">
							<div style="width:100%">No Records Found</div>
						</div>
					</li>
				@endif
			</ul>
		</div>
		<div class="divider"></div>
		<div class="flex items-center justify-between flex-wrap gap10">
			<div class="text-tiny">Showing 10 entries</div>
			{{ $customers->withQueryString()->links() }}
			<!--
			<ul class="wg-pagination">
				<li>
					<a href="#"><i class="icon-chevron-left"></i></a>
				</li>
				<li>
					<a href="#">1</a>
				</li>
				<li class="active">
					<a href="#">2</a>
				</li>
				<li>
					<a href="#">3</a>
				</li>
				<li>
					<a href="#"><i class="icon-chevron-right"></i></a>
				</li>
			</ul>
			-->
		</div>
	</div>
	<!-- /order-list -->
</div>
<!-- /main-content-wrap -->

@endsection
