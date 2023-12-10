<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use DataTables;

class UserController extends Controller
{
    use HasFactory;


    public function index(Request $request)
    {

        if($request->ajax())
        {
          
            $data = User::select('id', 'name', 'email')->get();
          
            return Datatables::of($data)->addIndexColumn()
             ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                return $btn;
             })
          

             ->rawColumns(['action'])
             ->make(true);

        }
      
        // return $data;
        return view('admin.index');
    }
}
