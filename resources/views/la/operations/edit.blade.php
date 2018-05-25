@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/operations') }}">Operation</a> :
@endsection
@section("contentheader_description", $operation->$view_col)
@section("section", "Operations")
@section("section_url", url(config('laraadmin.adminRoute') . '/operations'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Operations Edit : ".$operation->$view_col)

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
				{!! Form::model($operation, ['route' => [config('laraadmin.adminRoute') . '.operations.update', $operation->id ], 'method'=>'PUT', 'id' => 'operation-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'hospital_id')
					@la_input($module, 'date')
					@la_input($module, 'info')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/operations') }}">Cancel</a></button>
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
	$("#operation-edit-form").validate({
		
	});
});
</script>
@endpush
