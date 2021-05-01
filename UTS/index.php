<!DOCTYPE HTML>
<html>
  <head>
    <title>Form Pengisian Data Pemantauan Virus Covid-19</title>
  </head>
  <body>
 
    <form name="form1" method="post" action="aksi.php">
    <table bgcolor="aqua" width="580" border="1" align="center">
      <tr>
        <td colspan="3"><h3>Form Pengisian Data Pemantauan Virus Covid-19</h3></td>
      </tr>
      <tr>
        <td width="250">Nama Wilayah</td>
        <td>:</td>
        <td width="530"><select name="wilayah" id="wilayah">
                        <option value="DKI Jakarta">DKI Jakarta</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Banten">Banten</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        </select>
      </tr>
      <tr>
        <td>Jumlah Positif</td>
        <td>:</td>
        <td><input size="30" name="positif" type="text" id="positif" ></td>
      </tr>
      <tr>
        <td>Jumlah Dirawat</td>
        <td>:</td>
        <td><input size="30" name="dirawat" type="text" id="dirawat" ></td>
      </tr>
      </tr>
      <tr>
        <td>Jumlah Sembuh</td>
        <td>:</td>
        <td><input size="30" name="sembuh" type="text" id="sembuh" ></td>
      </tr>
 
      <tr>
        <td>Jumlah Meninggal</td>
        <td>:</td>
        <td><input size="30" name="meninggal" type="text" id="meninggal" ></td>
      </tr>
      <tr>
        <td>Nama Operator</td>
        <td>:</td>
        <td><input size="30" name="operator" type="text" id="operator" ></td>
      </tr>
      <tr>
        <td>NIM Mahasiswa</td>
        <td>:</td>
        <td><input size="30" name="nim" type="number" min="0" id="nim" ></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td align="center"><input name="Submit" type="submit" value="Simpan"></td>
      </tr>
      
    </table>
    </form>
  </body>
</html>