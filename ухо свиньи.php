<?php

require_once __DIR__ . '/../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$str = '<h4><div align="center">СПИСОК<div align="center"></h4>';
$str1 = '<h4><div align="center">студентов 4 курс заочной формы обучения<div align="center"></h4>';
$str2 = '<h4><div align="center">40.03.01 <ins>ЮРИСПРУДЕНЦИЯ<ins><div align="center"></h4>';
$str3 = '<h4><div align="center">2019/2020 учебный год<div align="center"></h4>';
$str4 = '<h4><div align="center">Полный срок обучения (5 лет)<div align="center"></h4>';
$str5 = '<h4><div align="center"><ins>Группа 2</ins><div align="center"></h4>';
$str6 = '<h4><div align="center">(уголовно-правовой профиль)<div align="center"></h4>';
$mpdf->WriteHTML($str);
$mpdf->WriteHTML($str1);
$mpdf->WriteHTML($str2);
$mpdf->WriteHTML($str3);
$mpdf->WriteHTML($str4);
$mpdf->WriteHTML($str5);
$mpdf->WriteHTML($str6);
$mpdf->WriteHTML("<table border='1' cellspacing='0' cellpadding='13' width='90%' height='130'>
<tr>
<td style=''>1. Абдуллаев Александр Игоревич</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>2. Безруков Евгений Юрьевич</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>3. Евтеев Антон Игоревич</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>4. Евтеев Никита Игоревич</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>5. Ефимов Олег Вячеславович</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>6. Карпов Евгений Сергеевич</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>7. Кованев Максим Александрович</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>8. Костиков Павел Сергеевич</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>9. Мелтонян Артем Врежикович</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>10.Мелтонян Артур Врежикович</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>11.Оржевский Константин Константинович</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>12.Прудникова Алена Владимировна</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>13.Рожков Сергей Александрович</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>14.Сайкин Владимир Владиславович</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>15.Шепелев Александр Александрович</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
<tr>
<td style=''>16.Шеховцов Сергей Анатольевич</td>
<td style='width:30px;'></td>
<td style='width:30px;'></td>
</tr>
</table>");
$mpdf->Output();
?>