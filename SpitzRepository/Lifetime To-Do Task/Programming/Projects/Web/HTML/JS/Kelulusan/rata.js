function rata() {

var a,b,c,d,e,pl;

pl = "";

a = document.getElementById("p1").value;
b = document.getElementById("p2").value;
c = document.getElementById("p3").value;
d = parseInt(a) + parseInt(b) + parseInt(c);
e = parseInt(d) / 3;

document.getElementById("ph").value=e;
if (e >= 70 && e <= 100){document.getElementById("pl").value="Lulus";
} else if (e < 70 && e>=0) {document.getElementById("pl").value="Tidak Lulus";
}

}