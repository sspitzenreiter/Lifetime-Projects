package com.blu.jsonlist;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.ListView;
import android.widget.Toast;

import com.google.gson.JsonArray;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {

    private ListView listView;
    private ListAdapter adapter;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
      final List<Anggota> arr = new ArrayList<>();
        listView = (ListView) findViewById(R.id.listview);
        adapter = new ListAdapter(this, arr);
        listView.setAdapter(adapter);

        Ion.with(this).load("http://mysafeinfo.com/api/data?list=englishmonarchs&format=json").asJsonArray().setCallback(new FutureCallback<JsonArray>(){
           @Override
           public void onCompleted(Exception e, JsonArray result){
               try{
               for(int a = 0; a < result.size(); a++){
                   String name = result.get(a).getAsJsonObject().get("nm").getAsString();
                   Anggota ag = new Anggota();
                   ag.setNama(name);
                   ag.setktt("");
                   ag.setthn("");
                   arr.add(ag);
               }
               }catch(Exception ec){
                       Toast.makeText(getApplicationContext(), ec.getMessage(), Toast.LENGTH_SHORT).show();
                   }

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
