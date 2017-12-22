class Manusia{
	String nama;
	String jenkel;
	
	void setNilai(String param1){
	nama = param1;
	}
	void setNilai(String param1,String param2){
	nama = param1;
	jenkel = param2;
	}
	void cetak(){
	System.out.println(nama+" adalah "+jenkel);
	}
}
class DemoManusia{
	public static void main(String args[]){
	Manusia m1,m2;
	m1 = new Manusia();
	m2 = new Manusia();
	
	m1.setNilai("Aghni","manusia");
	m2.setNilai("Aghni","perempuan");
	
	m1.cetak();
	m2.cetak();
	}
}