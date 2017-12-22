<HTML>
<HEAD>
<TITLE>Contoh untuk Memperlihatkan Efek break</TITLE>
</HEAD>
<BODY>

  <?php
    for($i = 1; $i <= 25; $i++)
    {
      print("$i <BR>\n");

      if ($i == 10)
        break;
    }

    print("Selesai <BR>\n");
  ?>

</BODY>
</HTML>
