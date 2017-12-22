package com.blu.test12;

/**
 * Created by BlueLightning on 4/29/2016.
 */
public class Anggota {

    String name,jk;

    public Anggota(){

    }

    public Anggota(String name, String jk){
        this.name = name;
        this.jk = jk;
    }

    public void setName(String name){
        this.name = name;
    }

    public String getName(){
        return name;
    }

    public void setJk(String jk){
        this.jk = jk;
    }

    public String getJk(){
        return jk;
    }
}
