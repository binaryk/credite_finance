/// <reference path="../binaryk/ui/Modal.ts"/>

module App{
    declare var $;
    export class ModalAction{
        public modal : any;
        constructor(){
            this.modal = new App.Ui.Modal({'id' : '#sync_modal'});
        }

        init(){
            this.handlers();
        }

        handlers(){
            const _that = this;
            this.modal['sync'] = _that.bindFn.bind(this);
            $('.action-recurenta').on('click', function(e){
                e.preventDefault();
                var title = $(this).closest('tr').find('td').first().find('div').last().html();
                console.log(title);
                _that.modal.hide();
                _that.modal.setTitle(title);
                _that.modal.show();
            });
        }

        bindFn(){
            this.modal.hide();
        }
    }
}

