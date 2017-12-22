class persegi{
public static int luas_pp(int p, int l){
int luas=p*l;
return luas;
}
}

class balok extends persegi{
public static int volume_balok(int p,int l,int t){
	persegi segi4=new persegi();
	int volume=segi4.luas_pp(p,l)*t;
	return volume;
}
public static void main(String args[]){
int volume_balok=volume_balok(3,2,1);
System.out.println("Volume balok="+volume_balok);
}
}