<!DOCTYPE html>

<html>

    <!-- HEADER -->
    <?php include("PHP/head.php") ?>


    <!-- BODY -->


    <body>
        <div class ="page">

            <!--NAVBAR -->
            <?php include("PHP/navbar.php") ?>




            <header>
                <div class= "container entete">
                    <div class="row justify-content-center">
                        <div class="col-md-auto">
                            <h1>Création d'un compte MiddleMan</h1>   
                        </div> 
                    </div>
                    
                </div>
            </header>





            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-auto">
                        <form method="post" action="#">
                            <div class="form-group">
                                <label for="prenom"></label>
                                <input type="text" class="form-control" id="prenom" placeholder="Prénom" size="35">
                                <label for="nom"></label>
                                <input type="text" class="form-control" id="nom" placeholder="Nom" size="35">
                                <label for="adressemailconnection"></label>
                                <input type="email" class="form-control" id="adressemailconnection" placeholder="Adresse mail">
                                <label for="motdepasseconnection"></label>
                                <input type="password" class="form-control" id="motdepasseconnection" placeholder="Mot de passe">
                                <label for="datenaissance"></label>
                                <input type="password" class="form-control" id="motdepasseconnection" placeholder="Confirmez le mot de passe">
                                <label for="datenaissance"></label>
                                <input type="date" class="form-control" id="datenaissance" placeholder="JJ/MM/AAAA">
                            </div>
                            <div class="row justify-content-center">
                                <div class = "col-md-auto">
                                    <button type="submit" class="btn btn-primary bouton-co">Créer</button>
                                </div>
                            </div>
                        </form>
                      
                    </div> 
                </div>
            </div>





                
            <?php include("PHP/footer.php") ?>
        </div>
        
    
    </body>


</html>
