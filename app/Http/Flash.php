<?php

namespace App\Http;


class Flash {

    public function message($tittle, $message)
    {
        session()->flash('flash_message', [
        
            'tittle' => $tittle,
            
            'message'=> $message,
            
            'level'  => 'info'
        
        
        ]);
        
    }
    
    
    public function sucess($title, $message)
    {
        session()->flash('flash_message',[
            
            'tittle' => $tittle,
            
            'message'=> $message,
            
            'level'  => 'success'
        ]);
    }
}