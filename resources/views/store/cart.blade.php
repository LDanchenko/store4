@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Корзина</div>

                <div class="panel-body">




                       <ul>


	        <?php $all =0;
                           foreach($cart as $row) :?>

            <tr>
                <td>
                    <p><strong><?php echo $row->id; ?></strong></p>
                    <p><strong><?php echo $row->name; ?></strong></p>
                    <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
                </td>
                <td><input type="text" value="<?php echo $row->qty; ?>"></td>
                <td>$<?php echo $row->price; ?></td>
                <td>$<?php echo $row->subtotal; $all += $row->subtotal;  ?></td>
            </tr>

	        <?php endforeach;?>

                       </ul>

                        <div> Общая стоимость  <?php echo $all; ?> $</div>

                        <div> <button><a href="/cart/makeOrder" >Оформить заказ </a></button> </div>
                    <br>
                        <div> <button><a href="/cart/clear" >Оичстить корзину </a></button> </div>



                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
