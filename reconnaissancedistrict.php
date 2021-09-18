 
    <?php require_once("ongbase.php");
          $reccom="SELECT DISTINCT nomsite FROM site ORDER BY nomsite";
          $recom=$pdo->prepare($reccom);
          $recom->execute();
          while($rc=$recom->fetch()) {;echo "<option value='".($rc['nomsite'])."'>".utf8_encode($rc['nomsite'])."</option>" ;};
        ?>