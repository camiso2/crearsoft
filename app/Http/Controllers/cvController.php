<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\flash;
use Illuminate\Support\Facades\Redirect;

class cvController extends Controller
{



    public function cvjaiver()

    {

        $data = file_get_contents("technologies.json");
        $technologies = json_decode($data, true);

        $data_videos = file_get_contents("videos.json");
        $project = json_decode($data_videos, true);

        return view('cvjaiver', compact('technologies',"project"));
    }


	

	public function contact_cv(Request $request){
        
        //dd($request->all());
        $this->validate($request, [
            '_token'=>'required',
            'name'=>'required|max:30|min:3|string',
            'company'=>'required|max:30|min:2|string',
            'email' => 'required|email|max:50|min:3|string',
            'mensaje'=>'required|max:200|min:4|string'
        ]);
     

        $rules =  array('g-recaptcha-response' => 'recaptcha'); 
        $validator = Validator::make( 
           [ 'g-recaptcha-response' => Input::get('g-recaptcha-response') ], 
           $rules, 
             // Mensaje de error personalizado 
            [ 'g-recaptcha-response' => 'El captcha ingresado es incorrecto.']
        ); 
      
        if ($validator->passes()) { 

            $mensaje  = "";
            $para     = 'camiso2@gmail.com';
            $titulo   = 'Email enviado desde formulario de mensajes crearsoft.co/cv_jaiver';
            $mensaje .= "Una persona se suscribió te escribiò : " . "\n\n";
            $mensaje .= "Nombre: " . $request->input('name'). "\n\n";
            $mensaje .= "Compañia: " . $request->input('company'). "\n\n";
            $mensaje .= "E-mail: " . $request->input('email'). "\n\n";
            $mensaje .= "Mensaje: " . $request->input('mensaje'). "\n\n";
            $mensaje .= 
            $cabeceras = 'From: info@crearsoft.co' . "\r\n" .'Reply-To: info@crearsoft.co' . "\r\n" .'X-Mailer: PHP/' . phpversion();
            $success = mail($para, utf8_decode($titulo), utf8_decode($mensaje) , $cabeceras);

            if (!$success) {
                return redirect()->back()->with('error', 'No se ha podido enviar el mensaje, por favor intente de nuevo.');
              }else{
                $message= (string) "Hola ".$request->input('nombre').", en poco tiempo daré respuesta a su mensaje.";
               // $messageWhatsApp  = str_replace(" ","%",$ar);
                //return redirect()->back()->with(compact('$messageWhatsApp'));
                return Redirect::back()->with('success', $message);

              }
        } else { 
            //return View::make('contact')->withErrors($validator); 
           return back()->with('error', 'Error al enviar el mensaje, Usted debe validar que es un usuario, intente nuevamente !');
           } 


    }
   
}
