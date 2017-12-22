public class Mobil{
	public void injakPedalGas();
	public void injakRem(){
		System.out.println("Mobil berhenti!");
	}
}
public class Kijang extends Mobil{
	public void injakPedalGas(){
	 System.out.println("Mobil Melaju dengan kecepatan 80Km/jam...");
}}
public class BMW extends Mobil{
	public void injakPedalGas(){
		System.out.println("Mobil melaju dengan kecepatan 100 km/h...");
}}

public class TestMobil{
	public static void main(String[] args){
		Mobil mobil = new Mobil(){
			public void injakPedalGas(){
				System.out.println("Mobil Berjalan...");
}
};

Kijang kijang = new Kijang();
BMW bmw = new BMW();

mobil.injakPedalGas();

mobil = kijang;
mobil.injakPedalGas();

mobil = bmw;
mobil.injakPedalGas();
}}