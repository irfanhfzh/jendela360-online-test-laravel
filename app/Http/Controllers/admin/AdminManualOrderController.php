<?php

namespace App\Http\Controllers\admin;

use App\Models\Status;
use App\Models\DataMobil;
use App\Mail\OrdersSuccess;
use App\Models\ManualOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AdminManualOrderController extends Controller
{
    public function index()
    {
        $manualOrders = ManualOrder::info()->latest()->paginate(10);
        return view('admin.manual-orders.manual-order', compact('manualOrders'));
    }

    public function insert()
    {    
        $dataMobil = DataMobil::get();
        return view('admin.manual-orders.insert-manual-order', compact('dataMobil'));
    }

    public function insertAction(Request $request)
    {
        $this->validate($request, [
            'status_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'address' => 'required',
            'data_mobil_id' => 'required|integer',
        ]);

        $editManualOrder = new ManualOrder;
        $editManualOrder->status_id = $request->status_id;
        $editManualOrder->name = $request->name;
        $editManualOrder->email = $request->email;
        $editManualOrder->no_hp = $request->no_hp;
        $editManualOrder->address = $request->address;
        $editManualOrder->data_mobil_id = $request->data_mobil_id;
        $editManualOrder->save();
        
        Mail::to($request->email)->send(new OrdersSuccess);

        return redirect()->route('admin.manual-orders')->with('success','You have successfully Insert Data Mobil!');
    }

    public function edit($id)
    {
        $row = ManualOrder::find($id);
        $dataMobil = DataMobil::get();
        $dataStatus = Status::get();
        return view('admin.manual-orders.edit-manual-order', compact('row', 'dataMobil', 'dataStatus'));
    }

    public function editAction(Request $request)
    {
        $this->validate($request, [
            'status_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'address' => 'required',
            'data_mobil_id' => 'required|integer',
        ]);

        $editManualOrder = ManualOrder::find($request->id);
        $editManualOrder->status_id = $request->status_id;
        $editManualOrder->name = $request->name;
        $editManualOrder->email = $request->email;
        $editManualOrder->no_hp = $request->no_hp;
        $editManualOrder->address = $request->address;
        $editManualOrder->data_mobil_id = $request->data_mobil_id;
        $editManualOrder->save();

        return redirect()->route('admin.manual-orders')->with('success','You have successfully Edit Data Mobil!');
    }

    public function delete($id)
    {
        $row = ManualOrder::find($id);
        
        $row->delete();

        return redirect()->route('admin.manual-orders')->with('delete','You have successfully Delete Data Mobil!');
    }
}
