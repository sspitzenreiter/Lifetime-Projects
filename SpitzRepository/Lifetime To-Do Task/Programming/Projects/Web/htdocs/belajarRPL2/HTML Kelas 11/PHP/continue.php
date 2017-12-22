<HTML>
<HEAD>
<TITLE>Contoh untuk Memperlihatkan Efek continue</TITLE>
</HEAD>
<BODY>

  <?php
    for($i = 1; $i <= 25; $i++)
    {
      if ($i >= 10 and $i <= 15)
        continue;

      print("$i <BR>\n");
      
      $i++;
    } 
  ?>

</BODY>
</HTML>
