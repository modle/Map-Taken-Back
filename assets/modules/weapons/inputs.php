<!--dropdown, search box, create/final/awaken toggles-->

<?php echo($weaponDropdownString) ?>
<br>
<input type='text' placeholder='Weapon Name' value='<?php echo($weaponSearch) ?>' name='weaponName' />
<table class='nav'>
    <tr>
        <th class='navTdTh'>[Create]</th>
        <th class='navTdTh'>[Final]</th>
        <th class='navTdTh'>[Awaken]</th>
    </tr>
    <tr>
        <td class='navTdTh'><input type='checkbox' value='1' <?php echo($createCheck) ?> name='createShow' onchange='this.form.submit()' class='checkbox'/>
        <td class='navTdTh'><input type='checkbox' value='1' <?php echo($finalCheck) ?> name='finalShow' onchange='this.form.submit()' class='checkbox'/>
        <td class='navTdTh'><input type='checkbox' value='1' <?php echo($awakenCheck) ?> name='awakenShow' onchange='this.form.submit()' class='checkbox'/>
    </tr>
</table>

<!--//rarity sliders-->
<strong>Rarity: <?php echo($minRaritySelect . ' - ' . $maxRaritySelect); ?></strong>
<br>
Min Rarity:
    <input type='range' min=1 max=10 value='<?php echo($minRaritySelect) ?>' step=1.0 id='minRange' name='minRaritySelect' onchange='updateRarityMin(this.value, maxRaritySelect.value)' class='range' >

<br>
Max Rarity:
    <input type='range' min=1 max=10 value='<?php echo($maxRaritySelect) ?>' step=1.0 id='maxRange' name='maxRaritySelect' onchange='updateRarityMax(minRaritySelect.value, this.value)' class='range' >
<br>

<!--//Element Radios-->

<!--//All and raw-->
<table class='nav'>
    <tr>
        <td class='navTdTh'><input type='radio' id='all' value='%' name='elem' onchange='this.form.submit();' <?php echo($allCheck) ?>>
        ALL |
        <td class='navTdTh'><input type='radio' id='raw' value='RAW' name='elem' onchange='this.form.submit()' <?php echo($rawCheck) ?>>
        <img src=assets/resources/elements/RAW.png height='20' width='20'>
    </tr>
</table>

<!--//elements-->
<table class='nav'>
    <tr><td class='navTdTh'><input type='radio' id='fire' value='FIR' name='elem' onchange='this.form.submit()' <?php echo($firCheck) ?>>
        <img src=assets/resources/elements/FIR.png height='20' width='20'>
         |
        <td class='navTdTh'><input type='radio' id='water' value='WAT' name='elem' onchange='this.form.submit()' <?php echo($watCheck) ?>>
        <img src=assets/resources/elements/WAT.png height='20' width='20'>
         |
        <td class='navTdTh'><input type='radio' id='thunder' value='THU' name='elem' onchange='this.form.submit()' <?php echo($thuCheck) ?>>
        <img src=assets/resources/elements/THU.png height='20' width='20'>
         |
        <td class='navTdTh'><input type='radio' id='ice' value='ICE' name='elem' onchange='this.form.submit()' <?php echo($iceCheck) ?>>
        <img src=assets/resources/elements/ICE.png height='20' width='20'>
         |
        <td class='navTdTh'><input type='radio' id='dragon' value='DRA' name='elem' onchange='this.form.submit()' <?php echo($draCheck) ?>>
        <img src=assets/resources/elements/DRA.png height='20' width='20'>
    </tr>
</table>

<!--//status effects-->
<table class='nav'>
    <tr><td class='navTdTh'><input type='radio' id='paralysis' value='PAR' name='elem' onchange='this.form.submit()' <?php echo($parCheck) ?>>
        <img src=assets/resources/elements/PAR.png height='20' width='20'>
         |
        <td class='navTdTh'><input type='radio' id='poison' value='POI' name='elem' onchange='this.form.submit()' <?php echo($poiCheck) ?>>
        <img src=assets/resources/elements/POI.png height='20' width='20'>
         |
        <td class='navTdTh'><input type='radio' id='sleep' value='SLE' name='elem' onchange='this.form.submit()' <?php echo($sleCheck) ?>>
        <img src=assets/resources/elements/SLE.png height='20' width='20'>
         |
        <td class='navTdTh'><input type='radio' id='blast' value='BLA' name='elem' onchange='this.form.submit()' <?php echo($blaCheck) ?>>
        <img src=assets/resources/elements/BLA.png height='20' width='20'>
        <td class='navTdTh'>
    </tr>
</table>

<br>