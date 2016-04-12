/**
 * Created by arunsingh on 4/12/2016.
 */

(function($){
    function CheckPasswordStrength(password) {
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.

        var passed = 0;

        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }

        //Validate for length of Password.
        if (passed > 2 && password.length > 8) {
            passed++;
        }
        return passed;
    }

    function passwordClass(passed){
        var strength = '';
        switch (passed) {
            case 0:
                strength = '';
                break;
            case 1:
                strength = "Weak";
                break;
            case 2:
                strength = "Fair";
                break;
            case 3:
            case 4:
                strength = "Medium";
                break;
            case 5:
                strength = "Strong";
                break;
        }
        return strength;
    }

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
        var strength = $("div.strength-indicator");
        var show_indcator = strength.find("div strong#password-strength");
        var indecator = strength.find("ul.strength-indicator_visualbar");

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

        $.fn.passwordValidate = function(){

        }

        username.blur(function(){
            if(username.val().trim() != ''){
                $(this).valide();
            }else{
                $(this).invalide();
            }
        });
        email.blur(function(){
            if(validateEmail(email.val())){
                $(this).valide();
            }else{
                $(this).invalide();
                $(this).next("h6").text('Please provide a valid email address.');
                $(this).next("h6").show();
            }
        });
        password.keyup(function(){
            var score = CheckPasswordStrength($(this).val());
            var pclass = passwordClass(parseInt(score));
            indecator.attr("data-strength",pclass);
            show_indcator.text(pclass);
            if(score > 1){
                $(this).attr("data-validate","true");
            }else{
                $(this).attr("data-validate","false");
            }
        });
        password.blur(function(){
            if($(this).attr("data-validate") === 'true'){
                $(this).valide();
            }else{
                $(this).invalide();
                $(this).next("h6").text('Please provide a password greater than 8 characters.');
                $(this).next("h6").show();
            }
        });
        $("input.register-frm#register-frm-submit").click(function(){
            if(username.val().trim() != ''){
                username.valide();
                $checkValidate = true;
            }else{
                username.invalide();
                $checkValidate = false;
            }

            if(validateEmail(email.val())){
                email.valide();
                $checkValidate = true;
            }else{
                email.invalide();
                email.next("h6").text('Please provide a valid email address.');
                email.next("h6").show();
                $checkValidate = false;
            }
            if(password.attr("data-validate") === 'true'){
                password.valide();
                $checkValidate = true;
            }else{
                password.invalide();
                password.next("h6").text('Please provide a password greater than 8 characters.');
                password.next("h6").show();
                $checkValidate = false;
            }
            console.log();
            if($checkValidate){
                var optionData = {"username":username.val(), "email":email.val(), "password":password.val(), "news":((news.prop("checked"))?"Yes":"No"), "coupon":(coupon.prop("checked"))?"Yes":"No", "action":"Registration"};
                $.ajax({
                    url:"ms_file/ajax",
                    type:"post",
                    data:optionData,
                    success:function(res){
                        var js = JSON.parse(res);
                        if(js.success == 'success'){
                            $("#reg-final-message h3").css("color","#B0D201");
                            $("#reg-final-message h3").text(js.message);
                            $("#reg-final-message h3").show();
                            setTimeout(function(){
                                location.href = js.trig;
                            },5000);
                        }else{
                            var vlidator = "";
                            if(js.trig == "email"){
                                vlidator = email;
                            }else if(js.trig == "username"){
                                vlidator = username;
                            }
                            vlidator.next("h6").text(js.message);
                            vlidator.invalide();
                        }
                    }
                });
            }
        });
    }

})(jQuery);
