import java.util.Scanner;

public class namaClass{

	public namaClass(){
		namaMethod(30, 2);
	}

	void namaMethod(int tanggal, int bulan){
                System.out.println(tanggal+bulan);
	}

	public static void main(String[] args){
		new namaClass();
		
	}
}