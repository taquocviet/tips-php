<?php
// gop mang trong php
// them nhung key va value con thieu vao mang hien tai
// tra ve dinh dang object

public function getDoitacAttribute($value)
    {
        $arrDefaultDoitac = [
            'ten'=>'',
            'diachi'=>'',
            'sdt'=>'',
            'stk'=>'',
            'nganhang'=>'',
            'nganhang_chinhanh'=>'',
            'nguoidaidien'=>'',
            'chucvu'=>'',
            'thoigian_giaohang'=>0
        ];
        if($value){
            $value = json_decode($value,true);
            return (object) array_merge($arrDefaultDoitac, $value);
        }
        return (object) $arrDefaultDoitac;
        //return $value ? json_decode($value) : null;
    }
