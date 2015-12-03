<div class="row">
	<div class="col-md-6">
		{{ $controls[0]->out() }}
	</div>
</div>
{{
	Form::hidden('id_banca', $filter->id, ['id' => 'id_banca', 'class' => 'data-source', 'data-control-source' => 'id_banca', 'data-control-type' => 'persistent'])
}}
