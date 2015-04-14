function updateRarityMin(minVal, maxVal) {

    if (parseInt(minVal)<=parseInt(maxVal)) {
        document.getElementById('rarity').value="Rarity: ".concat(minVal).concat(" - ").concat(maxVal);
    } else {
        document.getElementById('minRange').value=maxVal;
        document.getElementById('rarity').value="Rarity: ".concat(maxVal).concat(" - ").concat(maxVal);
    }
}

function updateRarityMax(minVal, maxVal) {

    if (parseInt(minVal)<=parseInt(maxVal)) {
        document.getElementById('rarity').value="Rarity: ".concat(minVal).concat(" - ").concat(maxVal);
    } else {
        document.getElementById('maxRange').value=minVal;
        document.getElementById('rarity').value="Rarity: ".concat(minVal).concat(" - ").concat(minVal);
    }
}

function popUp(URL) {
    eval("window.open(URL, 'Path', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=600,left = 283,top = -16');");
    }
