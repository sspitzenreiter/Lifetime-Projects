<HTML>
<HEAD>
<TITLE>Contoh Operator Logika</TITLE>
</HEAD>
<BODY>

  <?php
    $kar = 'a';

    printf("$kar adalah huruf kapital : %d<BR>\n",
           $kar >= 'A' and $kar <= 'Z');

    printf("$kar adalah huruf kecil : %d<BR>\n",
           $kar >= 'a' and $kar <= 'z');

    printf("$kar adalah angka : %d<BR>\n",
           $kar >= '0' and $kar <= '9');

  ?>

</BODY>
</HTML>
