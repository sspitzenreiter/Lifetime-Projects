public class Replace1
{
	public static void main (String args[])
	{
		String a = "ada apa ya ?";
		
		System.out.println("Kalimat awal adalah : "+a);

		System.out.println("Setelah huruf a diganti huruf o");

		System.out.println("-----------------------------");

		System.out.println(a.replace("a","i").replace("d","p"));
	}
}