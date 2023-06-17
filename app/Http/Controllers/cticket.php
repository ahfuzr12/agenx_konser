<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;

class cticket extends Controller
{
    public function belitiket(Request $request)
    {
        function random_str(int $length = 64, string $keyspace = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'): string
        {
            if ($length < 1) {
                throw new \RangeException('Length must be a positive integer');
            }
            $pieces = [];
            $max = mb_strlen($keyspace, '8bit') - 1;
            for ($i = 0; $i < $length; ++$i) {
                $pieces[] = $keyspace[random_int(0, $max)];
            }
            return implode('', $pieces);
        }
        $id_ticket                  =  random_str(25);
        $nik                        =  $request->nik;
        $email                      =  $request->email;
        $nohp                       =  $request->nohp;
        $nama                       =  $request->nama;
        $jenis                      =  $request->jenis;
        $alamat                     =  $request->alamat;

        $request->validate(
            [
                'nik'                   =>  'required|unique:ticket|min:16',
                'email'                 =>  'required|unique:ticket',
                'id_ticket'             =>  'unique:ticket',
                'nohp'                  =>  'required|unique:ticket|min:10',
                'nama'                  =>  'required',
                'jenis'                 =>  'required',
            ],
            [
                'nik.required'          =>  'NIK Tidak Boleh Kosong',
                'nik.unique'            =>  'NIK Sudah Terdaftar',
                'nik.min'               =>  'Mohon Masukan NIK yang sesuai',
                'email.required'        =>  'Email Tidak Boleh Kosong',
                'email.unique'          =>  'Email Sudah Terdaftar',
                'id_ticket.required'    =>  'Id Tiket Tidak Boleh Kosong',
                'id_ticket.unique'      =>  'Id Tiket Sudah Terdaftar',
                'nohp.required'         =>  'Nomor Handphone Tidak Boleh Kosong',
                'nohp.unique'           =>  'Nomor Handphone Sudah Terdaftar',
                'nohp.min'              =>  'Mohon Masukan Nomor Handphone yang sesuai',
                'nama.required'         =>  'Nama Lengkap Tidak Boleh Kosong',
                'jenis.required'        =>  'Silahkan Pilih Jenis Tiket Konser',
            ]
        );

        $belitiket = new ticket([

            'id_ticket'                 =>  $id_ticket,
            'nik'                       =>  $nik,
            'email'                     =>  $email,
            'nohp'                      =>  $nohp,
            'nama'                      =>  $nama,
            'jenis'                     =>  $jenis,
            'alamat'                    =>  $alamat,
        ]);

        $belitiket->save();


        return redirect()->route('cetaktiket', $id_ticket)->with('success', 'Selamat ' . $nama . ', Form Pembelian Tiket Berhasil dibuat');
    }

    public function cetaktiket($id_ticket)
    {
        $pembeli               = ticket::where('id_ticket', "$id_ticket")->get();
        $pembeli->id_ticket    = $id_ticket;

        $data = [
            'pembeli'           => $pembeli,
            'id_ticket'         => $id_ticket,
            'nik'               => $pembeli[0]->nik,
            'email'             => $pembeli[0]->email,
            'nohp'              => $pembeli[0]->nohp,
            'nama'              => $pembeli[0]->nama,
            'jenis'             => $pembeli[0]->jenis,
            'alamat'            => $pembeli[0]->alamat,
        ];
        return View('guest.cetaktiket', $data, compact('pembeli'));
    }
}
