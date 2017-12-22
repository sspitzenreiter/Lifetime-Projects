 public class MainSegiTiga {
    public static void main(String[] args) {
        int[] xx = new int[13];
        coba(xx);
    }
    public static void coba(int a[]) {
        String deret = "";
        for (int i = 1; i < a.length; i++) {
            a[i] = i + i;
            deret += a[i] + ",";
        }
        System.out.println("Deret :");
        System.out.println(deret);
    }
}