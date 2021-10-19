<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdministratorModel;
use App\Models\KreditModel;
use App\Models\KreditDetailModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\KreditExport;
use App\Exports\BCA1Export;
use App\Exports\BCA2Export;
use App\Exports\BNIExport;
use App\Exports\BRIExport;
use App\Exports\CIMBExport;
use App\Exports\JatimExport;
use App\Exports\MAN1Export;
use App\Exports\MAN2Export;
use App\Exports\MJKExport;
use App\Exports\OppoExport;
use App\Exports\R25Export;
use App\Exports\R28AMExport;
use App\Exports\R28IMExport;
use App\Exports\UlokaExport;
use App\Exports\YakultExport;


class Administrator extends Controller
{
    public function index()
    {
        return view('template/header')
            . view('index', ["data" => AdministratorModel::all()])
            . view('template/footer');
    }

    public function tambahMember()
    {
        return view('template/header')
            . view('tambahMember')
            . view('template/footer');
    }

    public function kreditNasabah()
    {
        return view('template/header')
            . view('kreditNasabah', [
                "data"  =>  KreditModel::where('STATUS', 'Yes')->orderBy('id', 'desc')->get(),
                "i"     =>  1
            ])
            . view('template/footer');
    }

    public function tambahPostMember(Request $request)
    {
        $NAMA = $request->input('ID_1');
        $ALAMAT = $request->input('ID_2');
        $KOTA = $request->input('ID_3');
        $PROVINSI = $request->input('ID_4');
        $TELEPON = $request->input('ID_5');
        $NO_KTP = $request->input('ID_6');
        $PIN_ATM = $request->input('ID_7');
        $GENDER = $request->input('ID_8');
        $DATA_MARKETING = $request->input('ID_9');
        $PEKERJAAN = $request->input('ID_10');
        $REKOMENDASI_DARI = $request->input('ID_11');
        $KETERANGAN = $request->input('ID_12');

        $fillme = new AdministratorModel;
        $fillme->NAMA               = $NAMA;
        $fillme->ALAMAT             = $ALAMAT;
        $fillme->KOTA               = $KOTA;
        $fillme->PROVINSI           = $PROVINSI;
        $fillme->TELEPON            = $TELEPON;
        $fillme->KTP                = $NO_KTP;
        $fillme->PIN_ATM            = $PIN_ATM;
        $fillme->GENDER             = $GENDER;
        $fillme->DATA_MARKETING     = $DATA_MARKETING;
        $fillme->PEKERJAAN          = $PEKERJAAN;
        $fillme->REKOMENDASI_DARI   = $REKOMENDASI_DARI;
        $fillme->KETERANGAN         = $KETERANGAN;
        $fillme->save();

        return back()->with('status', 'Berhasil menambahkan member!');
    }

    public function tambahDataKredit()
    {
        return view('template/header')
            . view('tambahDataKredit', [
                'randomize_ID'  => Str::random(40),
                'nama_member'   => AdministratorModel::orderBy('NAMA')->get()
            ])
            . view('template/footer');
    }

    public function postDataKredit(Request $request)
    {
        $JENIS_KREDIT               = $request->input('ID_1');
        $NO_KREDIT                  = $request->input('ID_2');
        $NAMA_NASABAH               = $request->input('ID_3');
        $ALAMAT                     = $request->input('ID_4');
        $MARKETING_KOLEKTOR         = $request->input('ID_5');
        $JUMLAH_PENGAJUAN           = $request->input('ID_6');
        $JANGKA_WAKTU               = $request->input('ID_7');
        $JUMLAH_ANGSURAN_POKOK      = $request->input('ID_8');
        $JATUH_TEMPO                = $request->input('ID_9');
        $KETERANGAN                 = $request->input('ID_10');
        $ADMIN                      = $request->input('ID_11');

        $JUMLAH_ANGSURAN_POKOK      = str_replace("Rp. ", "",$JUMLAH_ANGSURAN_POKOK);

        $NAMA_REAL = AdministratorModel::where('ID', $NAMA_NASABAH)->first();

        $fillme = new KreditModel;

        $fillme->JENIS_KREDIT       = $JENIS_KREDIT;
        $fillme->NO_KREDIT          = $NO_KREDIT;
        $fillme->NAMA               = $NAMA_REAL->NAMA;
        $fillme->ALAMAT             = $ALAMAT;
        $fillme->MARKETING          = $MARKETING_KOLEKTOR;
        $fillme->JUMLAH_PENGAJUAN   = $JUMLAH_PENGAJUAN;
        $fillme->JANGKA_WAKTU       = $JANGKA_WAKTU;
        $fillme->JATUH_TEMPO        = $JATUH_TEMPO;
        $fillme->KETERANGAN         = $KETERANGAN;
        $fillme->STATUS             = "Yes";
        $fillme->ADMIN              = $ADMIN;
        $fillme->save();

        $time = strtotime($JATUH_TEMPO);

        for ($i = 0; $i < $JANGKA_WAKTU; $i++) {
            $final = date("Y-m-d", strtotime("+" . $i . " month", $time));

            $fillthere = new KreditDetailModel;
            $fillthere->NO_KREDIT       = $NO_KREDIT;
            $fillthere->NAMA            = $NAMA_NASABAH;
            $fillthere->NOMINAL         = $JUMLAH_ANGSURAN_POKOK;
            $fillthere->JATUH_TEMPO     = $final;
            $fillthere->save();
        }

        return redirect()->route('kreditNasabah')->with('berhasil', 'Berhasil menambahkan kredit!');
    }

