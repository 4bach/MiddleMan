<!DOCTYPE html>

<html>
    <?php include("head.php") ?>

    <body>
        <div class ="page">
            <?php include ("navbar.php")




            <header>
                <div class= "container entete">
                    <div class="row justify-content-center">
                        <div class="col-md-auto nomproduit">
                            <h1>Connexion MiddleMan</h1>   
                        </div> 
                    </div>
                    
                </div>
            </header>





            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-auto nomproduit">
                        <form method="post" action="#">
                            <div class="form-group">
                                <label for="adressemailconnection"></label>
                                <input type="email" class="form-control" id="adressemailconnection" placeholder="Adresse mail">
                                <label for="motdepasseconnection"></label>
                                <input type="password" class="form-control" id="motdepasseconnection" placeholder="Mot de passe">
                            </div>
                            <div class="row justify-content-center bouton-co-cont">
                                <div class="col-md-auto">
                                    <button type="submit" class="btn btn-primary bouton-co">Connexion</button>
                                </div>
                            </div>
                        </form>
                      
                    </div> 
                </div>
                <div class = "row justify-content-center">
                    <div class ="col-md-auto creercompte">
                        <a href="creation_compte.html"><p>Créer un compte</p></a>
                    </div>
                </div>
            </div>





                
            <?php include("footer.php") ?>
        </div>
        
    
    </body>


</html>
