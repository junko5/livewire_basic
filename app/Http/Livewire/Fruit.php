<?php

namespace App\Http\Livewire;
use Livewire\Component;
// use宣言追加
use App\Models\FruitName;

class Fruit extends Component
{
    public $name;

    // バリデーションルール(6文字以内)
    protected $rules = [
        'name' => 'max:6',
    ];

    // バリデーションメッセージ
    protected $messages = [
        'name.max' => '6文字以内でよろしく！！'
    ];

    // 画面を表示（デフォルトであり）
    public function render()
    {
        return view('livewire.fruit');
    }

    // リアルタイムバリデーション
    public function updated($name)
    {
        $this->validateOnly($name);
    }
    
    // 保存
    public function submit()
    {
        FruitName::create([
            "name" => $this->name,
        ]);

        session()->flash('message', '保存したよ');
    }
}
