package com.blu.spindata;

import android.app.Activity;
import android.app.ProgressDialog;
import android.content.Context;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.inputmethod.InputMethodManager;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends Activity implements AdapterView.OnItemSelectedListener {
    private Button btnAddNewCategory;
    private EditText txtCategory;
    private Spinner spinnerFood;
    private ArrayList<Category> categoriesList;
    ProgressDialog pDialog;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        spinnerFood = (Spinner) findViewById(R.id.spinFood);
        btnAddNewCategory = (Button) findViewById(R.id.btnAddNewCategory);
        txtCategory = (EditText) findViewById(R.id.txtCategory);
        spinnerFood.setOnItemSelectedListener(this);

        loadSpinnerData();

        btnAddNewCategory.setOnClickListener(new View.OnClickListener(){
           @Override
            public void onClick(View v){
               String label = txtCategory.getText().toString();

               if(label.trim().length() > 0){
                   DatabaseBuilder db = new DatabaseBuilder(getApplicationContext());

                   db.addCategory(new Category(0,label));

                   txtCategory.setText("");

                   InputMethodManager imm = (InputMethodManager) getSystemService(Context.INPUT_METHOD_SERVICE);
                   imm.hideSoftInputFromWindow(txtCategory.getWindowToken(), 0);

                   loadSpinnerData();
               }else{
                   Toast.makeText(getApplicationContext(), "Please enter label name", Toast.LENGTH_SHORT)
                   .show();
               }
           }

        });
    }

    private void loadSpinnerData(){
        DatabaseBuilder db = new DatabaseBuilder(getApplicationContext());

        List<String> lables = db.getAllLabels();

            ArrayAdapter<String> dataAdapter = new ArrayAdapter<>(this, android.R.layout.simple_spinner_item, lables);
            dataAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);

            spinnerFood.setAdapter(dataAdapter);


    }
    @Override
    public void onItemSelected(AdapterView<?> parent, View view, int position,
                               long id) {
        // On selecting a spinner item
        String label = parent.getItemAtPosition(position).toString();

        // Showing selected spinner item
        Toast.makeText(parent.getContext(), "You selected: " + label,
                Toast.LENGTH_LONG).show();

    }

    @Override
    public void onNothingSelected(AdapterView<?> arg0) {


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
