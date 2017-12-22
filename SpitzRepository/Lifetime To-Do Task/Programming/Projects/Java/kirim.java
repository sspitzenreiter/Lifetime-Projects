class barang {
	public static int barang_k(int harga, int berat){
	int total=harga*berat;
	return total;
	}
}
class kirim extends barang{
	public static int uang_ongkir(int harga,int berat,int waktu){
	barang ongkos=new barang();
	int bayar=ongkos.barang_k(harga,berat)*waktu;
	return bayar;
	}
	public static void main(String args[]){
	int uang_ongkir=uang_ongkir(5000,25,30);
	System.out.println ("Ongkos Kirim Paket Anda = Rp."+uang_ongkir);
	}
}