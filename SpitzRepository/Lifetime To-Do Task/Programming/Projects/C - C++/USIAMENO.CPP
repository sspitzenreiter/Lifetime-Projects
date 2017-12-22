#include "conio.h"
#include "stdio.h"
void main()
{
	int usia;
	clrscr();
	printf("Usia Anda : ");scanf("%d",&usia);
	if (usia <= 17) {
		printf("Anda belum cukup umur!!!\n");
		printf("Hati-hati menontonnya!!!\n");
	}

	else
	{
		printf("Saatnya Berfikir Dewasa!!!\n");
		printf("Be Yourself!!!\n");
	}
	printf("\n\n Press Enter...");
	getch();
	
}