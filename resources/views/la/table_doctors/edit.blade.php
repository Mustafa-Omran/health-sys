@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/table_doctors') }}">Table doctor</a> :
@endsection
@section("contentheader_description", $table_doctor->$view_col)
@section("section", "Table doctors")
@section("section_url", url(config('laraadmin.adminRoute') . '/table_doctors'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Table doctors Edit : ".$table_doctor->$view_col)

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
				{!! Form::model($table_doctor, ['route' => [config('laraadmin.adminRoute') . '.table_doctors.update', $table_doctor->id ], 'method'=>'PUT', 'id' => 'table_doctor-edit-form']) !!}
					@la_input($module, 'name')
					@la_input($module, 'spec')
					@la_input($module, 'address')
					@la_input($module, 'email')
					@la_input($module, 'password')
					@la_input($module, 'gender')
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/table_doctors') }}">Cancel</a></button>
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
	$("#table_doctor-edit-form").validate({
		
	});
});
</script>
@endpush
