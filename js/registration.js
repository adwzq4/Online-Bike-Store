function checkUsername(ele){
    const username = String(ele.value).trim();
    const length = username.length;
    const formEle = document.getElementById("username");
    const pEle = document.getElementById("username-feedback");

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
    const pwd = String(ele.value).trim();
    const length = pwd.length;
    const capital = pwd.search(/[A-Z]/);
    const lowercase = pwd.search(/[a-z]/);
    const digit = pwd.search(/[0-9]/);
    const special = pwd.search(/\W|_/);
    const formEle = document.getElementById("pwd");
    const pEle = document.getElementById("pwd-feedback");

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
    const rptPwd = String(ele.value).trim();
    const length = rptPwd.length;
    const capital = rptPwd.search(/[A-Z]/);
    const lowercase = rptPwd.search(/[a-z]/);
    const digit = rptPwd.search(/[0-9]/);
    const special = rptPwd.search(/\W|_/);
    const pwd = String(document.getElementById("password-text").value).trim();
    const formEle = document.getElementById("repeat-pwd");
    const pEle = document.getElementById("repeat-pwd-feedback");

    if(length > 7 && length < 51 && capital > -1 && lowercase > -1 && digit > -1 && special > -1 && pwd === rptPwd){
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
    const firstName = String(ele.value).trim();
    const length = firstName.length;
    const formEle = document.getElementById("first-name");
    const pEle = document.getElementById("first-name-feedback");

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
    const LastName = String(ele.value).trim();
    const length = LastName.length;
    const formEle = document.getElementById("last-name");
    const pEle = document.getElementById("last-name-feedback");

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
    const address = String(ele.value).trim();
    const length = address.length;
    const formEle = document.getElementById("address-1");
    const pEle = document.getElementById("address-1-feedback");

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
    const address2 = String(ele.value).trim();
    const length = address2.length;
    const formEle = document.getElementById("address-2");
    const pEle = document.getElementById("address-2-feedback");

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
    const city = String(ele.value).trim();
    const length = city.length;
    const formEle = document.getElementById("city");
    const pEle = document.getElementById("city-feedback");

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
    const state = String(ele.value).trim();
    const length = state.length;
    const formEle = document.getElementById("state");
    const pEle = document.getElementById("state-feedback");

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
    const emailValue = String(ele.value).trim();
    const i = emailValue.search(/^\S+@\S+\.\S+$/);
    const formEle = document.getElementById("email");
    const pEle = document.getElementById("email-feedback");

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
    const gender = String(ele.value).trim();
    const length = gender.length;
    const formEle = document.getElementById("gender");
    const pEle = document.getElementById("gender-feedback");

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
    const marital = String(ele.value).trim();
    const length = marital.length;
    const formEle = document.getElementById("marital-status");
    const pEle = document.getElementById("marital-feedback");

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
    const bday = String(ele.value).trim();
    const i = bday.search(/^[0-1][0-9]\/[0-3][0-9]\/[1-2][0-9][0-9][0-9]$/);
    const formEle = document.getElementById("birthday");
    const pEle = document.getElementById("birthday-feedback");

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
    let zip = String(ele.value).trim();
    let length = zip.length;
    const formEle = document.getElementById("zip-code");
    const pEle = document.getElementById("zip-feedback");

    if(length > 4 && length < 11){
        zip = zip.replace(/\D/g, '');
        length = zip.length;
        pEle.innerHTML = "* Valid zip-code";
        pEle.classList.remove("error");
        formEle.classList.remove("invalid");
        formEle.classList.add("valid", "was-validated");

        if (length === 9){
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
    let phone = String(ele.value).trim();
    let length = phone.length;
    const formEle = document.getElementById("phone");
    const pEle = document.getElementById("phone-feedback");

    if(length > 6 && length < 13){
        phone = phone.replace(/\D/g, '');
        length = phone.length;
        if (length === 7){
            pEle.innerHTML = "* Valid phone number";
            pEle.classList.remove("error");
            formEle.classList.remove("invalid");
            formEle.classList.add("valid", "was-validated");
            document.getElementById("phone-val").value = phone.slice(0,3) + "-" + phone.slice(3);
        }
        else if (length === 10){
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
    const forms = document.getElementsByClassName("form-group");
    const feedbacks = document.getElementsByClassName("feedback");
    for(let i=0; i<forms.length; i++){
        forms.item(i).classList.remove("valid", "invalid", "was-validated");
        feedbacks.item(i).innerHTML = "*";
    }
}

function checkForms() {
    const forms = document.getElementsByClassName("form-group");
    const inputs = document.getElementsByClassName("form-control");
    for(let i=0; i<forms.length; i++){
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