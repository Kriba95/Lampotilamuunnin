


<!DOCTYPE html>
<html>
<!--2021 Kristian Töllikkö, Lämpötilanmuunnin 0.1-->
<head>
<title>Kaverilista</title>
<link rel="stylesheet" href="css/main.css"> 
<link rel="stylesheet" href="css/animate.css">


<meta charset="utf-8">

</head>

<body>
    <br>
    <br>
    <br>

<section Lämpötilanmuunnin>
  <div class="container wow pulse">
    <div class="teksti">
      <p class="kav-teksti">Lämpötilanmuunnin</p>
      <hr style="">
      <div class="js-boksi">
      <select id="lampotila">
        <option value="celcius">Celcius</option>
        <option value="fahrenheit">Fahrenheit</option>
      </select>

      <div>
        <p>
          <input type="radio" id="yddesi"
          name="contact" value="yddesi" checked> 
          <label for="contactChoice1">1desi</label>
        </p>
        <p>
          <input type="radio" id="kadesi"
          name="contact" value="kadesi">
          <label for="contactChoice2">2desi</label>
        </p>
        <p>
          <input type="radio" id="kodesi"
          name="contact" value="kodesi">
          <label for="contactChoice3">3desi</label>
        </p>
      </div>
  
        <input style="width: 70%" type="text" name="nimi" id="arvo" placeholder="Luku, Kiitos!">
        <button type="button" onclick="tempConvert()" class="Btn">Muunna</button>
        </form> 
      </div> 
      <br>
      <div class="grid-boksi"><h1 class="ellipsis">
        <span style="display: inline-block;" id="output" maxlength="1">Vastaus </span><p id="kumpi" style="display: inline-block;" ></p>
        </h1></div>
    </div>
  </div>    
</section> 
      


</body>

<script src="js/lampotilamuunnin.js"></script>

<!-- Koska työ on julkinen, latasin nopeasti "WOW" animaation-->
<script src="js/selectbox.js"></script>
<script src="js/wow.min.js"></script>
<script> new WOW().init(); 
// Jälkimmäinen päivättää sivun == 2 on arvo selaimessa joka tunnistaa palaavan käyttäjän
if(performance.navigation.type == 2){ location.reload(true);}</script>


</html>


