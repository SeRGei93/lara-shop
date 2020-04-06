@if ($errors->any())
	<div class="alert alert-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="close">
			<span aria-hidden="true"></span>
		</button>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

@if (session('success'))
	<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="close">
			<span aria-hidden="true"></span>
		</button>
		{{ session('success') }}
	</div>
@endif
