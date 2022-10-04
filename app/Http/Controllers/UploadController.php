<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        $book = Book::find(1);
        $bookFile = $book->filename ?? '';
        if($bookFile) {
            $bookFile = Storage::url($book->filename ?? '');
        }

        return view('index', ['bookFile' => $bookFile]);
    }

    public function store(Request $request)
    {
        // ファイル名は利用用途により変更してください。
        $file = $request->file('file');
        $filename = $file->hashName();

        $file->storeAs('public', $filename); // storageへ保存

        // 利用する場合にEloquentは書き換えてください。
        $book = Book::find(1);
        $book->filename = $filename;
        $book->save();

        return redirect('upload');
    }
}
