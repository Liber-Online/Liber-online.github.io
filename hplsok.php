<center> <h1>TLI - Hållplatssökning</h1> 
 
 
<main>
  <div class='container'>
    <form class='autocomplete-container'>
      <div
        class='autocomplete'
        role='combobox'
        aria-expanded='false'
        aria-owns='autocomplete-results'
        aria-haspopup='listbox'
      >
        <input
          class='autocomplete-input'
          placeholder='Hållplats?'
          aria-label='.....'
          aria-autocomplete='both'
          aria-controls='autocomplete-results'
        >
        <button type='submit' class='autocomplete-submit' aria-label='Search'>
          <svg aria-hidden='true' viewBox='0 0 24 24'>
            <path d='M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z' />
          </svg>
        </button>
      </div>
      <ul
        id='autocomplete-results'
        class='autocomplete-results hidden'
        role='listbox'
        aria-label='TLI'
      >
      </ul>
    </form>
    <h3><p class='search-result'></p><h3>
  </div>
  <iframe id="contentFrame" src="" width="100%" height="1000px" style="border: none;"></iframe>

</center>

<script>
function _defineProperty(obj, key, value) {
  if (key in obj) {
    Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true });
  } else {
    obj[key] = value;
  }
  return obj;
}

console.clear();
const data = {
'AL - Allhelgonakyrkan': '/omlagg/Allhelgonakyrkan.html',
'ALM - Almedal': '/omlagg/Almedal.html',
'AC - Angered Centrum': '/omlagg/AngeredCentrum.html',
'AP - Aprilgatan': '/omlagg/Aprilgatan.html',
'APVS - Aprilgatan Vändslinga': '/omlagg/AprilgatanVAndslinga.html',
'AG - Axel Dahlströms Torg': '/omlagg/AxelDahlstromsTorg.html',
'AGVS - Axel Dahlströms Torg Vändslinga': '/omlagg/AxelDahlstromsTorgVandslinga.html',
'BV - Bellevue': '/omlagg/Bellevue.html',
'BER - Berzeliigatan': '/omlagg/Berzeliigatan.html',
'BEVÄ - Beväringsgatan': '/omlagg/Bevaringsgatan.html',
'BOKE - Bokekullsgatan': '/omlagg/Bokekullsgatan.html',
'BOT - Botaniska Trädgården': '/omlagg/BotaniskaTradgarden.html',
'BRIL - Briljantgatan': '/omlagg/Briljantgatan.html',
'BG - Brunnsgatan': '/omlagg/Brunnsgatan.html',
'BP - Brunnsparken': '/omlagg/Brunnsparken.html',
'BÄCK - Bäckeliden': '/omlagg/Backeliden.html',
'BÖN - Bögatan': '/omlagg/Bogatan.html',
'C - Centralstationen': '/omlagg/Centralstationen.html',
'CH - Chalmers': '/omlagg/Chalmers.html',
'CT - Chapmans Torg': '/omlagg/ChapmansTorg.html',
'MX - Depå Vagnhallen Majorna ': '/omlagg/Default.html',
'RTX - Depå Vagnhallen Rantorget': '/omlagg/Default.html',
'RÖX - Depå Vagnhallen Ringön ': '/omlagg/Default.html',
'SLX - Depå Vagnhallen Slottsskogen ': '/omlagg/Default.html',
'DF - Doktor Fries Torg ': '/omlagg/DoktorFriesTorg.html',
'DS - Doktor Sydows Gata': '/omlagg/DoktorSydowsGata.html',
'DOM - Domkyrkan': '/omlagg/Domkyrkan.html',
'EJ - Ejdergatan': '/omlagg/Ejdergatan.html',
'EKED - Ekeldal': '/omlagg/Ekeldal.html',
'ET - Eketrägatan': '/omlagg/Eketragatan.html',
'ETVS - Eketrägatan Vändslinga': '/omlagg/Default.html',
'EK - Ekmanska': '/omlagg/Ekmanska.html',
'EL - Elisedal': '/omlagg/Elisedal.html',
'FJÄL - Fjällgatan': '/omlagg/Fjallgatan.html',
'FRIH - Frihamnen': '/omlagg/Frihamnen.html',
'FRT - Friskväderstorget': '/omlagg/FriskvAderstorget.html',
'FN - Frölunda Torg': '/omlagg/FrolundaTorg.html',
'FVS - Frölunda Torg Vändslinga': '/omlagg/Default.html',
'GAL - Galeleis Gata': '/omlagg/GaleleisGata.html',
'GM - Gamlestadstorget': '/omlagg/Gamlestadstorget.html',
'GO - Godhemsgatan': '/omlagg/Godhemsgatan.html',
'GRO - Gropegårdsgatan': '/omlagg/GropegArdsgatan.html',
'GT - Grönsakstorget': '/omlagg/Gronsakstorget.html',
'HKA - Hagakyrkan': '/omlagg/Hagakyrkan.html',
'HAN - Hagen': '/omlagg/Hagen.html',
'HA - Hammarkullen': '/omlagg/Hammarkullen.html',
'HAND - Handelshögskolan': '/omlagg/Handelshogskolan.html',
'HINS - Hinsholmen': '/omlagg/Hinsholmen.html',
'HP - Hjalmar Brantingsplatsen': '/omlagg/HjalmarBrantingsplatsen.html',
'HO - Hjällbo': '/omlagg/Hjallbo.html',
'H - Härlanda': '/omlagg/Harlanda.html',
'HG - Högsbogatan': '/omlagg/Hogsbogatan.html',
'JD - Jaegerdorffsplatsen': '/omlagg/Jaegerdorffsplatsen.html',
'JAN - Januarigatan': '/omlagg/Januarigatan.html',
'JT - Järntorget': '/omlagg/Jarntorget.html',
'KG - Kaggeledstorget': '/omlagg/Kaggeledstorget.html',
'KAPT - Kaptensgatan': '/omlagg/Kaptensgatan.html',
'KLIN - Klintens Väg': '/omlagg/KlintensVag.html',
'KP - Kapellplatsen': '/omlagg/Kapellplatsen.html',
'KTT - Komettorget': '/omlagg/Komettorget.html',
'KV - Korsvägen': '/omlagg/Korsvagen.html',
'KOT - Kortedala Torg': '/omlagg/KortedalaTorg.html',
'KRF - Krokslätts Fabriker': '/omlagg/KrokslattsFabriker.html',
'KRT - Krokslätts Torg': '/omlagg/KrokslattsTorg.html',
'KU - Kungsportsplatsen': '/omlagg/Kungsportsplatsen.html',
'KN - Kungssten': '/omlagg/Kungssten.html',
'KNVS - Kungssten Vändslinga': '/omlagg/Default.html',
'KVI - Kviberg': '/omlagg/Kviberg.html',
'KÄ - Käringberget': '/omlagg/Karingberget.html',
'LAC - Lackarebäck': '/omlagg/Lackareback.html',
'LA - Lana': '/omlagg/Lana.html',
'LAVS - Lana Vändslinga': '/omlagg/Default.html',
'LANT - Lantmilsgatan': '/omlagg/Lantmilsgatan.html',
'LB - Lilla Bommen': '/omlagg/LillaBommen.html',
'LP - Linnéplatsen': '/omlagg/Linnéplatsen.html',
'LPVS - Linnéplatsen Vändslinga': '/omlagg/Default.html',
'LI - Liseberg Station': '/omlagg/LisebergStation.html',
'LD - Långedrag': '/omlagg/Langedrag.html',
'LDVS - Långedrag Vändslinga': '/omlagg/Default.html',
'LISÖ - Liseberg Södra': '/omlagg/LisebergSodra.html',
'MAJV - Majvallen': '/omlagg/Majvallen.html',
'MP - Mariaplan': '/omlagg/Mariaplan.html',
'MG - Marklandsgatan': '/omlagg/Marklandsgatan.html',
'MT - Masthuggstorget': '/omlagg/Masthuggstorget.html',
'MEDI - Medicinaregatan': '/omlagg/Medicinaregatan.html',
'MILD - Mildvädersgatan': '/omlagg/Mildvadersgatan.html',
'MK - Munkebäckstorget': '/omlagg/Munkebackstorget.html',
'MV - Musikvägen': '/omlagg/Musikvagen.html',
'MC - Mölndals Innerstad': '/omlagg/MolndalsInnerstad.html',
'MS - Mölndals Sjukhus': '/omlagg/MolndalsSjukhus.html',
'MCVS - Mölndals Vändslinga': '/omlagg/Default.html',
'NSN - Nordstan': '/omlagg/Nordstan.html',
'NYAV - Nya Varvsallén ': '/omlagg/NyaVarvsallén.html',
'NY - Nymilsgatan': '/omlagg/Nymilsgatan.html',
'NYM - Nymånegatan': '/omlagg/Nymanegatan.html',
'NYMÅVS - Nymånegatan Vändslinga': '/omlagg/Default.html',
'OL - Oliverdalsgatan': '/omlagg/Oliverdalsgatan.html',
'OM - Olskroken': '/omlagg/Olskroken.html',
'OP - Opaltorget': '/omlagg/Opaltorget.html',
'OPVS - Opaltorget Vändslinga': '/omlagg/Default.html',
'OS - Ostindiegatan': '/omlagg/Ostindiegatan.html',
'POS - Positivgatan': '/omlagg/Positivgatan.html',
'PR - Prinsgatan': '/omlagg/Prinsgatan.html',
'PP - Polhemsplatsen': '/omlagg/Polhemsplatsen.html',
'R - Redbergsplatsen': '/omlagg/Redbergsplatsen.html',
'RAM - Rambergsvallen': '/omlagg/Rambergsvallen.html',
'RODD - Roddföreningen': '/omlagg/Roddforeningen.html',
'RUN - Runstavsgatan': '/omlagg/Runstavsgatan.html',
'RY - Rymdtorget': '/omlagg/Rymdtorget.html',
'SKF - SKF': '/omlagg/SKF.html',
'SHE - Sahlgrenska Huvudentré': '/omlagg/SahlgrenskaHuvudentré.html',
'SHVS - Sahlgrenska Huvudentré Vändslinga': '/omlagg/Default.html',
'SN - Saltholmen': '/omlagg/Saltholmen.html',
'SANA - Sanatoriegatan': '/omlagg/Sanatoriegatan.html',
'SAND - Sandarna': '/omlagg/Sandarna.html',
'SS - Sankt Sigfrids Plan': '/omlagg/SanktSigfridsPlan.html',
'SSVS - Sankt Sigfrids Plan Vändslinga': '/omlagg/Default.html',
'SP - Sannaplan': '/omlagg/Sannaplan.html',
'SCAN - Scandinavium': '/omlagg/Scandinavium.html',
'SEMI - Seminariegatan': '/omlagg/Seminariegatan.html',
'SV - Slottskogsvallens Vändslinga': '/omlagg/Default.html',
'SMAR - Smaragdgatan': '/omlagg/Smaragdgatan.html',
'SOLR - Solrosgatan': '/omlagg/Solrosgatan.html',
'ST - Stigbergstorget': '/omlagg/Stigbergstorget.html',
'STOC - Stockholmsgatan': '/omlagg/Stockholmsgatan.html',
'STPI - Stenpiren': '/omlagg/Stenpiren.html',
'SR - Storås': '/omlagg/Storas.html',
'S - Svingeln': '/omlagg/Svingeln.html',
'SÄLÖ - Sälöfjordsgatan': '/omlagg/Salofjordsgatan.html',
'TEL - Teleskopsgatan': '/omlagg/Teleskopsgatan.html',
'TM - Temperaturgatan': '/omlagg/Temperaturgatan.html',
'TING - Torp Vändslinga': '/omlagg/Default.html',
'TP - Tranered': '/omlagg/Tranered.html',
'TRAN - Töpelsgatan': '/omlagg/Topelsgatan.html',
'ULN - Ullevi Norra': '/omlagg/UlleviNorra.html',
'ULS - Ullevi Södra': '/omlagg/UlleviSodra.html',
'M - Vagnhallen Majorna': '/omlagg/VagnhallenMajorna.html',
'VA - Valand': '/omlagg/Valand.html',
'VB - Varbergsgatan': '/omlagg/Varbergsgatan.html',
'VM - Varmfrontsgatan': '/omlagg/Varmfrontsgatan.html',
'VMVS - Varmfrontsgatan Vändslinga': '/omlagg/Default.html',
'VP - Vasaplatsen': '/omlagg/Vasaplatsen.html',
'VV - Vasa Viktoriagatan': '/omlagg/VasaViktoriagatan.html',
'VIRGVS - Virginsgatan Vändslinga': '/omlagg/Default.html',
'VIRG - Virginsgatan//Torp': '/omlagg/Virginsgatan.html',
'VÅ - Vågmästareplatsen': '/omlagg/Vagmastareplatsen.html',
'VT - Vårväderstorget': '/omlagg/Varvaderstorget.html',
'VI - Väderilsgatan': '/omlagg/Vaderilsgatan.html',
'VIVS - Väderilsgatan Vändslinga': '/omlagg/Default.html',
'W - Wavrinskys Plats': '/omlagg/WavrinskysPlats.html',
'WELA - Welandergatan': '/omlagg/Welandergatan.html',
'WG - Wieselgrensplatsen': '/omlagg/Wieselgrensplatsen.html',
'WGVS - Wieselgrensplatsen Vändslinga': '/omlagg/Default.html',
'ÄTTE - Ättehögsgatan': '/omlagg/Attehogsgatan.html',
'ÖNS - Önskevädersgatan': '/omlagg/Onskevadersgatan.html',
'ÖS - Östra Sjukhuset': '/omlagg/OstraSjukhuset.html',
'Allhelgonakyrkan - AL': '/omlagg/Allhelgonakyrkan.html',
'Almedal - ALM': '/omlagg/Almedal.html',
'Angered Centrum - AC': '/omlagg/AngeredCentrum.html',
'Aprilgatan - AP': '/omlagg/Aprilgatan.html',
'Aprilgatan Vändslinga - APVS': '/omlagg/AprilgatanVAndslinga.html',
'Axel Dahlströms Torg - AG': '/omlagg/AxelDahlstromsTorg.html',
'Axel Dahlströms Torg Vändslinga - AGVS': '/omlagg/AxelDahlstromsTorgVandslinga.html',
'Bellevue - BV': '/omlagg/Bellevue.html',
'Berzeliigatan - BER': '/omlagg/Berzeliigatan.html',
'Beväringsgatan - BEVÄ': '/omlagg/Bevaringsgatan.html',
'Bokekullsgatan - BOKE': '/omlagg/Bokekullsgatan.html',
'Botaniska Trädgården - BOT': '/omlagg/BotaniskaTradgarden.html',
'Briljantgatan - BRIL': '/omlagg/Briljantgatan.html',
'Brunnsgatan - BG': '/omlagg/Brunnsgatan.html',
'Brunnsparken - BP': '/omlagg/Brunnsparken.html',
'Bäckeliden - BÄCK': '/omlagg/Backeliden.html',
'Bögatan - BÖN': '/omlagg/Bogatan.html',
'Centralstationen - C': '/omlagg/Centralstationen.html',
'Chalmers - CH': '/omlagg/Chalmers.html',
'Chapmans Torg - CT': '/omlagg/ChapmansTorg.html',
'Depå Vagnhallen Majorna - MX': '/omlagg/Default.html',
'Depå Vagnhallen Rantorget - RTX': '/omlagg/Default.html',
'Depå Vagnhallen Ringön - RÖX': '/omlagg/Default.html',
'Depå Vagnhallen Slottsskogen - SLX': '/omlagg/Default.html',
'Doktor Fries Torg - DF': '/omlagg/DoktorFriesTorg.html',
'Doktor Sydows Gata - DS': '/omlagg/DoktorSydowsGata.html',
'Domkyrkan - DOM': '/omlagg/Domkyrkan.html',
'Ejdergatan - EJ': '/omlagg/Ejdergatan.html',
'Ekeldal - EKED': '/omlagg/Ekeldal.html',
'Eketrägatan - ET': '/omlagg/Eketragatan.html',
'Eketrägatan Vändslinga - ETVS': '/omlagg/Default.html',
'Ekmanska - EK': '/omlagg/Ekmanska.html',
'Elisedal - EL': '/omlagg/Elisedal.html',
'Fjällgatan - FJÄL': '/omlagg/Fjallgatan.html',
'Frihamnen - FRIH': '/omlagg/Frihamnen.html',
'Friskväderstorget - FRT': '/omlagg/FriskvAderstorget.html',
'Frölunda Torg - FN': '/omlagg/FrolundaTorg.html',
'Frölunda Torg Vändslinga - FVS': '/omlagg/Default.html',
'Galeleis Gata - GAL': '/omlagg/GaleleisGata.html',
'Gamlestadstorget - GM': '/omlagg/Gamlestadstorget.html',
'Godhemsgatan - GO': '/omlagg/Godhemsgatan.html',
'Gropegårdsgatan - GRO': '/omlagg/GropegArdsgatan.html',
'Grönsakstorget - GT': '/omlagg/Gronsakstorget.html',
'Hagakyrkan - HKA': '/omlagg/Hagakyrkan.html',
'Hagen - HAN': '/omlagg/Hagen.html',
'Hammarkullen - HA': '/omlagg/Hammarkullen.html',
'Handelshögskolan - HAND': '/omlagg/Handelshogskolan.html',
'Hinsholmen - HINS': '/omlagg/Hinsholmen.html',
'Hjalmar Brantingsplatsen - HP': '/omlagg/HjalmarBrantingsplatsen.html',
'Hjällbo - HO': '/omlagg/Hjallbo.html',
'Härlanda - H': '/omlagg/Harlanda.html',
'Högsbogatan - HG': '/omlagg/Hogsbogatan.html',
'Jaegerdorffsplatsen - JD': '/omlagg/Jaegerdorffsplatsen.html',
'Januarigatan - JAN': '/omlagg/Januarigatan.html',
'Järntorget - JT': '/omlagg/Jarntorget.html',
'Kaggeledstorget - KG': '/omlagg/Kaggeledstorget.html',
'Kapellplatsen - KP': '/omlagg/Kapellplatsen.html',
'Kaptensgatan - KAPT': '/omlagg/Kaptensgatan.html',
'Klintens Väg - KLIN': '/omlagg/KlintensVag.html',
'Komettorget - KTT': '/omlagg/Komettorget.html',
'Korsvägen - KV': '/omlagg/Korsvagen.html',
'Kortedala Torg - KOT': '/omlagg/KortedalaTorg.html',
'Krokslätts Fabriker - KRF': '/omlagg/KrokslattsFabriker.html',
'Krokslätts Torg - KRT': '/omlagg/KrokslattsTorg.html',
'Kungsportsplatsen - KU': '/omlagg/Kungsportsplatsen.html',
'Kungssten - KN': '/omlagg/Kungssten.html',
'Kungssten Vändslinga - KNVS': '/omlagg/Default.html',
'Kviberg - KVI': '/omlagg/Kviberg.html',
'Käringberget - KÄ': '/omlagg/Karingberget.html',
'Lackarebäck - LAC': '/omlagg/Lackareback.html',
'Lana - LA': '/omlagg/Lana.html',
'Lana Vändslinga - LAVS': '/omlagg/Default.html',
'Lantmilsgatan - LANT': '/omlagg/Lantmilsgatan.html',
'Lilla Bommen - LB': '/omlagg/LillaBommen.html',
'Linnéplatsen - LP': '/omlagg/Linnéplatsen.html',
'Linnéplatsen Vändslinga - LPVS': '/omlagg/Default.html',
'Liseberg Station - LI': '/omlagg/LisebergStation.html',
'Långedrag - LD': '/omlagg/Langedrag.html',
'Långedrag Vändslinga - LDVS': '/omlagg/Default.html',
'Liseberg Södra - LISÖ': '/omlagg/LisebergSodra.html',
'Majvallen - MAJV': '/omlagg/Majvallen.html',
'Mariaplan - MP': '/omlagg/Mariaplan.html',
'Marklandsgatan - MG': '/omlagg/Marklandsgatan.html',
'Masthuggstorget - MT': '/omlagg/Masthuggstorget.html',
'Medicinaregatan - MEDI': '/omlagg/Medicinaregatan.html',
'Mildvädersgatan - MILD': '/omlagg/Mildvadersgatan.html',
'Munkebäckstorget - MK': '/omlagg/Munkebackstorget.html',
'Musikvägen - MV': '/omlagg/Musikvagen.html',
'Mölndals Innerstad - MC': '/omlagg/MolndalsInnerstad.html',
'Mölndals Sjukhus - MS': '/omlagg/MolndalsSjukhus.html',
'Mölndals Vändslinga - MCVS': '/omlagg/Default.html',
'Nordstan - NSN': '/omlagg/Nordstan.html',
'Nya Varvsallén - NYAV': '/omlagg/NyaVarvsallén.html',
'Nymilsgatan - NY': '/omlagg/Nymilsgatan.html',
'Nymånegatan - NYM': '/omlagg/Nymanegatan.html',
'Nymånegatan Vändslinga - NYMÅVS': '/omlagg/Default.html',
'Oliverdalsgatan - OL': '/omlagg/Oliverdalsgatan.html',
'Olskroken - OM': '/omlagg/Olskroken.html',
'Opaltorget - OP': '/omlagg/Opaltorget.html',
'Opaltorget Vändslinga - OPVS': '/omlagg/Default.html',
'Ostindiegatan - OS': '/omlagg/Ostindiegatan.html',
'Positivgatan - POS': '/omlagg/Positivgatan.html',
'Prinsgatan - PR': '/omlagg/Prinsgatan.html',
'Polhemsplatsen - PP': '/omlagg/Polhemsplatsen.html',
'Rambergsvallen - RAM': '/omlagg/Redbergsplatsen.html',
'Redbergsplatsen - R': '/omlagg/Rambergsvallen.html',
'Roddföreningen - RODD': '/omlagg/Roddforeningen.html',
'Runstavsgatan - RUN': '/omlagg/Runstavsgatan.html',
'Rymdtorget - RY': '/omlagg/Rymdtorget.html',
'SKF - SKF': '/omlagg/SKF.html',
'Sahlgrenska Huvudentré - SHE': '/omlagg/SahlgrenskaHuvudentré.html',
'Sahlgrenska Huvudentré Vändslinga - SHVS': '/omlagg/Default.html',
'Saltholmen - SN': '/omlagg/Saltholmen.html',
'Sanatoriegatan - SANA': '/omlagg/Sanatoriegatan.html',
'Sandarna - SAND': '/omlagg/Sandarna.html',
'Sankt Sigfrids Plan - SS': '/omlagg/SanktSigfridsPlan.html',
'Sankt Sigfrids Plan Vändslinga - SSVS': '/omlagg/Default.html',
'Sannaplan - SP': '/omlagg/Sannaplan.html',
'Scandinavium - SCAN': '/omlagg/Scandinavium.html',
'Seminariegatan - SEMI': '/omlagg/Seminariegatan.html',
'Slottskogsvallens Vändslinga - SV': '/omlagg/Default.html',
'Smaragdgatan - SMAR': '/omlagg/Smaragdgatan.html',
'Solrosgatan - SOLR': '/omlagg/Solrosgatan.html',
'Stigbergstorget - ST': '/omlagg/Stigbergstorget.html',
'Stockholmsgatan - STOC': '/omlagg/Stockholmsgatan.html',
'Stenpiren - STPI': '/omlagg/Stenpiren.html',
'Storås - SR': '/omlagg/Storas.html',
'Svingeln - S': '/omlagg/Svingeln.html',
'Sälöfjordsgatan - SÄLÖ': '/omlagg/Salofjordsgatan.html',
'Teleskopsgatan - TEL': '/omlagg/Teleskopsgatan.html',
'Temperaturgatan - TM': '/omlagg/Temperaturgatan.html',
'Torp Vändslinga - TING': '/omlagg/Default.html',
'Tranered - TP': '/omlagg/Tranered.html',
'Töpelsgatan - TRAN': '/omlagg/Topelsgatan.html',
'Ullevi Norra - ULN': '/omlagg/UlleviNorra.html',
'Ullevi Södra - ULS': '/omlagg/UlleviSodra.html',
'Vagnhallen Majorna - M': '/omlagg/VagnhallenMajorna.html',
'Valand - VA': '/omlagg/Valand.html',
'Varbergsgatan - VB': '/omlagg/Varbergsgatan.html',
'Varmfrontsgatan - VM': '/omlagg/Varmfrontsgatan.html',
'Varmfrontsgatan Vändslinga - VMVS': '/omlagg/Default.html',
'Vasaplatsen - VP': '/omlagg/Vasaplatsen.html',
'Vasa Viktoriagatan -VV': '/omlagg/VasaViktoriagatan.html',
'Virginsgatan Vändslinga - VIRGVS': '/omlagg/Default.html',
'Virginsgatan - VIRG': '/omlagg/Virginsgatan.html',
'Torp - VIRG': '/omlagg/Virginsgatan.html',
'Vågmästareplatsen - VÅ': '/omlagg/Vagmastareplatsen.html',
'Vårväderstorget - VT': '/omlagg/Varvaderstorget.html',
'Väderilsgatan - VI': '/omlagg/Vaderilsgatan.html',
'Väderilsgatan Vändslinga - VIVS': '/omlagg/Default.html',
'Wavrinskys Plats - W': '/omlagg/WavrinskysPlats.html',
'Welandergatan - WELA': '/omlagg/Welandergatan.html',
'Wieselgrensplatsen - WG': '/omlagg/Wieselgrensplatsen.html',
'Wieselgrensplatsen Vändslinga - WGVS': '/omlagg/Default.html',
'Ättehögsgatan - ÄTTE': '/omlagg/Attehogsgatan.html',
'Önskevädersgatan - ÖNS': '/omlagg/Onskevadersgatan.html',
'Östra Sjukhuset - ÖS': '/omlagg/OstraSjukhuset.html',
};

