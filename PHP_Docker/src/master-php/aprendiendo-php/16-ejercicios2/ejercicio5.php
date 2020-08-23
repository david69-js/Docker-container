<?php

    $gameAll = [

       'action' => ['GTA','COD','PUGB'],
       'aventure'=> ['ASASSINS', 'CRASH', 'PRNISCIPE DE PERSIA'],
       'deport' => ['FIFA 20', 'PES 20', 'MOTO CROSS']
    ];

    $tables = array_keys($gameAll);

    var_dump($table);

?>

<table border="1">
    <tr>
        <?php foreach ($tables as $table)?>
                <td><?php $table?></td>
<?php endforeach: ?>   
    </tr>
</table>

