const payProductButton = $(".pay-product-button");
const productPayCount = $("#product-pay-count");

$('#pay-product-btn-left').click(function () {
    let value = $(this).next('input').val();
    value--;

    if (value < 0) {
        value = 0;
    }
    $(this).next('input').val(value);
});

$('#pay-product-btn-right').click(function () {
    let value = $(this).prev('input').val();
    value++;
    var count1 = document.getElementById("count");
    var count1Content = count1.innerHTML;
    y = parseInt(count1Content);
    var btn = document.getElementById("pay-product-btn-right");
    if (value > y) {
        value = y;
        btn.disabled = true;
    }
    $(this).prev('input').val(value);
});


// zoom img

