<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Category;
use App\Models\Sub_Category;
use Illuminate\Http\Request;

class Sub_CategoryController extends Controller
{
    public function create()
    {
         $category = Category::select('id','name')->get();





        return view('admin.sub_category.add',compact('category'));
    }


    public function store(SubCategoryRequest $request)
    {
        try {
            $Sub_category = Sub_Category::create([
                'name'=>$request->name,
                'category_id' => $request->category_id,


            ]);
            return redirect()->route('admin.sub_category')->with(['success' => 'تم الحفظ بنجاح']);

        }catch (\Exception $ex){

        }
        return redirect()->route('sub_category')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);



    }
    public function index()
    {
         $sub_category = Sub_Category::with('category')->select()->get();


        return view('admin.sub_category.index',compact('sub_category'));

    }


    public function edit($id)
    {
         $category = Sub_Category::with('category')->select()->get();
         $Sub_Category= Sub_Category::select('id','name')->find($id);

        if (!$category)
            return redirect()->route('admin.Category')->with(['error' => 'هذا القسم غير موجود ']);

        return view('admin.sub_category.edit', compact('category','Sub_Category'));

    }
    public function update($id, SubCategoryRequest $request)
    {
//     return $request ;

    try {
            $Sub_Category = Sub_Category::find($id);
            if (!$Sub_Category) {
                return redirect()->route('Sub_Category', $id)->with(['error' => 'هذه القسم غير موجوده']);
            }
            if (!$request->has('active'))
                $request->request->add(['active' => 0]);

            $Sub_Category->update($request->except('_token'));

            return redirect()->route('admin.sub_category')->with(['success' => 'تم تحديث القسم بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('sub_category')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function destroy($id){
        try {
            $Sub_category = sub_category::find($id);
            if (!$Sub_category) {
                return redirect()->route('sub_category', $id)->with(['error' => 'هذه الوظيفة غير موجوده']);
            }
            $Sub_category->delete();

            return redirect()->route('admin.sub_category')->with(['error' => 'تم حذف الوظيفة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('sub_category')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }


}
