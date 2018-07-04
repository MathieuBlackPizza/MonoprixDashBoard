<?php include('head.php'); ?>
<body>
   <div class="Content">
      <header class="HeaderLogo">
         <a href="#"><img class="Logo" src="img/logo.svg" /></a>
         <a href="index.php"><h1 class="HeaderTitle">Commande fournisseur</h1></a>
      </header>
      <div class="WrapperWithBar">
        <div class="MessageAlerte">
            <h2 class="MessageAlerteTitle">Aucun article scanné.</h2>
            <p class="MessageAlerteBaseline">Scannez le code barre d’un produit pour afficher les informations.</p>
        </div>
        <div class="FooterBar">
           <div class="Bar BarRed"><a href="#" class="BarOption BarRed">RETOUR</a></div>
           <div class="Bar BarWhite"><a href="#" class="BarOption BarWhite"><img class="Arrow" src="img/arrow-left.svg"></></a></div>
           <div class="Bar BarWhite"><a href="#" class="BarOption BarWhite"><img class="Arrow" src="img/arrow-blue-right.svg"></></a></div>
           <div class="Bar BarWhite"><a href="" class="BarOption BarWhite">SUITE</a></div>
           <div class="Bar BarGrey"><a href="commande-fournisseur.php" class="BarOption BarGrey">VALIDER</a></div>
        </div>
      </div>
      <img class="FormBackground" src="img/form.svg" alt="Background">
   </div>
</body>
</html>
