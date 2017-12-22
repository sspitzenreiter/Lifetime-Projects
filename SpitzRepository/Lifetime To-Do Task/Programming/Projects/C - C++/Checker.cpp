#include <iostream>
#include <stdio.h>

using namespace std;

int main(){
	int a,b,c;
	
	for(a=1;a<=5;a++){
		for(c=5;c>a;c--){
			cout<<" ";
		}	
		for(b=1;b<=a;b++){
			cout<<"*";			
		}
		cout<<endl;
	}
	
	return 0;
}
