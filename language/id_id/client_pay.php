<?php
/**
 * Language definitions. Generated by the Blesta Translator
 * 
 * @package blesta
 * @version 4.4.0
 * @copyright Copyright (c) 2019, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.!error.invalid_amount'] = "Jumlah pembayaran lainnya mungkin tidak negatif.";
$lang['ClientPay.!error.payment_amounts'] = "Silakan pilih faktur untuk membayar atau masukkan jumlah pembayaran yang lain.";
$lang['ClientPay.index.boxtitle_pay'] = "Melakukan Pembayaran";
$lang['ClientPay.multipleinvoices.text_amount'] = "Jumlah Bayar";
$lang['ClientPay.multipleinvoices.text_datedue'] = "Tanggal jatuh tempo";
$lang['ClientPay.received.page_title'] = "Klien %1\$s Pembayaran Diterima"; // %1$s is the client ID
$lang['ClientPay.received.boxtitle_received'] = "Terima Kasih!";
$lang['ClientPay.setcontactview.text_none'] = "Tak satupun";
$lang['ClientPay.method.page_title'] = "Cara Pembayaran Klien %1\$s"; // %1$s is the client ID
$lang['ClientPay.method.field_useaccount'] = "Gunakan Rekening Pembayaran";
$lang['ClientPay.method.field_paymentaccount_autodebit'] = "(Auto Debit) %1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account
$lang['ClientPay.confirm.page_title'] = "Klien %1\$s Mengkonfirmasi Pembayaran"; // %1$s is the client ID
$lang['ClientPay.confirm.boxtitle_confirm'] = "Konfirmasi Pembayaran";
$lang['ClientPay.confirm.payment_details'] = "Detil Pembayaran";
$lang['ClientPay.confirm.account_info'] = "%1\$s (%2\$s) berakhir di %3\$s"; // %1$s is the account type (Credit Card of ACH), %2$s is the type (Savings, Checking, MasterCard, etc.) and %3$s is the last 4 digits of the account
$lang['ClientPay.confirm.account_exp'] = "berakhir pada %1\$s"; // %1$s is the date the credit card expires
$lang['ClientPay.confirm.total'] = "Total:";
$lang['ClientPay.confirm.field_edit'] = "Mengedit Pembayaran";
$lang['ClientPay.confirm.description_invoice'] = "Faktur #%1\$s"; // %1$s is the invoice number
$lang['ClientPay.confirm.description_invoice_separator'] = ",";
$lang['ClientPay.confirm.description_invoice_number'] = "#%1\$s"; // %1$s is the invoice number
$lang['ClientPay.method.field_apply_credit'] = "Terapkan Kredit (%1\$s Available)"; // %1$s is the amount of available credit that may be used
?>