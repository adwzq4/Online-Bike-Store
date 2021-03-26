function checkForms() {
    const inputs = document.getElementsByClassName("form-control");
    for (let i=0; i<inputs.length; i++) {
        if (inputs.item(i).value === ""){
            document.getElementById("submit").disabled = true;
            return;
        }
    }
    document.getElementById("loginSubmit").removeAttribute("disabled");
}