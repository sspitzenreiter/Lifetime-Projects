public class Delete1
{
	public static void main(String args[])
	{
		StringBuffer c;
		c = new StringBuffer("Belajar Programming");
		System.out.println(c);
		System.out.println("Setelah dikenai delete (0,8), menjadi :");
		System.out.println(c.delete(0,8));
	}
}