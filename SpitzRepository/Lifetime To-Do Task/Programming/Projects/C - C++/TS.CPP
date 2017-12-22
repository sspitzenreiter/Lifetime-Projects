#include "stdio.h"
#include "conio.h"
void main()
{int a,b,c;
printf("Masukan sisi 1 =");
scanf("%i",&a);
printf("Masukan Sisi 2=");
scanf("%i",&b);
printf("Masukan sisi 3=");
scanf("%i",&c);
{if(a == b && b == c)
    printf("Sama Sisi");
    else
       {if(a == b && b != c || a!=b && b == c)
       printf ("Sama Kaki");
       else{printf("Sembarang");
       }}}getch(); clrscr();}