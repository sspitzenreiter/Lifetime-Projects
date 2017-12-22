function sudut() {

var a,b,c,d,pl;
pl = "";

a = document.getElementById("p1").value;
b = document.getElementById("p2").value;
c = document.getElementById("p3").value;
d = parseInt(a) + parseInt(b) + parseInt(c);

document.getElementById("ph").value=d;
if (a === b && b === c && d === 180){document.getElementById("pl").value="SEGITIGA SAMA SISI";
} else if (a === b || b === c || c === a && d === 180) {document.getElementById("pl").value="SEGITIGA SAMA KAKI";
}else if (a !== b && b !== c && d ===180) {document.getElementById("pl").value="SEGITIGA SEMBARANG";
}else {document.getElementById("pl").value="BUKAN SEGITIGA";}

}