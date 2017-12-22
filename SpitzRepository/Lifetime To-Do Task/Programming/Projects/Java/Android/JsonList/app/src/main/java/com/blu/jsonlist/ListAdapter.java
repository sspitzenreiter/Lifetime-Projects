package com.blu.jsonlist;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.TextView;

import org.w3c.dom.Text;

import java.util.List;

/**
 * Created by BlueLightning on 5/9/2016.
 */
public class ListAdapter extends BaseAdapter {

    private List<Anggota> anggotaList;
    private LayoutInflater inflater;
    private Activity activity;
    private TextView nama, ktt, thn;

    public ListAdapter(Activity activity, List<Anggota> anggotaList){
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
        if(inflater == null){
            inflater = (LayoutInflater) activity.getSystemService(Context.LAYOUT_INFLATER_SERVICE);

        }

        if(convertView == null){
            convertView = inflater.inflate(R.layout.list_name, null);
        }

        nama = (TextView) convertView.findViewById(R.id.nama);
        ktt = (TextView) convertView.findViewById(R.id.ktt);
        thn = (TextView) convertView.findViewById(R.id.thn);

        Anggota setter = anggotaList.get(position);

        nama.setText(setter.getNama());
        ktt.setText(setter.getktt());
        thn.setText(setter.getthn());
        return convertView;
    }

}
