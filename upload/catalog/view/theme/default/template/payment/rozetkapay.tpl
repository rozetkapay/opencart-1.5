<div class="row">
<div class="buttons">
    <div class="pull-right">
        <input type="button" value="<?=$button_confirm;?>" id="button-confirm" class="btn btn-primary" />
    </div>
</div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div id="rozetkapay_pay" style="display: none">
            <a href=""  class="btn btn-primary"><?=$button_pay;?></a>
            <br>
            <img src="">
        </div>
    </div>
    <div class="col-sm-6">
        <div id="rozetkapay_pay_holding" style="display: none">
            <a href=""  class="btn btn-primary"><?=$button_pay_holding;?></a>
            <br>
            <img src="">
        </div>
    </div>
</div>
<div rozetkapay_alert_error style="display: none; color: red"></div>
<script>
    $('[rozetkapay_alert_error]').html('').hide()
    $('#button-confirm').bind('click', function () {
        let but = $(this)
        $('#button-confirm').parent().find('.alert').remove()
        $.ajax({
            url: 'index.php?route=payment/rozetkapay/confirm',
            dataType: 'json'
        }).done(function (json) {
            
            
            
            if(json.pay && !json.qrcode && !json.pay_holding){
                location = json.pay_href
            }

            if (json.pay) {

                $('#rozetkapay_pay a').attr('href', json.pay_href)

                if (json.qrcode) {
                    $('#rozetkapay_pay img').attr('src', json.pay_qrcode)
                }
                $('#rozetkapay_pay').show()

            }else{
                
            }

            if (json.pay_holding) {

                $('#rozetkapay_pay_holding a').attr('href', json.pay_holding_href)

                if (json.qrcode) {
                    $('#rozetkapay_pay_holding img').attr('src', json.pay_holding_qrcode)
                }
                $('#rozetkapay_pay_holding').show()

            }
            
            if(json.pay || json.pay_holding){
                $('#button-confirm').hide()
            }
            
            if(json.alert.length > 0){
                $('[rozetkapay_alert_error]').html(json['alert'].join('<br>')).show()
                
            }
        });
        return false;
    });
</script>
