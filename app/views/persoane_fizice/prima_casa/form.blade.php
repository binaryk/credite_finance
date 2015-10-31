<div class="row"> 
	<div class="col-md-12">
		@include('persoane_fizice.prima_casa.forms.tab_1')
		@include('persoane_fizice.prima_casa.forms.tab_2')
		@include('persoane_fizice.prima_casa.forms.tab_3')
		@include('persoane_fizice.prima_casa.forms.tab_4')
	</div>
 </div>                                                             
{{
	Form::hidden('id_organizatie', $current_org->id, ['id' => 'id_organizatie', 'class' => 'data-source', 'data-control-source' => 'id_organizatie', 'data-control-type' => 'persistent'])
}}

{{
	Form::hidden('client_extern', 0, ['id' => 'client_extern', 'class' => 'data-source', 'data-control-source' => 'client_extern', 'data-control-type' => 'persistent'])
}}