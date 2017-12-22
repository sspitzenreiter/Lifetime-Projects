import java.io.*;
public class upah{
	public static void main (String args[]){
	InputStreamReader ust = new InputStreamReader(System.in);
		BufferedReader buf = new BufferedReader(ust);
		int nama,gol,jk,total,ul=3000,jn=48;
		try{
		System.out.print("Masukan nama:");
		String strnama=buf.readLine();
		System.out.print("Masukan Jam Kerja:");
		String strjk=buf.readLine();
		jk=Integer.parseInt(strjk);
		System.out.print("Masukan Golongan:");
		String strgol=buf.readLine();
		gol=Integer.parseInt(strgol);
		
		if (jk>jn){
		System.out.println(jk-jn*ul);
		}
		else{
		System.out.println("tidak dapat Upah lembur"); 	
		}
		
	switch (gol)
    {
      case 1 :
	  System.out.println("Total Upah = "+4000*jk);
	  break;    
	  case 2 :
	  System.out.println("Total Upah = "+5000*jk);
	  break; 
	  case 3 :
	  System.out.println("Total Upah = "+6000*jk);
	  break; 
	  case 4 :
	  System.out.println("Total Upah = "+7500*jk);
	  break;
	}
		
	System.out.println(strnama);
}
		catch (IOException err){
		System.out.println("Jhahahaha coba lagi");
		}		
	}
}