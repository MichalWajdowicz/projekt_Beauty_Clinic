<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartDateEdit;
use App\Models\Cart;
use App\Models\Shop;
use App\Models\Surgery;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;


class CartController extends Controller
{
    public function show($id)
    {
        $carts = Cart::whereuser_id(
            $id
        )->get();
        $maxCena = 0;
        return view('user.cart.index', ['carts' => $carts,'maxCena'=>$maxCena]);
    }

    public function edit(Cart $cart)
    {
        $surgerys = Surgery::all();
        return view('user.cart.edit', ['carts' => $cart,'surgerys' => $surgerys]);
    }

    public function update(CartDateEdit $request ,Cart $cart)
    {
        $cart->vist_date = $request->input('vist_date');
        $cart->surgery_id = $request->input('surgery_id');
        $cart->save();

        return redirect()->route('cart.show',Auth::id());
    }
    public function store(CartDateEdit $request)
    {
        try{
        Surgery::findOrFail(
            $request->surgery_id
        );

        if($request->user_id != Auth::user()->id ){
            Alert::error('Nie udało się dodać operacji do koszyka, ponieważ podany użytkownik rózni się od zalogowanego!');
            return redirect()->back();
        }
        $input = $request->all();
        Cart::create($input);

        return redirect()->route('cart.show',Auth::id());
        }catch(Exception $e){
            Alert::error('Nie zmieniaj id zabiegu');
            return redirect()->back();
        }
    }
    public function create(){
        $purchases = array();
        $cart = Cart::whereuser_id(Auth::id())->get();
        foreach($cart as $c){
            array_push($purchases,
            [
                'surgery_id' => $c->surgery_id,
                'user_id' => $c->user_id,
                'vist_date' => $c->vist_date,
                'cost' => $c->surgery->cost,
                'created_at'=>  now(),
                'updated_at'=>  now()
            ]);
            $c -> delete();
        }
        Visit::insert($purchases);
        return redirect()->route('cart.show',Auth::id());
    }
    public function destroy(Cart $cart)
    {
        try {
            $cart->delete();
            Alert::success('Usunieto zabieg z koszyka');
            return redirect()->route('cart.show',Auth::id());
        } catch (Exception $e) {
            Alert::error('Wystąpił bład');
            return redirect()->route('cart.show',Auth::id());
        }
    }
}
