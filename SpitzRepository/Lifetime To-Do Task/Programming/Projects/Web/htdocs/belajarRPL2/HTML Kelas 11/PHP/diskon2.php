<HTML>
<HEAD>
<TITLE>Contoh Penentuan Diskon</TITLE>
</HEAD>
<BODY>

  <FORM>
    Besar Pembelian: 
    <INPUT TYPE=TEXT NAME=total_beli><BR><BR>
    <INPUT TYPE=SUBMIT VALUE="Tentukan Diskon">
  </FORM>

  <?php
  if (isset($total_beli))
  {
    $total_beli = intval($total_beli);
    $diskon = 0;
    if ($total_beli >= 100000)
       $diskon = intval(0.1 * $total_beli);

    printf("Diskon     = %d <BR>\n", $diskon);
    printf("Pembayaran = %d <BR>\n",
      $total_beli - $diskon);
  }

  ?>
