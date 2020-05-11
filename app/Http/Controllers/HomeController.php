<?php

namespace App\Http\Controllers;

use App\Order;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pedidos = Order::where('status', Order::PEDIDO)->paginate(5);
        $procesos = Order::where('status', Order::PROCESO)->paginate(5);
        $entregados = Order::where('status', Order::ENTREGADO)->paginate(5);
        $anulados = Order::where('status', Order::ANULADO)->paginate(5);

        return view('dashboard', compact('pedidos','procesos','entregados','anulados'));
    }
}
