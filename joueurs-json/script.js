let urlAPI = "json/players.json";

fetch(urlAPI)
    .then(response => {

        console.log(response);

        return response.json();
    })

    .then(function (data) {
        console.log(data);

        let myDataPlayers = document.getElementById("myData");
        myDataPlayers.innerHTML = "<p>Name : " + data.Name + "</p>" +

            "<p>Xp : " + data.Xp + "</p>" +
            "<p>Avatar :" + "<img src=" + data.Image + ">" + "</p>";
    })

    .catch(error => {
        console.log(error);
        myDataPlayers.innerHTML = "<p>'ERREUR" + error.statusText + "</p>"
    });
