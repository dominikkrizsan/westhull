@extends('layout.app') @section('content')
{{-- inner --}}
<div class="inner">
    <div
        class="flex flex-col items-center justify-center h-full gap-6"
    >
        <h2 class="text-zinc-300 text-xl">Projektről</h2>
        <h1 class="text-zinc-300 text-6xl font-bold">KEOP 7.1.1.1</h1>
        <div class="flex gap-4 text-xl">
            <a class="text-zinc-300 hover:text-zinc-100 ease-all duration-200" href="{{ url('/')}}">Kezdőlap</a>
            <p class="text-zinc-300">/</p>
            <p class="text-zinc-400">KEOP 7.1.1.1</p>
        </div>
    </div>
</div>
<div class="px-2 py-5 bg-white dark:bg-zinc-200">
    <div
        class="main-container flex flex-col items-start justify-center mx-auto min-h-8/12 mt-4 gap-3"
    >
        <!-- rovid bemutatas -->
        <p class="text-emerald-600 font-bold text-2xl pt-5">
            Projekt rövid bemutatása
        </p>
        <p class="text-lg">
            A Nyugat-dunántúli Regionális Hulladékgazdálkodási Program célja a
            társult településeken a hulladékgazdálkodás egyes feladatainak
            ellátása, ezen belül kiemelten a szelektív hulladékgyűjtés
            továbbfejlesztése, illetve a hulladékok jogszabályi előírásoknak
            megfelelő arányú, anyagában történő hasznosításának elősegítése. Az
            Új Magyarország Fejlesztési Terv KEOP 7.1.1.1. pályázati
            konstrukciója támogatja ezen komplex célrendszert, a lakosságnál és
            a közintézményekben keletkező hulladékra koncentrálva.
        </p>
        <div class="grid grid-cols-2 items-center justify-items-center mb-10">
            <div class="pr-8">
                <p class="text-xl font-bold mb-5">
                    A hulladékgazdálkodási program főbb elemei
                </p>
                <ul class="text-lg flex flex-col gap-2">
                    <li class="list-disc ml-8">
                        80 új szelektív hulladékgyűjtő sziget telepítése
                    </li>
                    <li class="list-disc ml-8">
                        150 üveggyűjtő konténer telepítése
                    </li>
                    <li class="list-disc ml-8">
                        házhoz menő szelektív hulladékgyűjtés megszervezése
                    </li>
                    <li class="list-disc ml-8">
                        a kőszegi hulladékudvar felújítása, bővítése
                    </li>
                    <li class="list-disc ml-8">
                        7 új hulladékudvar építése – Bük, Körmend,Pankasz,
                        Rábahidvég, Répcelak, Őriszentpéter, Szentgotthárd
                    </li>
                    <li class="list-disc ml-8">
                        a begyűjtéshez szükséges gépjárműpark beszerzése
                    </li>
                    <li class="list-disc ml-8">
                        1 db 14.000 t/év kapacitású válogatómű építése
                        Szombathelyen, a hulladék hasznosítását, ipari
                        előkészítését szolgálja
                    </li>
                    <li class="list-disc ml-8">
                        27500 db házi komposztáló láda beszerzése és kiosztása a
                        társult települések lakosságának
                    </li>
                    <li class="list-disc ml-8">lakossági szemléletformálás</li>
                    <li class="list-disc ml-8">
                        új munkahelyek teremtése a megvalósuló szolgáltató és
                        <br />
                        feldolgozó egységekben
                    </li>
                </ul>
            </div>
            <img
                class="rounded-xl"
                src="{{ asset('./img/keop7111/keop7111-1.png') }}"
                alt=""
            />
        </div>
        <div class="grid grid-cols-2 items-center justify-items-center mb-10">
            <img
                class="rounded-xl"
                src="{{ asset('./img/keop7111/keop7111-2.png') }}"
                alt=""
            />
            <div class="pl-8">
                <p class="text-xl font-bold mb-5">Előkészítési feladatok</p>
                <ul class="text-lg flex flex-col gap-2">
                    <li class="list-disc ml-8">
                        egyeztetések, adatok egybegyűjtése, felülvizsgálata,
                        feldolgozása és összesítése az optimális műszaki
                        tartalom és üzemeltetési keretek megtervezése érdekében
                    </li>
                    <li class="list-disc ml-8">
                        örökségvédelmi hatástanulmány
                    </li>
                    <li class="list-disc ml-8">
                        engedélyezési és kiviteli tervek elkészítése (2011
                        tavasz)
                    </li>
                    <li class="list-disc ml-8">
                        közbeszerzési tenderek előkészítése - az ajánlatkérő
                        műszaki követelményeinek összeállítása
                    </li>
                    <li class="list-disc ml-8">
                        tender dokumentációk műszaki leírásának elkészítése
                    </li>
                    <li class="list-disc ml-8">
                        2. fordulós pályázati dokumentáció elkészítése
                        (megvalósíthatósági tanulmány, költség-haszon elemzés)
                    </li>
                    <li class="list-disc ml-8">
                        teljeskörű engedélyeztetési folyamatok (2011 ősz – 2012
                        tavasz)
                    </li>
                    <li class="list-disc ml-8">
                        lőszermentesítés előkészítése a jogszabályi előírásoknak
                        megfelelően 9 helyszínen
                    </li>
                    <li class="list-disc ml-8">
                        az üzemeltetés kereteinek kidolgozása
                    </li>
                    <li class="list-disc ml-8">
                        a fejlesztés széles körű megismertetése és elfogadtatása
                    </li>
                    <li class="list-disc ml-8">
                        lakossági tájékoztató kiadványok készítése, lakossági
                        fórumok tartása
                    </li>
                    <li class="list-disc ml-8">
                        sajtóesemények szervezése a lakossági szemléletformálás
                        elősegítésére
                    </li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 items-center justify-items-center">
            <div>
                <p class="text-lg">
                    A pályázat két fordulós. Az 1. forduló a regionális
                    hulladékgazdálkodási program előkészítését, tervezését, a
                    második pedig a program megvalósítását támogatja. Az 1.
                    fordulóban 78.850.250,- Ft támogatást (a nettó költségek
                    85%-a) nyert a Társulás, melyhez 13.914.750,-Ft önerőt és az
                    ÁFÁ-t biztosítják a társult települések. A kétfordulós
                    projekt teljes becsült összköltsége nettó 1,97 milliárd Ft.
                    A végleges műszaki tartalmat a 2. fordulós pályázati
                    előírásokkal összhangban alakítjuk ki.
                </p>
                <p class="text-lg">
                    A 30 éves élettartamra tervezett projekt előkészítése 3 évet
                    vesz igénybe, melyet a Társulás 2009 nyarán elkezdett. Az 1.
                    forduló támogatási szerződésének aláírására 2010 áprilisában
                    került sor, melyet követően a teljes körű műszaki, pénzügyi,
                    jogi előkészítés 2012 tavaszáig befejeződhet. Eredményeként
                    a Társulás rendelkezni fog minden szükséges engedéllyel, és
                    tanulmánnyal valamint valamennyi közbeszerzési eljárás
                    lefolytatásához szükséges dokumentációval. Így sikeres 2.
                    fordulós pályázat esetén a beruházások 2013. évben és 2014.
                    első félévében befejeződhetnek. A rendszer üzemeltetése
                    várhatóan 2014-ben indul.
                </p>
            </div>
            <img
                class="rounded-xl"
                src="{{ asset('./img/keop7111/keop7111-3.png') }}"
                alt=""
            />
        </div>
        <p class="text-lg">
            A projekt rövid bemutatása letölthető
            <a
                class="text-emerald-700 hover:text-emerald-600 ease-in duration-200"
                href="{{
                    asset(
                        './pdf/keop7111/NYUDU_hulladekgazdalk_KEOP7111_osszefogl.pdf'
                    )
                }}"
                target="__blank"
                >itt</a
            >
        </p>
        <div class="border-b border-zinc-300 w-9/12 mt-4"></div>
        <!-- resztvevok -->
        <p class="text-emerald-600 font-bold text-2xl pt-5">
            Projekben résztvevők
        </p>
        <div class="grid grid-cols-2 justify-items-stretch items-center">
            <div class="text-lg">
                <p>Közreműködő szervezet:</p>
                <p>Műszaki szakértő:</p>
                <p>Jogi szakértő:</p>
                <p>Könyvvizsgáló:</p>
                <p>Közbeszerzédi tanácsadó:</p>
                <p>Projekt menedzsment:</p>
                <p>PR szakértő:</p>
                <p>tervező:</p>
            </div>
            <div class="text-lg">
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                    href="http://www.energiakozpont.hu/"
                    target="__blank"
                    >Energia Központ Nonprofit Kft.</a
                >
                <p>Ala és Társa Bt.</p>
                <p>Popgyákunik & Bozzai Ügyvédi Iroda</p>
                <p>Konzekvens Kft.</p>
                <p>TriCSÓK Zrt.</p>
                <p>Borostyánkő Tanácsadó és Marketing Kft.</p>
                <p>Regionális Humán Innováció Képzési Nonprofit Kft.</p>
                <p>SOLVEX- MKM Konzorcium</p>
            </div>
        </div>
        <div class="border-b border-zinc-300 w-9/12 mt-4"></div>
        <!-- dokumentumok -->
        <div class="flex items-center gap-5">
            <i class="fa-solid fa-file-pdf text-4xl text-emerald-600"></i>
            <h1 class="text-2xl font-bold text-emerald-600 pt-5 mb-5">
                Projekt dokumentumai
            </h1>
        </div>
        <p class="text-lg">
            A 2009. december 01.-én benyújtott KEOP 7.1.1.1. települési
            szilárdhulladék-gazdálkodási rendszerek fejlesztése <br />
            pályázat 1.fordulós pályázat dokumentumai
        </p>
        <div class="grid grid-cols-2 justify-items-stretch text-lg gap-16 mb-5">
            <div>
                <p class="text-xl font-bold mb-5">1.1. Pályázat dokumentumai</p>
                <p class="my-3 font-semibold">
                    Előzetes megvalósíthatósági tanulmány
                </p>
                <ul>
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/elozetes-megval-tanulvany/Beruhazasi_koltseg_Szombathely_A_alt.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Beruházási költség Szombathely A alt</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/elozetes-megval-tanulvany/Beruhazasi_koltseg_Szombathely_B_alt.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Beruházási költség Szombathely B alt</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/elozetes-megval-tanulvany/I._szamu_melleklet_-_tulajdoni_lapok.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>I. számú melléklet - tulajdoni lapok</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/elozetes-megval-tanulvany/KEOP_111_EMT_Nyugat-Dunantuli.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>KEOP 111 EMT Nyugat-Dunántúli</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/elozetes-megval-tanulvany/Uzemeltetesi_koltseg_Szombathely_A_alt.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Üzemeltetési költség Szombathely A alt</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/elozetes-megval-tanulvany/Uzemeltetesi_koltseg_Szombathely_B_alt.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Üzemeltetési költség Szombathely B alt</li></a
                    >
                </ul>
                <p class="my-3 font-semibold">Pályázati adatlap</p>
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                    href="{{
                        asset(
                            './pdf/keop7111/palyazati-adatlap/palyazati_adatlap.pdf'
                        )
                    }}"
                    target="__blank"
                    ><li>Pályázati adatlap</li></a
                >
                <p class="my-3 font-semibold">Pályázati adatlap mellékletei</p>
                <ul>
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/palyazati-adatlap-mellekletei/Alairasi_cimpeldany.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Aláírási címpéldány</li></a
                    >
                    <!-- !!!!!!!!! -->
                    <a
                        class="text-red-600 hover:text-emerald-500 ease-in duration-200"
                        href=""
                        ><li>Alapító okirat</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/palyazati-adatlap-mellekletei/F12_alt_mellekletek_nyilatkozatai.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>F12 alt mellékletek nyilatkozatai</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/palyazati-adatlap-mellekletei/I.szamu_melleklet_elolap.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>I.számú melléklet előlap</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/palyazati-adatlap-mellekletei/II.szamu_melleklet_elolap.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>II.számú melléklet előlap</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/palyazati-adatlap-mellekletei/III.szamu_melleklet_elolap.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>III.számú melléklet előlap</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/palyazati-adatlap-mellekletei/IV.szamu_melleklet_elolap.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>IV.számú melléklet előlap</li></a
                    >
                    <!-- !!!!!!!!! -->
                    <a
                        class="text-red-600 hover:text-emerald-500 ease-in duration-200"
                        href=""
                        ><li>Javaslat 2010. évi koncepcióra</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/palyazati-adatlap-mellekletei/nem_csatlakozott_telepulesek_nyilatkozatai_teljes.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Nem csatlakozott települések nyilatkozatai</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/palyazati-adatlap-mellekletei/onero_rendelkezesre_allo_nyilatkozat.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Önerő rendelkezésre álló nyilatkozat</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/palyazati-adatlap-mellekletei/Tarsulasi_megallapodas.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Társulási megállapodás</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/palyazati-adatlap-mellekletei/hianypotlas_Szombathely_2009_dec.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Hianypotlas_Szombathely_2009_dec</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/palyazati-adatlap-mellekletei/tisztazo_kerdesek.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Tisztazo kerdesek</li></a
                    >
                </ul>
            </div>
            <div>
                <p class="text-xl font-bold mb-5">1.2. Támogatási szerződés</p>
                <ul>
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/tamogatasi-szerzodes/Tamogatasi_szerzodes.pdf.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Támogatási szerződés</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/tamogatasi-szerzodes/Tamogatasi_szerzodes_modositas.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Támogatási szerződés módosítás</li></a
                    >
                </ul>
                <p class="text-xl font-bold my-5">1.3. Ütemezés</p>
                <ul>
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset('./pdf/keop7111/utemezes/Utemezes.pdf')
                        }}"
                        target="__blank"
                        ><li>Ütemezés I</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/utemezes/utvonalterv_modositas.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Ütemezés II</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset('./pdf/keop7111/utemezes/utemezes_III.pdf')
                        }}"
                        target="__blank"
                        ><li>Ütemezés III</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset(
                                './pdf/keop7111/utemezes/Valtozas_bejelento.pdf'
                            )
                        }}"
                        target="__blank"
                        ><li>Ütemezés IV</li></a
                    >
                    <a
                        class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                        href="{{
                            asset('./pdf/keop7111/utemezes/utemezes_V.pdf')
                        }}"
                        target="__blank"
                        ><li>Ütemezés V</li></a
                    >
                </ul>
            </div>
        </div>
    </div>
    @endsection
</div>
