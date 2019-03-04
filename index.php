<?php

// シャツクラスの定義
class Shirts {
    // プロパティ
    public $size;
    public $material;

    // プロパティの設定メソッド
    public function set_shirts_propaty($size,$material){
        $this->size = $size;
        $this->material = $material;
    }

    // シャツ作成のメソッド
    public function create_new_shirts($number){
        print 'シャツを' . $number . '枚製造しました。';
        print 'シャツのサイズは' . $this->size . ', 素材は' . $this->material . 'です。';
        print '印刷料金は¥' . $number * 1000 . 'です。';
    }
}


// ブランドAクラスの定義
class Brand extends Shirts {

    // プロパティ
    public $brand_name;

    // ブランド名のセット
    public function __construct($brand_name){
        $this->brand_name = $brand_name;
        print $this->brand_name . 'を作成しました。';
    }

    // ブランド名確認用
    public function brand_name() {
        print $this->brand_name;
    }

}


// 新しいブランドを作成。
$brandA = new Brand(brandA);

// ブランドAのシャツのプロパティを設定
$brandA -> set_shirts_propaty('M','綿');

// ブランドAのシャツを作成。
$brandA -> create_new_shirts(10);