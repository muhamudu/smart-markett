$(document).ready(function () {
    $(".form").submit(function (e) { 
        e.preventDefault();
        alert('well');
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
            success: function (response) {
                if(response=='access'){
                    location.href=redirectTo+'.php';
                }
                else{
                    alert(response);
                }
            }
        });

    });
});