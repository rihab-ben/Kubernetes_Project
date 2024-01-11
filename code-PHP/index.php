<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            background-color: #e8f4f8;
        }

        h1 {
            color: #305f72;
        }

        #fetchDataButton {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 12px 24px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.2);
        }

        #fetchDataButton:hover {
            background-color: #367c39;
        }

        #resultDiv {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 80%;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #0074D9;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #e5e5e5;
        }

        .congratulations {
            margin-top: 20px;
            font-size: 18px;
            color: #305f72;
        }
    </style>
</head>
<body>
    <h1>Résultats du Concours M2SSI</h1>
    <button id="fetchDataButton">Afficher les Résultats</button>
    <div id="resultDiv"></div>

    <div class="congratulations">
        Félicitations aux gagnants ! Veuillez compléter votre processus d'admission et Merci.
    </div>

    <script>
        document.getElementById("fetchDataButton").addEventListener("click", function(event) {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "fetcha_data.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("resultDiv").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        });  
    </script>
</body>
</html>
