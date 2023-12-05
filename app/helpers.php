<?php

use App\Models\berita;
use App\Models\card;
use App\Models\galeri;
use App\Models\section;
use App\Models\setting;
use App\Models\slider;

    function get_setting_value($key){
        $data = setting::where('key', $key)->first();
        if(isset($data->value)){
            return $data->value;
        }else{
            return 'empty';
        }
    }

    function get_section_data($key){
        $data = section::where('post_as', $key)->first();
        if(isset($data)){
            return $data;
        }
    }

    function get_berita_data($key){
        $data = berita::where('post_as', $key)->first();
        if(isset($data)){
            return $data;
        }
    }

    function get_berita2_data(){
        $data = berita::latest()->paginate(4);
        return $data;
    }

    function get_card_data(){
        $data = card::all();
        return $data;
    }

    function get_slider_data(){
        $data = slider::all();
        return $data;
    }

    function get_galeri_data($key){
        $data = galeri::where('post_as', $key)->first();
        if(isset($data)){
            return $data;
        }
    } 