 abstract class Kendaraan{
   abstract void jalan();
	public void coba(){}
 }

class Motor extends Kendaraan{
void jalan(){System.out.println("Dah Jalan Gaan SIst");}

 public static void main(String args[]){
  Kendaraan a1 = new Motor();
  a1.jalan();
 }
 }
