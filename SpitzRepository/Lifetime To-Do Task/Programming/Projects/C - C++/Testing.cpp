#include <stdio.h>
#include <iostream>
#include <cmath>

using namespace std;

int main(){
	float x1,x2,X;
	float y1,y2,Y;
	cout<<"Masukan Point 1 A : ";cin>>x1;
	cout<<"Masukan Point 2 A : ";cin>>x2;
	cout<<endl<<endl;
	cout<<"Masukan Point 1 B : ";cin>>y1;
	cout<<"Masukan Point 2 B : ";cin>>y2;
	X = (x1-x2) * (x1-x2);
	Y = (y1 - y2) * (y1-y2);
	cout<<"Jarak antara 2 kekasih = "<<sqrt(X + Y);
	return 0;
}
