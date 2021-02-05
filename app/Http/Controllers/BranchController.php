<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    public function index(Request $request)
    {
        $branches = Branch::get();

        return view('branches', [
            'branches' => $branches,
        ]);
    }

    public  function  edit(Branch $branch)
    {

        $banks = Bank::get();

        return view('editbranch', [
            'branch' => $branch,
            'banks' => $banks,
        ]);
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'bank_id' => 'required',
            'branch_name' => 'required',
            'branch_code' => 'required',
        ]);

        $branch = Branch::find($id);
        $branch->bank_id = $request->bank_id;
        $branch->branch_name = $request->branch_name;
        $branch->branch_code = $request->branch_code;
        $branch->telephone = $request->telephone;
        $branch->save();

        return redirect()->route('branches')->with('status', 'Branch has been updated!');
    }
}
