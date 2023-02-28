@extends('layout.app') @section('content')

{{-- inner --}}
<div class="inner">
    <div
        class="flex flex-col items-center justify-center h-full gap-6"
    >
        <h2 class="text-zinc-300 text-xl">Rólunk</h2>
        <h1 class="text-zinc-300 text-6xl font-bold">A Társulás</h1>
        <div class="flex gap-4 text-xl">
            <a class="text-zinc-300 hover:text-zinc-100 ease-all duration-200" href="{{ url('/')}}">Kezdőlap</a>
            <p class="text-zinc-300">/</p>
            <p class="text-zinc-400">Társulásról</p>
        </div>
    </div>
</div>

<div class="px-2 py-5 bg-white dark:bg-zinc-200">
    <div
        class="main-container mx-auto min-h-8/12 mt-4 gap-3"
    >
    <div class="grid grid-cols-2 justify-items-center">
        <!-- szervezzeti_felepites -->
        <div>
            <h1 class="text-2xl font-bold text-emerald-500 mb-5 text-center">Szervezeti felépítés</h1>
            <img class="rounded-xl border border-zinc-400 p-5" src="{{asset('./img/tarsulasrol/szervezeti_1.png')}}" alt="">
        </div>
        <!-- Tagönkormányzatok -->
        <div>
            <h1 class="text-2xl font-bold text-emerald-500 mb-5 text-center">Tagönkormányzatok</h1>
            <p class="text-lg text-center">A Társulás 127 tagönkormányzatának <br> listája letölthető <a class="text-emerald-500 hover:text-emerald-400 ease-in duration-200 mb-3" href="{{
                asset('./pdf/tarsulasrol/tarsulasdokumentumai/tarsulas_tagjai.pdf')
            }}" target="__blank">itt</a></p>
            <div class="border-b border-zinc-300 w-9/12 mx-auto mt-5"></div>
            <!-- Társulás dokumentumai -->
            <h1 class="text-2xl font-bold text-emerald-500 mb-5 mt-10 text-center">Munkaszervezet</h1>
            <div class="flex flex-col items-center text-lg">
                <a class="text-emerald-500 hover:text-emerald-400 ease-in duration-200 mb-3" href="{{
                    asset('./pdf/tarsulasrol/tarsulasdokumentumai/alapito_okirat.pdf')
                }}" target="__blank">Alapító okirat</a>
                <a class="text-emerald-500 hover:text-emerald-400 ease-in duration-200 mb-3" href="{{
                    asset('./pdf/tarsulasrol/tarsulasdokumentumai/TM hatályos 2020.01.01-től.pdf')
                }}" target="__blank">Társulási megállapodás</a>
                <a class="text-emerald-500 hover:text-emerald-400 ease-in duration-200 mb-3 ml-5" href="{{
                    asset('./pdf/tarsulasrol/tarsulasdokumentumai/1. melléklet.pdf')
                }}" target="__blank">1. számú melléklet</a>
                <a class="text-emerald-500 hover:text-emerald-400 ease-in duration-200 mb-3 ml-5" href="{{
                    asset('./pdf/tarsulasrol/tarsulasdokumentumai/1_A. melléklet.pdf')
                }}" target="__blank">1/A. számú melléklet</a>
                <a class="text-emerald-500 hover:text-emerald-400 ease-in duration-200 mb-3 ml-5" href="{{
                    asset('./pdf/tarsulasrol/tarsulasdokumentumai/2. melléklet.pdf')
                }}" target="__blank">2. számú melléklet</a>
                <a class="text-emerald-500 hover:text-emerald-400 ease-in duration-200 mb-3 ml-5" href="{{
                    asset('./pdf/tarsulasrol/tarsulasdokumentumai/3. melléklet.pdf')
                }}" target="__blank">3. számú melléklet</a>
                <a class="text-emerald-500 hover:text-emerald-400 ease-in duration-200 mb-3 ml-5" href="{{
                    asset('./pdf/tarsulasrol/tarsulasdokumentumai/Törzskönyvi_kivonat_200117.pdf')
                }}" target="__blank">Törzskönyvi kivonat</a>
                <a class="text-emerald-500 hover:text-emerald-400 ease-in duration-200 mb-3" href="{{
                    asset('./pdf/tarsulasrol/tarsulasdokumentumai/TT SZMSZ_2020_02_04.pdf')
                }}" target="__blank">Társulási Tanács SZMSZ</a>
            </div>
        </div>
    </div>
    <div class="border-b border-zinc-300 w-9/12 mt-4"></div>
    <!-- Társulási Tanács -->
    <h1 class="text-4xl font-bold text-emerald-500 mb-5 mt-10 text-center">Társulási Tanács</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-base text-left text-zinc-300 dark:text-zinc-300">
            <thead class="text-base text-emerald-500 uppercase bg-zinc-500 dark:bg-zinc-700 dark:text-emerald-500">
            <tr>
                <th scope="col" class="px-6 py-3 w-64">Név</th>
                <th scope="col" class="px-6 py-3 w-72">Beosztás</th>
                <th scope="col" class="px-6 py-3">Önkormányzat</th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4 w-fit">DR. HORVÁTH ATTILA</td>
                <td class="px-6 py-4">Társulási Tanács Elnöke	</td>
                <td class="px-6 py-4">Szombathely</td>
            </tr>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-zinc-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4">BÁSTY BÉLA</td>
                <td class="px-6 py-4">Társulási Tanács tag</td>
                <td class="px-6 py-4">Bozsok, Cák, Gyöngyösfalu, Horvátzsidány, Kiszsidány, Kőszeg, Kőszegdoroszló, Kőszegpaty, Kőszegszerdahely, Lukácsháza, Nemescsó, Ólmod, Peresznye, Pusztacsó, Velem</td>
            </tr>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4">SZABÓ JÓZSEF</td>
                <td class="px-6 py-4">Társulási Tanács tag</td>
                <td class="px-6 py-4">Bejctyertyános, Duka, Kemenespálfa, Kenéz, Megyehíd, Nemeskocs, Nyőgér, Ostffyasszonyfa, Ölbő, Pápoc, Pecöl, Répcelak</td>
            </tr>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4">FUKSZBERGER IMRE</td>
                <td class="px-6 py-4">Társulási Tanács tag</td>
                <td class="px-6 py-4">Alsóújlak, Csehimindszent, Csipkerek,Egervölgy, Gersekarát, Kám, Mikosszéplak, Püspökmolnári, Rábahidvég, Szemenye, Telekes</td>
            </tr>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100"> 
                <td class="px-6 py-4">DR. NÉMETH SÁNDOR</td>
                <td class="px-6 py-4">Társulási Tanács tag</td>
                <td class="px-6 py-4">Bük, Sajtóskál</td>
            </tr>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4">BEBES ISTVÁN</td>
                <td class="px-6 py-4">Társulási Tanács tag</td>
                <td class="px-6 py-4">Csákánydoroszló, Daraboshegy, Döbörhegy, Döröske, Egyházashollós, Egyházasrádóc, Halastó, Halogy, Harasztifalu, Hegyháthodász, Hegyhátsál, Katafa, Kemestaródfa, Körmend, Magyarnádalja, Magyarszecsőd, Molnaszecsőd, Nádasd, Nagymizdó, Nemesrempehollós, Pinkamindszent, Szarvaskend, Vasalja</td>
            </tr>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4">ZSOLNAI ZOLTÁN</td>
                <td class="px-6 py-4">Társulási Tanács tag</td>
                <td class="px-6 py-4">Acsád, Balogunyom, Bozzai, Bucsu, Csempeszkopács, Dozmat, Felsőcsatár, Gencsapáti, Gyanógeregye, Ják, Kisunyom, Meszlen, Nárai, Narda, Nemesbőd, Nemeskolta, Perenye, Rábatöttös, Rum, Salköveskút, Sé, Sorkifalud, Sorkikápolna, Sorokpolány, Söpte, Tanakajd, Táplánszentkereszt, Torony, Vasasszonyfa, Vassurány, Vasszécseny, Vasszilvágy, Vát, Vép, Zsennye</td>
            </tr>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4">KAPORNAKY SÁNDOR</td>
                <td class="px-6 py-4">Társulási Tanács tag</td>
                <td class="px-6 py-4">Bajánsenye, Felsőjánosfa, Felsőmarác, Hegyhátszentjakab, Hegyhátszentmárton, Ispánk, Ivánc, Kercaszomor, Kerkáskápolna, Kisrákos, Kondorfa, Magyarszombatfa, Nagyrákos, Őrimagyarósd, Őriszentpéter, Pankasz, Szaknyér, Szalafő, Szőce, Velemér, Viszák</td>
            </tr>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4">LABRITZ BÉLA</td>
                <td class="px-6 py-4">Társulási Tanács Elnökhelyettese</td>
                <td class="px-6 py-4">Csörötnek, Gasztony, Magyarlak, Nemesmedves, Orfalu, Rátót, Szentgotthárd</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="border-b border-zinc-300 w-9/12 mt-4"></div>
    <!-- Munkaszervezet -->
    <h1 class="text-4xl font-bold text-emerald-500 mb-5 mt-10 text-center">Munkaszervezet</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-auto mb-10">
        <table class="w-full text-base text-left text-zinc-300 dark:text-zinc-300">
            <thead class="text-base text-emerald-500 uppercase bg-zinc-500 dark:bg-zinc-700 dark:text-emerald-500">
            <tr>
                <th scope="col" class="px-6 py-3">Tisztség</th>
                <th scope="col" class="px-6 py-3">Név</th>
                <th scope="col" class="px-6 py-3">Telefon</th>
                <th scope="col" class="px-6 py-3">Fax</th>
                <th scope="col" class="px-6 py-3">E-mail</th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4 w-fit">PIU vezető</td>
                <td class="px-6 py-4">Lakézi Gábor</td>
                <td class="px-6 py-4">94/316-850</td>
                <td class="px-6 py-4">94/316-849</td>
                <td class="px-6 py-4"><a class="text-white hover:text-zinc-400 ease-in duration-100" href="mailto:gabor.lakezi@westhull.hu">gabor.lakezi@westhull.hu</a></td>
            </tr>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4 w-fit">Projekt menedzser</td>
                <td class="px-6 py-4">Szabóné Marton Erzsébet</td>
                <td class="px-6 py-4">94/316-850</td>
                <td class="px-6 py-4">94/316-849</td>
                <td class="px-6 py-4"><a class="text-white hover:text-zinc-400 ease-in duration-100" href="mailto:sz.marton.e@westhull.hu">sz.marton.e@westhull.hu</a></td>
            </tr>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4 w-fit">Közgazdasági, pénzügyi szakértő</td>
                <td class="px-6 py-4">Leidliné Könczöl Enikő</td>
                <td class="px-6 py-4">94/316-850</td>
                <td class="px-6 py-4">94/316-849</td>
                <td class="px-6 py-4"><a class="text-white hover:text-zinc-400 ease-in duration-100" href="mailto:leidline.eniko@westhull.hu">leidline.eniko@westhull.hu</a></td>
            </tr>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4 w-fit">Jogi szakértő</td>
                <td class="px-6 py-4">dr. Bozzay Gabriella</td>
                <td class="px-6 py-4">94/316-850</td>
                <td class="px-6 py-4">94/316-849</td>
                <td class="px-6 py-4"></td>
            </tr>
            <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-zinc-700 dark:hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4 w-fit">PIU adminisztrátor</td>
                <td class="px-6 py-4">Nagyné Pekovits Judit</td>
                <td class="px-6 py-4">94/316-850</td>
                <td class="px-6 py-4">94/316-849</td>
                <td class="px-6 py-4"><a class="text-white hover:text-zinc-400 ease-in duration-100" href="mailto:pekovits.judit@westhull.hu">pekovits.judit@westhull.hu</a></td>
            </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>

@endsection