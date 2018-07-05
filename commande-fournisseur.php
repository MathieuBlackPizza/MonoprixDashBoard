<?php include('head.php'); ?>
<body>
  <div class="Content">
    <header class="HeaderLogo">
      <a href="#"><img class="Logo" src="img/logo.svg"></a>
      <a href="index.php"><h1 class="HeaderTitle">Commande fournisseur</h1></a>
    </header>
    <div class="Wrapper">
      <div class="CardTab Clearfix">
        <div class="DivTabInput">
          <span class="TitleSaisie">EAN</span>
            <input class="InputSaisie" type="search" name="InputSaisie" value=""></input>
          <span class="TxtSaisie TxtPadding">Commandable</span>
        </div>
        <div class="DivTab">
          <span class="TitleSaisie">LIBELLÉ</span><span class="TxtSaisie">50Cl Coca Cola Zero Pet 5058797</span>
        </div>
        <div class="DivTab">
          <span class="TitleSaisie">STATUE APPRO</span><span class="TxtSaisie">LIVRABLE</span><span class="TitleSaisie TxtPadding">CHAIN.</span><span class="TxtSaisie">N</span>
        </div>
        <div class="Table">
          <table class="Table">
            <tbody>
              <tr class="Tr TrBlue">
                <td>STOCK</td>
                <td>LIV.JOUR</td>
                <td>RAL</td>
                <td>CMDE BIS</td>
              </tr>
              <tr class="Tr TrGrey">
                <td>-183</td>
                <td>0</td>
                <td>24</td>
                <td>0</td>
              </tr>
              <tr class="Tr TrBlue">
                <td>UVC/UR</td>
                <td>VENTE/JOUR</td>
                <td>STK.PRES</td>
                <td>TX CASSE</td>
              </tr>
              <tr class="Tr TrGrey">
                <td>24</td>
                <td>0</td>
                <td>15</td>
                <td>nc.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="DivTabInput">
          <span class="TitleSaisie">QTÉ UR</span><input class="InputSaisie MidSize" type="search" name="Saisie" value=""></input><span class="TitleSaisie TxtPadding">PROPOSE</span>
        </div>
        <div class="DivTabBottom">
          <div class="DivTabBottomContent">
            <span class="TitleSaisieNoPadding">CMDE</span><br>
            <span class="TitleSaisieNoPadding BlueBlackTxt">22/06</span>
          </div>
          <div class="DivTabBottomContent">
            <span class="TitleSaisieNoPadding">CMDE+1</span><br>
            <span class="TitleSaisieNoPadding BlueBlackTxt">22/06</span>
          </div>
          <div class="DivTabBottomContent">
            <span class="TitleSaisieNoPadding">LIV CMDE</span><br>
            <span class="TitleSaisieNoPadding BlueBlackTxt">22/06</span>
          </div>
          <div class="DivTabBottomContent">
            <span class="TitleSaisieNoPadding">LIV CMDE+1</span><br>
            <span class="TitleSaisieNoPadding BlueBlackTxt">22/06</span>
          </div>
        </div>
      </div>
    <div class="FooterBar">
      <div class="Bar BarRed"><a href="commande-fournisseur-SA.php" class="LinkFooterBar BarOption BarRed">RETOUR</a></div>
      <div class="Bar BarGrey"><a href="#" class="LinkFooterBar BarOption BarGrey">-</a></div>
      <div class="Bar BarWhite"><a href="#" class="LinkFooterBar BarOption BarWhite">INFO</a></div>
      <div class="Bar BarGrey"><a href="#" class="LinkFooterBar BarOption BarGrey">ANNULER</a></div>
      <div class="Bar BarWhite"><a href="saisie-corrections.php" class="LinkFooterBar BarOption BarWhite">OK</a></div>
    </div>
  </div>
  <img class="FormBackground" src="img/form.svg" alt="Background">
</div>
</body>
</html>
