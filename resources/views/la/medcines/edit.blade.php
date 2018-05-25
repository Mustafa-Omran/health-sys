@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/medcines') }}">Medcine</a> :
@endsection
@section("contentheader_description", $medcine->$view_col)
@section("section", "Medcines")
@section("section_url", url(config('laraadmin.adminRoute') . '/medcines'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Medcines Edit : ".$medcine->$view_col)

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
				{!! Form::model($medcine, ['route' => [config('laraadmin.adminRoute') . '.medcines.update', $medcine->id ], 'method'=>'PUT', 'id' => 'medcine-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'hospital_id')
					@la_input($module, 'info')
					@la_input($module, 'price')
					@la_input($module, 'qty')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/medcines') }}">Cancel</a></button>
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
	$("#medcine-edit-form").validate({
		
	});
});
</script>
@endpush
