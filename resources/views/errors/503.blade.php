@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', 'PUNTLAND')
@section('message', __($exception->getMessage() ?: 'Shahaadada waxbarasho waxaa leh arday kasta oo Soomaaliyeed oo imtixaan la yaqaan galay'))
