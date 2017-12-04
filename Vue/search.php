<?php include 'Masterpage.php';?>
<style>
    .colsearch{
        background-color: #cca653;

    }
    .alignsearch{
        margin-bottom: 5px;
        margin-top: 5px;
    }

</style>

<div class="colsearch">
    <div class="container">
        <div class="row">
            <div class="col s12 m4 l2">
                <select class="browser-default alignsearch">
                    <option value="" disabled="" selected="">Vente</option>
                    <option value="1">Location</option>
                    <option value="1">Location saisonière</option>
                </select>
            </div>
            <div class="col s12 m4 l2">
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
                </select>
            </div>
            <div class="col s12 m4 l2">
                <select class="browser-default alignsearch">
                    <option value="" disabled="" selected="">Pièces</option>
                    <option value="1">1 Pièce</option>
                    <option value="1">2 Pièces </option>
                    <option value="2">3 Pièces</option>
                    <option value="2">4 Pièces</option>
                    <option value="3">5 Pièces</option>
                    <option value="3">+ 6 Pièces </option>
                </select>
            </div>
            <div class="col s12 m4 l2">
                <input placeholder=" Ville" name="recherche" style="background-color: #ffffff !important;  border:1px; border-radius: 1px; #616161 !important; margin-top: 5px; margin-bottom: 5px"  id=" " type="text">
            </div>
            <div class="col s12 m4 l2">
                <select class="browser-default alignsearch">
                    <option value="" disabled="" selected="">Prix</option>
                    <option value="" disabled="" selected="">Prix</option>
                    <option value="100000">100 000</option>
                    <option value="200000">200 000</option>
                    <option value="300000">300 000</option>
                    <option value="400000">400 000</option>
                    <option value="500000">500 000</option>
                    <option value="600000">600 000</option>
                    <option value="700000">700 000</option>
                    <option value="800000">800 000</option>
                    <option value="900000">900 000</option>
                    <option value="1000000">1 000 000 - 1 500 000</option>
                    <option value="1500000">1 500 000 - 2 000 000</option>
                    <option value="3">2 000 000 et plus</option>
                </select>
            </div>
            <div class="col s12 m4 l2 alignsearch">
                <a class="btn-floating" href="" style=" background-color: #424242">
                    <i class="material-icons ">search</i>
                </a>
            </div>
        </div>
    </div>

</div>