var Scadenta = (function () {
    function Scadenta(route) {
        var _this = this;
        this.route = route;
        this.handle = function () {
            var that = _this;
            $(document).on('click', '.action-simulation', function (e) {
                var $id = $(this).data('id'), $time = $(this).data('time');
                var _ajax = new HelperAjax();
                _ajax
                    .setUrl(that.route)
                    .setData('id', $id)
                    .setData('time', $time)
                    .setOnFinish(function (response) {
                    alert('Finis');
                    console.log(response);
                })
                    .Request();
            });
        };
    }
    return Scadenta;
})();
//# sourceMappingURL=Scadenta.js.map