@extends('layouts.superadmin.app')

@section('content')

@include('topmessages')

<!-- main-content-wrap -->
<div class="main-content-inner">
	<!-- main-content-wrap -->
	<div class="main-content-wrap">
		<div class="flex items-center flex-wrap justify-between gap20 mb-10">
			<h6 class="font-weight-normal form-title">Add New Community</h6>
			<ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
			<li>
				<a href="javascript:void(0)"><div class="text-tiny">Community Management</div></a>
			</li>
			<li>
				<i class="icon-chevron-right"></i>
			</li>
			<li>
				<div class="text-tiny">Add New Community</div>
			</li>
		    </ul>
		</div>
		<!-- new-page-wrap -->
		<form class="form-new-page" method="post" action="{{route('superadmin.community.store')}}">
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
										<div class="col-md-4">
											<fieldset class="name mb-24">
                                                <div class="body-title mb-10">Status<span class="tf-color-1">*</span></div>
                                                <div class="select">
                                                    <select name="type" required>
                                                        @foreach (config('custom.community_types') as $key=>$type)
                                                            <option value="{{ $key }}">{{ $type }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
										</div>
										<div class="col-md-4">
											<fieldset class="text mb-24">
												<div class="body-title mb-10">Community Name <span class="tf-color-1">*</span></div>
												<input class="" type="text" placeholder="Community Name" name="name" tabindex="0" value="{{old('name')}}" aria-required="true" required="">
											</fieldset>
										</div>
                                        <div class="col-md-4">
											<fieldset class="text mb-24">
												<div class="body-title mb-10">Community Nickname Name <span class="tf-color-1">*</span></div>
												<input class="" type="text" placeholder="Community Nick Name" name="nickname" tabindex="0" value="{{old('nickname')}}" aria-required="true" required="">
											</fieldset>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<fieldset class="name mb-24">
												<div class="body-title mb-10">Spl Code <span class="tf-color-1">*</span></div>
												<input class="" type="text" placeholder="Spl Code" name="splcode" tabindex="0" value="{{old('splcode')}}">
											</fieldset>
										</div>

                                        <div class="col-md-6">
                                                <div class="body-title mb-10">Status<span class="tf-color-1">*</span></div>
                                                <div class="select">
                                                    <select name="status" required>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                        </div>
									</div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <div class="body-title mb-10">Community Admin<span class="tf-color-1">*</span></div>
                                                <div class="select">
                                                    <select name="admin_id" required>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
											<fieldset class="text mb-24">
                                                <div class="body-title mb-10">Community Users<span class="tf-color-1">*</span></div>
                                                    <select name="members[]"  class="js-example-basic-multiple  form-control" required multiple="multiple">
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
											</fieldset>
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
