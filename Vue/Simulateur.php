<!Doctype html>
<html lang="fr">
    <head>
        <title>Simulateur</title>
        <meta charset="utf-8"/>
        <?php include 'Masterpage.php';?>
        <?php include 'header.php';?>

        <style>
            .bg-simulateur{
                background-image: url("Data/Images/background-mandat.jpg");
                background-attachment: fixed;
                background-position:20% -5%;
                text-align: center;
            }

            .bg-cal{
                background: #424242;
            }
            .de{
                color: #ffffff;
            }

        </style>


        <script>
            function verif_integer(champb){
                var chiffresb = new RegExp("[0-9]");
                var verifb;
                for(x = 0; x < champb.value.length; x++){
                    verifb = chiffresb.test(champb.value.charAt(x));
                    if(verifb == false){
                        champb.value = champb.value.substr(0,x) + champb.value.substr(x+1,champb.value.length-x+1); x--;
                    }
                }
            }
        </script>

    </head>
<body class="bg-simulateur">
<form action="Simulateur.php" method="post">


    <?php
    $_POST['capital'];
    $_POST['annee'];
    //$capital=23000000;
    //$annee=5;
    //$mensualite;
    $nbremois=12*$_POST['annee'];
    $nbremois1=12*10;
    $nbremois2=12*15;
    $nbremois3=12*20;
    $nbremois4=12*25;
    $nbremois5=12*30;
    $nbremois6=12*35;
    //Declaration des constances de similation
    // $t1=0.06/12;
    $t1= $_POST['t_interet']*$_POST['assurance']*0.01/12;

    //1+1/12
    $vardeno=1+$t1;
    //(1+t/12)puissance
    $assurance=$_POST['capital']*$_POST['assurance']*0.01;
    $assurancedef=$assurance/12;
    $vardenodef=pow($vardeno,$nbremois);

    $vardenodef1=pow($vardeno,$nbremois1);
    $vardenodef2=pow($vardeno,$nbremois2);
    $vardenodef3=pow($vardeno,$nbremois3);
    $vardenodef4=pow($vardeno,$nbremois4);
    $vardenodef5=pow($vardeno,$nbremois5);
    $vardenodef6=pow($vardeno,$nbremois6);

    $grandediv=1/$vardenodef;

    $grandediv1=1/$vardenodef1;
    $grandediv2=1/$vardenodef2;
    $grandediv3=1/$vardenodef3;
    $grandediv4=1/$vardenodef4;
    $grandediv5=1/$vardenodef5;
    $grandediv6=1/$vardenodef6;

    $denominateur=1-$grandediv;

    $denominateur1=1-$grandediv1;
    $denominateur2=1-$grandediv2;
    $denominateur3=1-$grandediv3;
    $denominateur4=1-$grandediv4;
    $denominateur5=1-$grandediv5;
    $denominateur6=1-$grandediv6;

    $numerateur=$_POST['capital']*$t1;

    $mensualite1=$numerateur/$denominateur;

    $mensualite01=$numerateur/$denominateur1;
    $mensualite2=$numerateur/$denominateur2;
    $mensualite3=$numerateur/$denominateur3;
    $mensualite4=$numerateur/$denominateur4;
    $mensualite5=$numerateur/$denominateur5;
    $mensualite6=$numerateur/$denominateur6;

    //Calcul des mensualité

    $mensualite=$mensualite1+$assurancedef;

    $mensualite011=$mensualite01+$assurancedef;
    $mensualite22=$mensualite2+$assurancedef;
    $mensualite33=$mensualite3+$assurancedef;
    $mensualite44=$mensualite4+$assurancedef;
    $mensualite55=$mensualite5+$assurancedef;
    $mensualite66=$mensualite6+$assurancedef;

    $couttotalpret=$mensualite*$nbremois;

    $couttotalpret1=$mensualite011*$nbremois1;
    $couttotalpret2=$mensualite22*$nbremois2;
    $couttotalpret3=$mensualite33*$nbremois3;
    $couttotalpret4=$mensualite44*$nbremois4;
    $couttotalpret5=$mensualite55*$nbremois5;
    $couttotalpret6=$mensualite66*$nbremois6;

    $coutpret=$couttotalpret-$_POST['capital'];

    $coutpret1=$couttotalpret1-$_POST['capital'];
    $coutpret2=$couttotalpret2-$_POST['capital'];
    $coutpret3=$couttotalpret3-$_POST['capital'];
    $coutpret4=$couttotalpret4-$_POST['capital'];
    $coutpret5=$couttotalpret5-$_POST['capital'];
    $coutpret6=$couttotalpret6-$_POST['capital'];

    //AFFICHAGE DES MENSUALITES

    $nombre_format_francais = number_format($mensualite, 2, ',', ' ');

    $nombreM1_format_francais = number_format($mensualite011, 2, ',', ' ');
    $nombreM2_format_francais = number_format($mensualite22, 2, ',', ' ');
    $nombreM3_format_francais = number_format($mensualite33, 2, ',', ' ');
    $nombreM4_format_francais = number_format($mensualite44, 2, ',', ' ');
    $nombreM5_format_francais = number_format($mensualite55, 2, ',', ' ');
    $nombreM6_format_francais = number_format($mensualite66, 2, ',', ' ');


    //AFFICHAGE DU COUT TOTAL DU PRET

    $nombre_format_francais1 = number_format($couttotalpret, 2, ',', ' ');


    $nombreSM1_format_francais1 = number_format($couttotalpret1, 2, ',', ' ');
    $nombreSM2_format_francais1 = number_format($couttotalpret2, 2, ',', ' ');
    $nombreSM3_format_francais1 = number_format($couttotalpret3, 2, ',', ' ');
    $nombreSM4_format_francais1 = number_format($couttotalpret4, 2, ',', ' ');
    $nombreSM5_format_francais1 = number_format($couttotalpret5, 2, ',', ' ');
    $nombreSM6_format_francais1 = number_format($couttotalpret6, 2, ',', ' ');

    //AFFICHAGE DU COUT PRET

    $nombre_format_francais2 = number_format($coutpret, 2, ',', ' ');

    $nombreCP1_format_francais2 = number_format($coutpret1, 2, ',', ' ');
    $nombreCP2_format_francais2 = number_format($coutpret2, 2, ',', ' ');
    $nombreCP3_format_francais2 = number_format($coutpret3, 2, ',', ' ');
    $nombreCP4_format_francais2 = number_format($coutpret4, 2, ',', ' ');
    $nombreCP5_format_francais2 = number_format($coutpret5, 2, ',', ' ');
    $nombreCP6_format_francais2 = number_format($coutpret6, 2, ',', ' ');

    ?>



    <?php
    //mensualité
    //echo $nombre1_format_francais;
    //echo $nombre2_format_francais;
    //echo $nombre3_format_francais;
    //echo $nombre4_format_francais;
    //echo $nombre5_format_francais;
    ?>








    <div class="row">
        <h4 style="color: #cca653; text-align: center">SIMULATEUR</h4>
    </div>

    <div class="row">
        <div class="col s12 l6 bg-cal">
            <h5 style="color: #cca653; text-align: center">SIMULATION DE VOTRE PRET IMMOBILIER</h5>
            <hr/>
            <br/> <br/>

            <div class="row">
                <div class="col s13 m3 l2 de des">
                    Cout du bien *
                </div>
                <div class="col s13 m3 l2 de des">
                    <a class="small material-icons" style="color: #ebd37b;" onclick="Materialize.toast('La mensualité maximum est de 40% du salaire de l\'emprunteur', 6000)">info_outline</a>
                </div>
                <div class="col s13 m3 l6 de">
                    <input placeholder=" Montant à Empreinter "  style="background-color: #ffffff !important;  border:1px; border-radius: 1px; #616161 !important; "  type="text" formatInt()     onKeyUp="verif_integer(this)" id="first_name" name="capital" type="text" class="validate" value="<?php if (isset($_POST['capital'])){echo $_POST['capital'];} ?>" >
                    
                </div>
                <div class="col s13 m3 l2 de des">
                    Fcfa
                </div>
            </div>

            <div class="row">
                <div class="col s13 m3 l2 de des">
                    Durée du prêt *
                </div>
                <div class="col s13 m3 l2 de des">
                    <a class="small material-icons" style="color: #ebd37b;" onclick="Materialize.toast('La durée maximum du prêt peut aller jusqu\'à  l\'âge de la retraite de l\'emprunteur soit ses 65 ans ', 6000)">info_outline</a>
                </div>
                <div class="col s13 m3 l6 ">
                    <select class="browser-default"  value="" name="annee"   ">
                        <option value="" disabled selected ><?php echo $_POST['annee']?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                    </select>
                </div>

                <div class="col s13 m3 l2 de des">
                    Ans
                </div>
            </div>

            <div class="row">
                <div class="col s13 m3 l2 de des">
                    Taux d'interêt *
                </div>
                <div class="col s13 m3 l2 de des">
                    <a class="small material-icons" style="color: #ebd37b;" onclick="Materialize.toast('Le taux d\'intérêt de 6% est le taux en vigueur de l\'organisme financier, hors assurance', 6000)">info_outline</a>
                </div>
                <div class="col s13 m3 l6 ">
                    <select class="browser-default" name="t_interet">
                        <option value="" disabled selected><?php echo $_POST['t_interet']?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="col s13 m3 l2 de des">
                    Fcfa
                </div>
            </div>

            <div class="row">
                <div class="col s13 m3 l2 de des">
                    Taux d'assurance
                </div>
                <div class="col s13 m3 l2 de des">
                    <a class="small material-icons" style="color: #ebd37b;" onclick="Materialize.toast('La mensualité maximum est de 40% du salaire de l\'emprunteur', 6000)">info_outline</a>
                </div>
                <div class="col s13 m3 l6 ">
                    <select class="browser-default" name="assurance" ">
                        <option value="" disabled selected><?php echo $_POST['assurance']?></option>
                        <option value="1">1</option>
                        <!--<option value="2">2</option>
                        <option value="3">3</option>-->
                    </select>
                </div>
                <div class="col s13 m3 l2 de des">
                    %
                </div>
            </div>

            <div class="row">
                <div class="col s6 m6 l6 de">
                    * Champs obligatoires
                </div>
                <div class="col s6 m6 l6">
                    <input  type="submit" id="cal" value="Calculer" class="waves-effect waves-light btn btncol" style="background-color: #ebd37b; color: #5A5858; margin-left: -10%">
                </div>
            </div>

            <br>
            <?php  if ($nombre_format_francais>0)
            {  ?>
                <div class=" st" id="affiche" style="">
                    <table BORDER="2" heigth="25%">
                        <tr class="tr">
                            <td ">VOTRE MENSUALITE SERA DONC DE</td>
                            <td style="color: #ead079; font-weight: bold"><?php echo $nombre_format_francais; ?></td>
                            <td>FCFA</td>
                        </tr>
                        <tr class="tr" >
                            <td style="">VOUS REMBOURSEREZ AU BOUT DE </td>
                            <td style="color: #ead079;  font-weight: bold"><?php echo $_POST['annee'];?> </td>
                            <td style="">ANS</td>
                        </tr>
                        <tr class="tr">
                            <td>LA SOMME DE </td>
                            <td style="color: #ead079; font-weight: bold"><?php echo $nombre_format_francais1; ?> </td>
                            <td>FCFA</td>
                        </tr>
                        <tr class="tr">
                            <td>VOTRE PRET VOUS AURA DONC COUTÉ </td>
                            <td style="color: #ead079; font-weight: bold"><?php echo $nombre_format_francais2; ?> </td>
                            <td>FCFA</td>
                        </tr>
                    </table>
                </div>
            <?php } ?>
            <br/>
            <script>
                $(document).ready(function () {
                    $('#cal').click(function () {
                        $("#affiche").show();

                    });

                });
            </script>

        </div>

        <div class="row">
            <div  class=" row col s12 m6 l6">
                <?php if( $_POST['annee']>0){?>
                    <table class="striped">
                        <thead style="background-color:#4D4D4D; ">
                        <tr>
                            <th class="colentete" data-field="id">DURÉE DU PRÊT</th>
                            <th class="colentete" data-field="price">MENSUALITÉ</th>
                            <th class="colentete" data-field="name">SOMME DES MENSUALITÉS</th>
                            <th class="colentete" data-field="price">COÛT DU PRÊT</th>

                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>10 Ans</td>
                            <td><?php echo $nombreM1_format_francais; ?></td>
                            <td><?php echo $nombreSM1_format_francais1;?></td>
                            <td><?php echo $nombreCP1_format_francais2;?></td>
                        </tr>
                        <tr>
                            <td>15 Ans</td>
                            <td><?php echo $nombreM2_format_francais; ?></td>
                            <td><?php echo $nombreSM2_format_francais1;?></td>
                            <td><?php echo $nombreCP2_format_francais2;?></td>
                        </tr>
                        <tr>
                            <td>20 Ans</td>
                            <td><?php echo $nombreM3_format_francais; ?></td>
                            <td><?php echo $nombreSM3_format_francais1;?></td>
                            <td><?php echo $nombreCP3_format_francais2;?></td>
                        </tr>
                        <tr>
                            <td>25 Ans</td>
                            <td><?php echo $nombreM4_format_francais; ?></td>
                            <td><?php echo $nombreSM4_format_francais1; ?></td>
                            <td><?php echo $nombreCP4_format_francais2;?></td>

                        </tr>
                        <tr>
                            <td>30 Ans</td>
                            <td><?php echo $nombreM5_format_francais;?></td>
                            <td><?php echo $nombreSM5_format_francais1;?></td>
                            <td><?php echo $nombreCP5_format_francais2;?></td>
                        </tr>
                        <tr>
                            <td>35 Ans</td>
                            <td><?php echo $nombreM6_format_francais;?></td>
                            <td><?php echo $nombreSM6_format_francais1;?></td>
                            <td><?php echo $nombreCP6_format_francais2;?></td>
                        </tr>


                        </tbody>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>
    </form>
</body>
</html>