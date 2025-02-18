<style>
#myInput {
  width: 50%;
  padding: 12px 20px;
  margin-top: 12px;
  margin-bottom: 12px;
  border: 1px solid #ddd;
  border-radius: 4px;
  box-sizing: border-box;
}

#myTable {
  border-collapse: collapse;
  width: 50%;
  border: 1px solid #ddd;
  font-size: 18px;
  font-family: Arial, sans-serif;
  margin-left: 25%;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #0c0f15;
  background-color: #e4e8f7;
}

#myTable tr.header, #myTable tr:hover {
  background-color: white;
}
</style>




<h1>Tågnummer</h1>
<p>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="linjenummer..." title="Type in a name">

<table id="myTable">
<tr class="header">	
<th style="width:40%;">Tekniskt linjenummer</th>	<th style="width:40%;">Tågnummer</th>	<th style="width:40%;">Sträcka</th>	<th style="width:40%;">Operatör</th>	</tr>
<tr>	<td>1101</td>	<td>1008-20189</td>	<td>Öresundståg: Göteborg - Kungsbacka/Åsa (Malmö)</td>	<td>SJ AB</td>	</tr>
<tr>	<td>1103</td>	<td>13144-13149</td>	<td>Västtåg/en: Göteborg - Varberg</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1301</td>	<td>3702-3795</td>	<td>Västtåg/en: Göteborg - Uddevalla - Strömstad</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1311</td>	<td>3500-13585</td>	<td>Västtåg/en: Göteborg - Alingsås</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1321</td>	<td>3000-3185</td>	<td>Västtåg/en: Göteborg - Kungsbacka</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1331</td>	<td>3600-13681</td>	<td>Västtåg/en: Göteborg - Älvängen</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1602</td>	<td>3407-3498-17201</td>	<td>Västtåg/en: Göteborg - Töreboda</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1603</td>	<td>171-183, 711-792, 10715</td>	<td>SJ Regional: Göteborg - Töreboda (Stockholm)</td>	<td>SJ AB</td>	</tr>
<tr>	<td>1604</td>	<td>111, 154</td>	<td>SJ Regional: Göteborg - Töreboda</td>	<td>SJ AB</td>	</tr>
<tr>	<td>1632</td>	<td>3301-3372, 13329-13368</td>	<td>Västtåg/en: Göteborg - Lidköping - Örebro</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1651</td>	<td>7200-7267</td>	<td>Västtåg/en: Skövde - Nässjö</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1652</td>	<td>7652, 17600-17622, 27660-27673</td>	<td>ÖSTGÖTATRAFIKEN/KRÖSATÅGEN: Jönköping - Nässjö</td>	<td>SJ AB</td>	</tr>
<tr>	<td>1671</td>	<td>3800-3878, 13822-13845</td>	<td>Västtåg/en: Uddevalla - Borås - Varberg</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1721</td>	<td>3200-3291, 13204-13271</td>	<td>Västtåg/en: Göteborg - Vänersborg/Uddevalla/Säffle</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1722</td>	<td>350-376, 10355</td>	<td>SJ Regional: Göteborg - Säffle (Karlstad)</td>	<td>SJ AB</td>	</tr>
<tr>	<td>1723</td>	<td>390-399</td>	<td>Vy: Göteborg - Halden (Oslo)</td>	<td>Vy/Tågkompaniet</td>	</tr>
<tr>	<td>1724</td>	<td>380-382, 10383, 20380</td>	<td>Västtåg/en Göteborg - Halden</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1791</td>	<td>7200-7298, 17240-17269</td>	<td>Västtåg/en: Göteborg - Nässjö</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1961</td>	<td>7000-7006</td>	<td>TÅGAB: Göteborg - Säffle (Karlstad/Kristinehamn/Falun)</td>	<td>TÅGAB</td>	</tr>
<tr>	<td>1971</td>	<td>7300-7377</td>	<td>Västtåg/en: Göteborg - Borås</td>	<td>SJ Götalandståg</td>	</tr>
<tr>	<td>1972</td>	<td>319-344</td>	<td>SJ Regional: Göteborg - Hestra (Kalmar)</td>	<td>SJ AB</td>	</tr>
<tr>	<td>1725</td>	<td>17301-17308</td>	<td>Trollhättan-Ed</td>	<td>SJ Götalandståg</td>	</tr>

</table>
</html>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
