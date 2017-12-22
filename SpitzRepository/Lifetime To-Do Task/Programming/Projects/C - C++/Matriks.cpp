#include <iostream>
#include <stdio.h>

using namespace std;

int main(){
	
	int ordo1, ordo2;
	
	int c = 0;	
	cout<<"Masukan ordo matriks : ";cin>>ordo1;
	cout<<"Masukan ordo matriks : ";cin>>ordo2;
	cout<<"masukan matriks A : "<<endl;
	int a[ordo1][ordo2];
	int b[ordo1][ordo2];
	int hasil[ordo1][ordo2];
	while(c<ordo1){
		int d = 0;		
		while(d<ordo2){		
			cout<<"Masukan baris ke-"<<c+1<<" kolom ke-"<<d+1<<" : ";cin>>a[c][d];
			d++;
		}
		c++;
	}
	cout<<endl<<"masukan matriks b :"<<endl;
	c = 0;
	while(c<ordo1){
		int d = 0;
		while(d<ordo2){		
			cout<<"Masukan baris ke-"<<c+1<<" kolom ke-"<<d+1<<" : ";cin>>b[c][d];
			d++;
		}
		c++;
	}
	cout<<endl<<endl<<"Hasilnya : "<<endl;
	for(int e=0;e<ordo1;e++){
		for(int f=0;f<ordo2;f++){
			hasil[e][f] = a[e][f]+b[e][f];
		}
	}
	
	for(int e=0;e<ordo1;e++){
		cout<<"|";
		for(int f=0;f<ordo2;f++){
			cout<<" "<<a[e][f]<<" ";
		}
		cout<<"|";
		cout<<"+";
		cout<<"|";
		for(int f=0;f<ordo2;f++){
			cout<<" "<<b[e][f]<<" ";
		}
		cout<<"|";
		
		cout<<"=";
		
		cout<<"|";
		for(int f=0;f<ordo2;f++){
			cout<<" "<<hasil[e][f]<<" ";
		}
		cout<<"|";
		cout<<endl;
	}
	
	return 0;
}
