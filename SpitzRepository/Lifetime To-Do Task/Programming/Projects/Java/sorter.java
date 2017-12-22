




import java.util.Scanner;



class sorter {
    String[][] data;
    static Scanner input = new Scanner(System.in);
    static Scanner sc= new Scanner(System.in);
    int n,h,pil,dorder;
    String yangdicari;
    public sorter(){
        firstrun();
        menupil();
        menu();                
    }
    
    public void firstrun(){
        
        System.out.print("Banyak data: ");
        n = input.nextInt();
        data= new String[n][4];
        
            for(int h=0;h<n;h++){                    
                    System.out.print("NIM :");
                    data[h][0]= sc.nextLine();
                    
                    System.out.print("Nama Mahasiswa :");
                    data[h][1]=sc.nextLine();
                    
                    System.out.print("Mata Kuliah :");
                    data[h][2]=sc.nextLine();
                    
                    System.out.print("Nilai : ");
                    data[h][3] = sc.nextLine();						
                    
                    System.out.println();
            }
    }
    
    public void menu(){
                System.out.println();
		System.out.println ("|======================================================================|");
		System.out.println ("|                       PILIHAN                                        |");
		System.out.println ("|======================================================================|");
		System.out.println ("|             1. SORTING DATA                                                   |");                                          
		System.out.println ("|             2. SEARCHING DATA                                                 |");
                System.out.println ("|             0. EXIT                                                 |");
		System.out.println ("|======================================================================|");
		System.out.println ();
		
		System.out.print ("Masukan pilihan anda : ");
		int ordpil=input.nextInt();
                
                switch(ordpil){
                    case 1 : menupilsort(); break;                    
                    case 2 : menusearch(); break;
                    case 0 : System.exit(0); break;
                }                                
    }
    
    public void menuordsort(){
                System.out.println();
		System.out.println ("|======================================================================|");
		System.out.println ("|                       SORTING BERDASARKAN                            |");
		System.out.println ("|======================================================================|");
		System.out.println ("|             1. ASCENDING                                                   |");                                          
		System.out.println ("|             2. DESCENDING                                                 |");
		System.out.println ("|======================================================================|");
		System.out.println ();
		
		System.out.print ("Masukan pilihan anda : ");
		int ordpil=input.nextInt();
                
                switch(ordpil){
                    case 1 : dorder = 1; break;                    
                    case 2 : dorder = 0; break;
                }
                
                menujensort();
    }
    
    public void menupilsort(){
                System.out.println();
		System.out.println ("|======================================================================|");
		System.out.println ("|                       SORTING BERDASARKAN                            |");
		System.out.println ("|======================================================================|");
		System.out.println ("|             1. NIM                                                   |");                                          
		System.out.println ("|             2. NILAI                                                 |");
                System.out.println ("|             0. KEMBALI                                                 |");
		System.out.println ("|======================================================================|");
		System.out.println ();
		
		System.out.print ("Masukan pilihan anda : ");
		pil=input.nextInt();
                
                switch(pil){
                    case 1 : yangdicari = "NIM"; break;                    
                    case 2 : yangdicari = "Nilai"; pil = 4; break;
                    case 0 : menu(); break;
                }
                pil=pil-1;
                menuordsort();
    }
    
    public void menupil(){
        System.out.println("|==========================================================================|");
        System.out.println("|                            DATA MAHASISWA                                |");
        System.out.println("|==========================================================================|");
        System.out.println();
        
	System.out.println("\tNIM	\tNama	\tMata Kuliah	\tNilai");
	System.out.println();
	for(h=0;h<n;h++){            
                System.out.print("\t" +data[h][0]);
		System.out.print("\t" +data[h][1]);
		System.out.print("\t" +data[h][2]);
		System.out.print("\t\t" + data[h][3]);	    
                
                System.out.println();
                System.out.println();
        }                                
                
    }
    
