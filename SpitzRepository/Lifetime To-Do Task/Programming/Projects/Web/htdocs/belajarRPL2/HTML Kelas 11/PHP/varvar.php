<HTML>
<HEAD>
<TITLE>Contoh Variabel Variabel</TITLE>
</HEAD>
<BODY>

  <?php
    $kota = "yogya";

    ${$kota} = 120000;

    print("\$kota   = $kota <BR>\n");
    print("\${\$kota} = ${$kota} <BR>\n");
    print("\$yogya  = $yogya <BR>\n");

    $yogya = 100000;
    print("\${\$kota} = ${$kota} <BR>\n");
    print("\$yogya  = $yogya <BR>\n");

  ?>

</BODY>
</HTML>
