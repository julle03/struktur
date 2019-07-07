<html>
<?php
date_default_timezone_set('Asia/Jakarta');
include "../connect.php";
$id=$_GET['id'];

$query=mysqli_query($db,"SELECT * FROM struktur WHERE id=$id");
$data=mysqli_fetch_array($query);
$nama=$data['nama'];
$jabatan=$data['jabatan'];
$sertifikasi=$data['sertifikasi'];
$mandatory=$data['mandatory'];
$pace=$data['pace'];
$pace_man=$data['pace_mantanance'];
$sttk=$data['sttk'];
$SKOP2DPU=$data['skop2dpu'];
$hsse=$data['hsse'];

 // Define relative path from this script to mPDF
 $nama_dokumen='Biodata Pegawai '.$nama; //Beri nama file PDF hasil.

?>
<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak masalah.-->
<!--CONTOH Code START-->

<head>
</head>
<body>
<center>
<table width='80%' cellpadding="5px" border="0" style="padding:10px;border:1px solid black;text-transform:uppercase;">
  <tr>
    <th colspan="3">
      <center>
        <h1>Biodata Pegawai</h1>
      </center>
    </th>
  </tr>
  <tr>
    <td style="width:220px;">
      <span style="font-size:16;font-family:'calibri';"><b>Nama Lengkap</b></span>
    </td>
    <td style="width:50px;">
      <span style="font-size:16;font-family:'calibri';"><b>:</b></span>
    </td>
    <td>
      <span style="font-size:16;font-family:'calibri';"><b><?php echo $nama;?></b></span>
    </td>
  </tr>
  <tr>
    <td style="width:220px;">
      <span style="font-size:16;font-family:'calibri';"><b>Jabatan</b></span>
    </td>
    <td style="width:50px;">
      <span style="font-size:16;font-family:'calibri';"><b>:</b></span>
    </td>
    <td>
      <span style="font-size:16;font-family:'calibri';"><b><?php echo $jabatan;?></b></span>
    </td>
  </tr>
  <tr>
    <td style="width:220px;">
      <span style="font-size:16;font-family:'calibri';"><b>Sertifikasi</b></span>
    </td>
    <td style="width:50px;">
      <span style="font-size:16;font-family:'calibri';"><b>:</b></span>
    </td>
    <td>
      <span style="font-size:16;font-family:'calibri';"><b><?php echo $sertifikasi;?></b></span>
    </td>
  </tr>
  <tr>
    <td style="width:220px;">
      <span style="font-size:16;font-family:'calibri';"><b>Mandatory</b></span>
    </td>
    <td style="width:50px;">
      <span style="font-size:16;font-family:'calibri';"><b>:</b></span>
    </td>
    <td>
      <span style="font-size:16;font-family:'calibri';"><b><?php echo $mandatory;?></b></span>
    </td>
  </tr>
  <tr>
    <td style="width:220px;">
      <span style="font-size:16;font-family:'calibri';"><b>PACE</b></span>
    </td>
    <td style="width:50px;">
      <span style="font-size:16;font-family:'calibri';"><b>:</b></span>
    </td>
    <td>
      <span style="font-size:16;font-family:'calibri';"><b><?php echo $pace;?></b></span>
    </td>
  </tr>
  <tr>
    <td style="width:220px;">
      <span style="font-size:16;font-family:'calibri';"><b>PACE Mantanance</b></span>
    </td>
    <td style="width:50px;">
      <span style="font-size:16;font-family:'calibri';"><b>:</b></span>
    </td>
    <td>
      <span style="font-size:16;font-family:'calibri';"><b><?php echo $pace_man;?></b></span>
    </td>
  </tr>
  <tr>
    <td style="width:220px;">
      <span style="font-size:16;font-family:'calibri';"><b>STTK</b></span>
    </td>
    <td style="width:50px;">
      <span style="font-size:16;font-family:'calibri';"><b>:</b></span>
    </td>
    <td>
      <span style="font-size:16;font-family:'calibri';"><b><?php echo $sttk;?></b></span>
    </td>
  </tr>
  <tr>
    <td style="width:220px;">
      <span style="font-size:16;font-family:'calibri';"><b>SKOP2DPU</b></span>
    </td>
    <td style="width:50px;">
      <span style="font-size:16;font-family:'calibri';"><b>:</b></span>
    </td>
    <td>
      <span style="font-size:16;font-family:'calibri';"><b><?php echo $SKOP2DPU;?></b></span>
    </td>
  </tr>
  <tr>
    <td style="width:220px;">
      <span style="font-size:16;font-family:'calibri';"><b>HSSE Mandatory</b></span>
    </td>
    <td style="width:50px;">
      <span style="font-size:16;font-family:'calibri';"><b>:</b></span>
    </td>
    <td>
      <span style="font-size:16;font-family:'calibri';"><b><?php echo $hsse;?></b></span>
    </td>
  </tr>
</table>
</center>
<script>
    window.print();
</script>
</body></html>
