<HTML>
<HEAD>
<TITLE>Contoh untuk Memperlihatkan Efek exit</TITLE>
</HEAD>
<BODY>

  <?php
    for($i = 1; $i <= 25; $i++)
    {
      print("$i <BR>\n");

      if ($i == 10)
        exit;
    }

    print("Selesai <BR>\n");
  ?>

</BODY>
</HTML>
