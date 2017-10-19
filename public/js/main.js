

function addToCart(id) {

   //проверки


        $.ajax({
            url: 'add_to_cart',
            method: 'POST', //отправляем данные методом пост
            cache: false,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {id: id}
        }).done(function (data) {//ответ от формы

            var answer = JSON.parse(data);
            var qty = document.getElementById('qty');
            qty.innerHTML = answer;
            //ошибки??
        });


};

