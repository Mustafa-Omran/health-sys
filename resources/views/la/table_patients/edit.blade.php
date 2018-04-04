@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/table_patients') }}">Table patient</a> :
@endsection
@section("contentheader_description", $table_patient->$view_col)
@section("section", "Table patients")
@section("section_url", url(config('laraadmin.adminRoute') . '/table_patients'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Table patients Edit : ".$table_patient->$view_col)

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
				{!! Form::model($table_patient, ['route' => [config('laraadmin.adminRoute') . '.table_patients.update', $table_patient->id ], 'method'=>'PUT', 'id' => 'table_patient-edit-form']) !!}
					@la_input($module, 'name')
					@la_input($module, 'status')
					@la_input($module, 'inf')
					@la_input($module, 'phone')
					@la_input($module, 'gender')
					@la_input($module, 'birthdate')
					@la_input($module, 'email')
					@la_input($module, 'password')
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/table_patients') }}">Cancel</a></button>
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
	$("#table_patient-edit-form").validate({

	});
});
</script>
@endpush
