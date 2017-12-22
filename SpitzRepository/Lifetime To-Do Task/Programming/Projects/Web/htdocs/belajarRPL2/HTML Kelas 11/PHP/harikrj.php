<HTML>
<HEAD>
<TITLE>Efek peniadaan break pada switch</TITLE>
</HEAD>

  <?php
    $nama_hari = date("l");
    switch ($nama_hari)
    {
      case "Monday" :
      case "Tuesday" :
      case "Wednesday" :
      case "Thursday" :
      case "Friday" :
        print("Hari kerja");
        break;
      case "Saturday" :
      case "Sunday" :
        print("Hari libur");
    }
  ?>

</BODY>
</HTML>
