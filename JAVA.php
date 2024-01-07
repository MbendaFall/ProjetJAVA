<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Exercice JAVA</title>
    
    <script>
        function calculer() {
            var nombre1 = parseFloat(document.getElementById('nombre1').value);
            var nombre2 = parseFloat(document.getElementById('nombre2').value);
    // Controle de saisie
            if (isNaN(nombre1) || isNaN(nombre2)) {
                alert('Veuillez entrer des nombres (pas de lettres, ni de caracteres speciaux) !.');
                return;
            }
            if (nombre2 == 0) {
                alert("  le 2e nombre doit etre different de 0 !");
                return;
            }
    // Calcul
            var SOMME = nombre1 + nombre2;
            var PRODUIT = nombre1 * nombre2;
            var QUOTIENT = nombre1 / nombre2;
            var DIFFERENCE = nombre1 - nombre2;
// Affichage du tableau grace à la concatenation des variables et des chaines de caracteres 
            var tableauResultat = '<table border="1">';
            tableauResultat += '<tr><th>Operation</th><th>Resultat</th></tr>';
            tableauResultat += '<tr><td>Somme</td><td>' + SOMME + '</td></tr>';
            tableauResultat += '<tr><td>Multiplication</td><td>' + PRODUIT + '</td></tr>';
            tableauResultat += '<tr><td>Division</td><td>' + QUOTIENT + '</td></tr>';
            tableauResultat += '<tr><td>Soustraction</td><td>' + DIFFERENCE + '</td></tr>';
            tableauResultat += '</table>';

            document.getElementById('resultat').innerHTML = tableauResultat;
        }
    </script>
</head>
<body>
    <h1>Calculatrice JS</h1>
    <form>
        <label for="nombre1">Nombre 1 :</label>
        <input type="text" id="nombre1" required pattern="\d+(\.\d+)?" title="Entrez un nombre">
        <br>
        <br>
        <label for="nombre2">Nombre 2 :</label>
        <input type="text" id="nombre2" required pattern="\d+(\.\d+)?" title="Entrez un nombre autre que 0">
        <br>
        <br>
        <button type="button" onclick="calculer()">Calculer</button>
    </form>

    <div id="resultat"></div>
</body>
</html>