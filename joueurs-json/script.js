let urlAPI = "json/players.json";

fetch(urlAPI)
    .then(response => response.json())
    .then(data => {
        var i;
        for( i = 0; i < data.length; i++) {
            var iDiv = document.createElement('div');
            iDiv.id = ('id'+ i);
            document.getElementById('body').appendChild(iDiv);
            document.getElementById('id'+ i).innerHTML = '<br> Pseudo: ' + data[i].pseudo + '<br> Xp:' + data[i].xp + ('<br><img src="'+data[i].urlavatar+'"/><br>');
        }
    });