class Autocomplete {
  constructor({
    rootNode,
    inputNode,
    resultsNode,
    searchFn,
    shouldAutoSelect = false,
    onShow = () => {},
    onHide = () => {},
  } = {}) {
    _defineProperty(this, "handleDocumentClick", event => {
      if (event.target === this.inputNode || this.rootNode.contains(event.target)) {
        return;
      }
      this.hideResults();
    });

    _defineProperty(this, "handleKeyup", event => {
      const { key } = event;
      switch (key) {
        case 'ArrowUp':
        case 'ArrowDown':
        case 'Escape':
        case 'Enter':
          event.preventDefault();
          return;
        default:
          this.updateResults();
      }
    });

    _defineProperty(this, "handleKeydown", event => {
      const { key } = event;
      let activeIndex = this.activeIndex;
      if (key === 'Escape') {
        this.hideResults();
        this.inputNode.value = '';
        return;
      }
      if (this.resultsCount < 1) {
        if (this.hasInlineAutocomplete && (key === 'ArrowDown' || key === 'ArrowUp')) {
          this.updateResults();
        } else {
          return;
        }
      }

      const prevActive = this.getItemAt(activeIndex);
      let activeItem;

      switch (key) {
        case 'ArrowUp':
          if (activeIndex <= 0) {
            activeIndex = this.resultsCount - 1;
          } else {
            activeIndex -= 1;
          }
          break;
        case 'ArrowDown':
          if (activeIndex === -1 || activeIndex >= this.resultsCount - 1) {
            activeIndex = 0;
          } else {
            activeIndex += 1;
          }
          break;
        case 'Enter':
          activeItem = this.getItemAt(activeIndex);
          this.selectItem(activeItem);
          return;
        case 'Tab':
          this.checkSelection();
          this.hideResults();
          return;
        default:
          return;
      }

      event.preventDefault();
      activeItem = this.getItemAt(activeIndex);
      this.activeIndex = activeIndex;

      if (prevActive) {
        prevActive.classList.remove('selected');
        prevActive.setAttribute('aria-selected', 'false');
      }

      if (activeItem) {
        this.inputNode.setAttribute('aria-activedescendant', `autocomplete-result-${activeIndex}`);
        activeItem.classList.add('selected');
        activeItem.setAttribute('aria-selected', 'true');
        if (this.hasInlineAutocomplete) {
          this.inputNode.value = activeItem.innerText;
        }
      } else {
        this.inputNode.setAttribute('aria-activedescendant', '');
      }
    });

    _defineProperty(this, "handleFocus", event => {
      this.updateResults();
    });

    _defineProperty(this, "handleResultClick", event => {
      if (event.target && event.target.nodeName === 'LI') {
        this.selectItem(event.target);
      }
    });

    _defineProperty(this, "getItemAt", index => {
      return this.resultsNode.querySelector(`#autocomplete-result-${index}`);
    });

    _defineProperty(this, "selectItem", node => {
      if (node) {
        this.inputNode.value = node.innerText;
        this.hideResults();
      }
    });

    _defineProperty(this, "checkSelection", () => {
      if (this.activeIndex < 0) {
        return;
      }
      const activeItem = this.getItemAt(this.activeIndex);
      this.selectItem(activeItem);
    });

    _defineProperty(this, "autocompleteItem", event => {
      const autocompletedItem = this.resultsNode.querySelector('.selected');
      const input = this.inputNode.value;
      if (!autocompletedItem || !input) {
        return;
      }

      const autocomplete = autocompletedItem.innerText;
      if (input !== autocomplete) {
        this.inputNode.value = autocomplete;
        this.inputNode.setSelectionRange(input.length, autocomplete.length);
      }
    });

    _defineProperty(this, "updateResults", () => {
      const input = this.inputNode.value;
      const results = this.searchFn(input);

      this.hideResults();
      if (results.length === 0) {
        return;
      }

      this.resultsNode.innerHTML = results.map((result, index) => {
        const isSelected = this.shouldAutoSelect && index === 0;
        if (isSelected) {
          this.activeIndex = 0;
        }
        return `
        <li
          id='autocomplete-result-${index}'
          class='autocomplete-result${isSelected ? ' selected' : ''}'
          role='option'
          ${isSelected ? "aria-selected='true'" : ''}
        >
          ${result}
        </li>
      `;
      }).join('');

      this.resultsNode.classList.remove('hidden');
      this.rootNode.setAttribute('aria-expanded', true);
      this.resultsCount = results.length;
      this.shown = true;
      this.onShow();
    });

    _defineProperty(this, "hideResults", () => {
      this.shown = false;
      this.activeIndex = -1;
      this.resultsNode.innerHTML = '';
      this.resultsNode.classList.add('hidden');
      this.rootNode.setAttribute('aria-expanded', 'false');
      this.resultsCount = 0;
      this.inputNode.setAttribute('aria-activedescendant', '');
      this.onHide();
    });

    this.rootNode = rootNode;
    this.inputNode = inputNode;
    this.resultsNode = resultsNode;
    this.searchFn = searchFn;
    this.shouldAutoSelect = shouldAutoSelect;
    this.onShow = onShow;
    this.onHide = onHide;
    this.activeIndex = -1;
    this.resultsCount = 0;
    this.showResults = false;
    this.hasInlineAutocomplete = this.inputNode.getAttribute('aria-autocomplete') === 'both'; 

    // Setup events
    document.body.addEventListener('click', this.handleDocumentClick);
    this.inputNode.addEventListener('keyup', this.handleKeyup);
    this.inputNode.addEventListener('keydown', this.handleKeydown);
    this.inputNode.addEventListener('focus', this.handleFocus);
    this.resultsNode.addEventListener('click', this.handleResultClick);
  }
}

const search = input => {
  if (input.length < 1) {
    return [];
  }
  return Object.keys(data).filter(item => item.toLowerCase().startsWith(input.toLowerCase()));
};

const autocomplete = new Autocomplete({
  rootNode: document.querySelector('.autocomplete'),
  inputNode: document.querySelector('.autocomplete-input'),
  resultsNode: document.querySelector('.autocomplete-results'),
  searchFn: search,
  shouldAutoSelect: true
});

document.querySelector('form').addEventListener('submit', event => {
  event.preventDefault(); // Prevent page reload

  const input = document.querySelector('.autocomplete-input');
  const searchQuery = input.value.trim();
  const pageUrl = data[searchQuery] || '/omlagg/default.html'; // Default page if no match

  // Set iframe src with the result page
  document.getElementById('contentFrame').src = pageUrl;
});

</script>