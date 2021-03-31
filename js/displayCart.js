function requestUpdateCart(ele) {
    const xmlhttp = new XMLHttpRequest();
    console.log(ele.name)
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            location.reload();
            ele.classList.add("valid");
            setTimeout(() => {
                ele.classList.remove("valid");
            }, 2000);
        }
        if(this.status >= 400) {
            ele.classList.add("error");
            ele.disable = true;
            const pEle = document.getElementById(ele.name);
            pEle.classList.add("error");
            pEle.innerText = "Error adding to cart (Code: " + this.status.toString() + ")";
            setTimeout(() => {
                ele.classList.remove("error");
                ele.disabled = false;
                pEle.innerText = "";
                pEle.classList.remove("error")
            }, 2000);
        }
    };
    xmlhttp.open("GET", "updateCart.php?bike=" + ele.name + "&quantity=" + ele.value, true);
    xmlhttp.send();
}