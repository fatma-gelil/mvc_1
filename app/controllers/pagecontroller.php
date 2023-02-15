<?php 
class pagecontroller{
    public function about(){
     
      $articles=[[
        'title'=>'about',
        'description'=>'about',
        'url'=>'about'
        ]
      ,
      [
        'title'=>'about2',
        'description'=>'about2',
        'url'=>'about2'
        
      ]];
      return require"app/views/about.view.php";
      return view('about',compact('articles'));
      
    }
}


?>