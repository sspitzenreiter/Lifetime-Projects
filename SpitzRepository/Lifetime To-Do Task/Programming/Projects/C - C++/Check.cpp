#include <iostream>
#include <stdio.h>

using namespace std;

int main(){
	int a[4],angka,pil;
	
	do{
	system("cls");
	cout<<"Masukan angka 1 : ";cin>>a[0];
	cout<<"Masukan angka 2 : ";cin>>a[1];
	cout<<"Masukan angka 3 : ";cin>>a[2];
	cout<<"Masukan angka 4 : ";cin>>a[3];	
	
	for(int b = 0;b<4;b++){
		for(int c = 1;c<4-b;c++){
			if(a[c-1]>a[c]){
				angka = a[c-1];
				a[c-1] = a[c];
				a[c]=angka;
			}
			if(a[c-1]<a[c]){
				angka = a[c-1];
				a[c-1] = a[c];
				a[c]=angka;
			}
		}
	}
			
	for(int b = 0;b<4;b++){
		cout<<a[b]<<endl;
	}
	cout<<"Ulang? (1 untuk mengulang) : ";cin>>pil;
	}while(pil = 1);
	system("pause");
}
