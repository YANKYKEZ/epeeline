<!Doctype html>
<html>
    <head>
        <title>Contactez-nous</title>
        <meta charset="utf-8"/>
        <?php include'Masterpage.php';?>
        <?php include'header.php';?>
    </head>
    <style>
        .bg-contactez{
            background-image: url("Data/Images/contact.jpg");
            background-attachment: fixed;
            background-position:0% 80%;
        }
        .bg-decor{
            background-color: #424242;
            opacity: 0.92;
            color: #cca653;
            text-align: center;
            border-radius: 3px;
            border-color: #cca653;
            border: solid 4px;
            font-weight: bold;
        }
    </style>
<body class="bg-contactez">
    <div class="row">
        <h4 style="color: #cca653; text-align: center">CONTACTEZ-NOUS</h4>
    </div>

<div class="container">
    <div class="row">
            <div class="col s12 m6 l6 bg-decor">
                <h5 style="color: #cca653"> Argence de Douala</h5>
                <hr style="border-color: #cca653;">
                <p style="color: #ffffff"> 238, rue  Batiboa - Carrefour  IPN  Bonapriso</p>
                <p style="color: #ffffff"> BP: 3195  Douala - Cameroun</p><p style="color: #ffffff"> Email: contact@epeeline.com</p>
                <p style="color: #ffffff"> Tél: + 237 233 859 159</p>
            </div>
        <div class="col s12 m6 l6 bg-decor">
            <h5 style="color: #cca653"> Argence de Paris</h5>
            <hr style="border-color: #cca653;">
            <p style="color: #ffffff"> 59, rue  Raspail </p>
            <p style="color: #ffffff"> BP: 9230  Levalloi-perret</p>
            <p style="color: #ffffff"> Email: contact@epeeline.com</p>
            <p style="color: #ffffff"> Tél: </p>
        </div>
    </div>


    <div class="row">
        <div class="col s12 m6 l6  bg-decor" >
            <H5 style="color: #cca653; text-align: center">CONTACTEZ-NOUS</H5>
            <input placeholder=" Nom" name="nom" style="background-color: #ffffff !important;  border:1px; border-radius: 1px; #616161 !important; margin-top: 5px; margin-bottom: 5px"  id=" " type="text">
            <input placeholder=" Email" name="email" style="background-color: #ffffff !important;  border:1px; border-radius: 1px; #616161 !important; margin-top: 5px; margin-bottom: 5px"  id=" " type="text">
            <input placeholder=" Téléphone" name="telephone" style="background-color: #ffffff !important;  border:1px; border-radius: 1px; #616161 !important; margin-top: 5px; margin-bottom: 5px"  id=" " type="text">


            <textarea name="" id="" cols="30" rows="10" style="background-color: #ffffff"></textarea>

            <a class="waves-effect waves-light btn" style="align-self: center; background-color: #cca653">Envoyer</a
            <br/>
            <br/>
            <br/>
        </div>
    </div>
</div>

</body>
</html>