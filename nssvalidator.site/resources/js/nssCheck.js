window.onNssChange = function onNssChange() {
    let nssInput = document.getElementById("nsscode");
    let nssPregCheck = document.getElementById("nssCodePregCheck");
    let nssCheckBtn = document.getElementById("nssCheckBtn");
    let value = nssInput.value;
    if(value.substring(0, 13).match(/^\d{5}(\d{2}|2a|2b)\d{6}$/i) && value.length == 15) {
        nssPregCheck.innerHTML = "Код введен верно, можно продолжить";
        nssCheckBtn.removeAttribute("disabled");
    }
    else {
        nssPregCheck.innerHTML = "Код введен неверно";
        nssCheckBtn.setAttribute("disabled", "");
    }
}