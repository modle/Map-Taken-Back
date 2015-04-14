<!--element table-->
<table class='data'>
    <tr class='dataTh'>
        <th>Elements</th>
    <tr>
        <td><?php echo($weaknessString)?>
    <tr>
</table>
<br>

<!--tools table-->
<table class='data'>
    <tr class='dataTh'>
        <th><img src=assets/resources/tools/pitfall.png height='20' width='20'> / <img src=assets/resources/tools/shock.png height='20' width='20'></th>
        <th><img src=assets/resources/tools/flash.png height='20' width='20'> / <img src=assets/resources/tools/sonic.png height='20' width='20'> / <img src=assets/resources/tools/dung.png height='20' width='20'></th>
        <th><img src=assets/resources/tools/meat.png height='20' width='20'></th>
    <tr>
        <td><?php echo($monsterDataRow['pitfallTrap'] . ' / ' . $monsterDataRow['shockTrap'])?>
        <td><?php echo($monsterDataRow['flashBomb'] . ' / ' . $monsterDataRow['sonicBomb'] . ' / ' . $monsterDataRow['dungBomb'])?>
        <td><?php echo($monsterDataRow['meat'])?>
</table>
<br>

<!--poison table-->
<table class='data' style='visibility:hidden';>
    <tr class='dataTh'>
        <th><img src=assets/resources/elements/POI.png height='20' width='20'> Damage</th>
        <th><img src=assets/resources/elements/POI.png height='20' width='20'> Duration</th>
        <th><img src=assets/resources/elements/POI.png height='20' width='20'> Tolerance<br>Initial / Step / Max</th>
    <tr>
        <td><?php echo($monsterDataRow['poisonDamage'])?></td>
        <td><?php echo($monsterDataRow['poisonDuration'])?></td>
        <td><?php echo($monsterDataRow['poisonLimits'])?></td>
</table>
<br>

<!--blast table-->
<table class='data' style='visibility:hidden';>
    <tr class='dataTh'>
        <th><img src=assets/resources/elements/BLA.png height='20' width='20'> Damage</th>
        <th><img src=assets/resources/elements/BLA.png height='20' width='20'> Tolerance<br>Initial / Step / Max</th>
    <tr>
        <td><?php echo($monsterDataRow['blastDamage'])?></td>
        <td><?php echo($monsterDataRow['blastLimits'])?></td>
</table>
<br>

