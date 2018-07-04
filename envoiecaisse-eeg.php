<?php include('head.php'); ?>
<body>
  <div class="Content">
    <header class="HeaderLogo">
      <a href="#"><img class="Logo" src="img/logo.svg" /></a>
      <a href="index.php"><h1 class="HeaderTitle">Envoi caisse/EEG</h1></a>
    </header>
    <div class="WrapperWithBar">
      <div class="CardTab">
        <div class="DivTabInput">
          <span class="TitleSaisie">CODE</span><input class="InputSaisie BigSize" type="search" name="InputSaisie" value=""></input>
        </div>
        <div class="DivTab">
          <span class="TitleSaisie">LIBELLÉ</span>
        </div>
        <div class="DivTab">
          <span class="TitleSaisie">STATUE APPRO</span><span class="TxtSaisie">LIVRABLE</span>
        </div>
        <div class="TableNoMargin">
          <table class="TableNoMargin">
            <tbody>
              <tr class="Tr TrBlue">
                <td>CODE</td>
                <td>LIBELLÉ</td>
                <td>PRIX VENTE</td>
              </tr>
              <tr class="Tr TrGrey">
                <td>5449000131836</td>
                <td>50cl Coca Zero</td>
                <td>1.99</td>
              </tr>
              <tr class="Tr TrGreyBis">
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="Tr TrGrey">
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="Tr TrGreyBis">
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="Tr TrGrey">
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="DivTabInput">
          <span class="TitleSaisie BlueBlackTxt">Les 5 derniers articles scannés pour l’envoi de la caisse.</span><br><br>
          <span class="TitleSaisie">NOMBRE D'ARTICLES DANS LA LISTE</span>
        </div>
      </div>
    </table>
    <div class="FooterBar">
      <div class="Bar BarRed"><a href="#" class="BarOption BarRed">RETOUR</a></div>
      <div class="Bar BarGrey"><a href="#" class="BarOption BarGrey">-</a></div>
      <div class="Bar BarWhite"><a href="#" class="BarOption BarWhite">OK</a></div>
      <div class="Bar BarGrey"><a href="menu.php" class="BarOption BarGrey">-</a></div>
      <div class="Bar BarWhite"><a href="commandefournisseur-tjl.php" class="BarOption BarWhite">VALIDER</a></div>
    </div>
  </div>
  <img class="FormBackground" src="img/form.svg" alt="Background">
</div>
</body>
</html>
