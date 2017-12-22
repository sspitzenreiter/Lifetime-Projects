#include <stdio.h>
#include <iostream>
#include <windows.h>
#include <conio.h>

using namespace std;

void exif(int a){		
	cout<<"Tampilan If : "<<endl;
	if(a==1){
		cout<<"Kamu memilih warna Merah\n";
	}else if(a==2){
		cout<<"Kamu memilih warna Biru\n";
	}else if(a==3){
		cout<<"Kamu memilih warna Putih\n";
	}else if(a==4){
		cout<<"Kamu memilih warna Hitam\n";
	}else{
		cout<<"Kamu tidak memilih pilihan apapun\n";
	}
}

void exswitch(int a){
	cout<<"Tampilan Switch : "<<endl;
	switch(a){
		case 1 : cout<<"Kamu memilih warna Merah\n"; break;
		case 2 : cout<<"Kamu memilih warna Biru\n"; break;
		case 3 : cout<<"Kamu memilih warna Putih\n"; break;
		case 4 : cout<<"Kamu memilih warna Hitam\n"; break;
		default : cout<<"Kamu tidak memilih pilihan apapun\n"; break;
	}
}

void menu(){
	int a;
	system("cls");
	cout<<"1. Merah"<<"\n";
	cout<<"2. Biru"<<"\n";
	cout<<"3. Putih"<<"\n";
	cout<<"4. Hitam"<<"\n";
	cout<<"Pilih salah satu warna : ";cin>>a;
	system("cls");
	exif(a);
	cout<<endl;
	exswitch(a);
}

int main(){
	menu();
	return 0;
}
