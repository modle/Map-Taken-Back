<?php
    //define dropdown
    $sql = "SELECT type, weapontypeid
            FROM weapon_types
            ORDER BY weaponTypeId;";
    $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . ' weapon dropdown error');
    $weaponDropdownString = "<select name='weaponType' onchange='this.form.submit()' value='' >Weapon Type</option>";

    while($row=mysqli_fetch_array($result)){
        if($row['weapontypeid']==$weaponType){
            $weaponDropdownString .= "<option value=$row[weapontypeid] selected>$row[type]</option>";
        } else{
            $weaponDropdownString .= "<option value=$row[weapontypeid]>$row[type]</option>";
        }
    }
    $weaponDropdownString .= "</select>";
?>