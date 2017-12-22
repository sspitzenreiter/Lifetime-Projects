public class Percobaan5 {
	public static void main(String[] args){
		int bil=10;
		String b[] = {"a","b","c"};
			try{
				System.out.println(b[10]);
			}catch(ArrayIndexOutOfBoundsException e){
				System.out.println("Error Kapasitas Array");
			}catch(Exception e){
				System.out.println("Terdapat Error");
			}
		}
	}