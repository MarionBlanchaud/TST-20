<?php

namespace App\Http\Controllers;

use App\Models\Stories;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function list()
    {
        $stories = Stories::all();
        return response()->json($stories);
    }

    public function read($id)
    {
        $stories = Stories::find($id);
        return response()->json($stories);
    }

    public function filter($status)
    {
        $draftorpublic = Stories::find($status);

        return response()->json($draftorpublic);
    }

    public function create(Request $request) {
        // Extraction des valeurs passées de la body de la requête
        $title = $request->input('stories');

        // On crée une nouvelle instance, puis on lui définit la propriété title
        $stories = new Stories();
        $stories->title = $title;

        // On sauvegarde, puis on gère la réponse avec le code HTTP qui convient
        // 201 : Created
        // 500 : Internal Server Error
        if ($stories->save()) {
            return response()->json($stories, 201);
        } else {
            return response(null, 500);
        }
}











    public function update(Request $request, $id)
    {
        $stories = Stories::find($id);

        if (!$stories) {
            return response(null, 404);
        }

        $title = $request->input('title');

        $stories->title = $title;

        if ($stories->save()) {
            return response()->json($stories);
        } else {
            return response(null, 500);
        }
    }

    public function delete($id) {

        $stories= Stories::find($id);

        if (!$stories) {
            return response(null, 404);
        }

        Stories::delete($id);

        // if (Stories::delete($id)) {
        //     return response(null, 200);
        // } else {
        //     return response(null, 500);
        // }
}
}


