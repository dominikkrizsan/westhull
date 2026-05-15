@extends('layout.app')

@section('content')
<div style="max-width: 800px; width: 100%; margin: 0 auto; padding: 0 20px 60px; box-sizing: border-box; display: flex; flex-direction: column; align-items: center;">
  <div style="display: flex; flex-direction: column; gap: 30px; width: 100%;">
    <img 
        src="{{ asset('./pdf/palyazat-kiiras/pályázati felhívás-1.png') }}" 
        alt="Dokumentum 1"
        style="width: 100%; height: auto; object-fit: contain;"
    >

    <img 
        src="{{ asset('./pdf/palyazat-kiiras/pályázati felhívás-2.png') }}" 
        alt="Dokumentum 2"
        style="width: 100%; height: auto; object-fit: contain;"
    >

    <img 
        src="{{ asset('./pdf/palyazat-kiiras/pályázati felhívás-3.png') }}" 
        alt="Dokumentum 3"
        style="width: 100%; height: auto; object-fit: contain;"
    >

    <img 
        src="{{ asset('./pdf/palyazat-kiiras/pályázati felhívás-4.png') }}" 
        alt="Dokumentum 4"
        style="width: 100%; height: auto; object-fit: contain;"
    >
  </div>
  <div style="margin-top: 30px;"><a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{ asset('./pdf/palyazat-kiiras/pályázati felhívás.doc') }}" target="__blank"><li class="list-disc ml-5">Pályázati felhívás</li></a></div>
  <div><a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{ asset('./pdf/palyazat-kiiras/1. melléklet.doc') }}" target="__blank"><li class="list-disc ml-5">1. melléklet</li></a></div>
  <div><a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{ asset('./pdf/palyazat-kiiras/2. melléklet.doc') }}" target="__blank"><li class="list-disc ml-5">2. melléklet</li></a></div>
</div>
@endsection