class Bilangan_prima{
public static int bilangan(int a){
int Prima=a%2==1;
return Prima;
}
}

class Bukan_Bilangan_prima extends Bilangan_prima{
public static int angka(int a, int b){
	Bilangan_prima Prima=new Bilangan_prima();
	int BPrima=(a,b)/2;
	return BPrima;
}
public static void main(String args[]){
int angka=angka(3,6);
System.out.println("");
}
}