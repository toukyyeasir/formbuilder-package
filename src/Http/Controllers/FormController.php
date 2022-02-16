<?php

namespace Toukyyeasir\Form\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Toukyyeasir\Form\Models\Form;

class FormController extends Controller
{
    public function index(){
        return view('form::form');
    }
    public function send(Request $request){

        $inputValue = $request->all(); 

        
        $arrayTostring = implode (',',$request->input('brand'));
        
        $inputValue['brand'] = $arrayTostring;
      
        Form::create($inputValue);

        
        
        
        
    }
}
