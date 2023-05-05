<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/home_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js"/>
    <title>envoyer SMS</title>
    <style>
        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      
        }
        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #2d76b2;
        color: white;
        height: 20px;
        }
        .box {
            display: flex;
            flex-direction: column;
            margin: 30px;
            margin-left: 10%;
        }
        .text_center {
            text-align: center;
        }
        
        .button {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        }

        .button:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
        }

        .button:hover  {
        padding-right: 25px;
        }

        .button:hover {
        opacity: 1;
        right: 0;
        }
        .btn {
            font-size: 18px;
            background-color: #2d76b2;
            color: white;
            height: 25px;
            width: 15%;
            border: 0;
            border-radius: 4px;
            padding: 5px;
        }
        .btn-green {
            font-size: 16px;
            background-color: green;
            color: white;
            height: 25px;
            border: 0;
            border-radius: 4px;
            padding: 2px;
            width: 100%;
        }
        .btn-pagination {
            font-size: 16px;
            background-color: #2d76b2;
            color: white;
            height: 25px;
            border: 0;
            border-radius: 4px;
        }
        .btn-delete {
            font-size: 16px;
            background-color: firebrick;
            color: white;
            height: 30px;
            border: 0;
            border-radius: 4px;
            width: 20%;

        }
        input[type=text] {
        width: 160px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url('searchicon.png');
        background-position: 10px 10px; 
        background-repeat: no-repeat;
        padding: 12px 40px 12px 20px;
        transition: width 0.4s ease-in-out;
        margin-left: 50%;
        margin-top: 8px;
       
        }

        input[type=text]:focus {
        width: 45%;
        }
        .padding5 {
            padding: 10px;
        }
        #pagination {
            margin-left: 70%;
            padding: 20px;
        }

        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 40%; /* Could be more or less, depending on screen size */
        }

        .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
        }
    </style>

 <script>
     function searchTable() {
        // Récupère l'élément de saisie de texte et le tableau
        var input = document.getElementById("myInput");
        var table = document.getElementById("customers");

        // Récupère les lignes du tableau
        var rows = table.getElementsByTagName("tr");

        // Boucle à travers toutes les lignes, en cachant celles qui ne correspondent pas à la requête de recherche
        for (var i = 0; i < rows.length; i++) {
            //le nombre correspond à la colonne de recherche - 0 pour date - 1 pour destinataire ...
            var name = rows[i].getElementsByTagName("td")[0];
            var destinataire = rows[i].getElementsByTagName("td")[1];
            var message = rows[i].getElementsByTagName("td")[2];
            var statut = rows[i].getElementsByTagName("td")[3];

            if (name || destinataire || message ) {
            if (name.innerHTML.toLowerCase().indexOf(input.value.toLowerCase()) > -1) {
                rows[i].style.display = "";
            } else {
                if (destinataire.innerHTML.toLowerCase().indexOf(input.value.toLowerCase()) > -1) {
                        rows[i].style.display = "";
                    } else {
                        if (message.innerHTML.toLowerCase().indexOf(input.value.toLowerCase()) > -1) {
                                rows[i].style.display = "";
                            } else {
                                        if (statut.innerHTML.toLowerCase().indexOf(input.value.toLowerCase()) > -1) {
                                        rows[i].style.display = "";
                                    } else {
                                        rows[i].style.display = "none";
                                    }
                            }
                    }
            }
            }
        }
        }

 </script>

</head>
<body>