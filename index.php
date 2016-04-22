<?php
include_once 'koneksi.php';

// Hapus data
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// selesai hapus data
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Membuat CRUD dengan PHP and MySql - By TobiWeb.id</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Apakah anda akan edit ?'))
 {
  window.location.href='edit.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Apakah anda akan hapus ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Membuat CRUD dengan PHP and MySql - <a href="http://tobiweb.id" target="_blank">By TobiWeb</a></label>
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="add.php">Tambah</a></th>
    </tr>
    <th>Nama Depan</th>
    <th>Nama Belakang</th>
    <th>Alamat Kota</th>
    <th colspan="2">Aksi</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')">Edit</a></td> 
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"> Hapus</a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>