<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class controler1 extends Controller
{
    public function ok(){
        $nom=$_POST['nom'];
        $post=$_POST['postnom'];
        function envoi($nom,$postnom){
            $data=[
                "nom"=>$nom,
                "postnom"=>$postnom
            ];
            return view('pdf',['data'=>$data]);
        }
        envoi($nom,$post);
        return view('preparation',["nom"=>$nom,"postnom"=>$post]);
    }
    public function telecharger(){
        $pdf=App::make('dompdf.wrapper');
        $pdf->loadView('pdf');
       return $pdf->stream();
    }

    function envoi($nom,$postnom){
        $data=[
            "nom"=>$nom,
            "postnom"=>$postnom
        ];
        return view('pdf',['data'=>$data]);
    }
    public function generatePDF($view,$data){
        $html=view($view,["data"=>$data])->render();
        $dompdf=new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();
        return $dompdf->stream('nathan.pdf');
    }
}
