<?php

class Home extends Controller
{
   public function index()
   {
      $data = [
         'title' => 'Home',
      ];

      $this->view('_inc/header', $data);
      $this->view('home/index', $data);
      $this->view('_inc/footer', $data);
   }
}
