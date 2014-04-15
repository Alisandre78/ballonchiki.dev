jQuery(function($) {

        $('.open-popup').click(function() {
                var alias = $(this).attr('alias');

                var $call = getPopup(alias);
                $call.done(function(content) {
                        $('body').append(content)
                        showPopup();
                });
        });

        function showPopup() {
                $('#cart-popup').dialog({
                        title: "Корзина",
                        resizable: false,
                        width: 600,
                        height: 300,
                        modal: true,
                        open: function() {
                                setInfo();
                        },
                        close: function() {
                                $(this).remove();
                        },
                        buttons: {
                                "Продолжить покупки": function() {
                                        $(this).dialog("close");
                                },
                                "Оформить заказ": function() {
                                        $(this).dialog("close");
                                        location.href = 'index.php?r=checkout/index';
                                }
                        }
                });
        }

        /**
         * get popup cart in html
         */
        function getPopup(alias) {
                var url = 'index.php?r=cart/popup';
                if (alias != undefined)
                        url += '&alias=' + alias;
                return $.ajax({
                        url: url
                });
        }

        function getPopupUpdate(alias, amount) {
                var url = 'index.php?r=cart/update';
                if (alias != undefined && amount != undefined)
                        url += '&alias=' + alias + '&amount=' + amount;
                return $.ajax({
                        url: url
                });
        }

        function getCartInfo() {
                var url = 'index.php?r=cart/GetInfo';
                return $.ajax({
                        url: url
                });
        }

        function getPopupDelete(alias) {
                var url = 'index.php?r=cart/delete';
                if (alias != undefined)
                        url += '&alias=' + alias
                return $.ajax({
                        url: url
                });
        }

        $('#cart-popup input').live('keypress', function(e) {
                if (e.keyCode == 13) {
                        var $T = $(this);
                        callActionPopup($T)
                }
        })

        $('#cart-popup input').live('blur', function(e) {
                var $T = $(this);
                callActionPopup($T)
        })

        function callActionPopup($T) {
                var alias = $T.parents('tr').attr('alias');
                var amount = $T.val();
                amount = parseInt(amount)
                if (amount == 0)
                        var $call = getPopupDelete(alias);
                else
                        var $call = getPopupUpdate(alias, amount);
                rebuildPopup($call);
                
                
        }

        $('#cart-popup .delete').live('click', function() {
                var alias = $(this).parents('tr').attr('alias');
                var $call = getPopupDelete(alias);
                rebuildPopup($call)
        });

        function rebuildPopup($call) {
                $call.done(function(content) {
                        var children = $(content).children();
                        $('#cart-popup').empty().append(children);
                        
                        setInfo();
                });
        }

        function setInfo() {
                $call = getCartInfo()
                $call.done(function(data) {
                        var mas = eval('[' + data + ']')
                        var amount = mas[0].amount;
                        var summary = mas[0].summary;
                        if (amount == 0) {
                                $('.cart .msg').show();
                                $('.cart .info').hide();
                        } else {
                                $('.cart .msg').hide();
                                $('.cart .info').show();
                                $('.cart .info span b:first').empty().text( amount )
                                $('.cart .info span b:last').empty().text( summary )
                        }
                });
        }

        //--- checkout
        $(window).ready(function () {
                $('form#checkout-form select.state').live('change', function(e){
                        var state = $(this).val()
                        var cities = ua[ state ];
//                        var options = '<option>Город<option>';
                        var options = '';
                        cities.map(function(item) {
                                options += '<option values="' + item + '">' + item + '</option>';
                        }) 
                        $('form#checkout-form select.city').empty().append( options ).show();
                })                
        })

        

});