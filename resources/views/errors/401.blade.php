@extends('errors::minimal')

@section('title', __('Требуется войти'))
@section('code', '401')
@section('message', __('А ты вошёл в аккаунт?'))
@section('sub_message', __('Уважаемый пользователь, для доступа к этой странице необходимо войти в аккаунт.'))
