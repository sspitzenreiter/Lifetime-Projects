public class balok{
	public void balok1(){
	int a=5, b=10, c=1;
	System.out.println("Hasil Balok dari Balok1 yang ke-1 = "+(a*b*c));
}
public void balok1(int x, int y, int z){
	System.out.println("Hasil Balok dari Balok1 yang ke-2 = "+(x*y*z));
}
public static void main(String args[]){
	balok abc;
	abc = new balok();
	abc.balok1();
	abc.balok1(1,2,3);
	}
}