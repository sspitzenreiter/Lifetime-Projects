#include <stdio.h>
#include <ctype.h>
#include <iostream.h>
#include <conio.h>
main()
{
int A,B,C,maks;
clrscr();
cout<<"Masukan angka 1: " ; cin>>A;
cout<<"Masukan angka 2: " ; cin>>B;
cout<<"M&asukan angka 3: " ; cin>>C;
if (A>B && A>C)
    {
    cout<<"Bilangan terbesar="<<A;
    }
else if (B>A && B>C)
    {
    cout<<"Bilangan terbesar="<<B;
    }
else
    {
    cout<<"Bilangan terbesar="<<C;
    }
getche() ;
}