var partij = ["CDA", "VVD", "PVDA", "D66"];
var stemmenpartij = [];

var i = 0;
var o = 0;

for (a = 0; a < partij.length; a++) {
    var btn = document.createElement("BUTTON");
    document.getElementById("stemgedeelte").appendChild(btn);
    btn.innerHTML = partij[i];
    i++
}

var btnstemmen = document.createElement("BUTTON");
document.getElementById("stemgedeelte").appendChild(btnstemmen);
btnstemmen.classList.add("stembutton");
btnstemmen.innerHTML = "Stemmen tellen";
btnstemmen.onclick = stemmen;

function stemmen() {
    var removed = document.getElementById("stemgedeelte");
    removed.removeChild(btn);

    var h1 = document.createElement("H1");
    var texth1 = document.createTextNode("Uitslag van het aantal stemmen:");
    document.getElementById("stemgedeelte").appendChild(h1);
    h1.appendChild(texth1);

    for (a = 0; a < partij.length; a++) {
        var p = document.createElement("p");
        var text = document.createTextNode("U heeft op " + partij[o] + " gestemd.");
        document.getElementById("stemgedeelte").appendChild(p);
        p.appendChild(text);
        o++
    }

    var h1 = document.createElement("H1");
    var texth1 = document.createTextNode("Partij met de meeste stemmen:");
    document.getElementById("stemgedeelte").appendChild(h1);
    h1.appendChild(texth1);
}