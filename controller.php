<?php
    if(isset($_REQUEST["action"])) {
        switch ($_REQUEST["action"]) {

            case "navb":
                require("vues/vue_navbar.php");
                break;

            case "groupe":
                require("secure/secure.php");
                require("model/model_groupe.php"); 
                require("vues/vue_groupe.php");
                break;

            case "rencontre":
                require("secure/secure.php");
                require("model/model_rencontre.php");
                require("vues/vue_rencontre.php");
                break;

            case "musique":
                require("secure/secure.php");
                require("model/model_musique.php");
                require("vues/vue_musique.php");
                break;

            case "ren_details":
                $ren_id=$_REQUEST["id"];
                require("model/model_ren_details.php");
                require("vues/vue_modal_ren_details.php");
                break;

            case "ren_modif":
                $ren_id = $_REQUEST["id"];
                require("model/model_ren_modif.php");
                require("vues/vue_modal_ren_modif.php");
                break;

            case "ren_valider_modif":
                $ren_id = $_REQUEST["id"];
                $ren_nom = $_REQUEST["nom"];
                $ren_lieu = $_REQUEST["lieu"];
                $ren_date_debut = $_REQUEST["debut"];
                $ren_date_fin = $_REQUEST["fin"];
                $ren_periodicite = $_REQUEST["period"];
                $ren_nombre_personne = $_REQUEST["nombre"];
                require("model/model_ren_modif_valider.php");
                break;

            case "ren_supprime":
                $ren_id = $_REQUEST["id"];
                require("model/model_ren_supprime.php");
                if ( $compteur == 0 ) {
                    require("vues/vue_modal_ren_supprime.php");
                }
                break;

            case "ren_valider_supprime":
                $ren_id = $_REQUEST["id"];
                require("model/model_ren_supprime_valider.php");
                break;

            case "ren_ajout":
                require("vues/vue_modal_ren_ajout.php");
                break;

            case "ren_valider_ajout":
                $ren_nom = $_REQUEST["nom"];
                $ren_lieu = $_REQUEST["lieu"];
                $ren_date_debut = $_REQUEST["debut"];
                $ren_date_fin = $_REQUEST["fin"];
                $ren_periodicite = $_REQUEST["period"];
                $ren_nombre_personne = $_REQUEST["nombre"];
                require("model/model_ren_ajout_valider.php");
                break;

            case "accueil":
                require("vues/vue_accueil.php");
                break;

            case "mus_details":
                $mus_id=$_REQUEST["id"];
                require("model/model_mus_details.php");
                require("vues/vue_modal_mus_details.php");
                break;

            case "mus_modif":
                $mus_id = $_REQUEST["id"];
                require("model/model_mus_modif.php");
                require("vues/vue_modal_mus_modif.php");
                break;

            case "mus_valider_modif":
                $mus_id = $_REQUEST["id"];
                $mus_titre = $_REQUEST["titre"];
                $mus_date_apparition = $_REQUEST["date"];
                $mus_auteur_nom = $_REQUEST["anom"];
                $mus_auteur_prenom = $_REQUEST["aprenom"];
                $mus_duree = $_REQUEST["duree"];
                $mus_pays = $_REQUEST["pays"];
                $mus_region = $_REQUEST["region"];
                require("model/model_mus_modif_valider.php");
                break;

            case "mus_supprime":
                $mus_id = $_REQUEST["id"];
                require("model/model_mus_supprime.php");
                if ( $compteur == 0 ) {
                    require("vues/vue_modal_mus_supprime.php");
                }
                break;

            case "mus_valider_supprime":
                $mus_id = $_REQUEST["id"];
                require("model/model_mus_supprime_valider.php");
                break;

            case "mus_ajout":
                require("vues/vue_modal_mus_ajout.php");
                break;

            case "mus_valider_ajout":
                $mus_titre = $_REQUEST["titre"];
                $mus_date_apparition = $_REQUEST["dated"];
                $mus_auteur_nom = $_REQUEST["anom"];
                $mus_auteur_prenom = $_REQUEST["aprenom"];
                $mus_duree = $_REQUEST["duree"];
                $mus_pays = $_REQUEST["pays"];
                $mus_region = $_REQUEST["region"];
                require("model/model_mus_ajout_valider.php");
                break;

            case "interrogation":
                require("model/model_musique.php");
                require("vues/vue_interrogation.php");
                break;

            case "gro_interrogation":
                $musg_id=$_REQUEST["id"];
                require("model/model_interrogation.php");
                require("vues/vue_interrogation_listgroup.php");
                break;
            
            case "login":
                require("vues/vue_login.php");
                break;

            case "delog":
                require("model/model_delog.php");
                break;

            case "valide_login":
                $identifiant=$_REQUEST["identifiant"];
                $motdepasse=$_REQUEST["motdepasse"];
                require("model/model_login.php");
                break;

            case "log_create":
                require("vues/vue_create_login.php");
                break;

            case "valide_log_create":
                $identifiant=$_REQUEST["identifiant"];
                $motdepasse=$_REQUEST["motdepasse"];
                require("model/model_create_login.php");
                break;

            case "compte_requis":
                require("vues/vue_compte_modal_requis.php");
                require("vues/vue_compte_requis.php");
                break;

            case "backgroudcr":
                require("vues/vue_compte_requis.php");
                break;
        }
    }
?>