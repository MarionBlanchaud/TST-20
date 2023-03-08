<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {

        $users = Users::all();

        return response()->json($users);
    }

    public function read($id)
    {

        $users = Users::find($id);

        return response()->json($users);
    }

    public function update(Request $request, $id)
    {
        $account = Users::find($id);

        if (!$account) {
            return response(null, 404);
        }

        $title = $request->input('title');

        $account->title = $title;

        if ($account->save()) {
            return response()->json($account);
        } else {
            return response(null, 500);
        }
    }
}
