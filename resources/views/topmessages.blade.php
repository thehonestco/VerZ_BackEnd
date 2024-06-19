@if(session()->get('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
<!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
<strong>{{ $message }}</strong>
</div>
@endif

@if ( $errors->all() )
<div class="alert alert-danger LOCAL">
 <ul>
 @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
 @endforeach
 </ul>
</div>
@endif