    public function getDataKredit(Request $request)
    {
        $id = $request->input('ID');
        return view('template/header')
            . view('tambahDataKreditChanged', [
                'randomize_ID'  => Str::random(40),
                'nama_member'   => AdministratorModel::orderBy('NAMA')->get(),
                'identitas'     => AdministratorModel::where('ID', $id)->get()
            ])
            . view('template/footer');
    }

    public function cekDetailNasabah(Request $request)
    {
        $id = $request->input('ID');
        return view('template/header') . view('detailPinjaman', [
            "id"  =>  KreditDetailModel::where('NO_KREDIT', $id)->first(),
            "data"  =>  KreditDetailModel::where('NO_KREDIT', $id)->get(),
            "identitas" => KreditModel::where('NO_KREDIT',$id)->get(),
            "totalBelumLunas" => KreditDetailModel::where('NO_KREDIT',$id)->where('LUNAS','BELUM')->sum('NOMINAL'),
            "kasbonBelumLunas" => KreditDetailModel::where('NO_KREDIT',$id)->sum('KASBON'),
            "nama"  =>  KreditModel::where('NO_KREDIT',$id)->first()
        ])
            . view('template/footer');
    }

    public function realisasiKredit()
    {
        return view('template/header')
            . view('realisasiKredit')
            . view('template/footer');
    }

    public function updateDetailNasabah(Request $request)
    {
        $ID = $request->input('ID_UTAMA');
        $KUNCI = $request->input('ID_KUNCI');
        $DATA = $request->input('STATUS_PELUNASAN');
        $KASBON = $request->input('KASBON');

        $how_many = KreditDetailModel::where('NO_KREDIT', $ID)->count();

        for ($i = 0; $i < $how_many; $i++) {
            $fillme = KreditDetailModel::find($KUNCI[$i]);
            $fillme->KASBON = $KASBON[$i];
            $fillme->LUNAS = $DATA[$i];
            $fillme->save();
        }

        $NEW_DATA = array_count_values($DATA);

        $fillthat = KreditModel::where('NO_KREDIT' , $ID)->update([
            "LUNAS_BRP" =>  $NEW_DATA['Sudah']
        ]);

        return back()->with('nice', 'Berhasil merubah status!');
    }

    public function hapusDetailNasabah(Request $request)
    {
        $ID = $request->input('ID_REAL');

        $kredit = KreditModel::where('NO_KREDIT', $ID)->delete();
        $kreditDetail = KreditDetailModel::where('NO_KREDIT', $ID)->delete();

        return redirect()->route('kreditNasabah')->with('terhapus', 'Berhasil menghapus akun!');
    }

    public function lunasiKreditNasabah(Request $request){
        $ID = $request->input('ID_REAL');

        $fillme = KreditDetailModel::where('NO_KREDIT',$ID)->update([
            "STATUS" => "Inactive"
        ]);

        $fillit = KreditModel::where('NO_KREDIT',$ID)->update([
            "STATUS"    =>  "No"
        ]);

        return redirect()->route('kreditNasabah')->with('terlunasi', 'Berhasil melunasi data!');

    }

    public function changedKreditNasabah(Request $request){
        $ID = $request->input('changeMarketing');
        // echo $ID;

        return view('template/header')
            . view('kreditNasabahData', [
                "data"  =>  KreditModel::where('STATUS', 'Yes')->where('MARKETING',$ID)->orderBy('id', 'desc')->get(),
                "i"     =>  1,
                "ID"    =>  $ID
            ])
            . view('template/footer');

    }

    public function export_page(){
        return view('template/header').view('laporan').view('template/footer');
    }

    public function export_excel()
    {
        return Excel::download(new KreditExport, 'Laporan ALL Marketing.xlsx');
    }

    public function export_bca1(){
        return Excel::download(new BCA1Export, 'Laporan BCA 1.xlsx');
    }

    public function export_bca2(){
        return Excel::download(new BCA2Export, 'Laporan BCA 2.xlsx');
    }

    public function export_bni(){
        return Excel::download(new BNIExport, 'Laporan BNI.xlsx');
    }

    public function export_bri(){
        return Excel::download(new BRIExport, 'Laporan BRI.xlsx');
    }

    public function export_cimb(){
        return Excel::download(new CIMBExport, 'Laporan CIMB.xlsx');
    }

    public function export_jatim(){
        return Excel::download(new JatimExport, 'Laporan Jatim.xlsx');
    }

    public function export_man1(){
        return Excel::download(new MAN1Export, 'Laporan MAN 1.xlsx');
    }

    public function export_man2(){
        return Excel::download(new MAN2Export, 'Laporan MAN 2.xlsx');
    }

    public function export_mjk(){
        return Excel::download(new MJKExport, 'Laporan MJK.xlsx');
    }

    public function export_oppo(){
        return Excel::download(new OppoExport, 'Laporan Oppo.xlsx');
    }

    public function export_25(){
        return Excel::download(new R25Export, 'Laporan TGL 25.xlsx');
    }

    public function export_28am(){
        return Excel::download(new R28AMExport, 'Laporan 28 AM.xlsx');
    }

    public function export_28im(){
        return Excel::download(new R28IMExport, 'Laporan 28 IM.xlsx');
    }

    public function export_uloka(){
        return Excel::download(new UlokaExport, 'Laporan Uloka.xlsx');
    }

    public function export_yakul(){
        return Excel::download(new YakultExport, 'Laporan Yakult.xlsx');
    }

}
