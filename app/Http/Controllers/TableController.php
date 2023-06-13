<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function list(){
        return view('table.list', [
            "tables" => Table::all(),
            "servers" => Role::where('name', 'SERVER')->first()->users
        ]);
    }

    public function create(){
        return view('table.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'server_id' => 'required|integer'
        ]);

        Table::create(["server_id" => $request->input('server_id')]);

        return redirect()->route('table.list')->with(["message" => "Tabls has been created successfully."]);
    }

    public function update(Request $request){
        $tables = $request->input('table');
        $server_id = $request->input('server_id');
        foreach($tables as $table){
            Table::find($table)->update([
                "server_id" => $server_id
            ]);
        }
        return redirect()->route('table.list')->with(["message" => "Tabls has been merged successfully."]);
    }


    public function delete(Table $table){
        $table->delete();
        return redirect()->route('table.list')->with(["message" => "Tabls deleted successfully."]);
    }



}

