import java.util.Scanner;

class laba
{
public void harga()
{
System.out.println("----- MENGHITUNG LABA -----");
System.out.println();
}
public void harga(int jual,int beli)
{
System.out.println("Harga Beli Barang = "+beli);
System.out.println("Harga Jual Barang = "+jual);
}
public int harga1(int jual,int beli)
{
return jual-beli;
}
}

public class  Main
{
public static Scanner input = new Scanner(System.in);
public static void main(String[] args)
{
laba dia = new laba();
int jual;
int beli = 0;
int jumlah;

dia.harga();
System.out.print("Harga Jual Barang = Rp. ");
jual = input.nextInt();

System.out.print("Harga Beli Barang = Rp. ");
beli = input.nextInt();

jumlah = dia.harga1(jual,beli);

System.out.println("Jadi anda mendapatkan Laba sebesar : Rp. "+jumlah);
System.out.println();
}
}
