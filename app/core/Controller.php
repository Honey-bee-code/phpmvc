<?php

class Controller {
    public function view($view, $data = [])
    {
        include_once '../app/views/'.$view.'.php';
        include_once '../app/templates/'.$view.'.php';
    }

    public function model($model)
    {
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
}