package com.example.blu.calculator;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button sub = (Button) findViewById(R.id.conv);
        Button cls = (Button) findViewById(R.id.clear);
        final EditText e1 = (EditText) findViewById(R.id.cel);
        final EditText e2 = (EditText) findViewById(R.id.fahr);


        sub.setOnClickListener(new View.OnClickListener() {
                                   public void onClick(View v){
                                       String se1=e1.getText().toString();
                                       String se2=e2.getText().toString();
                                    if(se1.isEmpty())
                                    {
                                        int a = Integer.parseInt(se2);
                                        int a1=(a-32)*5/9;
                                        String h1=String.valueOf(a1+" C'");

                                        e1.setText(h1+"C'");
                                        e2.setText(se2+"F'");
                                    }

                                       if(se2.isEmpty())
                                       {
                                           int a = Integer.parseInt(se1);
                                           int a1=(a+32)*9/5;
                                           String h1=String.valueOf(a1+" F'");
                                           e1.setText(se1+"C'");
                                           e2.setText(h1+"F'");
                                       }

                                      

                                   }
                               }
        );
        cls.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v){
                    e1.setText("");
                    e2.setText("");
            }
        });
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
