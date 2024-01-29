<?php
echo "<table>";
echo "<tr>
<th>Name</th>
<th>Email</th>
<th>Status</th>
</tr>";
foreach($students as $student){
    if($student['status'] == 'PHP'){
        echo "<tr>
        <td style='color: red'>".$student['name']."</td>
        <td style='color: red'>".$student['email']."</td>
        <td style='color: red'>".$student['status']."</td>
    </tr>";
    }elseif ($student['status'] == '.Net')
        echo "<tr>
        <td>".$student['name']."</td>
        <td>".$student['email']."</td>
        <td>".$student['status']."</td>
    </tr>";
        }
echo "</table>"
?>