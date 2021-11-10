<?php
    $varArray = [
        'name' => 'Gustavo',
        'age' => 30,
        'company' => 'google',
        'color' => 'orange',
        'occupation' => 'developer'
    ];
?>

<table border='1'>
    <?php 
    echo "Vertical";
        foreach ($varArray as $key => $values): ?>
            <tr>
                <th><?php echo $key?></th>
                <td><?php echo $values?></td>
            </tr>
    <?php 
        endforeach; ?>
</table>

<br>
<?php
    $varArrayKeys = array_keys($varArray);
    $varArrayValues = array_values($varArray);

    echo "<br><br> Horizontally"
?>


<table border='2'>
    <tr>
    <?php 
        foreach ($varArrayKeys as $key): ?>
        <th><?php echo $key?></th>
    <?php 
        endforeach; ?>
    </tr>
    <tr>
    <?php 
        foreach ($varArrayValues as $values): ?>
        <td><?php echo $values?></td>
    <?php 
        endforeach; ?>
    </tr>
</table>

