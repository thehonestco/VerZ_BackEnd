@extends('layouts.superadmin.app')


@section('content')

<!-- main-content-wrap -->
<div class="main-content-wrap">
	<div class="flex items-center flex-wrap justify-between gap20 mb-27">
		<h3>Store List</h3>
		<ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
			<li>
				<a href="javascript:void(0)"><div class="text-tiny">Store Management</div></a>
			</li>
			<li>
				<i class="icon-chevron-right"></i>
			</li>
			<li>
				<div class="text-tiny">Store List</div>
			</li>
		</ul>
	</div>
	<!-- order-list -->
	<div class="wg-box">
		<div class="flex items-center justify-between gap10 flex-wrap">
			<div class="wg-filter flex-grow">
				<form class="form-search">
					<fieldset class="name">
						<input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
					</fieldset>
					<div class="button-submit">
						<button class="" type="submit"><i class="icon-search"></i></button>
					</div>
				</form>
			</div>
			<a class="tf-button style-1 w208" href="oder-detail.html"><i class="icon-file-text"></i>Add New Store</a>
		</div>
		<div class="wg-table table-all-category">
			<ul class="table-title flex gap20 mb-14">
				<li>
					<div class="body-title">#ID</div>
				</li>    
				<li>
					<div class="body-title">Name</div>
				</li>
				<li>
					<div class="body-title">License No.</div>
				</li>
				<li>
					<div class="body-title">Address</div>
				</li>
				<li>
					<div class="body-title">Status</div>
				</li>
				<li>
					<div class="body-title">Action</div>
				</li>
			</ul>
			<ul class="flex flex-column">
				@foreach($stores as $store)
				<li class="product-item gap14">
					<div class="flex items-center justify-between gap20 flex-grow">
						<div class="body-text">{{$store->id}}</div>
						<div class="body-text">{{$store->name}}</div>
						<div class="body-text">{{$store->license_no}}</div>
						<div class="body-text">{{$store->address}}</div>
						
						<div>
						    @if($store->status == 1)
								<div class="block-available">Active</div>
							@else 
								<div class="block-pending">Inactive</div>
							@endif
						</div>
						
						<div class="list-icon-function">
							<div class="item eye">
								<i class="icon-eye"></i>
							</div>
							<div class="item edit">
								<i class="icon-edit-3"></i>
							</div>
							<div class="item trash">
								<i class="icon-trash-2"></i>
							</div>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
		<div class="divider"></div>
		<div class="flex items-center justify-between flex-wrap gap10">
			<div class="text-tiny">Showing 10 entries</div>
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
		</div>
	</div>
	<!-- /order-list -->
</div>
<!-- /main-content-wrap -->

@endsection