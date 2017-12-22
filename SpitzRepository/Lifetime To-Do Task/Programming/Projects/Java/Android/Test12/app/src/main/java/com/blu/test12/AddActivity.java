package com.blu.test12;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.Toast;

import com.google.gson.JsonArray;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import org.json.JSONArray;
import org.json.JSONObject;

/**
 * Created by BlueLightning on 4/29/2016.
 */
public class AddActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.active);

        String url = "http://localhost/test/testinsert.php?nama=BlueLightnig";
        Ion.with(this).load("http://localhost/test/testinsert.php?nama=BlueLightnig").asJsonObject().setCallback(new FutureCallback<JsonObject>() {
           @Override
           public void onCompleted(Exception e, JsonObject result){
               try {
                   JsonArray arr = result.getAsJsonArray("message");

                   String response = arr.get(0).getAsJsonObject().get("message").getAsString();
                   Toast.makeText(getApplicationContext(), response, Toast.LENGTH_SHORT).show();
               }catch(Exception a){

               }
           }
        });


    }
}
