<?php

namespace App;

//тут будут обьекты корозины
class Cart
{
    public $items;
    public $totalQty = 0; //сколько всего товаров в корзие
    public $totalPrice = 0; // общая стоимость

    //если в корзину что то добавлено уже было
    public function __construct($oldCard)
    {
        if ($oldCard) {
            $this->items = $oldCard->items;
            $this->totalQty = $oldCard->totalQty;
            $this->totalPrice = $oldCard->totalPrice;
        } else {
            $this->items = null;
        }
    }

    public function add($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item]; //добавить товар
        if ($this->items) { //если в корзине уже есть товары - обьекты
            if (array_key_exists($id, $this->items)) { //если уже есть товар такой как я хочу добавить  - чтобы не добавлять два раза, а увеличить его колличетво
                $storedItem = $this->items[$id]; //нашли асоц масиив по айди такого товара
            }
        }
        $storedItem['qty']++; //увеличили колличество
        $storedItem['price'] = $item->price * $storedItem['qty']; //стоимость зависит от коллическа товаров в этой группе
        $this->items[$id] = $storedItem; //в обьект корзины добавили наш массив из группы товаров одинаковы
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

}
