<?php
    function generateTable($num) {
        $table = [];
        for ($i = 1; $i <= 12; $i++) {
            $table[] = [$i, $num, $i * $num];
        }
        return $table;
    }

    $multiplicationTable = generateTable(2);
?>
<table border="1">
    <tr><th>No</th><th>Multiplier</th><th>Result</th></tr>
    <?php foreach ($multiplicationTable as $row): ?>
        <tr><td><?php echo $row[0]; ?></td><td><?php echo $row[1]; ?></td><td><?php echo $row[2]; ?></td></tr>
    <?php endforeach; ?>
</table>
