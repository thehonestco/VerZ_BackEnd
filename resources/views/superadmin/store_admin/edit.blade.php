@extends('layouts.superadmin.app')

@section('content')

@include('topmessages')

<!-- main-content-wrap -->
<div class="main-content-inner">
	<!-- main-content-wrap -->
	<div class="main-content-wrap">
		<div class="flex items-center flex-wrap justify-between gap20 mb-10">
			<h6 class="font-weight-normal form-title">Edit Store Admin (Id : {{$user->id}})</h6>
			<ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
			<li>
				<a href="javascript:void(0)"><div class="text-tiny">Store Admin Management</div></a>
			</li>
			<li>
				<i class="icon-chevron-right"></i>
			</li>
			<li>
				<div class="text-tiny">Edit Store Admin </div>
			</li>
		    </ul>
		</div>
		<!-- new-page-wrap -->
		<form class="form-new-page" method="post" action="{{route('superadmin.store-admin.update', $user->id)}}">
			@csrf
			@method('PUT')
			<div class="new-page-wrap">
				<div class="left">
					<div class="wg-box">
						<div class="widget-tabs">
							<ul class="widget-menu-tab">
								<li class="item-title active">
									<span class="inner"><h6>Edit Store Admin</h6></span>
								</li>
							</ul>
							<div class="widget-content-tab">
								<div class="widget-content-inner active">
									<div class="row">
										<div class="col-md-6">
											<fieldset class="name mb-24">
												<div class="body-title mb-10">Name <span class="tf-color-1">*</span></div>
												<input class="" type="text" placeholder="Name" name="full_name" tabindex="0"
												value="{{old('full_name', $user->name) }}"
												aria-required="true" required="">
											</fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="text mb-24">
												<div class="body-title mb-10">Nick Name <span class="tf-color-1">*</span></div>
												<input class="" type="text" placeholder="Nickname" name="nick_name" tabindex="0"
												value="{{old('nickname', $user->nickname) }}"
												aria-required="true" required="">
											</fieldset>
										</div>
									</div>





                                    <div class="row">
										<div class="col-md-4">
											<fieldset class="name mb-24">
												<div class="body-title mb-10">Pharmacist ID No. <span class="tf-color-1">*</span></div>
												<input class="" type="text" placeholder="Pharmacist ID No." name="pharmacist_id_number" tabindex="0" value="{{old('pharmacist_id_number', $user->pharmacist_id_no)}}">
											</fieldset>
										</div>

                                        <div class="col-md-4">
											<fieldset class="text mb-24">
												<div class="body-title mb-10">Email<span class="tf-color-1">*</span> </div>
												<input class="" type="text" placeholder="Email" name="email" tabindex="0" value="{{old('email', $user->email)}}" required>
											</fieldset>
										</div>
										<div class="col-md-4">
											<fieldset class="text mb-24">
												<div class="body-title mb-10">Number <span class="tf-color-1">*</span></div>
												<input class="" type="text" placeholder="Number" name="number" tabindex="0" value="{{old('number', $user->phone)}}" required>
											</fieldset>
										</div>

									</div>

									<div class="row">

                                        <div class="col-md-6">
											<fieldset class="text mb-24">
												<div class="body-title mb-10">SPL COde <span class="tf-color-1">*</span></div>
												<input class="" type="text" placeholder="SPL Code" name="splcode" tabindex="0" value="{{old('splcode',$user->splcode)}}" required>
											</fieldset>
										</div>
                                        <div class="col-md-6">
                                            <div>
                                                <div class="body-title mb-10">Status</div>
                                                <div class="select">
                                                <select name="status" required>
                                                <option value="1"
                                                @php
                                                if(old('status')=='1')
                                                {
                                                    echo " selected='selected' ";
                                                }
                                                elseif($user->status == 1)
                                                {
                                                    echo " selected='selected' ";
                                                }
                                                @endphp
                                                >Active</option>
                                                <option value="0"
                                                @php
                                                if(old('status')=='0')
                                                {
                                                    echo " selected='selected' ";
                                                }
                                                elseif($user->status == 0)
                                                {
                                                    echo " selected='selected' ";
                                                }
                                                @endphp
                                                >Inactive</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
									</div>
                                    <div class="row">


                                        <div class="col-md-6">
                                            <div>
                                                <div class="body-title mb-10">Stores<span class="tf-color-1">*</span></div>
                                                <div class="select">
                                                    <select name="stores[]"  class="js-example-basic-multiple" required multiple="multiple">
                                                        @foreach ($stores as $store)
                                                            <option value="{{ $store->id }}" @if(in_array($store->id , $storeIds) ) selected @endif>{{ $store->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    </div>


									<div class="row mt-10">
										<div class="col-md-12 d-flex justify-content-end">
											<div>
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
				{{-- <div class="right">
					<div class="wg-box">
						<div>
							<div class="body-title mb-10">Status</div>
							<div class="select">
							<select name="status" required>
							<option value="1"
							@php
							if(old('status')=='1')
							{
								echo " selected='selected' ";
							}
							elseif($store->status == 1)
							{
								echo " selected='selected' ";
							}
							@endphp
							>Active</option>
							<option value="0"
							@php
							if(old('status')=='0')
							{
								echo " selected='selected' ";
							}
							elseif($store->status == 0)
							{
								echo " selected='selected' ";
							}
							@endphp
							>Inactive</option>
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
				</div> --}}
			</div>
		</form>
		<!-- /new-page-wrap -->
	</div>
	<!-- /main-content-wrap -->
</div>

@endsection
