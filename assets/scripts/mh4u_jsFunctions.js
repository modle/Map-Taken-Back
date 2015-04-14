function updateRarityMin(minVal, maxVal) {

    if (parseInt(minVal)<=parseInt(maxVal)) {
        document.getElementById('rarity').value="Rarity: ".concat(minVal).concat(" - ").concat(maxVal);
    } else {
        document.getElementById('minRange').value=maxVal;
        document.getElementById('rarity').value="Rarity: ".concat(maxVal).concat(" - ").concat(maxVal);
    }

    return document.getElementById('minRange').submit();
}

function updateRarityMax(minVal, maxVal) {

    if (parseInt(minVal)<=parseInt(maxVal)) {
        document.getElementById('rarity').value="Rarity: ".concat(minVal).concat(" - ").concat(maxVal);
    } else {
        document.getElementById('maxRange').value=minVal;
        document.getElementById('rarity').value="Rarity: ".concat(minVal).concat(" - ").concat(minVal);
    }

    return document.getElementById('maxRange').submit();
}

//function popUp(URL) {
//    eval("window.open(URL, 'Path', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=250,height=800,left = 283,top = -16');");
//    }

