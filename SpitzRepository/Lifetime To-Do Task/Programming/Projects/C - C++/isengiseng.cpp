#include <string.h>
#include <iostream>
#include <stdio.h>

using namespace std;

int main(){	
	int loop;
	do{
	system("cls");
	
	char ch[50];
	char alpha[27] = {"abcdefghijklmnopqrstuvwxyz"};
	char beta[27] = {"nopqrstuvwxyzabcdefghijklm"};
	int len,pil;
	
	cout<<"================ AN CODE ================"<<endl;
	cout<<"1. Bikin Kode"<<endl;
	cout<<"2. Pecahkan Kode"<<endl;	
	cout<<"Masukan Pilihan : ";cin>>pil;
		
	cout<<"Masukan Kode (Maksimal 50 Huruf) : ";cin>>ch;
		
	len = strlen(ch);			
	for(int a = 0;a<len;a++){
		int b = 0;
		int c = 0;
		while(b<1){
			if(ch[a]==alpha[c] && pil == 2){
				ch[a] = beta[c];				
				b++;
			}
			
			if(ch[a]==beta[c] && pil == 1){
				ch[a] = alpha[c];		
				b++;
			}
			
			c++;
		}
	}	
	
	cout<<"Kode/Hasil Dekripsi : "<<ch<<endl;
	cout<<"Mau diulang? : ";cin>>loop;
	}while(loop == 1);
	return 0;
}
