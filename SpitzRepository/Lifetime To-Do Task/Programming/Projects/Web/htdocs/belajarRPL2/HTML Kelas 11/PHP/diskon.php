<HTML>
<HEAD>
<TITLE>Contoh Penentuan Diskon</TITLE>
</HEAD>
<BODY>

  <?php
  $total_beli = 200000;
  $keterangan = "Tak dapat diskon";

  if ($total_beli >= 100000)
     $keterangan = "Dapat diskon";

  print("$keterangan <BR\n");
  ?>

</BODY>
</HTML>
