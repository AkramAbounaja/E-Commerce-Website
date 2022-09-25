<?php
$a1 = [-1, -2, -3, -4, -5, -6, -7, -8, -9, -10];
$a2 = [-1, 1, -2, 2, 3, -3, -4, 5];
$a3 = [-0.01, -0.0001, -.15];
$a4 = ["-1", "2", "-3", "4", "-5", "5", "-6", "6", "-7", "7"];

function bePositive($arr) {
    echo "<br>Processing Array:<br><pre>" . var_export($arr, true) . "</pre>";
    echo "<br>Positive output:<br>";
    //TODO use echo to output all of the values as positive (even if they were originally positive) 
    //hint: may want to use var_dump() to show final data types
    foreach($arr as $x){
        #aa232/9-24-2022/In this problem, I changed all the values to positive by first using a foreach loop to loop
        # through the array. For each value, the loop checks if it is less than 0 (which means that it is negative)
        #and if it is, to echo out the value multiplied by -1 (to make the value positive). 
        #If it isn't the else statement is run and it echos out the unchanged value (because it is already positive).      
        if ($x < 0){
            echo $x*-1;
            #var_dump($x*-1);
            echo " ";
        }
        else{
            echo $x;
            #var_dump($x);
            echo " ";
        }
    }
}
echo "Problem 3: Be Positive<br>";
?>
<table>
    <thread>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
        <th>A4</th>
    </thread>
    <tbody>
        <tr>
            <td>
                <?php bePositive($a1); ?>
            </td>
            <td>
                <?php bePositive($a2); ?>
            </td>
            <td>
                <?php bePositive($a3); ?>
            </td>
            <td>
                <?php bePositive($a4); ?>
            </td>
        </tr>
</table>
<style>
    table {
        border-spacing: 2em 3em;
        border-collapse: separate;
    }

    td {
        border-right: solid 1px black;
        border-left: solid 1px black;
    }
</style>