public class karakter2
{
	public static void main(String args[])
	{
		String str = "Bahasa";
		String output = "Ada di posisi ";
		int panjangStr = str.length();
		Character kar = ' ';
		int jumlah_a = 0;
		
		for(int i=0; i<panjangStr; i++)
		{	kar =Character.valueOf(str.charAt(i));
			if (kar=='a')
			{
				jumlah_a = jumlah_a+1;
				output=output+i+" ";
			}
		}
		System.out.println("Kalimat yg akan dicek adalah : "+str);
		System.out.println("Jumlah huruf a : "+jumlah_a);
		System.out.println(output);
	}
}