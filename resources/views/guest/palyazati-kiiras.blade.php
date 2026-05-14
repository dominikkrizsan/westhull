@extends('layout.app')

@section('content')
<div style="display: flex;
  flex-direction: column; /* egymás alá */
  align-items: center;    /* vízszintesen középre */
  justify-content: center; /* függőlegesen középre */
  gap: 10px; /* távolság az elemek között */
  height: 100vh; /* teljes magasság */">
  <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 30px;">
    <img 
        src="{{ asset('./pdf/palyazat-kiiras/pályázati felhívás-1.png') }}" 
        alt="Dokumentum 1"
        style="width: 120px; height: 120px; object-fit: contain;"
    >

    <img 
        src="{{ asset('./pdf/palyazat-kiiras/pályázati felhívás-2.png') }}" 
        alt="Dokumentum 2"
        style="width: 120px; height: 120px; object-fit: contain;"
    >

    <img 
        src="{{ asset('./pdf/palyazat-kiiras/pályázati felhívás-3.png') }}" 
        alt="Dokumentum 3"
        style="width: 120px; height: 120px; object-fit: contain;"
    >

    <img 
        src="{{ asset('./pdf/palyazat-kiiras/pályázati felhívás-4.png') }}" 
        alt="Dokumentum 4"
        style="width: 120px; height: 120px; object-fit: contain;"
    >
</div>
  <div><a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/palyazat-kiiras/pályázati felhívás.doc'
                )
            }}"
            target="__blank"><li class="list-disc ml-5">Pályázati felhívás</li></a></div>
  <div><a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/palyazat-kiiras/1. melléklet.doc'
                )
            }}"
            target="__blank"><li class="list-disc ml-5">1. melléklet</li></a></div>
  <div><a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/palyazat-kiiras/2. melléklet.doc'
                )
            }}"
            target="__blank"><li class="list-disc ml-5">2. melléklet</li></a></div>
</div>
@endsection