import static java.lang.System.out;
import java.util.Scanner;

public class array{
 public static void main (String args []){
  Scanner inputan = new Scanner(System.in);
  
  out.print("Pilih angka dari angka 0-3 = ");
  out.print(" ");
  int i = inputan.nextInt();
  int array[] = {58,20,31,55};
  System.out.println("Kamu memilih Angka Array Ke - "+i+" Dengan isi Arraynya = " +array[i]);
 }
}