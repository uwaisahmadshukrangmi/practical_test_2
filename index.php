<?php
    include 'calculator.php';
?>

<html>

<head>
    <title>Calculate Electricity Bill</title>
</head>

<body>
    <h1>Calculate House Electricity Bill</h1>

    <?php
    //show the warning only when there is an error
    if(!empty($error)){
        echo "<p style='color: red;'>" . $error . "</p>";
    }
?>
    <div style="margin-bottom: 50px;">
        <table border="1" cellpadding="10">
            <tr>
                <th>Black Tariff</th>
                <th>Unit</th>
                <th>Rate</th>
            </tr>
            <tr>
                <td>For the first 200 kws (1-200)</td>
                <td>sen/kWh</td>
                <td>0.218</td>
            </tr>
            <tr>
                <td>For the next 100 kWh (201–300 kWh)</td>
                <td>sen/kWh</td>
                <td>0.344</td>
            </tr>
            <tr>
                <td>For the next 300 kWh (301–600 kWh)</td>
                <td>sen/kWh</td>
                <td>0.516</td>
            </tr>
            <tr>
                <td>For the next 300 kWh (601–900 kWh)</td>
                <td>sen/kWh</td>
                <td>0.546</td>
            </tr>
            <tr>
                <td>For the next kWh (901 kWh onwards)</td>
                <td>sen/kWh</td>
                <td>0.571</td>
            </tr>
            <td colspan="3" style="text-align: center;"><strong>Block Tariff (per month)</strong>
            </td>
        </table>
    </div>

    <form method="POST">
        Enter your first 200 kWh (1–200 kWh) per month :
        <input type="text" name="block1" value="<?php echo $block1; ?>"><br><br>
        <br>
        Enter next 100 kWh (201–300 kWh) per month :
        <input type="text" name="block2" value="<?php echo $block2; ?>"><br><br>
        <br>
        Enter next 300 kWh (301–600 kWh) per month :
        <input type="text" name="block3" value="<?php echo $block3; ?>"><br><br>
        <br>
        Enter next 300 kWh (601–900 kWh) per month :
        <input type="text" name="block4" value="<?php echo $block4; ?>"><br><br>
        <br>
        Enter next kWh (901 kWh onwards) per month :
        <input type="text" name="block5" value="<?php echo $block5; ?>"><br><br>
        <br>

        <input type="submit" name="calculate" value="Calculate Bill" />

        <input type="submit" name="reset" value="Reset" />


    </form>

    <?php

    if($showBill){
        echo "<hr>";
        echo "<h3>Your Electricity Bill</h3>";

        //show calculate of each line
        echo "1-200 kWh: " . $block1 . " kWh x 0.218 = RM " . number_format($charge1, 2) . "<br>";
        echo "201-300 kWh: " . $block2 . " kWh x 0.344 = RM " . number_format($charge2, 2) . "<br>";
        echo "301-600 kWh: " . $block3 . " kWh x 0.516 = RM " . number_format($charge3, 2) . "<br>";
        echo "601-900 kWh: " . $block4 . " kWh x 0.546 = RM " . number_format($charge4, 2) . "<br>";
        echo "901 kWh onwards: " . $block5 . " kWh x 0.571 = RM " . number_format($charge5, 2) . "<br>";
       
        echo "<br>";

        echo "Total electricity usage: " . $totalkWh . " kWh<br>";
        echo "Total electricity bill: RM " . number_format($totalCharge, 2) . "<br>";
        echo "SST 6%: RM " . number_format($sst, 2) . "<br>";
        echo "<b>Total Current Bill: RM " . number_format($totalBill, 2) . "</b><br>";
    }
    ?>

</body>

</html>