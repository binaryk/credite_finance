<div class="row"> 
<div class="col-md-12"> 
	<div class="portlet light bg-inverse" style="background-color: white; border: 1px solid #d3d3d3;">
		<div class="portlet-title">
			<div class="caption font-purple-plum">
				<i class="icon-speech font-purple-plum"></i>
				<span class="caption-subject bold uppercase"> Date de identificare</span>
				<span class="caption-helper">Aici completati datele generale ale clientului</span>
			</div>
			<div class="tools">
				<a href="" class="collapse" data-original-title="" title="">
				</a> 
				<a href="" class="fullscreen" data-original-title="" title="">
				</a>
				<a href="" class="remove" data-original-title="" title="">
				</a>
			</div>
		</div> 

		<div class="portlet-body" > 
			<div id="context" data-toggle="context" data-target="#context-menu"> 
				<div class="row">
					<div class="col-md-6">
						{{ $controls[61]->out() }}
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-6">
						{{ $controls[0]->out() }}
					</div> 
					<div class="col-md-6">
						{{ $controls[1]->out() }}
					</div>   
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
				</div>
			</div>  
		</div>
	</div>
	<!-- END PORTLET-->

	<!-- BEGIN PORTLET-->
	<div class="portlet light bg-inverse" style="background-color: white; border: 1px solid #d3d3d3;">
		<div class="portlet-title">
			<div class="caption font-red-intense">
				<i class="icon-speech font-red-intense"></i>
				<span class="caption-subject bold uppercase"> Venituri</span>
				<span class="caption-helper">Aici completati datele despre veniturile clientului</span>
			</div>
			<div class="tools">
				<a href="" class="expand" data-original-title="" title="">
				</a> 
				<a href="" class="fullscreen" data-original-title="" title="">
				</a>
				<a href="" class="remove" data-original-title="" title="">
				</a>
			</div>
		</div> 
		<div class="portlet-body" style="display: none;"> 
			<div id="context" data-toggle="context" data-target="#context-menu">
				<div class="row">
					<!-- Salariu net -->
					<div class="col-md-6">{{ $controls[6]->out() }}</div>
				</div> 
				<div class="row">
					<div class="col-md-12 caption"><b>Venit obtinut din:</b></div>
					<!-- Salariu -->
					<div class="col-md-4">{{ $controls[7]->out() }}</div> 
					<!-- Diurne -->
					<div class="col-md-4">{{ $controls[8]->out() }}</div> 
					<!-- Pensie -->
					<div class="col-md-4">{{ $controls[9]->out() }}</div>
					<!-- Dividende -->
					<div class="col-md-4">{{ $controls[10]->out() }}</div>  
					<!-- Indemnizatie copil-->
					<div class="col-md-4">{{ $controls[11]->out() }}</div>
					<!-- Activitati independente -->
					<div class="col-md-4">{{ $controls[12]->out() }}</div> 
					<!-- Profesii liberale -->
					<div class="col-md-4">{{ $controls[13]->out() }}</div>  
					<!-- Drepturi de autor-->
					<div class="col-md-4">{{ $controls[14]->out() }}</div>
					<!-- Chirii -->
					<div class="col-md-4">{{ $controls[15]->out() }}</div> 
					<!-- Rente viagere -->
					<div class="col-md-4">{{ $controls[16]->out() }}</div>  
					<!-- Comisioane-->
					<div class="col-md-4">{{ $controls[17]->out() }}</div>
					<!-- Ore suplimentare -->
					<div class="col-md-4">{{ $controls[18]->out() }}</div> 
					<!-- Contracte de management -->
					<div class="col-md-4">{{ $controls[19]->out() }}</div>  
					<!-- Contracte de mandat-->
					<div class="col-md-4">{{ $controls[20]->out() }}</div>
					<!-- Norma de hrana -->
					<div class="col-md-4">{{ $controls[21]->out() }}</div>
				</div>
				<div class="row">
					<!-- Bonuri de masa -->
					<div class="col-md-6">{{ $controls[22]->out() }}</div>
					<!-- No Bonuri de masa -->
					<div class="col-md-6">{{ $controls[23]->out() }}</div>
				</div>
				<div class="row">
					<!-- Perioada -->
					<div class="col-md-6">	{{ $controls[24]->out() }}</div>
				</div>
				<div class="row">
					<!-- Alte venituri -->
					<div class="col-md-6">{{ $controls[25]->out() }}</div>
					<!-- Perioada alte venituri -->
					<div class="col-md-6">{{ $controls[26]->out() }}</div>
				</div>
				<div class="row">
				<div class="col-md-12 caption"><b>Alte venituri obtinute din:</b></div>
					<!-- Alt salariu -->
					<div class="col-md-4">{{ $controls[27]->out() }}</div>  
					<!-- Alt diurne-->
					<div class="col-md-4">{{ $controls[28]->out() }}</div>
					<!-- Alt pensie -->
					<div class="col-md-4">{{ $controls[29]->out() }}</div> 
					<!-- Alt dividende -->
					<div class="col-md-4">{{ $controls[30]->out() }}</div>  
					<!-- Alt indemniz-->
					<div class="col-md-4">{{ $controls[31]->out() }}</div>
					<!-- Alt activitati independente -->
					<div class="col-md-4">{{ $controls[32]->out() }}</div> 
					<!-- Alt profesii liberale -->
					<div class="col-md-4">{{ $controls[33]->out() }}</div>  
					<!-- Alt drepturi de autor-->
					<div class="col-md-4">{{ $controls[34]->out() }}</div>
					<!-- Alt chirii -->
					<div class="col-md-4">{{ $controls[35]->out() }}</div> 
					<!-- Alt rente viagere -->
					<div class="col-md-4">{{ $controls[36]->out() }}</div>  
					<!-- Alt comisioane-->
					<div class="col-md-4">{{ $controls[37]->out() }}</div>
					<!-- Alt ore suplimentare -->
					<div class="col-md-4">{{ $controls[38]->out() }}</div>
					<!-- Alt contracte de management -->
					<div class="col-md-4">{{ $controls[39]->out() }}</div>
					<!-- Alt contracte de mandat -->
					<div class="col-md-4">{{ $controls[40]->out() }}</div>
					<!-- Alt norma de hrana -->
					<div class="col-md-4">{{ $controls[41]->out() }}</div>
				</div>
				<div class="row">
					<!-- Total venit net -->
					<div class="col-md-6">
						{{ $controls[42]->out() }}
					</div>
				</div>
			</div>  
		</div>
	</div>
	<!-- END PORTLET-->

	<!-- BEGIN PORTLET-->
	<div class="portlet light bg-inverse" style="background-color: white; border: 1px solid #d3d3d3;">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-speech font-green"></i>
				<span class="caption-subject bold uppercase"> Date angajator</span>
				<span class="caption-helper">Aici completati datele despre angajator</span>
			</div>
			<div class="tools">
				<a href="" class="expand" data-original-title="" title="">
				</a> 
				<a href="" class="fullscreen" data-original-title="" title="">
				</a>
				<a href="" class="remove" data-original-title="" title="">
				</a>
			</div>
		</div> 

		<div class="portlet-body" style="display: none;"> 
			<div id="context" data-toggle="context" data-target="#context-menu"> 
				<div class="row" >
					<div class="col-md-4">{{ $controls[43]->out() }}</div> 
					<div class="col-md-4">{{ $controls[44]->out() }}</div>   
					<div class="col-md-4">{{ $controls[45]->out() }}</div>
				</div> 
				<div class="row" >
					<div class="col-md-6">{{ $controls[46]->out() }}</div> 
					<div class="col-md-6">{{ $controls[47]->out() }}</div>   
				</div>
			</div>  
		</div>
	</div>
	<!-- END PORTLET-->

	<!-- BEGIN PORTLET-->
	<div class="portlet light bg-inverse" style="background-color: white; border: 1px solid #d3d3d3;">
		<div class="portlet-title">
			<div class="caption font-yellow">
				<i class="icon-speech font-yellow"></i>
				<span class="caption-subject bold uppercase"> Chestionar</span>
				<span class="caption-helper">Aici completati datele despre client</span>
			</div>
			<div class="tools">
				<a href="" class="expand" data-original-title="" title="">
				</a> 
				<a href="" class="fullscreen" data-original-title="" title="">
				</a>
				<a href="" class="remove" data-original-title="" title="">
				</a>
			</div>
		</div> 

		<div class="portlet-body" style="display: none;"> 
			<div id="context" data-toggle="context" data-target="#context-menu">
				<div class="row" >
					<div class="col-md-6">{{ $controls[48]->out() }}</div> 
					<div class="col-md-6">{{ $controls[49]->out() }}</div> 
				</div>
				<div class="row">	  
					<div class="col-md-3">{{ $controls[50]->out() }}</div>
					<div class="col-md-3">{{ $controls[51]->out() }}</div> 
					<div class="col-md-3">{{ $controls[52]->out() }}</div>  
					<div class="col-md-3">{{ $controls[53]->out() }}</div>
				</div>
				<div class="row">
					<div class="col-md-6">{{ $controls[54]->out() }}</div>   
					<div class="col-md-6">{{ $controls[55]->out() }}</div>
				</div>
				<div class="row">
					<div class="col-md-4">{{ $controls[56]->out() }}</div> 
					<div class="col-md-4">{{ $controls[57]->out() }}</div>  
					<div class="col-md-4">{{ $controls[58]->out() }}</div>
				</div>
				<div class="row">
					<div class="col-md-6">{{ $controls[59]->out() }}</div>
					<div class="col-md-6">{{ $controls[60]->out() }}</div>
				</div>
			</div>  
		</div>
	</div>
	<!-- END PORTLET-->

</div>

</div>                                                             
{{
	Form::hidden('id_organizatie', $current_org->id, ['id' => 'id_organizatie', 'class' => 'data-source', 'data-control-source' => 'id_organizatie', 'data-control-type' => 'persistent'])
}}