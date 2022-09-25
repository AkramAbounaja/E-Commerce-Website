<?php
$a1 = [10.001, 11.591, 0.011, 5.991, 16.121, 0.131, 100.981, 1.001];
$a2 = [1.99, 1.99, 0.99, 1.99, 0.99, 1.99, 0.99, 0.99];
$a3 = [0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01];
$a4 = [10.01, -12.22, 0.23, 19.20, -5.13, 3.12];
function getTotal($arr) {
    echo "<br>Processing Array:<br><pre>" . var_export($arr, true) . "</pre>";
    $total = 0.00;
    //TODO do adding here
    foreach ($arr as $x)
    #aa232/9-24-2022/In this problem I added the floats by also using a foreach array like problem 1. The loop adds every value to
    # a total value that was established outside of the loop. At the end, i use a function called number_format which allowed
    # me to round the total value to 2 decimal places while keeping the extra 0 in 0.10 as well, (var_export didnt allow this).
    # It was displayed at the end with echo.
    {
        $total = $x + $total;
    }
    //TODO do rounding stuff here
    #$total = round($total, 2);
    $total = number_format($total, 2);
    echo "The total is $total";  #var_export($total, true);
}
echo "Problem 2: Adding Floats<br>";
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
                <?php getTotal($a1) ?>
            </td>
            <td>
                <?php getTotal($a2) ?>
            </td>
            <td>
                <?php getTotal($a3) ?>
            </td>
            <td>
                <?php getTotal($a4); ?>
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