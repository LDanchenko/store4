function addToCart(id) {
    //alert(id);
    //когда добавляешь на бэке нужна проверка!
    $.ajax({
        url: "add_to_cart",
        cache: false,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: {id : id}, // если нужно передать какие-то данные
        type: "POST", // устанавливаем типа запроса POST
        success: function (data) {
            alert('ok')
        } //контент подгружается в div#content
    });


}