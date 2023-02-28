@extends('layout.app') @section('content')

{{-- inner --}}
<div class="inner">
    <div
        class="flex flex-col items-center justify-center h-full gap-6"
    >
        <h1 class="text-zinc-300 text-6xl font-bold">Közbeszerzés</h1>
        <div class="flex gap-4 text-xl">
            <a class="text-zinc-300 hover:text-zinc-100 ease-all duration-200" href="{{ url('/')}}">Kezdőlap</a>
            <p class="text-zinc-300">/</p>
            <p class="text-zinc-400">Közbeszerzés</p>
        </div>
    </div>
</div>

<div class="px-2 py-5 bg-white dark:bg-zinc-200">
    <div
        class="main-container flex flex-col items-start justify-center mx-auto min-h-8/12 mt-4 gap-3"
    >
    <!-- tarsulas -->
    <h1 class="text-emerald-600 font-bold text-3xl">Társulás</h1>
    <ul class="text-lg">
        <p class="text-lg">A 2013. évi közbeszerzési terv második része letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/tarsulas/közbeszterv2013_2.jpg'
            )
        }}"
        target="__blank">itt</a></p>
        <p class="text-lg">A 2013. évi közbeszerzési terv első része letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/tarsulas/közbeszterv2013_1.jpg'
            )
        }}"
        target="__blank">itt</a></p>
        <p class="text-lg">A 2012. évi közbeszerzési terv 1. sz. módosítása letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/tarsulas/közbeszerzési terv módosítás_2szmell_22_2012.jpg'
            )
        }}"
        target="__blank">itt</a></p>
        <p class="text-lg">A 2012. évi közbeszerzési terv letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/tarsulas/2012_evi_kozbeszerzesi_terv.pdf'
            )
        }}"
        target="__blank">itt</a></p>
        <p class="text-lg">Statisztikai összegzés a 2010. évi közbeszerzésekről <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/tarsulas/statisztikai_osszegzes_2010.pdf'
            )
        }}"
        target="__blank">itt</a></p>
        <p class="text-lg">A 2011. évi közbeszerzési terv módosítása <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/tarsulas/modositott_kozbeszerzesi_terv.pdf'
            )
        }}"
        target="__blank">itt</a></p>
        <p class="text-lg">A 2011. évi közbeszerzési terv letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/tarsulas/2011_evi_kozbeszerzesi_terv.pdf'
            )
        }}"
        target="__blank">itt</a></p>
        <p class="text-lg">A 2010. évi közbeszerzési terv letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/tarsulas/2010_evi_kozbeszerzesi_terv.pdf'
            )
        }}"
        target="__blank">itt</a></p>
        <p class="text-lg">Statisztikai összegzés a 2009. évi közbeszerzésekről letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/tarsulas/2009_statisztikai_osszegzes_kozbeszerzesekro.pdf'
            )
        }}"
        target="__blank">itt</a></p>
        <p class="text-lg">A Tervezői szerződés letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/tarsulas/Tervezoi_szerzodes.pdf'
            )
        }}"
        target="__blank">itt</a></p>
    

    <div class="border-b border-zinc-300 w-9/12 mt-4"></div>
    <!-- keop7111 -->
    <h1 class="text-emerald-600 font-bold text-3xl my-5">KEOP 7.1.1.1</h1>
        <!-- kozbeszerzesi dontobizottsag -->
        <h1 class="text-emerald-600 font-bold text-2xl my-5">Közbeszerzési Döntőbizottság</h1>
        <div>
            <p class="text-lg">Közbeszerzési Döntőbizottság letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop7111/KDB.pdf'
                )
            }}"
            target="__blank">itt</a></p>
        </div>
        <h2 class="text-xl font-bold my-3">Határozatok</h2>
        <ul class="text-lg">
            <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop7111/Hatarozat_1.pdf'
                )
            }}"
            target="__blank"><li class="list-disc ml-5">1. határozat</li></a>
            <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop7111/Hatarozat_2.pdf'
                )
            }}"
            target="__blank"><li class="list-disc ml-5">2. határozat</li></a>
        </ul>
        <!-- tervezoi szerzodes -->
        <h1 class="text-emerald-600 font-bold text-2xl my-5">Tervezői szerződés</h1>
        <div class="text-lg">
            <p class="text-lg">Hirdetmény (K. É. 3289/2012) tervezői szerződés 1. sz. módosításáról letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop7111/megjelent_szerz.mod.taj._2012.03.02..pdf'
                )
            }}"
            target="__blank">itt</a></p>
            <p class="text-lg">A Tervezői szerződés letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop7111/Tervezoi_szerzodes.pdf'
                )
            }}"
            target="__blank">itt</a></p>
            <p class="text-lg">Tervezői szerződés 1. sz. módosítása letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop7111/Tervezoi_szerzodes_1sz_modositas.pdf'
                )
            }}"
            target="__blank">itt</a></p>
            <p class="text-lg">Tervezői szerződés éves teljesítése letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop7111/Tervezoiszerzodesevesteljesitese.pdf'
                )
            }}"
            target="__blank">itt</a></p>
            <p class="text-lg">Tervezői szerződés éves teljesítése letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop7111/Tervezoi_szerzodes_eves_teljesitese_2012.pdf'
                )
            }}"
            target="__blank">itt</a></p>
        </div>
        <div class="border-b border-zinc-300 w-9/12 mt-4"></div>
    <!-- keop230/B -->
    <h1 class="text-emerald-600 font-bold text-3xl my-5">KEOP 2.3.0/B</h1>
    <h1 class="text-emerald-600 font-bold text-2xl my-3">Előkészítés</h1>
    <p class="text-lg">Előzetes vitarendezés kérelem letölthető <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
        asset(
            './pdf/kozbeszerzes/elokeszites/Vitarendezes.pdf'
        )
    }}"
    target="__blank">itt</a></p>
    <!-- keop111 -->
    <h1 class="text-emerald-600 font-bold text-3xl my-5">KEOP-1.1.1</h1>
    <h1 class="text-emerald-600 font-bold text-2xl my-3">Közbeszerzési tanácsadó</h1>
    <ul class="text-lg grid grid-cols-2">
        <div>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés.jpg'
                )
            }}"
            target="__blank">1.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés_2.jpg'
                )
            }}"
            target="__blank">2.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés_3.jpg'
                )
            }}"
            target="__blank">3.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés_4.jpg'
                )
            }}"
            target="__blank">4.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés_5.jpg'
                )
            }}"
            target="__blank">5.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés_6.jpg'
                )
            }}"
            target="__blank">6.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés_7.jpg'
                )
            }}"
            target="__blank">7.oldal</a></li>
        </div>
        <div>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés_8.jpg'
                )
            }}"
            target="__blank">8.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés_9.jpg'
                )
            }}"
            target="__blank">9.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés_10.jpg'
                )
            }}"
            target="__blank">10.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés_11.jpg'
                )
            }}"
            target="__blank">11.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés_12.jpg'
                )
            }}"
            target="__blank">12.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/közbesz tanácsadó szerződés_13.jpg'
                )
            }}"
            target="__blank">13.oldal</a></li>
        </div>
    </ul>
    <h2 class="my-3 text-lg font-bold">I.számú módosítás:</h2>
    <ul class="text-lg">
        <li><a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/keop111/ticsók-biczi szerződés.jpg'
            )
        }}"
        target="__blank">1.oldal</a></li>
        <li><a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/keop111/ticsók-biczi szerződés_2.jpg'
            )
        }}"
        target="__blank">2.oldal</a></li>
        <li><a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/keop111/ticsók-biczi szerződés_3.jpg'
            )
        }}"
        target="__blank">3.oldal</a></li>
    </ul>
    <h1 class="text-emerald-600 font-bold text-2xl my-3">Projekt menedzser</h1>
    <ul class="text-lg grid grid-cols-2">
        <div>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/projekt menedzser 001.jpg'
                )
            }}"
            target="__blank">1.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/projekt menedzser 002.jpg'
                )
            }}"
            target="__blank">2.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/projekt menedzser 003.jpg'
                )
            }}"
            target="__blank">3.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/projekt menedzser 004.jpg'
                )
            }}"
            target="__blank">4.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/projekt menedzser 005.jpg'
                )
            }}"
            target="__blank">5.oldal</a></li>
        </div>
        <div>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/projekt menedzser 006.jpg'
                )
            }}"
            target="__blank">6.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/projekt menedzser 007.jpg'
                )
            }}"
            target="__blank">7.oldal</a></li>
        
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/projekt menedzser 008.jpg'
                )
            }}"
            target="__blank">8.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/projekt menedzser 009.jpg'
                )
            }}"
            target="__blank">9.oldal</a></li>
        </div>
    </ul>
    <ul class="text-lg mt-3">
        <li>1. számú módosítás <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/keop111/PME_szerzodes_modositas_001.jpg'
            )
        }}"
        target="__blank">1.oldal</a></li>
        <li>1. számú módosítás <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/keop111/PME_szerzodes_modositas_002.jpg'
            )
        }}"
        target="__blank">2.oldal</a></li>
        <li><a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/keop111/NYDRHP_PIU_szerzmod_2.pdf'
            )
        }}"
        target="__blank">2. számú módosítás</a></li>
    </ul>
    <h1 class="text-emerald-600 font-bold text-2xl my-3">Nyilvánosság</h1>
    <ul class="text-lg grid grid-cols-2">
        <div>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/nyilvanossag/nyilvánosság 001.jpg'
                )
            }}"
            target="__blank">1.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/nyilvanossag/nyilvánosság 002.jpg'
                )
            }}"
            target="__blank">2.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/nyilvanossag/nyilvánosság 003.jpg'
                )
            }}"
            target="__blank">3.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/nyilvanossag/nyilvánosság 004.jpg'
                )
            }}"
            target="__blank">4.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/nyilvanossag/nyilvánosság 005.jpg'
                )
            }}"
            target="__blank">5.oldal</a></li>
        
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/nyilvanossag/nyilvánosság 006.jpg'
                )
            }}"
            target="__blank">6.oldal</a></li>
        </div>
        <div>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/nyilvanossag/nyilvánosság 007.jpg'
                )
            }}"
            target="__blank">7.oldal</a></li>
        
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/nyilvanossag/nyilvánosság 008.jpg'
                )
            }}"
            target="__blank">8.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/nyilvanossag/nyilvánosság 009.jpg'
                )
            }}"
            target="__blank">9.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/nyilvanossag/nyilvánosság 010.jpg'
                )
            }}"
            target="__blank">10.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/nyilvanossag/nyilvánosság 011.jpg'
                )
            }}"
            target="__blank">11.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/nyilvanossag/nyilvánosság 012.jpg'
                )
            }}"
            target="__blank">12.oldal</a></li>
        </div>
    </ul>
    <ul class="text-lg mt-3">
        <li>1. számú módosítás <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/keop111/nyilvanossag/young módosítás.jpg'
            )
        }}"
        target="__blank">1.oldal</a></li>
        <li>1. számú módosítás <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/keop111/nyilvanossag/young módosítás_2.jpg'
            )
        }}"
        target="__blank">2.oldal</a></li>
        <li><a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/keop111/nyilvanossag/NYDRHÖT_2014.03.20_mód_2.pdf'
            )
        }}"
        target="__blank">2. számú módosítás</a></li>
    <h1 class="text-emerald-600 font-bold text-2xl my-3">Mérnök</h1>
    <ul class="text-lg mb-3">
        <li>Konzorciumi megállapodás <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/keop111/mernok/mérnök_konzorciumi megállapodás.jpg'
            )
        }}"
        target="__blank">1.oldal</a></li>
        <li>Konzorciumi megállapodás <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/keop111/mernok/mérnök_konzorciumi megállapodás_2.jpg'
            )
        }}"
        target="__blank">2.oldal</a></li>
    </ul>
    <ul class="text-lg grid grid-cols-2 mb-3">
        <div>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/mernok/mérnök 006.jpg'
                )
            }}"
            target="__blank">1.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/mernok/mérnök 007.jpg'
                )
            }}"
            target="__blank">2.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/mernok/mérnök 008.jpg'
                )
            }}"
            target="__blank">3.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/mernok/mérnök 009.jpg'
                )
            }}"
            target="__blank">4.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/mernok/mérnök 010.jpg'
                )
            }}"
            target="__blank">5.oldal</a></li>
        </div>
        <div>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/mernok/mérnök 011.jpg'
                )
            }}"
            target="__blank">6.oldal</a></li>
        
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/mernok/mérnök 012.jpg'
                )
            }}"
            target="__blank">7.oldal</a></li>
        
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/mernok/mérnök 013.jpg'
                )
            }}"
            target="__blank">8.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/mernok/mérnök 014.jpg'
                )
            }}"
            target="__blank">9.oldal</a></li>
            <li>Szerződés <a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
                asset(
                    './pdf/kozbeszerzes/keop111/mernok/mérnök 015.jpg'
                )
            }}"
            target="__blank">10.oldal</a></li>
        </div>
    <ul class="text-lg mt-3">
        <li><a class="text-emerald-600 hover:text-emerald-500 ease-in duration-200" href="{{
            asset(
                './pdf/kozbeszerzes/keop111/mernok/NYDRHP_Mernok_Megbizasi_szerzodes_1_sz_modositas_alairt.pdf'
            )
        }}"
        target="__blank">1. számú módosítás </a></li>
    </ul>
    
    <div class="border-b border-zinc-300 w-9/12 mt-4"></div>
    <!-- tarsulas -->
    </div>
</div>

@endsection