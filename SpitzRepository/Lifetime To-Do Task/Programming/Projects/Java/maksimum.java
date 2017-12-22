import java.io.*;
public class maksimum{
	public static void main (String args[]){
	InputStreamReader ist = new InputStreamReader(System.in);
		BufferedReader buf = new BufferedReader(ist);
		int A,B,C,maks;
		try{
		System.out.print("Masukan angka 1:");
		String strA=buf.readLine();
		A=Integer.parseInt(strA);
		System.out.print("Masukan angka 2:");
		String strB=buf.readLine();
		B=Integer.parseInt(strB);
		System.out.print("Masukan angka 3:");
		String strC=buf.readLine();
		C=Integer.parseInt(strC);
		
			if(A>B && A>C)
			{
			System.out.println("Bilangan terbesar "+A);
			}
			else if(B>A && B>C)
			{
			System.out.println("Bilangan terbesar "+B);
			}
			else
			{
			System.out.println("Bilangan terbesar "+C);
			}
		}
		catch (IOException err){
			System.out.println("Jhahahaha coba lagi");
		}
	}
}