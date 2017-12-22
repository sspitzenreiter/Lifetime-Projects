class Segitiga {
        public void Segitiga (double panjang) {
            System.out.println ("\nVariabel = segitiganya sama sisi");
            System.out.println ("Panjang = " +panjang);
            
            }
		public void Segitiga (double panjang, double sisiMiring) {
            System.out.println ("\n2Variabel = segitiganya sama kaki");
            System.out.println ("Panjang = " +panjang+ " sisi miring ="  +sisiMiring);
      
            }
		public static void main (String[]args){
		Segitiga SS;
		SS = new Segitiga();
		SS.Segitiga(5.0);
		SS.Segitiga(4.0,3.0);
		
  }
}
