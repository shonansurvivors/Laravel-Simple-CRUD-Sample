<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ItemRequest;
use phpDocumentor\Reflection\Types\Integer;

class ItemController extends Controller
{
    /**
     * 一覧表示
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request){

        /* ローカルスコープを利用することとした為、コメントアウト
        $query = Item::query();

        if(isset($request->name)){
            $query->where('name', 'like', '%'.$request->name.'%');
        }

        if(isset($request->sex)){
            $query->where('sex', $request->sex);
        }

        if(isset($request->memo)){
            $query->where('memo', 'like', '%'.$request->memo.'%');
        }

        $items = $query->orderBy('created_at', 'desc')->get();
        */

        $items = Item::nameFilter($request->name)
            ->sexFilter($request->sex)
            ->memoFilter($request->memo)
            ->orderBy('created_at', 'desc')
            ->paginate(3)
            ->appends($request->all());

        return view('items.index', [
            'items' => $items
        ]);
    }
    /**
     * 登録画面の表示
     *
     * @param  Request $request
     * @return Response
     */
    public function create(Request $request){
        return view('items.create');
    }
    /**
     * 登録処理
     *
     * @param  ItemRequest  $request
     * @return Response
     */
    public function store(ItemRequest $request){
        $item = new Item();
        $item->name = $request->name;
        $item->age = $request->age;
        $item->sex = $request->sex;
        $item->memo = $request->memo;
        $item->save();
        return redirect()->action('ItemController@index');
    }
    /**
     * 詳細画面の表示
     *
     * @param  string $id
     * @return Response
     *
     */
    public function show(string $id){
        $item = Item::findOrFail($id);
        return view('items.show')->with('item', $item);
    }
    /**
     * 編集画面の表示
     *
     * @param  string $id
     * @return Response
     *
     */
    public function edit(string $id){
        return view('items.edit')->with('item', Item::findOrFail($id));
    }
    /**
     * 編集処理
     *
     * @param ItemRequest $request
     * @param string $id
     * @return Response
     *
     */
    public function update(ItemRequest $request, string $id){
        $item = Item::findOrFail($id);
        $item->fill($request->all())->save();
        return redirect()->route('index');
    }
    /**
     * 削除確認画面の表示
     *
     * @param  Item $item
     * @return Response
     *
     */
    public function delete(Item $item){
        return view('items.delete')->with('item', $item);
    }
    /**
     * 削除処理
     *
     * @param Item $item
     * @return Response
     * @throws \Exception
     */
    public function destroy(Item $item){
        $item->delete();
        return redirect()->route('index');
    }
}
