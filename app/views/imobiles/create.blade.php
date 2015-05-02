@extends('template.layout')
@section('title-h1')
	Adauga
@endsection
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="tabbable tabbable-custom boxless tabbable-reversed">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#tab_0" data-toggle="tab">
					Date generale </a>
				</li>
				<li>
					<a href="#tab_1" data-toggle="tab">
					Caracterisitici apartament </a>
				</li>
				<li>
					<a href="#tab_2" data-toggle="tab">
					Finisaje si dotari</a>
				</li>
				<li>
					<a href="#tab_3" data-toggle="tab">
					Dependinte</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab_0">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Date generale
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							{{ Form::model($imobil = NULL) }}
								<div class="form-body">
									<div class="row">
										<div class="col-md-3">
											{{ Form::selectField('Denumire Judet','judet_id', $judete) }}
										</div>
										<div class="col-md-3">
											{{ Form::selectField('Denumire Localitate','localitate_id', $localitati) }}
										</div>

										<div class="col-md-3">
											{{ Form::selectField('Denumire Cartier','cartier_id', $cartiere) }}
										</div>
										<div class="col-md-3">
											{{ Form::selectField('Numar De Camere','nr_camere', $camere) }}
										</div>

										<div class="col-md-3">
											{{ Form::textField('Strada Cladire','strada_cladire') }}
										</div>
										<div class="col-md-3">
											{{ Form::textField('Numar Cladire','nr_cladire') }}
										</div>
										<div class="col-md-3">
											{{ Form::selectField('Tip Cladire','tip_cladire', $tip_cladire) }}
										</div>
										<div class="col-md-3">
											{{ Form::textField('Numar Apartament','nr_apartament') }}
										</div>
										<div class="col-md-3">
											{{ Form::selectField('Numar Etaje Cladire','nr_etaje_cladire', $tip_nr_etaje) }}
										</div>
										<div class="col-md-3">
											{{ Form::textField('Pret De Vanzare In Euro','pret_vanzare_euro') }}
										</div>

										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Pret Negociabil</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="pret_negociabil" > 
											</div>
										</div>
										<div class="col-md-3">
											{{ Form::textField('Data Aparitiei Anuntului','data_aparitie_anunt') }}
										</div>
										<!-- <div class="col-md-3">
											{{ Form::textField('Pret Negociabil','judet') }}
										</div> -->
										<div class="col-md-3">
											{{ Form::textField('Data Ultimei Actualizari','data_ultimei_actualizari') }}
										</div>

										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Valabilitatea Ofertei</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="valabilitate_oferta" > 
											</div>
										</div>
										<div class="col-md-3">
											{{ Form::textField('Nume vanzator','nume_vanzator') }}
										</div>
										<div class="col-md-3">
											{{ Form::textField('Telefon De Contact Principal','telefon_1') }}
										</div>
										<div class="col-md-3">
											{{ Form::textField('Telefon De Contact Secundar 1','telefon_2') }}
										</div>
										<div class="col-md-3">
											{{ Form::textField('Telefon De Contact Secundar 2','extras_cf') }}
										</div>
										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Extras C.F.</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="extras_cf" > 
											</div>
										</div>
										<div class="col-md-3">
											{{ Form::textareaField('Observatii Generale','observatii_generale') }}
										</div>
									</div>
									
									<div class="form-actions right">
										<button type="button" class="btn default">Anuleaza</button>
										<button type="submit" class="btn blue"><i class="fa fa-check"></i>Salveaza</button>
									</div>
								</div>
							{{ Form::close() }}
							<!-- END FORM-->
						</div>
					</div>
				</div>
				<div class="tab-pane " id="tab_1">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Caracteristici apartament
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							{{ Form::model($imobil = NULL) }}
								<div class="form-body">
									<div class="row">
										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Acceptare Credit Prima casa</label><br />
												<input id="option1" type="radio" name="credit_prima_casa" value="1" class="make-switch switch-radio1">
											</div>
										</div>
										<div class="col-md-3">
											{{ Form::selectField('Etaj Apartament','etaj_apartament', $tip_etaje) }}
										</div>
										<div class="col-md-3">
											{{ Form::selectField('Compartimentare Apartament','compartiment_apartament', $tip_compartiment) }}
										</div>
										<div class="col-md-3">
											{{ Form::textField('Suprafata Apartament In Mp','suprafata_apartament') }}
										</div>
										<div class="col-md-12">
											{{ Form::textareaField('Observatii Caracterisitici Apartament','observatii_apartament') }}
										</div>
									</div>
									
									<div class="form-actions right">
										<button type="button" class="btn default">Anuleaza</button>
										<button type="submit" class="btn blue"><i class="fa fa-check"></i>Salveaza</button>
									</div>
								</div>
							{{ Form::close() }}
							<!-- END FORM-->
						</div>
					</div>
				</div>
				<div class="tab-pane " id="tab_2">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Finisaje si dotari
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							{{ Form::model($imobil = NULL) }}
								<div class="form-body">
									<div class="row">
										<div class="col-md-3">
											{{ Form::selectField('Finisaje Exterioare','finisaje_exterioare', $finisaje_exterioare) }}
										</div>
										<div class="col-md-3">
											{{ Form::selectField('Finisaje Interioare','finisaje_interioare', $finisaje_exterioare) }}
										</div>
										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Gresie Noua</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="gresie_noua" > 
											</div>
										</div>
										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Faianta Noua</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="faianta_noua" > 
											</div>
										</div>
										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Parchet Nou</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="parchet_nou" > 
											</div>
										</div>
										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Zugravit Lavabil Recent</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="zugravit_recent" > 
											</div>
										</div>

										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Dotari</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="dotari" > 
											</div>
										</div>

										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Usa Metalica</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="usa_metalica" > 
											</div>
										</div>

										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Centrala Termica</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="centrala_termica" > 
											</div>
										</div>

										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Ferestre Termopan</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="ferestre_termopan" > 
											</div>
										</div>

										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Electrocasnice</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="electrocasnice" > 
											</div>
										</div>
										<div class="col-md-3">
											{{ Form::selectField('Mobilare','mobilare', $tip_mobilare) }}
											<div class="margin-bottom-20">
												<label for="option1">Mobilare</label>
												<input id="option1" type="radio" name="radio1" value="option1" class="make-switch switch-radio1">
											</div>
										</div>

										<div class="col-md-3">
											{{ Form::textareaField('Observatii Finisaje Si Dotari','observatii_finisaje_dotari') }}
										</div>
									</div>
									
									<div class="form-actions right">
										<button type="button" class="btn default">Anuleaza</button>
										<button type="submit" class="btn blue"><i class="fa fa-check"></i>Salveaza</button>
									</div>
								</div>
							{{ Form::close() }}
							<!-- END FORM-->
						</div>
					</div>
				</div>
				<div class="tab-pane" id="tab_3">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Caracteristici apartament
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							{{ Form::model($imobil = NULL) }}
								<div class="form-body">
									<div class="row">
										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Loc Parcare</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="loc_parcare" > 
											</div>
										</div>
										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Beci</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="beci" > 
											</div>
										</div>
										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Terasa</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="terasa" > 
											</div>
										</div>
										<div class="col-md-3">
											<div class="margin-bottom-20">
												<label for="option1">Existenta Balcon</label><br />
												<input type="checkbox" class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" name="existenta_balcon" > 
											</div>
										</div>
										<div class="col-md-12">
											{{ Form::textareaField('Observatii Dotari','observatii_dotari') }}
										</div>
									</div>
									
									<div class="form-actions right">
										<button type="button" class="btn default">Anuleaza</button>
										<button type="submit" class="btn blue"><i class="fa fa-check"></i>Salveaza</button>
									</div>
								</div>
							{{ Form::close() }}
							<!-- END FORM-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection