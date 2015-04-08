<?php namespace App\Http\Controllers;

use App\Order;

class WelcomeController extends Controller {
	
    /**
     * Inject the Order model.
     * @param Order $order
     */
	public function __construct()
	{
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$order_field = 'created_at';
		if(isset($_GET['sort']))
			switch ($_GET['sort']) {
				case 'price':
					$order_field = 'product_amount';
					break;
				case 'state':
					$order_field = 'state';
					break;
			}

		$orders = Order::orderBy($order_field)->paginate(10);
		
		$orders_states = array(
			"initial",
			"accepted",
			"delivery",
			"ready"
			);

		return view('welcome', ['orders' => $orders, 'sort' => isset($_GET['sort']) ? $_GET['sort'] : null , 'orders_states' => $orders_states]);
	}

}
