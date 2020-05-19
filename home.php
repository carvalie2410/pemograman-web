<style type="text/css">
<!--
.style1 {font-family: "Times New Roman", Times, serif}
-->
</style>

<table width="1302" border="2">
  <tr>
    <th scope="col"><div class="wrapper">
      <?php
            session_start();
            if (!isset($_SESSION["User_ID"])) header("location:home.php");
        ?>
      <h3 class="style1">Selamat Datang Admin : <?php echo $_SESSION["User_ID"]?></h3>
      <div align="right"><a href="logout.php">Logout</a> </div>
    </div></th>
  </tr>
</table>    
<table width="1301" border="2">
  <tr>
    <th height="59" colspan="4" bordercolor="#0000CC" bgcolor="#CCFF33" scope="col"><div align="center">ABSENSI</div></th>
  </tr>
  <tr>
    <td width="164" bgcolor="#33FF00"><a href="Data_Karyawan.php">Data Karyawan </a></td>
    <td width="155" bgcolor="#33FF00"><a href="Shift_Karyawan.php">Shift Karyawan </a></td>
    <td width="166" bgcolor="#33FF00"><a href="Lokasi_Absen.php">Lokasi Absen</a> </td>
    <td width="170" bgcolor="#33FF00"><a href="Department.php">Department</a></td>
  </tr>
  <tr bgcolor="#333399">
    <td height="296" colspan="4" bgcolor="#CCFF33"><p align="justify">&nbsp;</p>

        <p align="justify">&nbsp;</p>
    <p align="justify">&nbsp;</p>
    <p align="justify">&nbsp; </p></td>
  </tr>
</table>
