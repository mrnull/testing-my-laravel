@extends('layouts.main')

@section('content')
<div class="panel container mar-top">
    <div class="panel-heading row mar-no ">
        <div class=" row mar-no ">
            <div class="col-md-7">
                <div class="span-title pull-left">
                    Заказы
                </div>
                <div class="panel-control pull-left">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#">Текущие</a></li>
                        <li><a  href="#">Завершенные</a></li>
                        <li><a  href="#">Отмененные</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 pull-right sort_block">
                <form id="sort-form" action="" class="pull-right">
                    <select id="sort" class="selectpicker" name="sort">
                        <option value="date">по дате</option>
                        <option value="state">по статусу</option>
                        <option value="price">по стоимости</option>
                    </select>
                </form>
                <div class="span-label">Сортировка:</div>
                <script type="text/javascript">
                jQuery( document ).ready(function($) {
                    $('#sort').change(function(){ $("#sort-form").submit(); });
                });
                </script>
            </div>

        </div>

    </div>
    <div class="panel-body">
        @foreach($orders as $order)
            <div class="order_item">
                <p class="title_order">
                    <a href="#">Заказ №{{$order->id}}</a> <span class="date">{{ $order->created_at->diffForHumans() }}</span>
                </p>
                <div class="list-group text-center row mar-no">
                    <a href="" class="list-group-item col-md-3 active disabled">Предложение отправлено продавцу</a>
                    <a href="" class="list-group-item col-md-3 {{{ $order->state >= 1 ? "active" : "disabled" }}} ">Продавец принял предложение</a>
                    <a href="" class="list-group-item col-md-3  {{{$order->state >= 2 ? "active" : "disabled" }}}">Заказ в пути</a>
                    <a href="" class="list-group-item col-md-3  {{{$order->state >= 3 ? "active" : "disabled" }}}">Заказ у вас</a>
                </div>
                <div class="row mar-top">
                    <div class="col-md-1">
                        <img src="images/order_img.png" alt="" />
                    </div>
                    <div class="col-md-5">
                        <p class="title_order">
                            {{$order->title}}
                        </p>
                        <p class="mar-no">
                            <strong>Общая стоимость: {{ number_format($order->total, 2, ',', ' ') }} руб.</strong>
                        </p>
                        <p class="price">
                            Товар: {{ number_format($order->product_amount, 2, ',', ' ') }} руб.<br />
                            Доставка: {{ number_format($order->delivery_amount, 2, ',', ' ') }} руб.<br />
                            Комиссия: {{ number_format($order->comission_amount, 2, ',', ' ') }} руб.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="mar-no">
                            <strong>Продавец:</strong>
                        </p>
                        <p>
                            {{ $order->seller->name }}<br />
                            тел: {{ $order->seller->phone }}<br />
                            {{ $order->seller->city }}
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p>
                            <a href="#" class="btn btn-lg btn-default btn-active-success">Оплатить</a>
                        </p>
                        <p>
                            <i>
                                У продавца осталось XX дней чтобы ответить на ваш заказ. Иначе он будет отменен.
                            </i>
                        </p>
                    </div>
                </div>
            </div>
            <hr />
        @endforeach
        
        {!! $sort != null ? $orders->appends(['sort' =>  $sort])->render() : $orders->render() !!}

    </div>
</div>
@stop