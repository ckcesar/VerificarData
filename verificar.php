<?php

$data = '12/05/2000';

$data_i2 = substr($data, 0, 10);

$d_i2 = explode("/", $data_i2);
$data_fini2 = $d_i2['2'] . $d_i2['1'] . $d_i2['0'];
$dia_i2 = $d_i2[0];
$mes_i2 = $d_i2[1];
$ano_i2 = $d_i2[2];
$res_i2 = checkdate($mes_i2, $dia_i2, $ano_i2);
if ($res_i2 == 1) {
    echo'Data válida.';
}else {
    echo'Data inválida.';
}
echo'<hr/>';
echo $data;