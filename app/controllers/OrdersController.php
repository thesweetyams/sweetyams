<?php
use Stripe as Stripe;

class OrdersController extends \BaseController {

  public function __construct()
  {
    $this->beforeFilter('auth', array('except' => array('index', 'show')));
  }

  public function index()
  {
    return View::make('orders.example');
  }

  public function create()
  {
    $menuCategory = Menu::all();
    $menuItems    = MenuItem::all();
    $addOns       = AddOn::all();
    return View::make('orders.create')->with(['menuItems' => $menuItems,
      'menuCategory' => $menuCategory,
      'addOns' => $addOns,]);
  }

  public function store()
  {
    if (Session::has('order_id') && Order::find(Session::get('order_id')) != null) {
      $order = Order::find(Session::get('order_id'));

    } else {
      $order = new Order();
      $order->user_id = Auth::user()->id;
      $order->save();
      Session::put('order_id', $order->id);
    }

    $orderItem = new OrderItem;
    $orderItem->menu_item_id = Input::get('item_id');
    $orderItem->order_id = Session::get('order_id');
    $orderItem->save();

    $orderItemAddOns = [];
    if (Input::has('add_on_id')) {
      foreach(Input::get('add_on_id') as $addOn) {
        $orderItemAddOn = new OrderItemAddOn;
        $orderItemAddOn->order_item_id = $orderItem->id;
        $orderItemAddOn->add_on_id = $addOn;
        $orderItemAddOns[] = $orderItemAddOn->addOn;
        $orderItemAddOn->save();
      }
    }

    if($order->save() )
    {
      // return $orderItemAddOns;
      // this returns a json response that you can manipulate in the view
      return ['order_item' => $orderItem->menuItem, 'item_addons' => $orderItemAddOns];
      // return Redirect::action('OrdersController@create', $order->id = 1)->with(['order' => $order]);
    }
  }

  public function show($id)
  {
    // shows the current order of the currently authed user

    // UI for show view offers a confirm or edit option
    // edit should goto ordersController@edit
    // confirm should goto confirmOrder() below
  }

  public function confirmOrder()
  {
    $orderId = Session::get('order_id');
    $order = Order::with('orderItems.orderItemAddons')->find($orderId);
    // $total = $order->subtotal();
    // $orderItems = OrderItem::where('order_id', $orderId)->get();
    // return View::make('orders.confirm')->with(['orderId' => $orderId, 'total' => $total,
    //                       'orderItems' => $orderItems, 'orderItemAddOns' => $orderItemAddOns]);
    return View::make('orders.confirm')->with(['order' => $order]);
  }

  public function findOrderId()
  {
    $order = Order::find(Session::get('order_id'));
    return $order;
  }

  public function payOrder()
  {
    $order = $this->findOrderId();
    $total = $order->subtotal();
    return View::make('orders.pay');
  }

  public function payWithCash()
  {
    $order = $this->findOrderId();
    $email = Auth::user()->email;
    foreach ($order->orderItems as $orderItem) {
      $orderArray[] = $orderItem->menuItem->name;
      $orderPrice[] = $orderItem->menuItem->price();
    }
    $description = 'this is the description';
    $data    = [
      'userEmail' => $email,
      'order'     => $orderArray,
      'price'     => $orderPrice
    ];
    Mail::send('emails.contact', $data, function($message) use ($data)
    {
      $message->from('tleffew1994@gmail.com', 'SweetYams');
      $message->to($data['userEmail'])->subject('Order Details');
    });
    Session::flash('successMessage', 'The order was successfully sent.');
    return Redirect::action('MainController@index');
  }

  public function sendChargeEmail()
  {
    $order =$this->findOrderId();
    foreach ($order->orderItems as $orderItem) {
      $orderArray[] = $orderItem->menuItem->name;
      $orderPrice[] = $orderItem->menuItem->price();
    }
    $userEmail   = $_POST['stripeEmail'];
    $description = 'this is the description';

    $data    = [
      'userEmail' => $userEmail,
      'order'     => $orderArray,
      'price'     => $orderPrice
    ];

    Mail::send('emails.contact', $data, function($message) use ($data)
    {
      $message->from('tleffew1994@gmail.com', 'SweetYams');
      $message->to($data['userEmail'])->subject('Order Details');
    });
  }

  public function charge()
  {
    \Stripe\Stripe::setApiKey("sk_test_ZOKQRbihmavV58CCw8pyAF4h");
    $token = $_POST['stripeToken'];
    $order = $this->findOrderId();
    try {
      $charge = \Stripe\Charge::create(array(
        "amount"      => $order->subtotal() * 100,
        "currency"    => "usd",
        "source"      => $token,
        "description" => "Example charge"
      ));

      $this->sendChargeEmail();
      Session::flash('successMessage', 'The order was successfully sent.');
      return Redirect::action('MainController@index');

    } catch(\Stripe\Error\Card $e) {
      // The card has been declined
    }
  }

  public function edit($id)
  {
    //
  }

  public function update($id)
  {
    //
  }

  public function destroy($id)
  {
    $orderItem = OrderItem::find($id);
    foreach ($orderItem->orderItemAddOns as $orderItemAddOn) {
      $orderItemAddOn->delete();
    }
    $orderItem->delete();
    Session::flash('successMessage', 'The post was successfully deleted');
    return Redirect::action('OrdersController@confirmOrder');
  }

  public function deleteLastItem()
  {

  }

}
