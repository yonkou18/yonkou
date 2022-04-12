const mainPage = document.querySelector(".strona");
const nasPage = document.querySelector(".nas");
const kontaktPage = document.querySelector(".kontakt")

function loadXMLdoc(url) {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onload = function() {
        if (xmlhttp.status == 200) {
            document.querySelector("").innerHTML = xmlhttp.responseText;
        }
        else if (xmlhttp.status == 400) {
            alert('There was an error 400');
        }
        else {
        alert('something else other than 200 was returned');
        }
};

 xmlhttp.open("GET", url);
 xmlhttp.send();
}

mainPage.addEventListener('click', function(){
    loadXMLdoc("stronaglowna.html")
})

nasPage.addEventListener('click', function(){
    loadXMLdoc("nas.html")
})

kontaktPage.addEventListener('click', function(){
    loadXMLdoc("kontakt.html")
})


