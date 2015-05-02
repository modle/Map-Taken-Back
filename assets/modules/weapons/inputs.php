<!--dropdown, search box, create/final/awaken toggles-->
<table class='nav' style='float: left'>
    <tr>
        <td class='navTdTh'>
            <input type='submit' value='Reset' name='ResetButton' />
    </tr>
</table>
<br><br>
<div style='clear:both'></div>
<table class='nav' width='100%'>
    <tr>
        <td class='navTdTh' col width='80%'>
            <?php echo($weaponDropdownString) ?>
            <br><br>
            <input type='text' placeholder='Weapon Name' value='<?php echo($weaponSearch) ?>' name='weaponName'/>
            <br><br>
            <table class='nav'>
                <tr>
                    <td class='navTdTh' style='text-align: right;'>
                        <b>Create</b><br>
                        <b>Final</b><br>
                        <b>Awaken</b>
                    <td class='navTdTh'>
                        <input type='checkbox' value='1' <?php echo($createCheck) ?> name='createShow' onchange='this.form.submit()'    class= 'checkbox'/><br>
                        <input type='checkbox' value='1' <?php echo($finalCheck) ?> name='finalShow' onchange='this.form.submit()' class='checkbox'/><br>
                        <input type='checkbox' value='1' <?php echo($awakenCheck) ?> name='awakenShow' onchange='this.form.submit()' class='checkbox'/>
                </tr>
            </table>
            <br><br>
            <b>Rarity</b>
            <br>
            Min:
            <input type='range' min=1 max=10 value='<?php echo($minRaritySelect) ?>' step=1.0 id='minRange' name='minRaritySelect' onchange='updateRarityMin(this.value, maxRaritySelect.value)' class='range' >
            <input type='text' id='rarityMin' readonly size=1 value='<?php echo($minRaritySelect) ?>' style='background-color: rgba(0,0,0,0); border: none;'>
            <br>
            Max:
            <input type='range' min=1 max=10 value='<?php echo($maxRaritySelect) ?>' step=1.0 id='maxRange' name='maxRaritySelect' onchange='updateRarityMax(minRaritySelect.value, this.value)' class='range' >
            <input type='text' id='rarityMax' readonly size=1 value='<?php echo($maxRaritySelect) ?>' style='background-color: rgba(0,0,0,0); border: none;'>
            
        <!--//Element Radios-->
        <td class='navTdTh' col width='50%'>
            <input type='radio' id='all' value='%' name='elem' onchange='this.form.submit();' <?php echo($allCheck) ?>>
            All
            <br>
            <input type='radio' id='raw' value='RAW' name='elem' onchange='this.form.submit()' <?php echo($rawCheck) ?>>
            <img src=assets/resources/elements/RAW.png class='icon'>
            <br>

            <!--//elements-->
            <input type='radio' id='fire' value='FIR' name='elem' onchange='this.form.submit()' <?php echo($firCheck) ?>>
            <img src=assets/resources/elements/FIR.png class='icon'>
            <br>
            <input type='radio' id='water' value='WAT' name='elem' onchange='this.form.submit()' <?php echo($watCheck) ?>>
            <img src=assets/resources/elements/WAT.png class='icon'>
            <br>
            <input type='radio' id='thunder' value='THU' name='elem' onchange='this.form.submit()' <?php echo($thuCheck) ?>>
            <img src=assets/resources/elements/THU.png class='icon'>
            <br>
            <input type='radio' id='ice' value='ICE' name='elem' onchange='this.form.submit()' <?php echo($iceCheck) ?>>
            <img src=assets/resources/elements/ICE.png class='icon'>
            <br>
            <input type='radio' id='dragon' value='DRA' name='elem' onchange='this.form.submit()' <?php echo($draCheck) ?>>
            <img src=assets/resources/elements/DRA.png class='icon'>
            <br>
            
            <!--//status effects-->
            <input type='radio' id='paralysis' value='PAR' name='elem' onchange='this.form.submit()' <?php echo($parCheck) ?>>
            <img src=assets/resources/elements/PAR.png class='icon'>
            <br>
            <input type='radio' id='poison' value='POI' name='elem' onchange='this.form.submit()' <?php echo($poiCheck) ?>>
            <img src=assets/resources/elements/POI.png class='icon'>
            <br>
            <input type='radio' id='sleep' value='SLE' name='elem' onchange='this.form.submit()' <?php echo($sleCheck) ?>>
            <img src=assets/resources/elements/SLE.png class='icon'>
            <br>
            <input type='radio' id='blast' value='BLA' name='elem' onchange='this.form.submit()' <?php echo($blaCheck) ?>>
            <img src=assets/resources/elements/BLA.png class='icon'>
            <br>
    </tr>
</table>
<br>