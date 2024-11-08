<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $details = Detail::orderBy('id', 'desc')->get();
        return view('details.details', compact('details'));
    }

    public function create()
    {
        return view('details.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:details,email',
            'phonenumber' => 'required|unique:details,phonenumber',
            'address' => 'required',
            'gender' => 'required',
            'blood_group' => 'required',
        ]);

        $detail = new Detail();

        $detail->name = $request->name;
        $detail->email = $request->email;
        $detail->phonenumber = $request->phonenumber;
        $detail->address = $request->address;
        $detail->gender = $request->gender;
        $detail->blood_group = $request->blood_group;
        if ($detail->save()) {
            return redirect()->route('details.index')->with(['success' => 'Detail saved successfully']);
        } else {
            return redirect()->route('details.index')->with(['unsuccess' => 'Detail not saved']);
        }
    }

    public function delete($id)
    {
        $detail = Detail::where('id', $id)->first();
        if ($detail) {
            $detail->delete();
            return redirect()->route('details.index')->with(['success' => 'Detail deleted successfully']);
        } else {
            return redirect()->route('details.index')->with(['unsuccess' => 'Detail not deleted']);
        }
    }

    public function edit($id)
    {
        $detail = Detail::where('id', $id)->first();
        if ($detail) {
            return view('details.edit', compact('detail'))->with(['success' => 'Data Found']);;
        } else {
            return redirect()->route('details.index')->with(['unsuccess' => 'Data not Found']);
        }
    }


    public function update($id)
    {

        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phonenumber' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'blood_group' => 'required',
        ]);


        $detail = Detail::where('id', $id)->first();
        if ($detail) {
            $detail->name = request('name');
            $detail->email = request('email');
            $detail->phonenumber = request('phonenumber');
            $detail->address = request('address');
            $detail->gender = request('gender');
            $detail->blood_group = request('blood_group');
            if ($detail->save()) {
                return redirect()->route('details.index')->with(['success' => 'Detail updated successfully']);
            } else {
                return redirect()->route('details.edit', $id)->with(['unsuccess' => 'Detail not updated']);
            }
        } else {
            return redirect()->route('details.index')->with(['unsuccess' => 'Detail not found']);
        }
    }
}
