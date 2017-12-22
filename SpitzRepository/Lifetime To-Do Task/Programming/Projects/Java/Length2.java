import javax.swing.JOptionPane;
public class Length2
{
	public static void main(String args[])
	{
		String a;
		int panjang;

		a = JOptionPane.showInputDialog("Masukkan Contoh Kalimat :");
		
		panjang = a.length();
		JOptionPane.showMessageDialog(null,"Panjang String \""+a+"\" adalah "+panjang);
		System.exit(0);
	}
}