function search() {
    document.getElementById('adressList').innerHTML = '';
    let adress = document.getElementById("InputAdress").value;

    fetch("https://api-adresse.data.gouv.fr/search/?q=" + adress).then(function (response) {
            return response.json();

        })
        .then(function (json) {
            console.log(json);

            json.features.forEach(function (feature) {
                let li = document.createElement('li');
                li.innerText = feature.properties.label;
                document.getElementById('adressList').appendChild(li);

                li.addEventListener('click', function () {
                    let search = document.getElementById("InputAdress");
                    search.value = li.textContent;
                    adressList.innerHTML = "";

                });
            })
        });
}
