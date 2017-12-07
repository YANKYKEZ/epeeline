<!Doctype html>
<html lang="fr">
    <head>
        <title> Vendez</title>
        <meta charset="utf-8"/>
        <?php include 'Masterpage.php'?>
        <?php include 'header.php'?>

        <style>
            .bg-vendre{
                background-image: url("Data/Images/imo21.jpg");
                background-attachment: fixed;
                background-position:0% 70%;
            }
        </style>

        <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>

    <body class="bg-vendre">
        <div class="container">
            <div class="row">
                <h4 style="color: #cca653; text-align: center">VENDRE</h4>
            </div>
            <div class="row">
                <div class="col s12 m12 l8">
                    <img src="Data/Images/vendre.png" style="width: 100%;" alt=""/>
                </div>
                <div class="col s12 m12 l4" style="background: #424242">
                    <H5 style="color: #cca653; text-align: center">CONTACTEZ-NOUS</H5>

                    <input placeholder=" Nom" name="nom" style="background-color: #ffffff !important;  border:1px; border-radius: 1px; #616161 !important; margin-top: 5px; margin-bottom: 5px"  id=" " type="text">
                    <input placeholder=" Email" name="email" style="background-color: #ffffff !important;  border:1px; border-radius: 1px; #616161 !important; margin-top: 5px; margin-bottom: 5px"  id=" " type="text">
                    <input placeholder=" Téléphone" name="telephone" style="background-color: #ffffff !important;  border:1px; border-radius: 1px; #616161 !important; margin-top: 5px; margin-bottom: 5px"  id=" " type="text">
                    <select class="browser-default alignsearch">
                        <option value="" disabled="" selected="">Vente</option>
                        <option value="1">Location</option>
                        <option value="1">Location saisonière</option>
                    </select>
                    .
                    <select class="browser-default alignsearch">
                        <option value="" disabled="" selected="">Type de bien</option>
                        <option value="1">Appartement Meublé</option>
                        <option value="1">Appartement vide</option>
                        <option value="2">Villa</option>
                        <option value="2">Maison</option>
                        <option value="2">Terrain</option>
                        <option value="3">Local commercial</option>
                        <option value="3">Garage/Parking </option>
                        <option value="3">Immeuble </option>
                        <option value="3">Bureau </option>
                        <option value="3">Local d'activité/Entrepot </option>
                        <option value="3">Cave </option>
                    </select> <br/>
                    <textarea name="" id="" cols="30" rows="10" style="background-color: #ffffff"></textarea>

                    <a class="waves-effect waves-light btn" style="align-self: center; background-color: #cca653">Envoyer</a
                    <br/>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>

        <?php include'footer.php'?>

    </body>
</html>






