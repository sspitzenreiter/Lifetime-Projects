 abstract class Kendaraan{
   abstract void run();
 }

 class Motor extends Kendaraan{
 void run(){System.out.println("Dah Jalan Gaan SIst");}

 public static void main(String args[]){
  Kendaraan obj1 = new Motor();
  obj1.run();
 }
 }