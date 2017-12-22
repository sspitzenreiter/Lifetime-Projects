/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package sekolah;
import java.sql.*;
/**
 *
 * @author Spitzenreiter
 */
public class koneksi {
       private static Connection koneksi;
       static String status="";
       public static Connection getKoneksi() throws SQLException{
           try{
               Class.forName("com.mysql.jdbc.Driver");
               Connection con=DriverManager.getConnection("jdbc:mysql://localhost/test","root","");
               return con;
              
           }
           catch(ClassNotFoundException | SQLException ex){
               return null;
           }
       }
    
}
