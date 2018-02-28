$(function () {
  $('.product__item-btn-buy').on('click', function (e) {
    e.preventDefault();
    var price = $(this).data('price'),
        product = $(this).data('product'),
        img = $(this).data('img');
    $('#price').val(price);
    $('#product').val(product);
    $('#cart').modal();
    $('.modal__img').attr('src', img);
    //console.log(price, product);
  });
});