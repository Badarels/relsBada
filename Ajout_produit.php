 
 
 <?php
    session_start();
      if(!isset($_SESSION['NIV'])){
        header('location:authentification.php');
    }
   ?>
 
  <!doctype html>
 <html>
     <head style="width:100%;float: top;">
           <meta charset="UTF-8">
         <title>GestCommande</title>
           
       
         <link rel="stylesheet" href="../res/styles/commande.css">
         <link rel="stylesheet" href="../res/js/bootstrap/css/bootstrap.min.css" >
         <link rel="stylesheet" href="../res/js/bootstrap/css/bootstrap-theme.min.css">
         <link rel="stylesheet" href="../res/js/bootstrap/css/bootstrap.css">
     </head>
     <body  style="background-color:#F5F5f5;background: url('../res/images/feuille.jpeg') no-repeat center fixed;
      -webkit-background-size: cover">
         <div class="navbar  navbar-default  navbar-fixed-top" style="background-color: #00caaa;z-index: 100000;margin-bottom: 0px;">
              
                        <form method="post" name="deconnection">
                   <ul class="nav nav-pills col-lg-offset-3" style="float: bottom;float: right;margin-right: 20px; ">
                        <li role="presentation"  name="deconnection">
                       <div class="form-group">
                       <div class="col-sm-offset-1 col-sm-8">
                           <button type="submit" name="Deconnection"  class="btn btn-default" style="margin: 10px;width:150px;color:#fff;background-color: #00cccf;">Deconnection</button>
                       </div>
                     </div></li> 
                                     
                     </ul>
                                    </form>
                                   <?php
                                      
                                         if(isset($_POST['Deconnection'])){
                                            session_destroy();
                                            header('location:authentification.php');
                                        }
                                    ?>
                   
                          
                        <ul class="nav nav-pills" style="float: bottom;">
                            <li role="presentation" style="float: left; margin-left: 10px;"><img src="http://localhost/GestCommande/res/images/bad.jpg" width="50px" height="50px" class="img-rounded"/></li> 
                            <li role="presentation"><li role="presentation" style="float: left;"><a href=" #"><span>GestCommande</span><span style="color:#00cccf;">.com</span></a></li>
              
                              <li role="presentation"><a href="http://localhost/GestCommande/src/affiche_client.php">Liste des Clients</a></li>
                            <li role="presentation"><a href="http://localhost/GestCommande/src/listedesproduits.php">Liste des produits</a></li>
                        </ul>         
             </div>    
                     
         
             
              <!--header-->
             

                     
                        
  
              <!--content-->
             
          <div class=" col-md-5 col-lg-offset-3 col-lg-7" style=" opacity: 0.9;width: 700px ; background-color:#fff; margin-top: 60px;"> 
            <div class="row h4" style="border-bottom: solid 3px #00ccff;padding: 1px;padding-left: 10px;margin-bottom: 0px; color:#00cccf;"><h4>Ajouter un produit</h4></div>
                     
            <br>
                    <form class="form-horizontal" method="post" style="width: 600px;">
                     <div class="form-group">
                       <label for="Numero" class="col-sm-4 control-label" style="margin: auto;"></label>
                       <div class="col-sm-5">
                           <input type="number" class="form-control" name="idprod"placeholder="Numero du produit">
                       </div>
                     </div>
                     <div class="form-group">
                       <label for="nom" class="col-sm-4 control-label"style="margin: auto;"></label>
                       <div class="col-sm-5">
                           <input type="text" class="form-control" name="nomprod"  placeholder="nom du produit" >
                       </div>
                     </div>
                     <div class="form-group">
                       <label for="prix" class="col-sm-4 control-label"style="margin: auto;"></label>
                       <div class="col-sm-5">
                           <input type="number" class="form-control" name="prix"  placeholder="prix" >
                       </div>
                     </div>
                     <div class="form-group">
                       <label for="quantite" class="col-sm-4 control-label"style="margin: auto;"></label>
                       <div class="col-sm-5">
                           <input type="number" class="form-control" name="quantite"  placeholder="quantite" >
                       </div>
                     </div>
                           <div class="form-group">
                       <label for="Typeproduit" class="col-sm-4 control-label"style="margin: auto;"></label>
                       <div class="col-sm-5">
                           <select class="form-control" name="typeprod"   placeholder="Type"><option name="hp">Hp</option><option name="dell">dell</option><option name="mac">mac</option><option name="asus">asus</option></select>
                       </div>
                     </div>
                      
                     <div class="form-group">
                       <div class="col-sm-offset-4 col-sm-4">
                           <button type="submit" name="Ajouter"  class="btn btn-default" style="width:234px;color:#fff;background-color: #00cccf;">Ajouter</button>
                       </div>
                     </div>
                   </form>
                    <?php
                    // put your code here

                    if (isset($_POST['Ajouter'])) {
                        $idprod = $_POST['idprod'];
                        $nomprod = $_POST['nomprod'];
                        $prix = $_POST['prix'];
                        $quantite = $_POST['quantite'];
                        $type = $_POST['typeprod'];
                        try {

                            $bdd = new PDO('mysql:host=localhost;dbname=src2', 'root', '');
                            $req = $bdd->query(" INSERT INTO produit(id_produit,nomprod,prix,quantite,typeprod)  VALUES ($idprod,'$nomprod','$prix','$quantite','$type')");
                        } catch (Exception $e) {

                            die('Erreur : ' . $e->getMessage());
                        }
                    }
                    ?>
                       </div>
				 
         
           <div class=" col-md-5 col-lg-offset-2 col-lg-7"style="height: 800px;  "> 
      
               </div>
  
      
        
              <!--baspages-->
                 <div class="col-md-4 navbar bottom" style="background-color:#00cccf;padding-left: 0px; width: 100%;float: bottom;">
              <h4 style="text-align: center;color:#a3b111; ">copyright@badarasock</h4>
          </div> 
           
     </body>
 </html>




