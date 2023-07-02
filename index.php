<DOCTYPE HTML>
    <hmtl>
        <head>
            <title>
                Cinecavour
            </title>
           	<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">    
            <link rel="stylesheet" href="index.css?version=8">
            <style>

#nonprenotabile{
  text-align: center;
  margin-left:15%;
  margin-right: 15%;
  width:70%;
  margin-bottom: 10%;
}

#posti{
  font-weight:bold;
  font-size:20px;
  color:#1f1d61;
}
#fineform{
  color:#1f1d61;
  text-align:center;
}
a{
  color:black;
}
td{
  border:1px solid black;
  padding:10px
}
table{
  width:60%;
  margin:2%
}
html{
scroll-behavior: smooth;
}
.form-check-input:checked {
    background-color: #1f1d61;
    border-color: #1f1d61;
    }
 #info{
    cursor:pointer;
    font-size:18px;
    color:black;
    }
@font-face {
   font-family: Valencia;
   src: url("devalencia.otf") format("opentype");
}
@font-face {
   font-family: Alata;
   src: url("alata-regular.ttf") format("opentype");
}

input{  
    font-family: 'Montserrat', sans-serif;
    outline: none;
    user-select: none;
    box-sizing: border-box;
-webkit-appearance: none;
-webkit-border-radius: 0;
padding: 1em;
border: 1px solid black;
border-radius: 3px;
width: 100%;}
  



h1{ 
    position:fixed;
    background-color: #1f1d61;
    color:white;
    font-family: Valencia;
    padding:3%;
    margin-top:-2%;
    width:100%;
  z-index:9000;
  
}
label{
    font-family: Montserrat;
    font-size:large;
    
}





label {
  display: block;
  cursor: pointer;
  margin-bottom: 12px;
}

label:after {
  content: '.';
  clear: both;
  display: block;
  height: 0px;
  visibility: hidden;
}



button{
  background-color: #1f1d61;
  border:0px;
  color:white;
  border-radius: .25rem;
  padding: .375rem .75rem;
font-size: 1rem;
  
}



p{
  font-family:Montserrat; 
  color:#1ea672;
  font-weight:bold;
  
} 
img {

    width: 100%;
    height: auto;
    margin-top: -4%;
    margin-left:-1%;
    z-index: -100;
    position: relative;
    
}
.container{
  padding-top:3%;
  margin-top:5%;
  padding-bottom:3%;
  margin-bottom:2%;
  background-color:white;
  
  
}  
h2{
  margin-top:10%;
  background-color: white;
  width:80%;
  padding:2%;
  color:#1f1d61;
  font-family: Montserrat;
 border: 5px solid #1f1d61;
}
img{
width:8%;
 margin-top:10%;
 background-color: white;
 border-radius: 10000px;
 padding:1%
}
body{
  /*! text-align:center; */
}  
h3{
  color:#1f1d61;
  font-weight: bold;
}                                       </style>
        </head>
    <body style='background-image: url("cinecavour54.jpg");  background-size: cover; background-repeat:no-repeat'>
    <script type="text/javascript">     
    var agent = navigator.userAgent;      
    var isWebkit = (agent.indexOf("AppleWebKit") > 0);      
    var isIPad = (agent.indexOf("iPad") > 0);      
    var isIOS = (agent.indexOf("iPhone") > 0 || agent.indexOf("iPod") > 0);     
    var isAndroid = (agent.indexOf("Android")  > 0);     
    var isNewBlackBerry = (agent.indexOf("AppleWebKit") > 0 && agent.indexOf("BlackBerry") > 0);     
    var isWebOS = (agent.indexOf("webOS") > 0);      
    var isWindowsMobile = (agent.indexOf("IEMobile") > 0);     
    var isSmallScreen = (screen.width < 767 || (isAndroid && screen.width < 1000));     
    var isUnknownMobile = (isWebkit && isSmallScreen);     
    var isMobile = (isIOS || isAndroid || isNewBlackBerry || isWebOS || isWindowsMobile || isUnknownMobile);     
    var isTablet = (isIPad || (isMobile && !isSmallScreen));     

    if ( isMobile && isSmallScreen && document.cookie.indexOf( "mobileFullSiteClicked=") < 0 ) location.href="https://ultra.altervista.org/cinecavour/mobile.php"; 
</script>

    	<center>
              
              <h1>Cinecavour</h1>
      
      <br>
      <h2>Serate<table>
     
 <?php
