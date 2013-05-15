<?php
$no=0;
/* @var $hslquery type */
foreach ($hslquery->result() as $row)
{
$no++;
echo "<tr>";
echo "<td>";echo $no;echo "</td>";
echo "<td style='text-align:left;'>";echo $row->id;echo "</td>"; 	
echo "<td >";echo $row->tgl_news;echo "</td>";
echo "<td >";echo $row->komentar;echo "</td>";
echo "<td >";echo anchor(base_url().("c_m_revlon/get_update_pricelist/$row->DET_NM_JNS_BRAND/$row->HRG_JUAL/$row->KD_BARCODE"),"$row->KD_BARCODE");echo "</td>";
}
echo "</tr>";
echo "</table>";
?>
