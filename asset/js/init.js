/**
 * Created by arunsingh on 4/12/2016.
 */

(function($){
    function validateEmail(email) {
        if(email.trim() == ""){ return false;}
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    if($("input.register-frm#register-frm-load").length){
        var username = $("input.register-frm#register-frm-username");
        var email = $("input.register-frm#register-frm-email");
        var password = $("input.register-frm#register-frm-password");

        var news = $("input.register-frm#register-frm-news");
        var coupon = $("input.register-frm#register-frm-coupon");
        var $checkValidate = true;

        $.fn.valide = function(){
            $(this).css("border","1px solid #B0D201");
            $(this).next("h6").css({"color":"#b94a48;"}).hide();
        }

        $.fn.invalide = function(){
            $(this).css({"color":"#b94a48;", "border-color":"#b94a48"});
            $(this).next("h6").css("color","#b94a48");
            $(this).next("h6").show();
        }

        username.blur(function(){
            if(username.val().trim() != ''){
                $(this).valide();
                $checkValidate = true;
            }else{
                $(this).invalide();
                $checkValidate = false;
            }
        });
        email.blur(function(){
            if(validateEmail(email.val())){
                $(this).valide();
                $checkValidate = true;
            }else{
                $(this).invalide();
                $(this).next("h6").text('Please provide a valid email address.');
                $(this).next("h6").show();
                $checkValidate = false;
            }
        });
        password.blur(function(){
            if($(this).val().length >= 8){
                $(this).valide();
                $checkValidate = true;
            }else{
                $(this).invalide();
                $(this).next("h6").text('Please provide a password greater than 8 characters.');
                $(this).next("h6").show();
                $checkValidate = false;
            }
        });
        $("input.register-frm#register-frm-submit").click(function(){
            if(username.val().trim() != ''){
                username.focus();
                username.next("h6").css({"color":"#b94a48;"}).hide();
                $checkValidate = true;
            }else{
                username.focus();
                username.css({"color":"#b94a48;", "border-color":"#b94a48"});
                username.next("h6").css({"color":"#b94a48;"}).show();
                $checkValidate = false;
            }

            if(validateEmail(email.val())){
                email.focus();
                email.css({"color":"#b94a48;"}).hide();
                $checkValidate = true;
            }else{
                email.focus();
                email.css({"color":"#b94a48;", "border-color":"#b94a48"});
                email.next("h6").css({"color":"#b94a48;"}).val('Please provide a valid email address.').show();
                $checkValidate = false;
            }

        });
    }

})(jQuery);
