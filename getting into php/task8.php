<?php
$total_array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];
?>

<html>
<body>
    <table border="1">
        <tr>
            <td colspan="3"><strong>Array to Declare</strong></td>
        </tr>
        <?php foreach ($total_array as $num): ?>
            <tr>
                <?php foreach ($num as $value): ?>
                    <td><?php echo $value; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3"><strong>Numbers</strong></td>
        </tr>
        <?php for ($i = 3; $i >= 1; $i--): ?>
            <tr>
                <td colspan="3">
                    <?php for ($j = 1; $j <= $i; $j++): ?>
                        <?php echo $j . " "; ?>
                    <?php endfor; ?>
                </td>
            </tr>
        <?php endfor; ?>
        <tr>
            <td colspan="3"><strong>Letters</strong></td>
        </tr>
        <?php $word = 'A'; ?>
        <?php for ($i = 0; $i < 3; $i++): ?>
            <tr>
                <td colspan="3">
                    <?php for ($j = 0; $j <= $i; $j++): ?>
                        <?php echo $word++ . " "; ?>
                    <?php endfor; ?>
                </td>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
