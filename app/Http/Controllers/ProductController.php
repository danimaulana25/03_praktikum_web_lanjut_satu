<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product1(){
        return view ('product')
        ->with ('nama_produk','Kapas')
        ->with ('link','https://shopee.co.id/Kapas-Selection(35-50-Gr)-i.275076304.5439222257?sp_atk=1c1de89d-fc78-44e2-a8e7-5c1a8b7d0f61');
    }
    public function product2(){
        return view ('product')
        ->with ('nama_produk','Gunting')
        ->with ('link','https://shopee.co.id/Gunting-Potong-Bahan-Kain-Tailor-Scissors-Gunting-Kodok-merk-BUTTERFLY-i.10538513.1381111232?sp_atk=f676d47e-7821-4096-bb5c-2715739be4a8');
    }
    public function product3(){
        return view ('product')
        ->with ('nama_produk','Obeng')
        ->with ('link','https://shopee.co.id/Obeng-bolak-balik-amerika-4-inch-GJ1024-SOSOYO-i.220059560.6336558740?sp_atk=40c2b523-65c3-48fb-a10b-fd9b586c9a9f');
    }
}