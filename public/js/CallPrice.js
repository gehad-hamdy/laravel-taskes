$(function () {
    function getQuantity() {
        var value = document.getElementById("quantity");
        var quantity;
        quantity = value.value;

        return quantity;
    }

    function getUid() {
        var e = document.getElementById("name");
        var uid;
        uid = e.options[e.selectedIndex].value;

        return uid;
    }


    function getPrice() {
        var totalPrice = 0;
        $('.component-details').each(function (i) {
            quantity = $(this).find('#quantity').val();
            id = $(this).find("#name :selected").val();
            $.ajax({
                dataType: 'json',
                type: 'GET',
                url: '/component/' + id + '/' + quantity,
                success: function (data) {
                    window.alert(document.getElementById("price").rows[i].cells[3].innerHTML);
                    document.getElementById("price").rows[i].cells[3].innerHTML = data["data"]['price'] * quantity;
                    //   $("#price").html(data['data']['price'] * quantity);
                    var componentPrice = quantity * data['data']['price'];
                    totalPrice += componentPrice;
                    $("#total").text(totalPrice);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    window.alert("this quantity not available in our store");
                }
            });
        });
    }


    $(document).ready(function () {
        getPrice();
        /*    $("#category").change(function (e) {
                $.ajax({
                    dataType: 'json',
                    type: 'GET',
                    url: '/component/' + getUid() + '/' + getQuantity(),
                    success: function (data) {
                        $("#price").text(data['data']['price'] * getQuantity());
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        window.alert("this quantity not available in our store");
                    }
                });
            });*/

        /*
            $("#category").change(function(e) {
                // window.alert(row.colum);
                $("#quantity").change(function () {
                    $.get('/component/' + getUid(),
                        function (data) {
                            if (data['data']['quantity'] < getQuantity()) {
                                window.alert('this quantity not available in our store, the max quantity is ' + data['data']['quantity']);
                                $("#price").text(data['data']['price'] * data['data']['quantity']);
                                $("#quantity").text(data['data']['quantity']);
                            } else $("#price").text(data['data']['price'] * getQuantity());

                        });
                    $.ajax({
                        dataType: 'json',
                        type: 'GET',
                        url: '/component/' + getUid(),
                        success: function (data) {
                            if (data['data']['quantity'] < getQuantity()) {
                                window.alert('this quantity not available in our store, the max quantity is ' + data['data']['quantity']);
                                $("#price").text(data['data']['price'] * data['data']['quantity']);
                                $("#quantity").text(data['data']['quantity']);
                            } else $("#price").text(data['data']['price'] * getQuantity());
                        }
                    });
                });

                $("#name").change(function () {
                    $.ajax({
                        dataType: 'json',
                        type: 'GET',
                        url: '/component/' + getUid(),
                        success: function (data) {
                            $("#price").text(data['data']['price'] * getQuantity());
                        }
                    });
                });
            });
        */
    });
});