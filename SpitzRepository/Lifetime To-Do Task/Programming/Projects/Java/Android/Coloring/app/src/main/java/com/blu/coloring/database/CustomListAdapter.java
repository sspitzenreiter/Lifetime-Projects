package com.blu.coloring.database;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.TextView;

import com.blu.coloring.R;

import java.util.List;


public class CustomListAdapter extends BaseAdapter {
    private Activity activity;
    private LayoutInflater inflater;
    private List<Contacts> contactItem;


    public CustomListAdapter(Activity activity, List<Contacts> contactItem) {
        this.activity = activity;
        this.contactItem = contactItem;
    }

    @Override
    public int getCount() {
        return contactItem.size();
    }

    @Override
    public Object getItem(int location) {
        return contactItem.get(location);
    }

    @Override
    public long getItemId(int position) {
        return position;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {

        if (inflater == null)
            inflater = (LayoutInflater) activity
                    .getSystemService(Context.LAYOUT_INFLATER_SERVICE);
        if (convertView == null)
            convertView = inflater.inflate(R.layout.list_row, null);


        TextView name = (TextView) convertView.findViewById(R.id.name);
        TextView no = (TextView) convertView.findViewById(R.id.no);


        // getting movie data for the row
        Contacts m = contactItem.get(position);



        // title
        name.setText(m.getName());

        // rating
        no.setText(m.getPhoneNumber());



        return convertView;
    }

}