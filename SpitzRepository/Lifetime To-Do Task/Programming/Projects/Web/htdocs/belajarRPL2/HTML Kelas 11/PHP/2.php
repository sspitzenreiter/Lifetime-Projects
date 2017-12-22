<HTML>
<HEAD>
<TITLE>Contoh Konversi dengan cast</TITLE>
</HEAD>
<BODY>

  <?php
    $suhu = "28.3 derajat Celcius";
    print("Tipe String  : $suhu <BR>\n");
    printf("Tipe Double  : %s <BR>\n", (double) $suhu);
    printf("Tipe Integer : %s <BR>\n", (int) ($suhu));
    printf("Tipe string  : %s <BR>\n", $suhu);

    $bilangan = 28;
    $suhu     = (string) $bilangan;  // konversi ke string
    printf("Bil.ke string :  %s <BR>\n", $suhu);
  ?>

</BODY>
</HTML>
