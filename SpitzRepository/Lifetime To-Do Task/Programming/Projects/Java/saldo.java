class bunga {
public static int bunga_p(int saldo, int bunga){
int jum=saldo*bunga/100+saldo;
return jum;
}
}
class saldo extends bunga{
public static int uang_anda(int saldo,int bunga,int waktu){
	bunga bayar=new bunga();
	int uang=bayar.bunga_p(saldo,bunga)*waktu;
	return uang;
}
public static void main(String args[]){
int uang_anda=uang_anda(5000,10,12);
System.out.println ("saldo sebesar = "+uang_anda);
}
}