<?php

namespace App\Http\Controllers;

use App\User;
use App\Setting;
use App\Pengaduan;
use App\Tanggapan;
use Session;
use PDF;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function complaint(){
        $user = Session::get('user');
        return view('masyarakat.complaint', compact('user'));
    }

    public function store(Request $request)
    {
        $user_id = Session::get('user')->id;
        $isi_laporan = $request->isi_laporan;
        $foto = $request->foto;

        $data = new Pengaduan();
        $data->tgl_pengaduan = date('Y-m-d H:i:s');
        $data->user_id = $user_id;
        $data->isi_laporan = $isi_laporan;
        $data->foto = $foto;
        $data->status = '1';
        $data->save();
        return redirect()->action('UserController@dashboard');  
    }

    public function show(){
        $user = Session::get('user');
        $report = Pengaduan::all();
        $report->load('users');
        
        $setting = Setting::all();

        $wait = Pengaduan::where('status' , '1')->get();
        $work = Pengaduan::where('status' , '2')->get();
        $done = Pengaduan::where('status' , '3')->get();
        return view('admin.report', compact('report', 'setting', 'work', 'wait', 'done', 'user'));
    }

    public function process(){
        $user = Session::get('user');

        $report = Pengaduan::where('status' , '1')->get();
        $report->load('users');

        return view('admin.process', compact('report', 'user'));
    }

    public function processing(Request $request, $id){
        $report = Pengaduan::where('id', $id)->get();
        $report->load('users');

        $user = Session::get('user');
        return view('admin.processing', compact('user', 'report'));
    }

    public function processupdate (Request $request, $id) {
        Pengaduan::find($id)->update(['status' => 2]);

        return redirect()->action('ComplaintController@process');
    }

    public function feedback(){
        $user = Session::get('user');

        $report = Pengaduan::where('status' , '2')->get();
        $report->load('users');

        return view('admin.feedback', compact('report', 'user'));
    }

    public function feedbacking(Request $request, $id){
        $report = Pengaduan::where('id', $id)->get();
        $report->load('users');

        $user = Session::get('user');
        return view('admin.feedbacking', compact('user', 'report'));
    }

    public function feedbackupdate(Request $request, $id){

        $tanggapan = $request->tanggapan;
        $pengaduan_id = $request->pengaduan_id;
        $user_id = Session::get('user')->id;


        $data = new Tanggapan();
        $data->tanggapan = $tanggapan;
        $data->user_id = $user_id;
        $data->pengaduan_id = $pengaduan_id;
        $data->save(); 

        Pengaduan::find($id)->update(['status' => 3]);

        // Tanggapan::create(['user_id' => $request->user_id, 'tanggapan' => $request->tanggapan, 'pengaduan_id' => $request->pengaduan_id,]);

        return redirect()->action('ComplaintController@process');
        return $data;
    }

    public function generate(){
        $user = Session::get('user');

        $report = Tanggapan::get();
        $report->load('users', 'pengaduans');

        return view('admin.generate-report', compact('report', 'user'));
    }

    public function generating(Request $request, $id){
        
        $report = Tanggapan::where('id', $id)->get();
        $report->load('users', 'pengaduans');

        $user = Session::get('user');
        return view('admin.generating', compact('user', 'report'));
    }

    public function detail($id){
        $report = Pengaduan::where('id', $id)->get();
        $report->load('users','tanggapans');

        // $test = Tanggapan::find($report->id)->get();

        $user = Session::get('user');
        return view('masyarakat.complaint_detail', compact('user', 'report'));
    }

    public function reportsort(Request $request, $id){
        Setting::where('id', $id)->update([
            'report_sort' => $request->report_sort,
        ]);
        return redirect()->action('ComplaintController@show');
    }

    public function admindetail ($id)
    {
        $report = Pengaduan::where('id', $id)->get();
        $report->load('users');

        $user = Session::get('user');
        return view('admin.report-detail', compact('user', 'report'));
    }

    public function test()
    {
        $user = Session::get('user');
        $report = User::find($user->id)->pengaduans()->get();
        return $report;
    }

    public function pdf(){
        
        $user = Session::get('user');

        $report = Tanggapan::get();
        $report->load('users', 'pengaduans');
        return view('admin.pdf', compact('user', 'report'));
    }

    public function pdfdetail(Request $request, $id){
        
        $report = Tanggapan::where('id', $id)->get();
        $report->load('users', 'pengaduans');

        $user = Session::get('user');
        return view('admin.pdf-detail', compact('user', 'report'));
    }

    public function getDownload($id)
    {
        $report = Tanggapan::where('id', $id)->get();
        $report->load('users', 'pengaduans');

        $user = Session::get('user');

        $pdf = PDF::loadView('admin.cetak', ['user' => $user, 'report' => $report]);
        return $pdf->download($user->username.'_' . date('Y-m-d H:i:s') . '_Laporan.pdf');
        // return $pdf->stream();
    }
}
