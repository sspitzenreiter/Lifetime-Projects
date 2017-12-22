class overloading{
 public void segitiga(){
  int alas=5, tinggi=10;
  System.out.println("Luas segitiga satu = "+(alas*tinggi)/2);
 }
 //Metod segitiga di overloading dengan 2 parameter (int x, int y)
 public void segitiga2(int x, int y){
  System.out.println("Luas segitiga dua = "+(x*y)/2);
 }
 public static void main(String [] args){
  System.out.println("I Gede John Arissaputra");
  System.out.println("1404505066");
  System.out.println("Contoh Overloading");
  System.out.println("");
  overloading s3;
  s3 = new overloading();
  s3.segitiga();//memanggil metod segitiga
  s3.segitiga2(20,8);//memanggil metod segitiga2
 }
}