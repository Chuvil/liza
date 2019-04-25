<?php
/* Smarty version 3.1.30, created on 2019-04-24 00:29:10
  from "D:\openserver\OpenServer\domains\liza\templates\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cbf83a6260e22_03467745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb91d8d93199dee28bc687f23d9e7f724fda9bf1' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\liza\\templates\\contact.tpl',
      1 => 1556054947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbf83a6260e22_03467745 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>Напишите ваше сообщение для связи со мной.</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Имя</label>
                        <input type="text" class="form-control" placeholder="Имя" id="name" required data-validation-required-message="Введите ваше имя.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Введите ваш email.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Тема сообщения</label>
                        <input type="text" class="form-control" placeholder="Тема сообщения" id="subject" required data-validation-required-message="Введите тему сообщения.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Сообщение</label>
                        <textarea rows="5" class="form-control" placeholder="Сообщение" id="message" required data-validation-required-message="Введите сообщение."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
