/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Tutorial;
import java.awt.Container;
import java.awt.FlowLayout;
import javax.swing.*;
/**
 *
 * @author BlueLightning
 */
public class Frames extends javax.swing.JFrame {
    public Frames(){
        JF();        
    }
    
    public void JF(){
        int lebar = 200;
        int tinggi = 293;
        JFrame fra = new JFrame(); //Pemanggilan JFrame untuk frame baru
        JLabel label = new JLabel("Label dari Class JFrame", SwingConstants.CENTER);
        fra.add(label); //Menambah komponen JLabel kedalam JFrame        
        fra.setSize(lebar,tinggi); //Mengatur Lebar dan Tinggi
        fra.setResizable(false); //Membuat JFrame menjadi tidak bisa diperbesar / diperkecil
        fra.setLocationRelativeTo(null); //Membuat JFrame berlokasi di tengah layar
        fra.setVisible(true); //Memperlihatkan JFrame
        
    }
        
}
