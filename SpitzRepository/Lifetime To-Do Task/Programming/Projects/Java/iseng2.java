class iseng2 extends iss{
	iseng2(){
		met();
	}	
	
	public static void main(String[] args){
		new iseng2();
	}
}

class iss{
	
	private void met(){
		int a=0;
		boolean stat = false;
		while(!stat){
			System.out.println(a);
			if(a==4){
				stat = true;
			}
			a++;
		}
	}
}