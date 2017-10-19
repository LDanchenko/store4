/*function addToCart(id) {
    //alert(id);
    //когда добавляешь на бэке нужна проверка!
    $.ajax({
        url: "add_to_cart",
        cache: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {id: id}, // если нужно передать какие-то данные
        type: "POST", // устанавливаем типа запроса POST
        success: function (res) {
            //alert('ok');
            var qty = document.getElementById('qty');
            qty.innerHTML = 'd';
        },
        error: function (msg) {
            console.log(msg);
        }
    });

}
*/

//тут через доне

function addToCart(id) {

   //проверки


        $.ajax({
            url: 'add_to_cart',
            method: 'POST', //отправляем данные методом пост
            cache: false,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {id: id} // если нужно передать какие-то данные
        }).done(function (data) {//ответ от формы

            var answer = JSON.parse(data);
            var qty = document.getElementById('qty');
            qty.innerHTML = answer;
            //ошибки??
        });


};

