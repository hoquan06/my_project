<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDanhMucSanPhamRequest;
use App\Models\DanhMucSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhMucSanPhamController extends Controller
{
    public function index()
    {
        $danh_muc_cha = DanhMucSanPham::where('id_danh_muc_cha', 0)->get();
        $sql = 'SELECT a.*, b.ten_danh_muc as `ten_danh_muc_cha`
                FROM `danh_muc_san_phams` a LEFT JOIN `danh_muc_san_phams` b
                on a.id_danh_muc_cha = b.id';
        $data = DB::select($sql);
        return view('admin.pages.danh_muc_san_pham.index', compact('data', 'danh_muc_cha'));
    }

    public function store(CreateDanhMucSanPhamRequest $request)
    {
        DanhMucSanPham::create([
            'ten_danh_muc'      =>  $request->ten_danh_muc,
            'slug_danh_muc'     =>  $request->slug_danh_muc,
            'hinh_anh'          =>  $request->hinh_anh,
            'id_danh_muc_cha'   =>  empty($request->id_danh_muc_cha) ? 0 : $request->id_danh_muc_cha,
            'is_open'           =>  $request->is_open,
        ]);
        // $data = $request->all();
        // DanhMucSanPham::create($data);
        toastr()->success('Đã thêm mới danh mục thành công!');
        return redirect('/admin/danh-muc-san-pham/index');
    }

    public function doiTrangThai($id)
    {
        // $danh_muc = DanhMucSanPham::where('id', $id)->first();
        $danh_muc = DanhMucSanPham::find($id);
        if($danh_muc) {
            // $tinh_trang_hien_tai = $danh_muc->is_open;
            // $tinh_trang_moi = $danh_muc->is_open == 0 ? 1 : 0;
            // if($tinh_trang_hien_tai) {
            //     $tinh_trang_moi = 0;
            // } else {
            //     $tinh_trang_moi = 1;
            // }
            // $tinh_trang_moi = !$tinh_trang_hien_tai;
            // $sql = 'UPDATE `danh_muc_san_phams` SET `is_open`='. $tinh_trang_moi .' WHERE `id` = ' . $danh_muc->id;
            // DB::update($sql);
            $danh_muc->is_open = !$danh_muc->is_open;
            $danh_muc->save();
            return response()->json([
                'trangThai'         =>  true,
                'tinhTrangDanhMuc'  =>  $danh_muc->is_open,
            ]);
        } else {
            return response()->json([
                'trangThai'         =>  false,
            ]);
        }
    }
}
