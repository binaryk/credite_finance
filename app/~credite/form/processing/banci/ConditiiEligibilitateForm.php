<?php
namespace Credite\Banci\Form;
class ConditiiEligibilitateForm extends \Processing\Form\Form
{

    public static function make()
    {
        return self::$instance = new ConditiiEligibilitateForm();
    }

    protected function setView()
    {
        $this->view('banci.produse.conditii.form');
    }

    protected function setModel()
    {
        $this->model('Credite|Eligibilitate');
    }

    protected function addControls()
    {
        $this

// 0
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('id_produs')
                    ->caption('<b>asd</b>')
                    ->class('form-control  data-source')
                    ->controlsource('id_produs')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
            // 1
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('vechime_munca_actual')
                    ->caption(' Vechime la locul de munca actual( luni) ')
                    ->class('form-control  data-source')
                    ->controlsource('vechime_munca_actual')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
            // 2
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('vechime_munca_total')
                    ->caption(' Vechime totala in munca (luni)')
                    ->class('form-control  data-source')
                    ->controlsource('vechime_munca_total')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
            // 3
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('venit_minim')
                    ->caption('Venit net minim(lei)')
                    ->class('form-control  data-source')
                    ->controlsource('venit_minim')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
            // 4
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('perioada_contractului_munca')
                    ->caption('Perioada contractului de munca (determinata/nedeterminata)')
                    ->class('form-control  data-source')
                    ->controlsource('perioada_contractului_munca')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
            // 5
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('varsta_minima')
                    ->caption('Varsta minima (18 ani)')
                    ->class('form-control  data-source')
                    ->controlsource('varsta_minima')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
            // 6
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('varsta_maxima')
                    ->caption('Varsta maxima (70 ani)')
                    ->class('form-control  data-source')
                    ->controlsource('varsta_maxima')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
            // 7
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('salariu')->placeholder('Textbox')
                    ->value('Salariu')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('salariu', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'salariu',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'salariu',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 8
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('diurne')->placeholder('Textbox')
                    ->value('Diurne')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('diurne', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'diurne',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'diurne',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 9
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('pensie')->placeholder('Textbox')
                    ->value('Pensie')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('pensie', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'pensie',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'pensie',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 10
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('dividende')->placeholder('Textbox')
                    ->value('Dividende')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('dividende', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'dividende',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'dividende',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 11
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('indemniz_copil')->placeholder('Textbox')
                    ->value('Îndemnizație de creștere copil')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('indemniz_copil', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'indemniz_copil',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'indemniz_copil',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 12
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('activitati_indep')->placeholder('Textbox')
                    ->value('Activități independente')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('activitati_indep', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'activitati_indep',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'activitati_indep',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 13
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('profesii_liberale')->placeholder('Textbox')
                    ->value('Profesii liberale')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('profesii_liberale', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'profesii_liberale',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'profesii_liberale',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 14
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('drepturi_de_autor')->placeholder('Textbox')
                    ->value('Drepturi de autor')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('drepturi_de_autor', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'drepturi_de_autor',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'drepturi_de_autor',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 15
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('chirii')->placeholder('Textbox')
                    ->value('Chirii')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('chirii', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'chirii',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'chirii',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 16
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('rente_viagere')->placeholder('Textbox')
                    ->value('Rente viagere')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('rente_viagere', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'rente_viagere',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'rente_viagere',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 17
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('comisioane')->placeholder('Textbox')
                    ->value('Comisioane')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('comisioane', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'comisioane',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'comisioane',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 18
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('ore_suplimentare')->placeholder('Textbox')
                    ->value('Ore suplimentare')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('ore_suplimentare', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'ore_suplimentare',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'ore_suplimentare',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 19
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('contracte_de_management')->placeholder('Textbox')
                    ->value('Contracte de management')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('contracte_de_managementcontracte_de_management', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'contracte_de_management',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'contracte_de_management',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 20
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('contracte_de_mandat')->placeholder('Textbox')
                    ->value('Contracte de mandat')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('contracte_de_mandat', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'contracte_de_mandat',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'contracte_de_mandat',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 21
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox-addon')
                    ->name('norma_de_hrana')->placeholder('Textbox')
                    ->value('Norma de hrană')->class('form-control input_label')->enabled(0)
                    ->addon([
                        'before' => \Form::checkbox('norma_de_hrana', '1', false,
                            ['class' => 'data-source icheck', 'id' => 'norma_de_hrana',
                                'data-checkbox' => 'icheckbox_square-green', 'data-control-source' => 'norma_de_hrana',
                                'data-control-type' => 'checkbox', 'data-on' => 1, 'data-off' => 0]
                        ),
                        'after' => NULL])
            )
            // 22
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('co_platitor')
                    ->caption('<b>co_platitor bancă</b>')
                    ->class('form-control  data-source')
                    ->controlsource('co_platitor')
                    ->controltype('textbox')
                    ->maxlength(255)
            )

        ;
    }


}