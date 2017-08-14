<?php

class HelloController extends BaseController
{
    public function showIndex()
    {
        return View::make('index');
    }

    public function showForm()
    {
        return View::make('hello.form');
    }

    public function postForm()
    {
        return View::make('hello.post', array('name' => Input::get('name')));
    }

    public function showBlade()
    {
        
       return View::make('hello.blade');
  
    }
}
