/// <reference path="../binaryk/ui/Modal.ts"/>
var App;
(function (App) {
    var ModalAction = (function () {
        function ModalAction() {
            this.modal = new App.Ui.Modal({ 'id': '#sync_modal' });
        }
        ModalAction.prototype.init = function () {
            this.handlers();
        };
        ModalAction.prototype.handlers = function () {
            var _that = this;
            this.modal['sync'] = _that.bindFn.bind(this);
            $('.action-recurenta').on('click', function (e) {
                e.preventDefault();
                var title = $(this).closest('tr').find('td').first().find('div').last().html();
                console.log(title);
                _that.modal.hide();
                _that.modal.setTitle(title);
                _that.modal.show();
            });
        };
        ModalAction.prototype.bindFn = function () {
            this.modal.hide();
        };
        return ModalAction;
    })();
    App.ModalAction = ModalAction;
})(App || (App = {}));
//# sourceMappingURL=ModalAction.js.map