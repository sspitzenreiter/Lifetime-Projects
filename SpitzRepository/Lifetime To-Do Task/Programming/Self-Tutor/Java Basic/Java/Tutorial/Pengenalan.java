/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


package Tutorial; //Nama Folder




public class Pengenalan {   //Nama Class (Harus memiliki nama yang sama jika class tersebut adalah class utama)
    
   public Pengenalan(){ //Constructor (Nama harus sama dengan Class)
       System.out.println("\nConstructor : ");
       System.out.println("Dibutuhkan untuk pemanggilan saat diimport oleh Class lain atau Class sendiri");
       methode();
       int men = menthos();
       System.out.println("Nilai yang didapat dari method menthos : "+men);
   }
      
   
   public void methode(){ //Method
       System.out.println("methode() method void");
       System.out.println("\nMethod dengan tipe void tidak memerlukan statement return (Nilai yang Dikembalikan)");
       System.out.println("Method dipanggil dari dalam Constructor");
   }
   
   public int menthos(){
       System.out.println("\nmenthos() method int(Integer)");
       System.out.println("\nMethod dengan tipe selain void memerlukan statement return (Nilai yang Dikembalikan)");
       System.out.println("Method ini akan mengembalikan nilai 10");
       return 10;
   }
   
   public static void main(String[] args){ //Pemanggilan method utama (Untuk membuat class ini menjadi class utama)
    
    System.out.print("Print tanpa Enter\n"); //Output message tanpa Enter
    System.out.println("Print Pake Enter"); //Output message dengan Enter di akhir pesan   
    new Pengenalan(); //Pemanggilan constructor dari Class Pengenalan    
    System.out.println("\nBeberapa Statement C++ berfungsi di Java");
    System.out.println("Contoh : If Else, Switch, For, While");
   }
}
