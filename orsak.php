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
  border-bottom: 2px solid #ddd;
  background-color: #e4e8f7;
}

#myTable tr.header, #myTable tr:hover {
  background-color: white;
}
</style>


<h1>Orsakslista</h1>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Orsak..." title="Type in a name">
<br>
<table id="myTable">
<tbody>
  <tr class="header">
    <th style="width:30%;">Godkännda uttryck</th>
    <th style="width:30%;">Uttryck som inte får användas</th>
	  </tr>
 <tr><td style="color:#519335">Banarbete / Track works</td><td></td></tr>
<tr><td style="color:#519335">Begränsad framkomlighet / Obstacle</td>						<td style="color:#a91818">Framkomlighetsproblem</td></tr>
<tr><td style="color:#519335">Bil i spåret / Car stuck on tracks</td>						<td style="color:#a91818">Felparkerat fordon</td></tr>
<tr><td style="color:#519335">Blockad / Obstacle</td>										<td></td></tr>
<tr><td style="color:#519335">Brand / Fire</td>												<td></td></tr>
<tr><td style="color:#519335">Brofel / Bridge failure</td>									<td></td></tr>
<tr><td style="color:#519335">Broöppning / Bridge opening</td>								<td></td></tr>
<tr><td style="color:#519335">Demonstration / Protest</td>									<td style="color:#a91818">Fackeltåg</td></tr>
<tr><td style="color:#519335">Elfel / Electrical failure</td>								<td></td></tr>
<tr><td style="color:#519335">Evenemang / Event</td>										<td></td></tr>
<tr><td style="color:#519335">Extra uppehåll / Extra stop</td>								<td></td></tr>
<tr><td style="color:#519335">Fordonsbrist / Vehicle shortage</td>							<td style="color:#a91818">Vagnbrist, kortare tågset, sen leverans från bangård, Fordonsstyrning, Omloppstekniska skäl </td></tr>
<tr><td style="color:#519335">Fordonsfel / Broken down bus/tram/train/boat</td>				<td style="color:#a91818">LK-fel, dörrfel, motorhaveri, rampfel, punktering, bygelhaveri, Vagnfel, Lokfel, Fordonsskada annat tåg, Lokskada, Fordonskada </td></tr>
<tr><td style="color:#519335">Halka / Slippery roads</td><td></td></tr>
<tr><td style="color:#519335">Inväntar anslutande trafik / Waiting for connecting vehicle</td><td></td></tr>
<tr><td style="color:#519335">Kontaktledningsfel / Poweline error</td>						<td style="color:#a91818">Luftledningsras, nedriven luftledning/kontaktledning</td></tr>
<tr><td style="color:#519335">Köbildning / Queue</td>										<td style="color:#a91818">Tågkö, köer, Tåg framför</td></tr>
<tr><td style="color:#519335">Manifestation / Manifestation</td>							<td style="color:#a91818">Torgmöte</td></tr>
<tr><td style="color:#519335">Många resande / Lots of passengers</td>						<td></td></tr>
<tr><td style="color:#519335">Obehöriga i spårområdet / Unauthorized person on track</td>	<td style="color:#a91818">Spårspring</td></tr>
<tr><td style="color:#519335">Olycka / Accident</td>										<td style="color:#a91818">Trafikolycka, kolision, sammanstötning, incident, trafikhändelse, påkörning, tillbud, viltolycka</td></tr>
<tr><td style="color:#519335">Ordningsstörande händelse / Disturbance</td>					<td style="color:#a91818">Hot, våld, biljettkontroll. laser, stenkastning, Plattformshantering</td></tr>
<tr><td style="color:#519335">Oväder / Current weather</td>				            		<td style="color:#a91818">Rådande väderlek, Naturhändelse, Avsyning</td></tr>
<tr><td style="color:#519335">Personalbrist / Staff shortage</td>							<td style="color:#a91818">Planeringstekniska skäl, felkörning, Felaktig hantering</td></tr>
<tr><td style="color:#519335">Personalbyte / Change of staff</td>							<td style="color:#a91818">Sprucken avlösning, inväntar personal, försovning</td></tr>
<tr><td style="color:#519335">Platsbrist / Shortage of seats</td>							<td style="color:#a91818">Fullsatt</td></tr>
<tr><td style="color:#519335">Polisinsats / Police intervention</td>						<td style="color:#a91818">Polisingripande, polisavspärrning, rån, bombhot**, OBS! Vid polisingripande, gör ej utrop på aktuell hållplats.</td></tr>
<tr><td style="color:#519335">Sabotage / Sabotage</td>										<td style="color:#a91818">Kopparstöld</td></tr>
<tr><td style="color:#519335">Sen tågvändning / Late turnover</td>							<td></td></tr>
<tr><td style="color:#519335">Signalfel/ Signal error</td>									<td style="color:#a91818">Dåligt spårläge, enkelspårsdrift, OSPA A och OSPA B, Beläggning, Ställverksfel, Otillåten stoppassage</td></tr>
<tr><td style="color:#519335">Sjukdomsfall / Medical emergency</td>							<td style="color:#a91818">Sjukskrivning av förare, sjuk resenär/förare ombord OBS! Gör ej utrop på aktuell hållplats.</td></tr>
<tr><td style="color:#519335">Skadegörelse / Vandalism</td>									<td style="color:#a91818">Klotter, förstört fordon</td></tr>
<tr><td style="color:#519335">Spårarbete / Track works</td>									<td style="color:#a91818">Växelarbete</td></tr>
<tr><td style="color:#519335">Spårfel / Track defect</td>									<td style="color:#a91818">Solkurva, Rälsbrott</td></tr>
<tr><td style="color:#519335">Strejk / Strike</td>											<td></td></tr>
<tr><td style="color:#519335">Strömlös sträcka / Power outage</td>							<td style="color:#a91818">Strömlöshet</td></tr>
<tr><td style="color:#519335">Strömlöst / Power outage</td>									<td style="color:#a91818">Strömlöshet</td></tr>
<tr><td style="color:#519335">Tekniskt fel / Technical error</td>							<td></td></tr>
<tr><td style="color:#519335">Trafikhinder / Obstacle</td>									<td></td></tr>
<tr><td style="color:#519335">Träd i spåret / Tree stuck on tracks</td>						<td></td></tr>
<tr><td style="color:#519335">Träd över väg / Tree stuck on road</td>						<td></td></tr>
<tr><td style="color:#519335">Tågmöte / Train meet</td>										<td></td></tr>
<tr><td style="color:#519335">Underhållsarbete / Planned work</td>							<td></td></tr>
<tr><td style="color:#519335">Urspårning / Derailment</td>									<td></td></tr>
<tr><td style="color:#519335">Vattenläcka / Large amounts of water on tracks/road</td>		<td></td></tr>
<tr><td style="color:#519335">Vägarbete / Road works</td>									<td></td></tr>
<tr><td style="color:#519335">Växelfel / Switch error</td>									<td></td></tr>
<tr><td style="color:#519335">Översvämning / Flooding</td>									<td></td></tr>

</tbody>


</table>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tbody = table.getElementsByTagName("tbody")[0];
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
        if (!(tr[i].classList.contains("subhead1") || 
          tr[i].classList.contains("subhead2"))) { 
      tr[i].style.display = "none"; 
      td = tr[i].getElementsByTagName("td"); 
      for (j = 0; j < td.length; j++) { 
        if (td[j]) { 
          txtValue = td[j].textContent || td[j].innerText; 
          if (txtValue.toUpperCase().indexOf(filter) > -1) { 
            tr[i].style.display = ""; 
          } 
        } 
      } 
    } 
  } 
} 
</script>