    public void menujensort(){
                System.out.println();
		System.out.println ("|======================================================================|");
		System.out.println ("|                          METODE SORTING                            |");
		System.out.println ("|======================================================================|");
		System.out.println ("|             1. BUBBLE                                            |");
		System.out.println ("|             2. SELECTION                                                |");		
                System.out.println ("|             3. INSERTION                                                |");		
                System.out.println ("|             4. MERGE                                                |");
                System.out.println ("|             5. QUICK                                                |");
		System.out.println ("|             0. EXIT                                                  |");
		System.out.println ("|======================================================================|");
		System.out.println ();
		
		System.out.print ("Masukan pilihan anda : ");		
                
                switch(input.nextInt()){
                    case 1 : bubblesort(); break;
                    case 2 : selectionSort(); break;
                    case 3 : insertionSort(); break;
                    case 4 : mergeSort(); break;
                    case 5 : quickSort(0,h-1); menupil(); sleep(); menupilsort();break;
                    case 0 : System.exit(0); break;
                }
               
    }
    
    public void bubblesort(){
        String[] tempdata = new String[4];
        
        for(int a=0;a<h;a++){
            for(int b=1;b<(h-a);b++){
                if(Integer.parseInt(data[b-1][pil]) > Integer.parseInt(data[b][pil]) && dorder == 1){
                    varcharge(b-1, b);
                }
                if(Integer.parseInt(data[b-1][pil]) < Integer.parseInt(data[b][pil]) && dorder == 0){                    
                    varcharge(b-1, b);
                }
            }
        }
        menupil();
        sleep();
        menupilsort();
    }
    
    public void selectionSort(){
        int minimumdata;
        String[] tempdata = new String[4];
        
        for(int a=0; a<h; a++){
            minimumdata=Integer.parseInt(data[a][pil]);
            for(int b=a+1;b<h;b++){
                if(minimumdata>Integer.parseInt(data[b][pil]) && dorder == 1){
                    varcharge(a, b);
                }
                
                if(minimumdata<Integer.parseInt(data[b][pil]) && dorder == 0){
                    varcharge(a, b);
                }
            }  
        }
        menupil();
        sleep();
        menupilsort();
    }
    
    public void insertionSort(){        
        String[] tempdata = new String[4];
        
        for(int a=0;a<h;a++){            
            for(int b=0;b<a;b++){
                if(Integer.parseInt(data[a][pil]) < Integer.parseInt(data[b][pil]) && dorder == 1){
                    varcharge(a, b);                    
                }
                if(Integer.parseInt(data[a][pil]) > Integer.parseInt(data[b][pil]) && dorder == 0){
                    varcharge(a, b);                    
                }
            }                        
        }
        menupil();
        sleep();
        menupilsort();
    }        
    
    public void varcharge(int a, int b){
        String tempdata[] = new String[4];
        tempdata[0] = data[a][0];
        tempdata[1] = data[a][1];
        tempdata[2] = data[a][2];
        tempdata[3] = data[a][3];

        data[a][0] = data[b][0];
        data[a][1] = data[b][1];
        data[a][2] = data[b][2];
        data[a][3] = data[b][3];

        data[b][0] = tempdata[0];
        data[b][1] = tempdata[1];
        data[b][2] = tempdata[2];
        data[b][3] = tempdata[3];
    }
    
    public void mergeSort(){
        int lo,hi;
        
        if(h%2==1){
            lo = (h/2)+1;
            hi = h/2;
        }else{
            lo = h/2;
            hi = h/2;
        }
        String[][] minarray,maxarray;
        minarray = new String[lo][4];
        maxarray = new String[hi][4];
        
        for(int a=0;a<lo;a++){
            minarray[a][0] = data[a][0];
            minarray[a][1] = data[a][1];
            minarray[a][2] = data[a][2];
            minarray[a][3] = data[a][3];
        }
        
        for(int b=0;b<hi;b++){
            maxarray[b][0] = data[b+hi][0];
            maxarray[b][1] = data[b+hi][1];
            maxarray[b][2] = data[b+hi][2];
            maxarray[b][3] = data[b+hi][3];
        }
        
        minarray = sort(minarray, lo);
        maxarray = sort(maxarray, hi);
        int a,b,c;
        a=0;b=0;c=0;
        while(a < lo && b < hi && c < hi){
            int lomin = Integer.parseInt(minarray[a][pil]);
            int himin = Integer.parseInt(maxarray[b][pil]);
            if(dorder == 1){
            if(lomin < himin){
                data[c][0] = minarray[a][0];
                data[c][1] = minarray[a][1];
                data[c][2] = minarray[a][2];
                data[c][3] = minarray[a][3];
                a++;                
            }else{
                data[c][0] = maxarray[a][0];
                data[c][1] = maxarray[a][1];
                data[c][2] = maxarray[a][2];
                data[c][3] = maxarray[a][3];
                b++;
            }
            }
            if(dorder == 0){
            if(lomin > himin){
                data[c][0] = minarray[a][0];
                data[c][1] = minarray[a][1];
                data[c][2] = minarray[a][2];
                data[c][3] = minarray[a][3];
                a++;                
            }else{
                data[c][0] = maxarray[a][0];
                data[c][1] = maxarray[a][1];
                data[c][2] = maxarray[a][2];
                data[c][3] = maxarray[a][3];
                b++;
            }
            }
            c++;            
        }
        menupil();
        sleep();
        menupilsort();
    }
    
