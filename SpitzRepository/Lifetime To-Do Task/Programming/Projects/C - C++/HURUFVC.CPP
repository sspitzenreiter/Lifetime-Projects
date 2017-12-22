#include<stdio.h>
#include<ctype.h>
#include<iostream.h>
#include<conio.h>
main()
{
char huruf, huruf_besar;
clrscr();
cout<<"Masukan huruf : " ; cin>>huruf;
	 huruf_besar=toupper(huruf) ;
if(huruf_besar=='A' || huruf_besar=='E' || huruf_besar=='I'
	||huruf_besar=='O'||huruf_besar=='U')
	{
	cout<<huruf<<",adalah huruf vokal";}
	else
	{
	cout<<huruf<<",bukan huruf vokals";}
getche();
}