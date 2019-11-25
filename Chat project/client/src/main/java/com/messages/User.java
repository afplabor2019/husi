package com.messages;

import java.io.Serializable;

public class User implements Serializable {
    String name;
    String picture;
    Status status;

    public String getName(){
        return name;
    }

    public void setName(String name){
        this.name=name;
    }

    public String getPicture(){
        return picture;
    }

    public void setPicture(String picture){
        this.picture=picture;
    }

    public Status getStatus(){
        return status;
    }

    public void setStatus(Status status){
        this.status=status;
    }
}
