<HTML>
<HEAD>
<TITLE>Contoh Pemakaian Operator Penugasan --</TITLE>
</HEAD>
<BODY>
  <?php
    $bil = 100;
    print("Isi variabel bil = $bil <BR>\n");

    $bil += 2;
    print("Isi variabel bil = $bil <BR>\n");
    
    $bil -= 2;
    print("Isi variabel bil = $bil <BR>\n");

    $bil /= 2;
    print("Isi variabel bil = $bil <BR>\n");

    $bil %= 30;
    print("Isi variabel bil = $bil <BR>\n");

    $bil &= 2;
    print("Isi variabel bil = $bil <BR>\n");

    $bil |= 10;
    print("Isi variabel bil = $bil <BR>\n");

    $bil ^= 8;
    print("Isi variabel bil = $bil <BR>\n");

    $bil = "Seratus";
    $bil .= " Dua";
    print("Isi variabel bil = $bil <BR>\n");
  ?>
</BODY>
</HTML>
