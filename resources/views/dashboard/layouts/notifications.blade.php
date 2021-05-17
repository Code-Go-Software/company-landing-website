@if (Session::has('success'))
	<div class="container">
		<div class="row">
			<div class="col-12 alert text-success">
				<b>{{ Session::get('success') }}</b>
			</div>
		</div>
	</div>
@endif

@if (Session::has('error'))
	<div class="container">
		<div class="row">
			<div class="col-12 alert text-danger">
				<b>{{ Session::get('error') }}</b>
			</div>
		</div>
	</div>
@endif