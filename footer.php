
<div id="abbinder-logo" class="sektion">
	<div class="buehne">
		<img class="logo" src="images/logo-salibaba-hamburg.min.png" alt="Salibaba Hamburg" />
		<ul class="mi-footer-nav">
        	<li>Salibaba Eppendorfer Weg 91</li>
        	<li>Salibaba Bankstraße 28</li>
            <li><a href="mailto:mail@salibaba.de" target="_blank">mail@salibaba.de</a></li>
            <li><a href="https://www.facebook.com/salibabahamburg" target="_blank"s><img class="fb-logo" src="images/facebook-flat-vector-logo.png" alt="Salibaba bei Facebook" /></a></li>
        </ul>
        <ul class="mi-footer-nav">
            <li><a href="#impressum" onclick="anzeigen('impressum'); return false;">Impressum</a></li>
            <li><a href="#datenschutz" onclick="anzeigen('datenschutz'); return false;">Datenschutz</a></li>
        </ul>
    </div> <!-- .buehne -->
</div> <!-- #abbinder-logo -->

<div id="impressum" class="sektion">
	<div class="buehne">
		<h3>Impressum</h3>
		<h4>Herausgeber:</h4>
        <p>
        Mazza von Saliba Gastronomie GmbH<br>
        Beatrix Scheen-Saliba<br>
        VAT ID: DE209641700<br>
        HRB-Hamburg 75372<br>
        Verantwortlich für den Inhalt: Beatrix Scheen-Saliba
		Telefon: +49 (0) 40 / 85 80 71<br />
		E-Mail: mail@salibaba.de<br />
        </p>
		<h4>Verantwortlich für den Inhalt: Beatrix Scheen-Saliba</h4>
        <p>Mazza von Saliba Gastronomie GmbH bietet diese Website öffentlich an, damit Sie sich jederzeit schnell und aktuell über unser Unternehmen
		informieren können. Wir sind ständig bemüht, umfassende und genaue Informationen bereitzustellen. Sobald wir von Fehlern 
        erfahren, sind wir bestrebt, diese unverzüglich zu korrigieren. Es kann nicht garantiert werden, dass unsere Website im 
        Ganzen ständig verfügbar ist.</p>
		<h4>Rechtlicher Hinweis / Haftungsausschluss:</h4>
        <p>Mit Urteil vom 12. Mai 1998 hat das Landgericht Hamburg entschieden, dass man durch die Ausbringung eines
		Links die Inhalte der gelinkten Seite gegebenenfalls mit zu verantworten hat. Dies kann, so das Landgericht, nur
		dadurch verhindert werden, dass man sich ausdrücklich von diesen Inhalten distanziert.
		Gebr. Saliba e.K hat auf dieser Homepage Links zu anderen Seiten im Internet gelegt. Für all diese Links gilt: Gebr.
		Saliba e.K hat keinerlei Einfuß auf die Gestaltung der gelinkten Seiten und distanziert sich hiermit ausdrücklich von
		allen Inhalten aller gelinkten Seiten auf dieser Homepage und macht sich ihre Inhalte nicht zu eigen. Diese Erklärung
		gilt für alle auf der Homepage angebrachten Links.
        </p>
    </div> <!-- .buehne -->
</div> <!-- #impressum -->
<div id="datenschutz" class="sektion">
    <div class="buehne grid grid-pad">
        <?php include('datenschutz.php') ?>
    </div>
</div>



<!-- Owl Carousel initialisieren -->
<script type="text/javascript">
$(document).ready(function() {
	     
	$("#slider").owlCarousel({
		autoPlay: 5000, //Set AutoPlay to 3 seconds
		items : 1,
		singleItem: true,
		stopOnHover: true,
		slideSpeed: 200,
		paginationNumbers: false,
		dots: false,
		navigation: true,
		navigationText : false,
		mouseDrag: true,
	});
});
</script>

<!-- Accordion -->
<script type="text/javascript">
var acc = document.getElementsByClassName("accordion-button");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
</script>
  
<!-- Einblenden vom Impressum -->
<script type="text/javascript">
function anzeigen(id) {
    if(document.getElementById) {
        var mydiv = document.getElementById(id);
        mydiv.style.display = (mydiv.style.display=='block'?'none':'block');
		
		$('html, body').animate({ scrollTop: ($(element).offset().top)}, 'slow');
    }
}
</script> 

<?php
// Include PIWIK only on production system (2018014, mmai)
if(!substr($_SERVER['HTTP_HOST'], -9) == 'localhost') {
   include 'piwik.php';
}
?>

</body>
</html>