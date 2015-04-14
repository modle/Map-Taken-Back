<?php
    $sql = 'SELECT s.skillId
                , st.skillTreeId
                , st.name treeName
                , s.name skillName
                , s.requiredSkillTreePoints
                , s.description
            FROM skill s
            JOIN skillTree st ON s.skillTreeId=st.skillTreeId
            WHERE instr((st.name),"'. $skillName .'") > 0
                OR instr((s.name),"'. $skillName .'") > 0
            ORDER by st.name, s.requiredSkillTreePoints';
    $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; skill table error');
?>