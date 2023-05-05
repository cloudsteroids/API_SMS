            // Récupération du nombre de lignes et de pages
        var rowsPerPage = 7; // Nombre de lignes par page
        var table = document.getElementById('customers');
        var rowCount = table.rows.length - 1; // Soustraction de la ligne d'en-tête
        var pageCount = Math.ceil(rowCount / rowsPerPage); // Calcul du nombre de pages

        // Initialisation de la pagination
        var currentPage = 1;

        // Fonction pour afficher les lignes correspondantes à la page actuelle
        function showRowsForPage(page) {
        // Calcul des index de début et de fin pour la page donnée
        var startIndex = (page - 1) * rowsPerPage + 1;
        var endIndex = Math.min(startIndex + rowsPerPage - 1, rowCount);

        // Parcours des lignes du tableau
        for (var i = 1; i <= rowCount; i++) {
            var row = table.rows[i];

            // Affichage ou masquage des lignes en fonction de leur index
            if (i >= startIndex && i <= endIndex) {
            row.style.display = '';
            } else {
            row.style.display = 'none';
            }
        }
        }

        // Fonction pour passer à la page suivante
        function nextPage() {
        if (currentPage < pageCount) {
            currentPage++;
            showRowsForPage(currentPage);
        }
        }

        // Fonction pour passer à la page précédente
        function prevPage() {
        if (currentPage > 1) {
            currentPage--;
            showRowsForPage(currentPage);
        }
        }

        // Gestion des événements des boutons de pagination
        document.getElementById('next').addEventListener('click', nextPage);
        document.getElementById('prev').addEventListener('click', prevPage);

        // Affichage de la première page
        showRowsForPage(currentPage);

