public class Percobaan2 {
	public static void main(String[] args){
		int a[] = new int[5];
		try{
			a[5] = 100;
		}catch(ArrayIndexOutOfBondsException e){
			System.out.println("Index Array Kelebihan");
		}
	}
}