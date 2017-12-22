<HTML>
<HEAD>
<TITLE>Contoh Operasi dalam Level Bit --</TITLE>
</HEAD>
<BODY>

  <?php
    $bil1 = 10;
    $bil2 = 12;
    printf("%d & %d = %d <BR>\n",
       $bil1, $bil2, $bil1 & $bil2);
    printf("%d | %d = %d <BR>\n",
       $bil1, $bil2, $bil1 | $bil2);
    printf("%d ^ %d = %d <BR>\n",
       $bil1, $bil2, $bil1 ^ $bil2);

    printf("~%d = %d <BR>\n",
       $bil1, ~$bil1);

    printf("%d >> 1 = %d <BR>\n",
       $bil1, $bil1 >> 1 );

    printf("%d >> 2 = %d <BR>\n",
       $bil1, $bil1 >> 2 );

    printf("%d << 1 = %d <BR>\n",
       $bil1, $bil1 << 1 );

    printf("%d << 2 = %d <BR>\n",
       $bil1, $bil1 << 2 );


  ?>

</BODY>
</HTML>
