declare var $;
declare var HelperAjax;
declare var _config;

class Scadenta{

    constructor(public route){}

    handle = () => {
        var that = this;
        $(document).on('click','.action-simulation', function(e){
            var $id = $(this).data('id'),
                $time = $(this).data('time');

            var _ajax = new HelperAjax();
            _ajax
                .setUrl(that.route)
                .setData('POST')
                .setData('id', $id)
                .setData('time',$time)
                .setOnFinish( function(response){
                   alert('Finis');
                    console.log(response);
                })
                .Request()
            ;
        })
    }

}
