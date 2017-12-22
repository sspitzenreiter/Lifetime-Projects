package com.blu.coloring.activity;

import android.app.Activity;
import android.database.sqlite.SQLiteException;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentActivity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.FrameLayout;
import android.widget.ListView;
import android.support.v4.app.FragmentActivity;

import com.blu.coloring.R;
import com.blu.coloring.database.Contacts;
import com.blu.coloring.database.CustomListAdapter;
import com.blu.coloring.database.DatabaseHandler;

import java.util.ArrayList;
import java.util.List;

public class HomeFragment extends Fragment{
    private ListView listView;
    private CustomListAdapter adapter;
    private static final int CONTENT_VIEW_ID = 10101010;
    public HomeFragment(){

    }






    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState){
        View rootView = inflater.inflate(R.layout.fragment_home, container,false );
        return rootView;
    }



    @Override
    public void onAttach(Activity activity){
        super.onAttach(activity);

    }

    @Override
    public void onDetach(){
        super.onDetach();
    }
}
