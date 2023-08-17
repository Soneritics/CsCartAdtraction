<script data-no-defer>
    {literal}
    var ADT = ADT || {};
    ADT.Tag = ADT.Tag || {};
    {/literal}
    ADT.Tag.t = 3;
    ADT.Tag.c = "EUR";
    ADT.Tag.tp = 1795615432;
    ADT.Tag.am = {{$order_info.subtotal}};
    ADT.Tag.ti = "{{$order_info.order_id}}";
    ADT.Tag.xd = "{{md5(mb_convert_encoding(strtolower(trim($order_info.email)), "UTF-8", "ISO-8859-1"))}}";
    ADT.Tag.cpn = "{{array_key_first($order_info['coupons'])}}";
</script>
<script data-no-defer defer src="https://pin.{{fn_soneritics_adtraction_website()}}/jsTag?ap=1794568569"></script>
