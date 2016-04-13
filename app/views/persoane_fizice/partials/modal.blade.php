<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    {{
                    \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('data_scadentei')
                    ->caption('Data scadentei')
                    ->class('form-control data-source datepicker')->readonly(1)
                    ->controlsource('data_scadentei')->controltype('textbox')
                    ->addon(['before' => '<i class="fa fa-calendar"></i>', 'after' => NULL])->out()
                    }}
                </div>
                <div class="col-md-4">
                    {{
                        \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                        ->name('rata_lunara')
                        ->caption('Rata lunara')
                        ->class('form-control  data-source decimal')
                        //->placeholder('Telefon')
                        ->controlsource('rata_lunara')
                        ->controltype('textbox')
                        ->maxlength(255)->out()
                    }}
                </div>

                <div class="col-md-4">
                    {{
    			\Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
				->name('per_contract')
				->caption('Moneda')
				->class('form-control data-source input-group form-select init-on-update-delete')
				->controlsource('per_contract')
				->controltype('combobox')
				->enabled('false')
				->options(\Credite\PersoaneFizice::moneda())->out()
                    }}
                </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                   {{
               \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
               ->name('euribor_procent')
               ->caption('(%)')
               ->class('form-control  data-source decimal')
               //->placeholder('Telefon')
               ->controlsource('euribor_procent')
               ->controltype('textbox')
               ->maxlength(255)->out() }}
               </div>
                <div class="col-md-8">
                    {{
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                ->name('per_contract')
                ->caption('Selectati (bor)')
                ->class('form-control data-source input-group form-select init-on-update-delete')
                ->controlsource('per_contract')
                ->controltype('combobox')
                ->enabled('false')
                ->options(\Credite\PersoaneFizice::bor())->out()
                    }}
                </div>
            </div>
        </div>
    </div>
</div>