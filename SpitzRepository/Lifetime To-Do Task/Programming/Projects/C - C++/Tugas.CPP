#include "iostream.h"
#include "conio.h"


fungsi(int *a)
{
(*a) = (*a)+5;
return (*a);
}


void main()
{
int b,c,d,e,e1;
clrscr();
cout<<"Masukan Angka (Max. 10) : ";cin>>b;
if(b<=10)
{
fungsi(&b);
cout<<"Hasil dari angka yang anda masukan + 5 = "<<b<<"\n";
int arr[40];
for(e1=0;e1<=b;e1++)
{
arr[e1]=e1;
}

for(d=1;d<=b;d++)
{
for(e=1;e<=d;e++)
{
cout<<arr[e];
}
cout<<"\n";
}
}
else
{cout<<"Angkanya Kebesaran Gan";}
getch();
}
