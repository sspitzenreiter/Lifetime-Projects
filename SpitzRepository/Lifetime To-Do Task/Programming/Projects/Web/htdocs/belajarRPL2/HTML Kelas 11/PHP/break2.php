<HTML>
<HEAD>
<TITLE>Efek Pernyataan break 2</TITLE>
</HEAD>
<BODY>

  <?php
    for ($i = 1; $i <= 25; $i++)
    {
      switch ($i)
      {
         case 5:
           print("5 - break 1 <BR>\n");
           break 1;
         case 7:
           print("7 - break 2 <BR>\n");
           break 2;
         default:
           print("$i <BR>\n");
           break;
      }
    }

    print("Selesai <BR>\n");
  ?>

</BODY>
</HTML>
