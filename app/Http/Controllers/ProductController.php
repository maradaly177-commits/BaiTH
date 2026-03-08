<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;
use App\Models\Category;
class ProductController extends Controller
{
    public function login()
    {
        return view('product.login');
    }
    public function register()
    {
        return view('product.register');
    }
    public function postLogin(Request $request)
    {
        return "Đã submit form login";
    }
    public function postRegister(Request $request)
    {
        return "Đã submit form register";
    }
 // Trang nhập tuổi
    public function enterAge()
    {
        return view('age.enter-age');
    }

    // Trang xác nhận
    public function confirmAge(Request $request)
    {
        $request->validate([
            'age' => 'required|integer|min:1'
        ]);

        return view('age.confirm', [
            'age' => $request->age
        ]);
    }

    // Lưu tuổi vào session
    public function saveAge(Request $request)
    {
        session()->push('ages', $request->age);

        return redirect()->route('age.list');
    }

    // Danh sách tuổi
    public function ageList()
    {
        $ages = session('ages', []);
        return view('age.list', compact('ages'));
    }
    // DANH SÁCH PRODUCT
public function index()
    {
        $products = Product::all(); // lấy tất cả sản phẩm
        return view('products.index', compact('products'));
    }
    

    public function home()
{
    $products = Product::latest()->take(12)->get();
    return view('home', compact('products'));
}

public function store(Request $request)
{
    $imageName = null;

    $request->validate([
        'name' => 'required',
        'category_id' => 'required'
    ]);

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    }

    Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'image' => $imageName,
        'stock' => $request->stock
    ]);

    return redirect()->back();
}

public function create()
{
    $categories = Category::all();
    return view('product.create', compact('categories'));
}

public function edit($id)
{
    $product = Product::findOrFail($id);
    $categories = Category::all();

    return view('product.edit', compact('product','categories'));
}

public function update(Request $request, $id)
{

$request->validate([
        'name' => 'required',
        'category_id' => 'required'
    ]);
    
    $product = Product::findOrFail($id);

   

    $product->update([
        'name'=>$request->name,
        'category_id'=>$request->category_id
    ]);

    return redirect()->route('products.index');
}
public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index');
}


}




