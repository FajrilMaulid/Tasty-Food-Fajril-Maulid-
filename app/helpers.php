<?php

use App\Models\blog;
use App\Models\card;
use App\Models\galeri;
use App\Models\section;
use App\Models\setting;

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

    function get_blog_data($key){
        $data = blog::where('post_as', $key)->first();
        if(isset($data)){
            return $data;
        }
    }

    function get_blog2_data(){
        $data = blog::latest()->paginate(4);
        return $data;
    }

    function get_card_data(){
        $data = card::all();
        return $data;
    }

    function get_slider_data($key){
        $data = galeri::where('post_as', $key)->first();
        if(isset($data)){
            return $data;
        }
    }

    // Tolong