$mysqli = new mysqli("localhost", "my_ultra", "KSDmc7gmg5qG", "my_ultra");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql = "SELECT nome, giorno, posti FROM serate";
$result = $mysqli -> query($sql) or die($mysqli->error);
$rowcount=$result->num_rows;
for($x=0; $x<$rowcount;$x++){
	$row = $result -> fetch_array(MYSQLI_ASSOC);
echo "<tr><td>".$row['nome']."</td><td>".$row['giorno']."/09/21</td><td ><span id='posti'>".$row['posti']."</span>/80 posti</td><td>";
$giorno = $row['giorno'];
$giornomenotre = $row['giorno'] -3;
if((time()<(strtotime("$giorno September 2021 + 15 hours")))&&(time()>strtotime("$giornomenotre September 2021 + 21 hours"))&&$row['posti']>0){

echo "<a href='#modulo'><button>Prenota</button></a>";}

else echo "<b>Prenotazioni chiuse</b>";
echo "</td></tr>";
}
?>

</table>


      </h2>
      
      <br>
      </center>
     <?php
$mysqli = new mysqli("localhost", "my_ultra", "KSDmc7gmg5qG", "my_ultra");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql = "SELECT nome, giorno, posti FROM serate";
$result = $mysqli -> query($sql) or die($mysqli->error);
$rowcount=$result->num_rows;
for($x=0; $x<$rowcount;$x++){
	$row = $result -> fetch_array(MYSQLI_ASSOC);
$giorno = $row['giorno'];
$giornomenotre = $row['giorno'] -3;
if((time()<(strtotime("$giorno September 2021 + 15 hours")))&&(time()>strtotime("$giornomenotre September 2021 + 21 hours"))&&$row['posti']>0){

$prenotabile=$row['giorno'];}
}
if($prenotabile){echo '<div class="container">
	<form action="elabora.php" id="modulo" class="m-auto" method="post" style="max-width:600px"><h3 class="my-4">Compila il modulo</h3>
		<hr class="my-4" />
        <div class="form-group mb-3 row"><label for="serata1" class="col-md-5 col-form-label">Data</label>
			<div class="col-md-7"><input type="text" class="form-control" id="serata1" name="data" readonly value="'.$prenotabile.'"required></div>
		</div>
		<div class="form-group mb-3 row"><label for="nome3" class="col-md-5 col-form-label">Nome</label>
			<div class="col-md-7"><input type="text" class="form-control" id="nome3" name="nome" required></div>
		</div>
		<div class="form-group mb-3 row"><label for="cognome4" class="col-md-5 col-form-label">Cognome</label>
			<div class="col-md-7"><input type="text" class="form-control" id="cognome4" name="cognome" required></div>
		</div>
		<div class="form-group mb-3 row"><label for="numero-di-telefono5" class="col-md-5 col-form-label">Mail Istituzionale (solo se sei di primo, il tuo indirizzo mail)</label>
			<div class="col-md-7"><input type="email" class="form-control" id="numero-di-telefono5" name="mail" required><small class="form-text text-muted"> Inserisci la tua mail liceocavour.edu.it</small></div>
		</div>
		<div class="form-group mb-3 row"><label for="classe7" class="col-md-5 col-form-label">Classe</label>
			<div class="col-md-7"><select name="classe" class="form-select custom-select" id="classe7">
					<option value="1"> 1</option>
					<option value="2"> 2</option>
                    <option value="3"> 3</option>
					<option value="4"> 4</option>
					<option value="5"> 5</option>
                    <option value="6"> Ex Studente</option>
				</select></div>
		</div>
		<div class="form-group mb-3 row"><label for="sezione9" class="col-md-5 col-form-label">Sezione</label>
			<div class="col-md-7"><select name="sezione" class="form-select custom-select" id="sezione9">
					<option value="A"> A</option>
					<option value="B"> B</option>
					<option value="C"> C</option>
					<option value="D"> D</option>
					<option value="E"> E</option>
					<option value="F"> F</option>
					<option value="G"> G</option>
					<option value="H"> H</option>
					<option value="I"> I</option>
                    <option value="L"> L</option>
                    <option value="M"> Ex Studente</option>
				</select></div>
		</div>
		<hr class="my-4" />
        <p id="fineform">Prenotandoti, accetti <a href="dettagli.html">le norme del progetto CineCavour</a>.</p>
		<div class="form-group mb-3 row"><label for="invia12" class="col-md-5 col-form-label"></label>
			<div class="col-md-7"><button  type="submit">Invia</button></div>
		</div></form>
		</div>';}
        else echo "<h2 id='nonprenotabile'>Al momento non è possibile prenotare nessuna serata.<br>
        <a href='dettagli.html'>Informativa su CineCavour</a></h2>";
?>
	
		

        </body>
    </html>
     