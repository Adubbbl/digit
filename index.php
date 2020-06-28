<?php
	require_once "lib/html2pdf.php";

	$user = array(
		"id" => 1,
		"siret" => "152 356 785",
		"firstname" => "John",
		"lastname" => "Doe",
		"email" => "john.doe@gmail.com",
		"portable" => "06.25.35.45.35",
		"address" => "26 Avenue du Bourg\n75000 Paris"
	);

	?>




<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->

	<head>
		<meta charset="utf-8"/>
	</head>
    <style>
	.bg{
		background-image:url(bg1.png);
		background-position: center;
		background-size: cover;
	}
	h3,h6,h5{
		text-align: center;
       
	}
	h5{
		color:rgb(12, 41, 92);
	}
	.centre{
		margin-left: 400px;
	}
	.gauche{
		margin-left: 600px;
	}
	div{
		padding-left: 180px;
        padding-right: 100px;
        padding-bottom: 30px;
		padding-top: 50px;    
	}
	.petit{
		font-size: 12px;
	}
	.marge{
		margin-left: 30px;
	}
	.italic{
		font-style: italic
	}
	
</style>
	<body>
    <div class="bg">
	<h3>REPUBLIQUE DU BENIN</h3>
    <h6>MINISTERE DE L'ENSEIGNEMENT SUPERIEUR ET DE LA RECHERCHE SCIENTIFIQUE</h6>
    <h5 >ATTESTATION DE DIPLÔME DE LICENCE PROFESSIONNELLE</h5>
    <H6 class="italic"><strong>Sous le N°050/19/INSTI/DA/SGE/SSE/DSE.-</strong></H6>
  
    
        <span><strong>Le directeur de l'Institut National Supérieur de Technologie Industrielle (ex-IUT) de Lokossa</strong> soussigné,</span><br>
       
        -Vu le décret n° 2016-208 du 04 Avril 2016 portant création, révision, organisation et fonctionnement des universités nationales en République du Bénin<br>
        -Vu le décret n° 2017-126  du 27 Février 2017 portant création, révision, organisation et fonctionnement de l'université nationale des Sciences, Technologies,
         Ingénierie et Mathématiques<br>
        -Vu l'arrêté 2018 n° 204/MESRS/DC/SGM/DGES/DAF/R-UNSTIM/CCJ/SA024 SGG18 du 17 Avril 2018 portant création, attribution, organisation et
         fonctionnement de l'INSTI<br>
        -Vu l'arrêté n° 2012-710/MESRS/CAB/DC/SGM/DRFM/DGES/R-UAC/R-UP/SA du 31 Décembre 2012 portant organisation du diplôme de licence dans
         l'Enseignement Supérieur en République du Bénin<br>
        -Vu l'arrêté n° 2012/713/MESRS/CAB/DC/SGM/DRFM/DGES/R-UAC/R-UP/SA du 31 Décembre 2012 portant gestion de parcours-type des apprenants dans
         le système LMD de l'Enseignement Supérieur en République du Bénin<br>
        -Vu les procès verbaux de délibération des résultats de fn d'année en date du 15 Juillet 2019<br>
        
 

        <br><strong >Atteste que</strong><br>
        Monsieur <strong >....................................................................</strong> né le <strong >.......................</strong> à <strong >....................</strong> et inscrit<br>
        sous le <strong >matricule .................</strong> a été déclaré admis par la commission de délibération, au<br>
        <strong >DIPLOME DE LICENCE</strong> en <strong>.............</strong> avec la mention <strong >..........</strong> à la session de <strong >.......</strong><br>
        <strong >......</strong><br>
        <span class="marge">En foi de quoi, la présente Attestation de diplôme lui est délivré pour servir et valoir ce 
        que de droit.</span><br><br>
        <span class="gauche">Fait à Lokossa,..........</span><br><br>
   
  
        <strong class="centre" > Le Directeur, </strong><br><br><br><br>
        <strong style="text-decoration: underline; margin-left: 350px;"> Alain A.C. Nicaisse ADOMOU.- </strong><br>
        <span style="margin-left: 365px; font-size: 13px;" > Maître de conférences/CAMES </span><br><br>
        <span style="margin-left: 200px; font-size: 11px;" > NB: Toute rature ou surcharge ou photocopie non certifiée annule 
        la validité de cette attestation de diplôme</span>
		</div>
		</body>





<?php
	$content = ob_get_clean();
	try {
		$pdf = new HTML2PDF("l","A4","fr");
		$pdf->pdf->SetKeywords('HTML2PDF, Devis, PHP');
		$pdf->writeHTML($content);
		$pdf->Output('attestation.pdf');
		// $pdf->Output('Devis.pdf', 'D');
	} catch (HTML2PDF_exception $e) {
		die($e);
	}

?>
