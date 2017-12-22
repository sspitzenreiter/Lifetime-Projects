class arraydua {
public static void main (String [] args) {
int [][] angka = new int [2][3];
int k = 1;
for (int i = 0; i<2; i++) {
for (int j =0; j<3; j++) {
angka [i][j]=k*10;
System.out.print (angka[i][j]);
if (j<2) System.out.print (" ");
k++;
}
System.out.println();
}
}
}