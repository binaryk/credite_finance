<div class="row">
	<div class="col-md-6">
		{{ $controls[2]->out() }}
	</div>
	<div class="col-md-6">
		{{ $controls[3]->out() }}
	</div>
	<div class="col-md-6">
		{{ $controls[4]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[5]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[6]->out() }}
	</div>

	<div class="row">
		<div class="col-md-12 text-center">
			<h4>Salariu obținut din: </h4>
		</div>
	</div>

	<div class="col-md-6">
		{{ $controls[7]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[8]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[9]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[10]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[11]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[12]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[13]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[14]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[15]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[16]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[17]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[18]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[19]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[20]->out() }}
	</div>

	<div class="col-md-6">
		{{ $controls[21]->out() }}
	</div>
</div>
{{
	Form::hidden('id_produs', $filter->id, ['id' => 'id_produs', 'class' => 'data-source', 'data-control-source' => 'id_produs', 'data-control-type' => 'persistent'])
}}
