<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index()
  {
    $categories = Category::all();
    //dd($categories);
        //dd("ここが動いた");
    return view('index', ['categories' => $categories]);
  }

  //public function confirm(Request $request)
  public function confirm(ContactRequest $request)
  {
    //dd("コンファーム");
    $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel_1','tel_2', 'tel_3', 'address', 'building', 'detail']);
    $category = Category::find($request->category_id);
    //dd($category);
    //dd($contact);
    return view('confirm', ['contact' => $contact, "category" => $category]);
    
  }

  //public function store(Request $request)
  public function store(ContactRequest $request)
  {
    if ($request->has('reset')) {
    return redirect('/')->withInput();
    }

  //dd('store');
  //dd($request->all());
      $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel_1','tel_2', 'tel_3', 'address', 'building', 'detail']);
      //dd($contact);
      $tel = $contact['tel_1'] . '-' . $contact['tel_2'] . '-' . $contact['tel_3'];
      //dd($tel);
      $contact['tel'] = $tel;
      //dd($contact);
      unset($contact['tel_1']);
      unset($contact['tel_2']);
      unset($contact['tel_3']);
      //dd($contact);
      Contact::create($contact);
      return view('thanks');
  }
}