    public String[][] sort(String[][] data, int lim){
        if(lim<=1){
            return data;
        }
        else{
        for(int a=0;a<lim;a++){
            for(int b = 1;b<(lim-a);b++){
            if(Integer.parseInt(data[b-1][pil])>Integer.parseInt(data[b][pil])){
                String tempdata[] = new String[4];
                tempdata[0] = data[b-1][0];
                tempdata[1] = data[b-1][1];
                tempdata[2] = data[b-1][2];
                tempdata[3] = data[b-1][3];

                data[b-1][0] = data[b][0];
                data[b-1][1] = data[b][1];
                data[b-1][2] = data[b][2];
                data[b-1][3] = data[b][3];

                data[b][0] = tempdata[0];
                data[b][1] = tempdata[1];
                data[b][2] = tempdata[2];
                data[b][3] = tempdata[3];
            }
            }
        }
        return data;
        }
    }
    
    public void quickSort(int kiri, int kanan){
        int temp;                 
        int i = kiri;
        int j = kanan;
        
        int pivot = Integer.parseInt(data[(kiri + kanan)/2][pil]);
        if(dorder == 1){
        while(kiri <= kanan){
            
            while(Integer.parseInt(data[kiri][pil])<pivot){
                kiri++;
            }
            
            while(Integer.parseInt(data[kanan][pil])>pivot){
                kanan--;
            }
            if(kiri<=kanan && dorder == 1){
                String tempdata[] = new String[4];
                tempdata[0] = data[kiri][0];
                tempdata[1] = data[kiri][1];
                tempdata[2] = data[kiri][2];
                tempdata[3] = data[kiri][3];

                data[kiri][0] = data[kanan][0];
                data[kiri][1] = data[kanan][1];
                data[kiri][2] = data[kanan][2];
                data[kiri][3] = data[kanan][3];

                data[kanan][0] = tempdata[0];
                data[kanan][1] = tempdata[1];
                data[kanan][2] = tempdata[2];
                data[kanan][3] = tempdata[3];
                kiri++;
                kanan--;
            }
                        
        }
        
        if(i < kanan){
            quickSort(i, kanan);
        }
        if(j < kiri){
            quickSort(j, kiri);
        }
        }
        
        if(dorder == 0){
        while(kiri >= kanan){
            
            while(Integer.parseInt(data[kiri][pil])<pivot){
                kiri--;
            }
            
            while(Integer.parseInt(data[kanan][pil])>pivot){
                kanan++;
            }
            if(kiri>=kanan){
                String tempdata[] = new String[4];
                tempdata[0] = data[kanan][0];
                tempdata[1] = data[kanan][1];
                tempdata[2] = data[kanan][2];
                tempdata[3] = data[kanan][3];

                data[kanan][0] = data[kiri][0];
                data[kanan][1] = data[kiri][1];
                data[kanan][2] = data[kiri][2];
                data[kanan][3] = data[kiri][3];

                data[kiri][0] = tempdata[0];
                data[kiri][1] = tempdata[1];
                data[kiri][2] = tempdata[2];
                data[kiri][3] = tempdata[3];
                kiri--;
                kanan++;
            }
                        
        }
        
        if(i > kanan){
            quickSort(i, kanan);
        }
        if(j > kiri){
            quickSort(j, kiri);
        }
        }
    }
    
    
    public void menusearch(){
                System.out.println();
		System.out.println ("|======================================================================|");
		System.out.println ("|                       SEARCHING BERDASARKAN                          |");
		System.out.println ("|======================================================================|");
		System.out.println ("|             1. NIM                                                   |");
		System.out.println ("|             2. NAMA                                                  |");
		System.out.println ("|             3. MATAKULIAH                                            |");
		System.out.println ("|             4. NILAI                                                 |");
                System.out.println ("|             0. KEMBALI                                                 |");
		System.out.println ("|======================================================================|");
		System.out.println ();
		
		System.out.print ("Masukan pilihan anda : ");
		pil=input.nextInt();
                
                switch(pil){
                    case 1 : yangdicari = "NIM"; break;
                    case 2 : yangdicari = "Nama"; break;
                    case 3 : yangdicari = "Mata Kuliah"; break;
                    case 4 : yangdicari = "Nilai"; break;
                    case 0 : menu();
                }
                menujensearch();
    }
    
    
    
