<html>
  <head>
    <title>My Guest Book</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  </head>
  <body>
    <div align="center">
      <strong>
        <font size="6" face="Courier New, Courier,mono"> BUKU TAMU </font>
      </strong>
    </div>
    <form name="form1" method="post" action="proses.php">
      <table width="58%" border="0" align="center">
        <tr>
          <td>Nama Lengkap</td>
          <td><input type="text" name="nama" id="nama" /></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat" id="alamat" /></td>
        </tr>
        <tr>
          <td>E-Mail</td>
          <td><input type="text" name="email" id="email" /></td>
        </tr>
        <tr>
          <td>Status</td>
          <td>
            <select name="status" id="status">
              <option>Menikah</option>
              <option>Single</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Komentar</td>
          <td><textarea name="komentar" id="komentar" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
            <input type="submit" name="Submit" value="Kirim" />
            <input type="reset" name="Submit2" value="Batal" />
          </td>
        </tr>
      </table>
    </form>
    <div align="center">
      <strong>
        <a href="lihat.php">::Lihat Buku Tamu::</a>
      </strong>
    </div>
  </body>
</html>
