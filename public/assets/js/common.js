$(document).ready(function () {
    // alert('welcome to our website');
    // console.log('hey');


    $(document).on('click', '.xyz', function () {
        var email = $('.newslettermail').val();
        var csrf = $("[name=_token]").val();
        var option = ""; 
        var base_url =window.location.origin;
        var url = base_url + '/add-newsletter';
        jQuery.ajax({
        type:'post',
        url:url,
        data:{
            "email":email,
            "_token":csrf,
        },
        success:function(result){
            $('.message').html();
        }

        });


    });






    $(document).on('click', '.test', function () {
        var email = $('.testemail').val();
        var csrf = $("[name=_token]").val();
        var option = ""; 
        var base_url =window.location.origin;
        var url = base_url + '/add-pagetest';
        jQuery.ajax({
        type:'post',
        url:url,
        data:{
            "email":email,
            "_token":csrf,
        },
        success:function(result){
            $('.message').html(result.return);
            $('testemail').val('');
            setTimeout(function () {
                $('.message').hide();
            }, 4000);
        }

        });


    });


});