#include <stdio.h>
#include <iostream>

using namespace std;


void ppin(int* arr){
	arr[0] = 0;	
}

int main(){
	
	int ac[4] = {0};	
	ppin(ac);
	cout<<ac[1];
				
	return 0;
}
