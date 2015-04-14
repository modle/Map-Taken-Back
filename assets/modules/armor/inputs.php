<input type='submit' value='Reset All Fields' name='ResetButton'/><br>
<input type='text' placeholder='Armor Name' value="<?php echo($armorName); ?>" name='armorName'/>
<br>

<!--//rarity sliders-->
Rarity: <?php echo($minRaritySelect . ' - ' . $maxRaritySelect); ?>
<br>

Min Rarity:
    <input type='range' min=1 max=10 value='<?php echo($minRaritySelect) ?>' step=1.0 id='minRange' name='minRaritySelect' onchange='updateRarityMin(this.value, maxRaritySelect.value)' class='range' >

<br>

Max Rarity:
    <input type='range' min=1 max=10 value='<?php echo($maxRaritySelect) ?>' step=1.0 id='maxRange' name='maxRaritySelect' onchange='updateRarityMax(minRaritySelect.value, this.value)' class='range' >
<br>

<table class='nav'>
    <tr>
        <td class='navTdTh'><input type='radio' id='blademaster' value='1' name='type' onchange='this.form.submit()' <?php echo($bladeCheck) ?>>
        <img src=assets/resources/weapons/1.png >
         |
        <td class='navTdTh'><input type='radio' id='gunner' value='13' name='type' onchange='this.form.submit()' <?php echo($gunCheck) ?>>
        <img src=assets/resources/weapons/13.png >
        <td class='navTdTh'>
         |
        <td class='navTdTh'><input type='radio' id='both' value='0' name='type' onchange='this.form.submit()' <?php echo($bothCheck)?>>
        <img src=assets/resources/weapons/0.png >
    </tr>
</table>