    public void menujensearch(){
                System.out.println();
		System.out.println ("|======================================================================|");
		System.out.println ("|                          METODE SEARCHING                            |");
		System.out.println ("|======================================================================|");
		System.out.println ("|             1. SEQUENTIAL                                            |");
		System.out.println ("|             2. BINARY                                                |");		
		System.out.println ("|             0. EXIT                                                  |");
		System.out.println ("|======================================================================|");
		System.out.println ();
		
		System.out.print ("Masukan pilihan anda : ");		
                
                switch(input.nextInt()){
                    case 1 : sequentialsearch(); break;
                    case 2 : binarySearch(); break;
                    case 0 : System.exit(0); break;
                }
               
    }
    
    public void sequentialsearch(){
        
        System.out.println("Anda Memilih Searching Berdasarkan "+yangdicari+" Dengan Metode Sequential");
        System.out.print("Masukan "+yangdicari+" yang ingin anda cari : ");
	String key=sc.nextLine();
        boolean stat = false;
        System.out.println();
        for(int a=0;a<n;a++){
            if(data[a][pil-1].equals(key)){
                System.out.println("Data telah ditemukan!!");
                System.out.println("NIM : "+data[a][0]);
                System.out.println("Nama : "+data[a][1]);
                System.out.println("Mata Kuliah : "+data[a][2]);
                System.out.println("Nilai : "+data[a][3]);
                stat = true;
            }
        }
        if(stat==false){
            System.out.println("Data "+key+" Tidak Ditemukan");
            
        }
        sleep();
        System.out.println();
        System.out.println();
        
        menusearch();
    }
    
    
    public int binarySearch() {
    
    System.out.println("Anda Memilih Searching Berdasarkan "+yangdicari+" Dengan Metode Binary");
    System.out.print("Masukan "+yangdicari+" yang ingin anda cari : ");    
    String key=sc.nextLine();
        
    int low = 0;
    int high = n - 1;
    int mid;

    while (low <= high) {
        mid = (low + high) / 2;

        if (data[mid][pil-1].compareTo(key) < 0) {
            low = mid + 1;
        } else if (data[mid][pil-1].compareTo(key) > 0) {
            high = mid - 1;
        } else {
            System.out.println("Data telah ditemukan!!");
                System.out.println("NIM : "+data[mid][0]);
                System.out.println("Nama : "+data[mid][1]);
                System.out.println("Mata Kuliah : "+data[mid][2]);
                System.out.println("Nilai : "+data[mid][3]);
                sleep();
                System.out.println();
                System.out.println();
                menusearch();
                return 1;
        }
    }
    System.out.println("Data Tidak Ditemukan");
    sleep();
    System.out.println();
    System.out.println();
    menusearch();
    return -1;
        
    }
    
    public void sleep(){
        try{
            Thread.sleep(4000);
        }catch(Exception ex){
            
        }
    }
    
    public static void main(String[] args){
        new sorter();
    }
}
