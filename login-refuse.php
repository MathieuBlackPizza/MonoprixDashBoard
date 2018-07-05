<?php include('head.php'); ?>
<body>
   <div class="Content">
      <header class="Header">
         <h1 class="HeaderTitle"><span class="TxtLight">MONOPRIX</span> <span class="TxtBold">G.O.L.D.</span></h1>
      </header>
      <div class="WrapperNoBar">
         <div class="Card">
            <div class="Form">
               <form class="" action="index.html" method="post">
                  <label class="NameInput">Username
                  <input class="InputWhite" type="text" name="Username" value="" required></input></label>
                  <label class="NameInput">Password
                  <input class="InputWhite" type="password" name="Password" value="" required></input></label>
                  <label class="NameInput">Domain
                  <input class="InputWhite" type="text" name="Domain" value=""></input></label>
                  <button class="InputBlack" type="" name="Connexion"><a class="LinkConnexion" href="login.php">Connexion</a></button>
                  <span class="ErrorTxt TxtCenter">Accès refusé (SQL)</span>
               </form>
            </div>
         </div>
      </div>
      <img class="FormBackground" src="img/form.svg" alt="Background">
   </div>
</body>
</html>
