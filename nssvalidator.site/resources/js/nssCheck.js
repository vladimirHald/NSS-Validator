window.onNssChange = function onNssChange() {
    let nssPregCheck = document.getElementById("nssCodePregCheck");
    let nssCheckBtn = document.getElementById("nssCheckBtn");
    let nssFull = document.getElementById("nssFull");
    let nssSex = document.getElementById("nssSex").value;
    let nssYear = document.getElementById("nssYear").value;
    let nssMonth = document.getElementById("nssMonth").value;
    let nssDepartment = document.getElementById("nssDepartment").value;
    let nssComune = document.getElementById("nssComune").value;
    let nssOrderNumber = document.getElementById("nssOrderNumber").value;
    let nssControlKey = document.getElementById("nssControlKey").value;
    let fullGeneratedCode = nssSex + nssYear + nssMonth  + nssDepartment + nssComune + nssOrderNumber + nssControlKey;
    nssFull.value = fullGeneratedCode;
    
    let value = nssFull.value;
    
    if(value.substring(0, 13).match(/^\d{5}(\d{2}|2a|2b)\d{6}$/i) && value.length == 15 ) {
       nssPregCheck.innerHTML = "Код введен верно, можно продолжить";
        nssCheckBtn.removeAttribute("disabled");
    }
    else {
        nssPregCheck.innerHTML = "Код введен неверно";
        nssCheckBtn.setAttribute("disabled", "");
    }
    
    
}
