<HTML>
<HEAD>
<TITLE>Contoh Konversi dengan Settype</TITLE>
</HEAD>
<BODY>

  <?php
    $suhu = "28.3 derajat Celcius";
    print("Tipe String  : $suhu <BR>\n");

    settype($suhu, "double");
    print("Tipe Double  : $suhu <BR>\n");

    settype($suhu, "integer");
    print("Tipe Integer : $suhu <BR>\n");

    settype($suhu, "string");
    print("Tipe string  : $suhu <BR>\n");
  ?>

</BODY>
</HTML>
