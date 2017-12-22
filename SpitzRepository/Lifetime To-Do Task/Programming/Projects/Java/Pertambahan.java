class Pertambahan{
public void tambah1(){
	int a=5, b=10;
	System.out.println("Hasil Pertambahan dari method tambah1 ke-1="+(a+b));
	}
		//Method tambah1 di overload dengan 2 parameter (int x, int y) 
		public void tambah1 (int x, int y)
		{
			System.out.println ("Hasil Pertambahan dari method tambah1 ke-2="+(x+y));
		}
			public static void main(String [] args)
			{
				Pertambahan pp;
				pp = new Pertambahan();
				pp.tambah1();//memanggil method tambah ke-1
				pp.tambah1(5,5);//memanggil method tambah ke-2
			}
}
			