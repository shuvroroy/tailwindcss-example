@extends('layouts.master')

@section('content')
    <div class="bg-blue h-2"></div>
    <div class="flex flex-col items-center justify-center h-screen">
        <h1 class="text-3xl text-grey-darkest uppercase text-center">
            This repository is full Tailwind Css Example <br>
            With Vue.
        </h1>
        <ul class="list-reset mt-6">
            <li class="text-blue text-xl">1. <a href="/player" class="no-underline text-blue hover:underline">Audio Player</a></li>
        	<li class="text-blue text-xl">2. <a href="/stripeform" class="no-underline text-blue hover:underline">Stripe Partner Form</a></li>
        </ul>
    </div>
@endsection
