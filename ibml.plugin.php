<?php
Event::bind('invoices/before_pdf_render/',function(){
    global $pdf_tpl;
    $pdf_tpl = 'application/plugins/btn_pay_now/invoice_pdf.php';
});
