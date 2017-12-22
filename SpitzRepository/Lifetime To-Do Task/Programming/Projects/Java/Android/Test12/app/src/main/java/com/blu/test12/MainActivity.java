package com.blu.test12;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.ListView;
import android.widget.Toast;

import com.google.gson.JsonArray;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {


    private AnggotaMainAdapter adapter;
    private List<Anggota> anggota = new ArrayList<Anggota>();
    private Anggota ang;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Button b = (Button) findViewById(R.id.button);



        final String tester = "testion";
        b.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Ion.with(getApplicationContext()).load("http://192.168.1.104/test/testinsert.php?nama=" + tester).asJsonObject().setCallback(new FutureCallback<JsonObject>() {
                    @Override
                    public void onCompleted(Exception e, JsonObject results) {
                        try {
                            JsonArray jsor = results.getAsJsonArray("message");
                            String getter = jsor.get(0).getAsJsonObject().get("message").getAsString();
                            Toast.makeText(getApplicationContext(), getter, Toast.LENGTH_LONG).show();


                        } catch (Exception ss) {
                            Toast.makeText(getApplicationContext(), ss.toString(), Toast.LENGTH_LONG).show();
                        }

                    }
                });
            }
        });

    }


    /*
        Ion.with(this).load("http://pengaduan.poldasulsel.com/api/polres.php").asJsonObject().setCallback(new FutureCallback<JsonObject>() {
            @Override
            public void onCompleted(Exception e, JsonObject results) {
                try {
                    JsonArray job = results.getAsJsonObject("responseData").getAsJsonArray("results");
                    for(int a = 0; a < job.size(); a++){
                        JsonArray job2 = job.get(a).getAsJsonArray();
                        for(int b = 0; b < job2.size(); b++){
                            ang = new Anggota();
                            String nam = job2.get(b).getAsJsonObject().get("namapolres").getAsString();
                            String no = job2.get(b).getAsJsonObject().get("telepon").getAsString();
                            ang.setName(nam);
                            ang.setJk(no);
                            anggota.add(ang);
                        }
                    }

                    adapter.notifyDataSetChanged();
                } catch (Exception ss) {
                    Toast.makeText(getApplicationContext(), ss.toString(), Toast.LENGTH_LONG).show();
                }

            }
        });*/

    /*Ion.with(this).load("http://api.androidhive.info/contacts/").asJsonObject().setCallback(new FutureCallback<JsonObject>() {
            @Override
            public void onCompleted(Exception e, JsonObject results) {
                try {
                    JsonArray con = results.getAsJsonArray("contacts");
                    for(int a = 0; a < con.size();a++){
                        JsonObject object = con.get(a).getAsJsonObject();
                        String obj = object.getAsJsonObject("phone").get("mobile").getAsString();
                        String obj2 = object.get("id").getAsString();
                        ang = new Anggota();
                        ang.setName(obj);
                        ang.setJk(obj2);
                        anggota.add(ang);
                    }

                    adapter.notifyDataSetChanged();
                } catch (Exception ss) {
                    Toast.makeText(getApplicationContext(), ss.toString(), Toast.LENGTH_LONG).show();
                }

            }
        });*/
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
            Intent intent = new Intent(MainActivity.this, AddActivity.class);
            startActivity(intent);
        }

        return super.onOptionsItemSelected(item);
    }
}
