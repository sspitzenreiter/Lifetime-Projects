public class kapasitas
{
	public static void main(String args[])
	{
	StringBuffer c = new StringBuffer("");
	
	System.out.println("Isi c adalah : "+c);
	System.out.println("Kapasitas StringBuffer c : "+c.capacity());
	System.out.println("Setelah dikenai append(\"Halo\"), c menjadi :");
	System.out.println(c.append("Halo"));
	System.out.println("Kapasitas StringBuffer c : "+c.capacity());
	System.out.println("Panjang c adalah : "+c.length());
	System.out.println("c ditambah dg \", minggu depan libur\"");
	System.out.println("Isi c adalah : "+c.append(", minggu depan libur"));
	System.out.println("Kapasitas StringBuffer c : "+c.capacity());
	System.out.println("Panjang c adalah : "+c.length());
	System.out.println("c ditambah dg \". Bener lo.\"");
	System.out.println("Isi c adalah : "+c.append(". Bener lo."));
	System.out.println("Kapasitas StringBuffer c : "+c.capacity());
	System.out.println("Panjang c adalah : "+c.length());
	}
}
	