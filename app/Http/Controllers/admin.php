<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function home()
    {
        $data = [
            'regular'           => ticket::where('jenis', '1')->count(),
            'premium'           => ticket::where('jenis', '2')->count(),
            'platinum'          => ticket::where('jenis', '3')->count(),
            'total'             => ticket::count(),
        ];
        return View('admin.home', $data);
    }

    public function pemesan()
    {
        $data = [
            'dataPemesan'           => ticket::all(),
        ];
        return View('admin.pemesan', $data);
    }

    public function laporan()
    {
        $data = [
            'Laporan'           => ticket::all(),
        ];
        return View('admin.laporan', $data);
    }

    public function checkin()
    {
        if (isset($_GET['id'])) {
            $id_checkin = $_GET['id'];

            $data = [
                'dataCheckin'           => ticket::where('id_ticket', "$id_checkin")->get(),
            ];
        } else {
            $data = [];
        }
        return View('admin.checkin', $data);
    }


    public function checkin_action(Request $request)
    {
        $id_ticket          = $request->id_ticket;
        $check              = ticket::where('id_ticket', "$id_ticket")->get();
        $id                 = $check[0]->id;
        $nama              = $check[0]->nama;
        $stat               = ticket::find($id);

        if ($check[0]->checkin == 1) {
            return redirect("/admin/checkin")->with('danger', 'Tiket ' . $id_ticket . " Sudah Digunakan!\n Anda Tidak Dapat Masuk Menggunakan tiket ini lagi");
        } else {

            $stat->checkin  = 1;
            $stat->save();

            return redirect("/admin/checkin?id=$id_ticket")->with('success', 'Tiket ' . $id_ticket . " Berhasil Check In!\n Silahkan Masuk $nama");
        }
    }
}
