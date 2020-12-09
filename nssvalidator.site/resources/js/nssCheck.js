window.onNssChange = function onNssChange() {
    let nssPregCheck = document.getElementById("nssCodePregCheck");
    let nssCheckBtn = document.getElementById("nssCheckBtn");
    let nssFull = document.getElementById("nssFull");
    let value = nssFull.value;
    
    if(value.substring(0, 13).match(/^\d{5}(\d{2}|2a|2b)\d{6}$/i) && value.length == 15 ) {
       nssPregCheck.innerHTML = "Полный код введен верно, согласно шаблону";
        nssCheckBtn.removeAttribute("disabled");
    }
    else {
        nssPregCheck.innerHTML = "Полный код введен неверно";
        nssCheckBtn.setAttribute("disabled", "");
    }
    
    
}
