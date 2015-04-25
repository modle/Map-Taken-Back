function updateRarityMin(minVal, maxVal) {

    if (parseInt(minVal)<=parseInt(maxVal)) {
        document.getElementById('rarityMin').value=minVal;
        document.getElementById('minRange').value=minVal;
    } else {
        document.getElementById('rarityMin').value=maxVal;
        document.getElementById('minRange').value=maxVal;
    }
    document.getElementById('defaultActionButton').click();
}

function updateRarityMax(minVal, maxVal) {

    if (parseInt(maxVal)>=parseInt(minVal)) {
        document.getElementById('maxRange').value=maxVal;
        document.getElementById('rarityMax').value=maxVal;
    } else {
        document.getElementById('maxRange').value=minVal;
        document.getElementById('rarityMax').value=minVal;
    }
    document.getElementById('defaultActionButton').click();
}