class persegi{
public static int luas_p(int sisi){
int luas_p=sisi*sisi;
profung persegi=new profung();
System.out.println("Luas Persegi adalah "+luas_p);
return luas_p;
}
}

class kubus extends persegi{
public static int volume_kubus(int sisi){
	persegi segi4=new persegi();
	int volume=segi4.luas_p(sisi)*sisi;
	return volume;
}
public static void main(String args[]){
int volume_kubus=volume_kubus(6);
System.out.println("Volume kubus = "+volume_kubus);
}
}