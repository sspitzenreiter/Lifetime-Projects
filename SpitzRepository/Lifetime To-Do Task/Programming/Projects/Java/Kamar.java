class Kost {
	
	int sewa;
Kost(int a)
{sewa=a;}
}


class Kamar {
	
static int lantai1  = 400000;
static int lantai2 = 450000;
public static void main (String args[]){
Kost a = new Kost(200000);
System.out.println("Sewanya :" + a.sewa);
System.out.println("Mau Di Lantai 1 harus bayar :" + lantai1);
System.out.println("Mau Di Lantai 2 harus bayar :" + lantai2);
}
}