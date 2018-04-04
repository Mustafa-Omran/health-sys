@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/table_services') }}">Table service</a> :
@endsection
@section("contentheader_description", $table_service->$view_col)
@section("section", "Table services")
@section("section_url", url(config('laraadmin.adminRoute') . '/table_services'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Table services Edit : ".$table_service->$view_col)

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
				{!! Form::model($table_service, ['route' => [config('laraadmin.adminRoute') . '.table_services.update', $table_service->id ], 'method'=>'PUT', 'id' => 'table_service-edit-form']) !!}
					@la_input($module, 'info')
					@la_input($module, 'name')
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/table_services') }}">Cancel</a></button>
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
	$("#table_service-edit-form").validate({

	});
});
</script>
@endpush
