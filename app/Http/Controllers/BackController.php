<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Formpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BackController extends Controller
{
    public function listQuestionnaires()
    {
        return view('admin.questionnaires.list');
    }

    public function ajoutFormulaire()
    {
        $formulaires = Form::all();
        $redirectUrl = url('/') . '/admin/ajout-formulaire';
        return view('admin.formulaires.ajout-formulaire')->with(compact('formulaires', 'redirectUrl'));
    }

    public function soumettreFormulaire(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|unique|max:100'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        $form = Form::create([
            'nom' => $request->input('nom')
        ]);
        return response()->json(['success' => 'table-formulaires']);
    }

    public function ajoutPageDansFormulaire($formId)
    {
        $formulaire = Form::find($formId);
        $incrementation = count($formulaire->formpages)+1;
        $pages = $formulaire->formpages;
        $redirectUrl = url('/') . '/admin/ajout-page/'.$formId;
        return view('admin.pages.ajout-page')->with(compact('formulaire','incrementation','pages','redirectUrl'));
    }

    public function soumettrePage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        $formpage = Formpage::create([
            'nom' => $request->input('nom'),
            'form_id' => $request->input('id')

        ]);
        return response()->json(['success' => 'table-pages']);
    }
}
