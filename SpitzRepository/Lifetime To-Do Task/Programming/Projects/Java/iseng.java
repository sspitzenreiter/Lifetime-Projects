class inherit{
	void daffa(){
		System.out.println("Pedo");
	}
}

class iseng extends inherit{
	iseng(){
		daffa();
	}
		
	public static void main (String [] args){
		new iseng();
	}
}