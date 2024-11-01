@extends('errors::minimal')

@section('title', __('Не найдено'))
@section('code', '404')
@section('message', __('Здесь нет того, что вы искали...'))
@section('sub_message', __('Уважаемый пользователь, кажется, вы попали на страницу, которой не сущетсвует. Вероятно, вы сделали опечатку или пришли сюда по ссылке, которая больше не доступна.  Пожалуйста, проверьте правильность введённого вами адреса'))