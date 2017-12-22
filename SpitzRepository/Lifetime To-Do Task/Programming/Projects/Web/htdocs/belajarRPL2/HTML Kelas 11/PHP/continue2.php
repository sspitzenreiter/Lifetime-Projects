<HTML>
<HEAD>
<TITLE>Efek Pernyataan continue</TITLE>
</HEAD>
<BODY>

  <?php
    for ($i = 1; $i <= 5; $i++)
    {
      print("Proses for. Iterasi ke-$i <BR>\n");

      for ($j = 1; $j <= 5; $j++)
      {
        if ($j == 3)
          continue 2;

        print($j);
      }

      print("<BR>\n");

    }

  ?>

</BODY>
</HTML>
