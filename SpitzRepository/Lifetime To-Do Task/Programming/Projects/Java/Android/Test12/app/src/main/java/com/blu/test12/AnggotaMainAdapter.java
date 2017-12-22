package com.blu.test12;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ListView;
import android.widget.TextView;

import java.util.List;

/**
 * Created by BlueLightning on 4/29/2016.
 */
public class AnggotaMainAdapter extends BaseAdapter {

    private List<Anggota> anggotaList;
    private LayoutInflater inflated;
    private Activity activity;
    private TextView name, jk;

    public AnggotaMainAdapter(Activity activity, List<Anggota> anggotaList){
        this.activity = activity;
        this.anggotaList = anggotaList;
    }

    @Override
    public int getCount(){
        return anggotaList.size();
    }

    @Override
    public Object getItem(int location){
        return anggotaList.get(location);
    }

    @Override
    public long getItemId(int position){
        return position;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent){
        if(inflated == null){
            inflated = (LayoutInflater) activity.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
        }

        if(convertView == null){
            convertView = inflated.inflate(R.layout.main_list, null);
        }

        name = (TextView) convertView.findViewById(R.id.name);
        jk = (TextView) convertView.findViewById(R.id.jk);
        Anggota got = anggotaList.get(position);
        jk.setText(got.getJk());
        name.setText(got.getName());
        return convertView;
    }


}
