class Kotak {
double panjang;

Kotak(double p){
panjang = p;
}
double hitungVolume(){
return(panjang);
}
}
class DemoConstructor2{
	public static void main(String[] args){
	Kotak k1;
	k1 = new Kotak(4);
	
	System.out.println(k1.hitungVolume());
	}
}