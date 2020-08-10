$(document).ready(function () {
    $(".form").submit(function (e) { 
        e.preventDefault();
        var form=$(this).serialize();
        var action=$(this).attr("action");
        var method=$(this).attr("method");
        var redirectTo=$(this).attr('redirectTo');
        $.ajax({
            type: method,
            url: action,
            data: form,
            cache: false,
            processData: false,
            beforeSubmit:function (){
                
            },
            success: function (response) {
                if(response=='access'){
                    location.href=redirectTo+'.php';
                }
            }
        });

    });
});