var lights_server_ip = "192.168.246.217";
var lights_server_port = 5000;

function signalEtRedirection(direction){
    //D�claration de la requete ajax
    xhr = new XMLHttpRequest();

    //Envoi du hit
    xhr.open('GET', 'http://' + lights_server_ip + ':' + lights_server_port + '/light/0/'+direction ,
             true);

    //Envoi de la requ�te � la page de traitement
    xhr.send(null);
}
