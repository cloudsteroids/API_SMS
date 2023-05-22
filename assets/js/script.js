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
