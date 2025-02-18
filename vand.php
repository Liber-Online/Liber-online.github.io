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
  border-bottom: 2px solid #0c0f15;
  background-color: e4e8f7;
  
}

#myTable tr.header, #myTable tr:hover {
  background-color: white;
}
</style>
</head>




<h1>Hållplatsändringar</h1>
<p>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Hållplats..." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:40%;">Hållplats</th>
    <th style="width:40%;">Ändring</th>
	<th style="width:40%;">Påverkan</th>
  </tr>
  <tr>
    <td>Centralstationen Spår 1 - Mot Ullevi/Snabbspåret</td>
    <td>Läge A till Läge B</td>
	<td>Brunnsparken läge C2 till B2</td>
  </tr>
  <tr>
    <td>Centralstationen Spår 2 - Mot Ullevi/Snabbspåret</td>
    <td>Läge B till Läge A</td>
	<td>Brunnsparken läge B2 till C2</td>
  </tr>
  <tr>
    <td>Centralstationen Spår 3 - Mot Brunnsparken Läge C1</td>
    <td>Läge C till Läge D</td>
	<td>Brunnsparken läge C1 till B1</td>
  </tr>
  <tr>
    <td>Centralstationen Spår 4 - Mot Brunnsparken Läge B1</td>
    <td>Läge D till Läge C</td>
	<td>Brunnsparken läge B1 till C1</td>
  </tr>


<tr>
    <td>Brunnsparken Läge A1 - Mot Kungsportsplatsen</td>
    <td>Läge A1 till Läge C1</td>
	<td>Lilla Bommen B indragen</td>
  </tr>
  <tr>
    <td>Brunnsparken Läge A2 - Mot Hisingen</td>
    <td>Läge A2 till Läge B2</td>
	<td>Lilla Bommen A indragen </td>
  </tr>
  <tr>
    <td>Brunnsparken Läge B1</td>
    <td>Läge B1 till Läge C1</td>
	<td>Centralstationen Läge D till C</td>
  </tr>
  <tr>
    <td>Brunnsparken Läge B2</td>
    <td>Läge B2 till Läge C2</td>
	<td>Centralstationen Läge B till A</td>
  </tr>
    <tr>
    <td>Brunnsparken Läge C1</td>
    <td>Läge C1 till Läge B1</td>
	<td>Centralstationen Läge C till D</td>
  </tr>
    <tr>
    <td>Brunnsparken Läge C2</td>
    <td>Läge C2 till Läge B2</td>
	<td>Centralstationen Läge A till B</td>
</tr>

<tr>
    <td>Axel Dahlströms Torg</td>
    <td>Hänvisa till läge B</td>
	<td>5 minuter innan avgång</td>
  </tr>
  <tr>
    <td>Nymånegatan</td>
    <td>Om linje 4, 8 och 9 vänder via Nymånegatan, Hänvisa till Gamlestads Torg läge A</td>
	<td>5 minuter innan avgång</td>
  </tr>
  <tr>
    <td>Aprilgatan</td>
    <td>Vändingen sker på Januarigatan, hänvisa till Aprilgatan</td>
	<td>5 minuter innan avgång</td>
  </tr>


<tr>
    <td>Lana</td>
    <td>Hänvisa till läge D</td>
	<td>5 minuter innan avgång</td>
  </tr>
  <tr>
    <td>Linnéplatsen</td>
    <td>Hänvisa till läge C</td>
	<td>5 minuter innnan avgång </td>
  </tr>
  <tr>
    <td>Marklandsgatan</td>
    <td>Om line 3 vänder AG, hänvisa till läge N</td>
	<td>5 minuter innan avgång</td>
  </tr>
  <tr>
    <td>Redbergsplatsen</td>
    <td>Om linje 6 och 8 vänder H/VIRG/ÖS hänvisa till läge B</td>
	<td>5 minuter innnan avgång</td>
  </tr>
    <tr>
    <td>Wavrinskys Plats</td>
    <td>Hänvisa till läge E</td>
	<td>5 minuter innan avgång</td>
  </tr>
    <tr>
    <td>Väderilsgatan</td>
    <td>Hänvisa till läge A</td>
	<td>5 minuter innan avgång</td>
	</tr>





</table>

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