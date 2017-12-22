#include <stdio.h>
#include <conio.h>


float main(){

int pil,credit,mobil,bulan,koreksi;
char credpil,back;
float harga_total,harga_asli;
float diskon,angsuran,DP;
do{
	system("cls");
	printf("Daftar Harga Mobil Terbaru 2016\n");
	printf("-----------------------------------------\n");
	printf("Nama 		|	Harga		|\n");
	printf("-----------------------------------------\n");
	printf("|1. Pajero	|Rp.735.099.000,00	|\n");
	printf("|2. Fortuner	|Rp.459.289.000,00	|\n");
	printf("|3. Alphard 	|Rp.1.532.590.000,00	|\n");
	printf("|4. Innova	|Rp.295.300.000,00	|\n");
	printf("|5. Avanza	|Rp.189.006.000,00	|\n");
	printf("|6. Jazz	|Rp.232.080.000,00	|\n");
	printf("|7. Brio	|Rp.125.130.000,00	|\n");
	printf("|8. Agya	|Rp.104.050.000,00	|\n");
	printf("|9. Mobilio	|Rp.230.150.000,00	|\n");
	printf("|10.Yaris	|Rp.266.300.000,00	|\n");
	printf("-----------------------------------------\n");
	printf("Pilih Mobil yang akan anda beli (1~10)\n\n");
	scanf("%i",&pil);


	switch(pil){

	case 1 : harga_asli = 735099000; mobil = 1; diskon=harga_asli*0.3; break;
	case 2 : harga_asli = 459289000; mobil = 2; diskon=harga_asli*0.3; break;
	case 3 : harga_asli = 1532590000; mobil = 3; diskon=harga_asli*0.3; break;
	case 4 : harga_asli = 295300000; mobil = 4; diskon=harga_asli*0.3; break;
	case 5 : harga_asli = 189006000; mobil = 5; diskon=harga_asli*0.3; break;
	case 6 : harga_asli = 232080000; mobil = 6; diskon=harga_asli*0.3; break;
	case 7 : harga_asli = 125130000; mobil = 7; diskon=harga_asli*0.3; break;
	case 8 : harga_asli = 104050000; mobil = 8; diskon=harga_asli*0.3; break;
	case 9 : harga_asli = 230150000; mobil = 9; diskon=harga_asli*0.3; break;
	case 10 : harga_asli = 266300000; mobil = 10;diskon=harga_asli*0.3; break;
	default : koreksi = 1;
	}

	system("cls");


	if(koreksi != 1){

	printf("Pilih Cara Pembayaran\n");
		printf("1. Cash\n");
		printf("2. Credit\n");
		printf("Masukkan Pilihan (1/2) \n\n");
		scanf("%d",&pil);



	switch(pil){
		case 1 : harga_total = harga_asli - diskon; break;
		case 2 : system("cls");
				printf("Bulan		| Bunga\n");
				 printf("1. 11 Bulan	| 5%% per Bulan\n");
				 printf("2. 23 Bulan	| 8%% per Bulan\n");
				 printf("3. 35 Bulan	| 12%% per Bulan\n");
				 printf("Pilih Berapa Bulan Angsuran  (1~3)\n");
				 scanf("%d",&credit);
				 harga_total = harga_asli - diskon;
				 DP = harga_total * 0.3;
				 credpil = 'y';
				 switch(credit){

					case 1 : angsuran = ((harga_total-DP)/11)+(((harga_total-DP)/11)*0.05); bulan = 11; break;
					case 2 : angsuran = ((harga_total-DP)/23)+(((harga_total-DP)/23)*0.08); bulan = 23; break;
					case 3 : angsuran = ((harga_total-DP)/35)+(((harga_total-DP)/35)*0.12); bulan = 35; break;
					default : koreksi = 1;
				 }break;
		default : koreksi = 1;
	}

	if(koreksi != 1){
	switch(mobil){
		case 1 : printf("Merk Mobil = Pajero\n"); break;
		case 2 : printf("Merk Mobil = Fortuner\n"); break;
		case 3 : printf("Merk Mobil = Alphard\n"); break;
		case 4 : printf("Merk Mobil = Innova\n"); break;
		case 5 : printf("Merk Mobil = Avansa\n"); break;
		case 6 : printf("Merk Mobil = Jazz\n"); break;
		case 7 : printf("Merk Mobil = Brio\n"); break;
		case 8 : printf("Merk Mobil = Agya\n"); break;
		case 9 : printf("Merk Mobil = Mobilio\n"); break;
		case 10 : printf("Merk Mobil = Yaris\n"); break;
	}
	system("cls");
	printf("Harga Asli 				=%f\n ",harga_asli);
	printf("Diskon     				=%f\n ",diskon);
	printf("Harga Total				=%f\n ",harga_total);

	if(credpil == 'y'){
	printf("DP 		   			=%f\n ",DP);
	printf("Lama Angsuran 				=%i Bulan\n",bulan);
	printf("Jumlah Angsuran / bulan			=%f\n ",angsuran );
	}

	}
}

if(koreksi == 1){
	system("cls");
	printf("Input form yang benar!!!");
	printf("\nCoba Lagi? (y/n)");scanf("%c",&back);
}
}while(back == 'y' || back == 'Y');
getch();
return 0;
}


