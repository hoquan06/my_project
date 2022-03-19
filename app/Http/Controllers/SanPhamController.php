<?php

namespace App\Http\Controllers;

use App\Http\Requests\KiemTraDuLieuTaoSanPham;
use App\Models\SanPham;
use App\Models\DanhMucSanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function index()
    {
        $list_danh_muc = DanhMucSanPham::where('is_open', 1)->get();
        // $list_danh_muc = DanhMucSanPham::all();
        return view('admin.pages.san_pham.index', compact('list_danh_muc'));
    }

    public function HamTaoSanPhamDayNe(KiemTraDuLieuTaoSanPham $bienNhanDuLieu)
    {
        $data = $bienNhanDuLieu->all();
        SanPham::create($data);

        return response()->json(['thongBao' => 1235]);
    }

    public function TraChoMotDoanJsonDanhSachSanPham()
    {
        $data = SanPham::join('danh_muc_san_phams', 'san_phams.id_danh_muc', 'danh_muc_san_phams.id')
                       ->select('san_phams.*', 'danh_muc_san_phams.ten_danh_muc')
                       ->get();

        return response()->json(['dulieuneban' => $data]);
    }

    public function DoiTrangThaiSanPham($id)
    {
        $san_pham = SanPham::find($id);
        if($san_pham) {
            $tinh_trang_moi = $san_pham->is_open == true ? false : true;
            $san_pham->is_open = $tinh_trang_moi;
            $san_pham->save();

            return response()->json(['status' => true]);
        }
    }

    public function XoaSanPham($id)
    {
        $san_pham = SanPham::find($id);
        if($san_pham) {
            $san_pham->delete();

            return response()->json(['status' => true]);
        }
    }
}
