<!DOCTYPE html>
<html>
<head>
    <?php  
      require_once("ongbase.php");
       $dist="SELECT nomdistrict FROM lieu";
        $dis=$pdo->prepare($dist);
        $dis->execute();

      if (!isset($_GET["nomdistrict"])) 
        {        
          $query="SELECT nomcommune FROM lieu";
          $info=$pdo->prepare($query);
          $info->execute() ;           
        }
        else
        { 
          $f =$_GET['nomcommune'];
          $query="SELECT nomcommune FROM information WHERE nomdistrict='".$f."'";
          $info=$pdo->prepare($query);
          $info->execute() ;   
        }
    ?>
    <meta charset="utf-8" lang="fr"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/verif.js"></script>
    <script type="text/javascript" src="js/jquery-validate.js"></script>
    <title>ACTIVITE PNNC</title>
</head>
<body>
    <div class="col-md-12 col-xs-12 spacer">
        <div class="panel panel-info">
            <div class="panel-heading">VISUALISATION DES ACITIVITE</div>
            <div class="panel-body">
              <form >    
                <label for="nom_mod">PAR DISTRICT</label>
                    <select id="nomdistrict" name="nomdistrict" class="liste" >
                      <option value="" disabled selected>Séléctionnez District</option>
                      <?php while($di=$dis->fetch()) {echo "<option value='".$di['nomdistrict']."'>".utf8_encode($et['nomdistrict'])."</option>";} ?>
                    </select>
                    <input type="submit" name="s" value="filtre">
                    <label for="nom_mod">PAR COMMUNE</label>
                    <select id="nomdistrict" name="nomdistrict" class="liste" >
                      <option value="" disabled selected>Séléctionnez Commune</option>
                      <?php while($inf=$info->fetch()) {echo "<option value='".$inf['nomcommune']."'>".utf8_encode($inf['nomcommune'])."</option>";} ?>
                    </select>
                    <input type="submit" name="s" value="filtre">
                    <label for="nom_mod">PAR SITE</label>
                    <select id="nomdistrict" name="nomdistrict" class="liste" >
                      <option value="" disabled selected>Séléctionnez Site</option>
                      <?php while($di=$dis->fetch()) {echo "<option value='".$di['nomdistrict']."'>".utf8_encode($et['nomdistrict'])."</option>";} ?>
                    </select>
                    <input type="submit" name="s" value="filtre">
                <table class="table">                   
                  <thead>
                    <tr>
                      <th>CODE ETUDIANT</th>
                      <th>CODE MODUL</th>
                      <th>NOM </th>
                      <th>PRENOM</th>
                      <th>DATE DE NAISSANCE</th>
                      <th>LIEU DE NAISSANCE</th>
                      <th>SEXE</th>
                    </tr>
                  </thead>
                  <tbody class="corps-tableau" id="rqt">
                    <!--<tr>
                      <?php while ($row=$info->fetch()):?>
                      <td id="c_etu"><?php echo($row['c_etu']) ?></td>
                      <td id="c_mod"><?php echo($row['c_mod']) ?></td>
                      <td id="nom_etu"><?php echo($row['nom_etu']) ?></td>
                      <td id="prenom_etu"><?php echo($row['prenom_etu']) ?></td>
                      <td id="date_nais"><?php echo($row['date_nais']) ?></td>
                      <td id="lieu_nais"><?php echo($row['lieu_nais']) ?></td>
                      <td id="sexe"><?php echo($row['sexe']) ?></td>
                      <td><a href="Mod.php?code=<?php echo($et['c_etu']) ?>">Edit</a> </td>
                      <td><a onclick="return confirm('Etes vous sur?');" href="SupprimeEtudiant.php?code=<?php echo($et['CODE']) ?>">Supprimer</a></td>
                    </tr>
                    <?php endwhile ;?>
                  </tbody>-->
                </table>
              </form>
            </div>
        </div>
    </div>
</body>
</html>