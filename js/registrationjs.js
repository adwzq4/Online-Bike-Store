function checkUsername(ele){
    var username = String(ele.value).trim();
    var length = username.length;
    var formEle = document.getElementById("username");
    var pEle = document.getElementById("username-feedback");

    if(length > 5 && length < 51){
        pEle.innerHTML = "* Valid username";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else{
        pEle.innerHTML = "* Invalid username";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkPwd(ele){
    var pwd = String(ele.value).trim();
    var length = pwd.length;
    var capital = pwd.search(/[A-Z]/);
    var lowercase = pwd.search(/[a-z]/);
    var digit = pwd.search(/[0-9]/);
    var special = pwd.search(/\W|_/);
    var formEle = document.getElementById("pwd");
    var pEle = document.getElementById("pwd-feedback");

    if(length > 7 && length < 51 && capital > -1 && lowercase > -1 && digit > -1 && special > -1){
        pEle.innerHTML = "* Valid password";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else{
        pEle.innerHTML = "* Invalid password";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkRepeatPwd(ele){
    var rptPwd = String(ele.value).trim();
    var length = rptPwd.length;
    var capital = rptPwd.search(/[A-Z]/);
    var lowercase = rptPwd.search(/[a-z]/);
    var digit = rptPwd.search(/[0-9]/);
    var special = rptPwd.search(/\W|_/);
    var pwd = String(document.getElementById("password-text").value).trim();
    var formEle = document.getElementById("repeat-pwd");
    var pEle = document.getElementById("repeat-pwd-feedback");

    if(length > 7 && length < 51 && capital > -1 && lowercase > -1 && digit > -1 && special > -1 && pwd == rptPwd){
        pEle.innerHTML = "* Passwords match";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else{
        pEle.innerHTML = "* Passwords don't match";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkFirstName(ele){
    var firstName = String(ele.value).trim();
    var length = firstName.length;
    var formEle = document.getElementById("first-name");
    var pEle = document.getElementById("first-name-feedback");

    if(length > 0 && length < 51){
        pEle.innerHTML = "* Valid first name";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else{
        pEle.innerHTML = "* Invalid first name";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkLastName(ele){
    var LastName = String(ele.value).trim();
    var length = LastName.length;
    var formEle = document.getElementById("last-name");
    var pEle = document.getElementById("last-name-feedback");

    if(length > 0 && length < 51){
        pEle.innerHTML = "* Valid last name";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else{
        pEle.innerHTML = "* Invalid last name";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkAddress(ele){
    var address = String(ele.value).trim();
    var length = address.length;
    var formEle = document.getElementById("address-1");
    var pEle = document.getElementById("address-1-feedback");

    if(length > 0 && length < 101){
        pEle.innerHTML = "* Valid address";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else{
        pEle.innerHTML = "* Invalid address";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkAddress2(ele){
    var address2 = String(ele.value).trim();
    var length = address2.length;
    var formEle = document.getElementById("address-2");
    var pEle = document.getElementById("address-2-feedback");

    if(length < 101){
        pEle.innerHTML = "* Valid address (line 2)";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else{
        pEle.innerHTML = "* Invalid address (line 2)";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkCity(ele){
    var city = String(ele.value).trim();
    var length = city.length;
    var formEle = document.getElementById("city");
    var pEle = document.getElementById("city-feedback");

    if(length > 0 && length < 51){
        pEle.innerHTML = "* Valid city";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else{
        pEle.innerHTML = "Invalid city";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkState(ele){
    var state = String(ele.value).trim();
    var length = state.length;
    var formEle = document.getElementById("state");
    var pEle = document.getElementById("state-feedback");

    if(length > 0 && length < 53){
        pEle.innerHTML = "* Valid state";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else{
        pEle.innerHTML = "* Invalid state";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkEmail(ele) {
    var emailValue = String(ele.value).trim();
    var i = emailValue.search(/^\S+@\S+\.\S+$/);
    var formEle = document.getElementById("email");
    var pEle = document.getElementById("email-feedback");

    if(i > -1){
        pEle.innerHTML = "* Valid email";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else{
        pEle.innerHTML = "* Invalid Email";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkGender(ele){
    var gender = String(ele.value).trim();
    var length = gender.length;
    var formEle = document.getElementById("gender");
    var pEle = document.getElementById("gender-feedback");

    if(length > 0 && length < 51){
        pEle.innerHTML = "* Valid gender";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else{
        pEle.innerHTML = "* Invalid gender";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkMarital(ele){
    var marital = String(ele.value).trim();
    var length = marital.length;
    var formEle = document.getElementById("marital-status");
    var pEle = document.getElementById("marital-feedback");

    if(length > 0 && length < 51){
        pEle.innerHTML = "* Valid marital status";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else{
        pEle.innerHTML = "* Invalid marital status";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkBirthday(ele) {
    var bday = String(ele.value).trim();
    var i = bday.search(/^[0-1][0-9]\/[0-3][0-9]\/[1-2][0-9][0-9][0-9]$/);
    var formEle = document.getElementById("birthday");
    var pEle = document.getElementById("birthday-feedback");

    if (i > -1) {
        pEle.innerHTML = "* Valid birthday";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");
    }
    else {
        pEle.innerHTML = "* Invalid birthday";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function checkZip(ele) {
    var zip = String(ele.value).trim();
    var length = zip.length;
    var formEle = document.getElementById("zip-code");
    var pEle = document.getElementById("zip-feedback");

    if(length > 4 && length < 11){
        zip = zip.replace(/\D/g, '');
        length = zip.length;
        pEle.innerHTML = "* Valid zip-code";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");

        if (length == 9){
            document.getElementById("zip-val").value = zip.slice(0,5) + "-" + zip.slice(5);
        }
        else{
            document.getElementById("zip-val").value = zip.slice(0,5);
        }
    }
    else{
            pEle.innerHTML = "* Invalid zip-code";
            formEle.classList.remove("valid");
            formEle.classList.add("invalid", "was-validated");
    }
}

function checkPhone(ele){
    var phone = String(ele.value).trim();
    var length = phone.length;
    var formEle = document.getElementById("phone");
    var pEle = document.getElementById("phone-feedback");

    if(length > 6 && length < 13){
        phone = phone.replace(/\D/g, '');
        length = phone.length;
        if (length == 7){
            pEle.innerHTML = "* Valid phone number";
            pEle.classList.remove("error");
            formEle.classList.remove("invalid");
            formEle.classList.add("valid", "was-validated");
            document.getElementById("phone-val").value = phone.slice(0,3) + "-" + phone.slice(3);
        }
        else if (length == 10){
            pEle.innerHTML = "* Valid phone number";
            pEle.classList.remove("error");
            formEle.classList.remove("invalid");
            formEle.classList.add("valid", "was-validated");
            document.getElementById("phone-val").value = phone.slice(0,3) + "-" + phone.slice(3,6)
                + "-" + phone.slice(6);
        }
        else{
            pEle.innerHTML = "* Invalid phone number";
            formEle.classList.remove("valid");
            formEle.classList.add("invalid", "was-validated");
        }
    }
    else{
        pEle.innerHTML = "* Invalid phone number";
        formEle.classList.remove("valid");
        formEle.classList.add("invalid", "was-validated");
    }
}

function resetForms() {
    var forms = document.getElementsByClassName("form-group");
    var feedbacks = document.getElementsByClassName("feedback");
    for(i=0; i<forms.length; i++){
        forms.item(i).classList.remove("valid", "invalid", "was-validated");
        feedbacks.item(i).innerHTML = "*";
    }
}

function checkForms() {
    var forms = document.getElementsByClassName("form-group");
    var inputs = document.getElementsByClassName("form-control");
    for(i=0; i<forms.length; i++){
        if (inputs.item(i).hasAttribute("required") && !(forms.item(i).classList.contains("valid"))){
            document.getElementById("submit").disabled = true;
            return;
        }
        if (forms.item(i).classList.contains("invalid")){
            document.getElementById("submit").disabled = true;
            return;
        }
    }
    document.getElementById("submit").removeAttribute("disabled");
}