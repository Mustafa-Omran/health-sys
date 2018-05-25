@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/hospitals') }}">Hospital</a> :
@endsection
@section("contentheader_description", $hospital->$view_col)
@section("section", "Hospitals")
@section("section_url", url(config('laraadmin.adminRoute') . '/hospitals'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Hospitals Edit : ".$hospital->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($hospital, ['route' => [config('laraadmin.adminRoute') . '.hospitals.update', $hospital->id ], 'method'=>'PUT', 'id' => 'hospital-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'address')
					@la_input($module, 'name')
					@la_input($module, 'email')
					@la_input($module, 'fax')
					@la_input($module, 'info')
					@la_input($module, 'password')
					@la_input($module, 'tel')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/hospitals') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#hospital-edit-form").validate({
		
	});
});
</script>
@endpush
