;var FORMAT = function(){
    var that = this;

    var decimal  = function(suffix){
        $('.decimal').css({'text-align':'right'}).inputmask('decimal', {
            radixPoint     : '.',
            digits         : 2,
            // groupSeparator : '.',
            // autoGroup      : true,
            // suffix         : suffix,
            // max            : 10000
        });
    }

    var currency  = function(suffix){
        $('.currency').css({'text-align':'right'}).inputmask('decimal', {
            radixPoint     : '.',
            digits         : 2,
            // min            : 0,
            // max            : 10000,
            // groupSeparator : '.',
            // autoGroup      : true,
            suffix         : '$',
        });
    }

    var percentage  = function(suffix){
        $('.percentage').css({'text-align':'right'}).inputmask('decimal', {
            radixPoint     : '.',
            digits         : 2,
            // groupSeparator : '.',
            // autoGroup      : true,
            //suffix         : ' %',
            max            : 100
        });
    }

    var integer  = function(suffix){
        $('.integer').css({'text-align':'right'}).inputmask('integer');
    }

    var min			= function(){
        $('.min').css({'text-align':'right'}).inputmask('decimal', {
            radixPoint     : '.',
            digits         : 2,
            // groupSeparator : '.',
            // autoGroup      : true,
            // suffix         : suffix,
            // max            : 10000
        });
    }

    return {
        init: function(){
            decimal();
            currency();
            percentage();
            integer();
            min();
        }
    }
}();