public class Senjata implements OpsiSenjata {
int pelor = 0;
 String[] senjata= {"M532", "Magnum", "M16", "AK47", "Kriss", "Panzerfaust"};
   Senjata(int pelor){
   this.pelor = pelor;
  }
   public void tukarSenjata(int kodesenjata) {
   System.out.println("Senjata tukar ke ke : " + this.senjata[kodesenjata]);
   } 
 public void tembakSenjata() {
   if (pelor != 0) {
     System.out.println("Dor dor dor!");
     this.pelor = pelor -1;
   } else {
     System.out.println("Sisa Pelor Habis");
   } 
 }
 public void reloadSenjata() {
 System.out.println("Senjata di reload");
 this.pelor = pelor + 7;
 }
 
}
