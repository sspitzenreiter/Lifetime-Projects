package com.blu.jsonlist;

/**
 * Created by BlueLightning on 5/9/2016.
 */
public class Anggota {

    String _nama, _ktt, _thn;

    public Anggota(){

    }

    public Anggota(String nama, String ktt, String thn){
        this._nama = nama;
        this._ktt = ktt;
        this._thn = thn;
    }
    public void setNama(String nama){
        this._nama = nama;
    }
    
    public String getNama(){
        return _nama;
    }

    public void setktt(String ktt){
        this._ktt = ktt;
    }

    public String getktt(){
        return _ktt;
    }

    public void setthn(String thn){
        this._thn = thn;
    }

    public String getthn(){

        return _thn;
    }
}
