<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\ItemRepository;
use App\Repositories\CategoryRepository;
use App\Models\Setting;
use App\Models\Item;

use Illuminate\Http\Request;

class AdminItemsController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('admin.items.show', ['item' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ItemRepository $itemRepository)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'factory' => 'required'
        ]);
        $inputs = $request->input();
        $desc = [];
        if( $inputs['description'] != null){
            $temp = explode("\n", $inputs['description']);
            foreach ($temp as $value) {
                $i = explode(':', $value);
                
                if(count($i) == 2) $desc[trim($i[0])] = trim($i[1]);
            }
        }
        $inputs['description'] = json_encode($desc);
        $itemRepository->addItem($inputs, $request->file('image'));
        return redirect($request->headers->get('referer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $categoryId, CategoryRepository $categoryRepository, ItemRepository $itemRepository, Setting $setting)
    {
        $kof = round($setting->first()['kof'] / 100, 2);
        $categories = $categoryRepository->getAll();
        if($categoryId == 0){
            $paginator = $itemRepository->getAllWithPaginate(20);
        }else{ 
            $arrayCategories = $categoryRepository->getCategoriesById($categoryId);
            $paginator = $itemRepository->getByCategories($arrayCategories);
        }
        //dd($paginator);
        return view("admin.main", compact('paginator', 'categories', 'categoryId', 'kof'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, ItemRepository $itemRepository, Request $request)
    {
        $itemRepository->updateItem($id, $request->input());
        if($request->file('image') != null) $request->file('image')->storeAs('items',$request->input('image_path'), 'images');
        return redirect($request->headers->get('referer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ItemRepository $itemRepository, Request $request)
    {
        $itemRepository->deleteItem($id);
        return redirect($request->headers->get('referer'));
    }

    public function setKof(Request $request, Setting $setting)
    {
        $kof = $request->input('kof') * 100;
        $setting->where('id', 1)->update(['kof'=>$kof]);
        return redirect($request->headers->get('referer'));
    }
}