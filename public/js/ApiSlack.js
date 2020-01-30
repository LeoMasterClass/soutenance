

function submit(){
    let firstNameSlack = document.getElementById("InputNom1").value;
    let nameSlack = document.getElementById("InputPrenom1").value;
    let mailSlack = document.getElementById("InputEmail2").value;
    let objectSlack = document.getElementById("InputObjet1").value;
    let messageSlack = document.getElementById("InputMessage1").value;
$.ajax({
    url: 'https://slack.com/api/chat.postMessage',
    type: 'POST',
    data: {
        'channel': '#mercedesbenz',
        'text':"|-|-|-|-|-|-Début de transmission-|-|-|-|-|-|" + '\n' + "\n" + '\n'  + "Nom : "+ firstNameSlack + '\n' + '\n'  + "Prénom : " + nameSlack + '\n'  + '\n'  + "Mail : " + mailSlack + '\n'
        + '\n'  + "Objet : " + objectSlack + '\n'  + '\n'  + "Message : " + messageSlack + '\n' + '\n'  + '|-|-|-|-|-|-Transmission terminée...-|-|-|-|-|-|',
        'token': creds.token
    },
    dataType: 'json'
}).done(function (response) {

    console.log(response)
}).fail(function (error) {

    console.log(error)
})
}