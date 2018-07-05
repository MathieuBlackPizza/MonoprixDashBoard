<?php include('head.php'); ?>
<body>
  <div class="Content">
    <header class="HeaderLogo">
      <a href="#"><img class="Logo" src="img/logo.svg"></a>
      <a href="index.php"><h1 class="HeaderTitle">Saisie Corrections</h1></a>
    </header>
    <div class="Wrapper">
      <div class="CardTab">
        <div class="DivTabInput">
          <span class="TitleSaisie">CODE</span><input class="InputSaisie" type="search" name="InputSaisie" value=""></input>
        </div>
        <div class="DivTabInput">
          <span class="TitleSaisie">LIBELLÉ</span><span class="TxtSaisie">Jambonneau nature</span>
        </div>
        <div class="DivTabInput DivTabResponsive">
          <div class="DivTabInputResponsive">
            <span class="TitleSaisie">UV</span><input class="InputSaisie SmallSize" type="search" name="InputSaisie" value="24"></input>
            <span class="TitleSaisie TxtPadding">MODIF</span>
          </div>
          <select name="type" class="InputSaisie BigSize SelectResponsiveRight">
            <option value="">DLC atteinte V1</option>
            <option value="">DLC atteinte V2</option>
            <option value="">DLC atteinte V3</option>
          </select>
        </div>
        <div class="Table">
          <table class="Table">
            <tbody>
              <tr class="Tr TrBlue TdHeight">
                <td class="TdWhite TdHeight"></td>
                <td class="TrBlue">QTÉ</td>
                <td class="TrBlue">POIDS</td>
              </tr>
              <tr class="Tr Trgrey">
                <td class="TrBlue TrTxtLeft TdHeight">DISPO STOCK</td>
                <td class="TrGrey">0</td>
                <td class="TrGrey">0</td>
              </tr>
              <tr class="Tr TrGrey">
                <td class="TrBlue TrTxtLeft TdHeight">STOCK LIE</td>
                <td class="TrGrey">0</td>
                <td class="TrGrey">0</td>
              </tr>
              <tr class="Tr TrBlue">
                <td class="TrBlue TrTxtLeft TdHeight">STOCK PACK</td>
                <td class="TrGrey">0</td>
                <td class="TrGrey">0</td>
              </tr>
              <tr class="Tr TrBlue">
                <td class="TrBlue TrTxtLeft TdHeight">ECART</td>
                <td class="TrGrey"><input class="InputSaisie MiniSize" type="search" name="InputSaisie" value=""></input></td>
                <td class="TrGrey"><input class="InputSaisie MiniSize" type="search" name="InputSaisie" value=""></input></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="DivTabInputBottom">
          <span class="TitleSaisie">UNITÉ POIDS</span><span class="TitleSaisie BlueBlackTxt">Kilogramme</span>
        </div>
      </div>
    <div class="FooterBar">
      <div class="Bar BarRed"><a href="commande-fournisseur.php" class="LinkFooterBar BarOption BarRed">RETOUR</a></div>
      <div class="Bar BarWhite"><a href="#" class="LinkFooterBar BarOption BarWhite">INFO</a></div>
      <div class="Bar BarGrey"><a href="#" class="LinkFooterBar BarOption BarGrey">VALIDER</a></div>
      <div class="Bar BarGrey"><a href="#" class="LinkFooterBar BarOption BarGrey">VIS</a></div>
      <div class="Bar BarWhite"><a href="selection-motif.php" class="LinkFooterBar BarOption BarWhite">OK</a></div>
    </div>
  </div>
  <img class="FormBackground" src="img/form.svg" alt="Background">
</div>
</body>
</html>
