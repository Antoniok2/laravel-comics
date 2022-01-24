@extends('layouts.main-layout')
@section('content')

    <div class="jumbotron">
    </div>

    <div class="container">
        <div class="schede">
            <div class="scheda">
                <a href="{{ url('detail') }}">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="dettagli">
                    <span>Action Comics</span>
                </a>
            </div>
            <div class="scheda">
                <a href="{{ url('detail') }}">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01" alt="dettagli">
                    <span>American Vampire 1976</span>
                </a>
            </div>
            <div class="scheda">
                <a href="{{ url('detail') }}">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb" alt="dettagli">
                    <span>Aquaman</span>
                </a>
            </div>
            <div class="scheda">
                <a href="{{ url('detail') }}">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76" alt="dettagli">
                    <span>Batgirl</span>
                </a>
            </div>
            <div class="scheda">
                <a href="{{ url('detail') }}">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="dettagli">
                    <span>Batman</span>
                </a>
            </div>
            <div class="scheda">
                <a href="{{ url('detail') }}">
                    <img src="https://images-na.ssl-images-amazon.com/images/S/cmx-images-prod/Item/755676/755676._SX1600_QL80_TTD_.jpg" alt="dettagli">
                    <span>Batman Beyond</span>
                </a>
            </div>
            <div class="scheda">
                <a href="{{ url('detail') }}">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8" alt="dettagli">
                    <span>Batman/Superman</span>
                </a>
            </div>
            <div class="scheda">
                <a href="{{ url('detail') }}">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk" alt="dettagli">
                    <span>Batman/Superman Annual</span>
                </a>
            </div>
            <div class="scheda">
                <a href="{{ url('detail') }}">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8" alt="dettagli">
                    <span>Batman: The Joker War Zone</span>
                </a>
            </div>
            <div class="scheda">
                <a href="{{ url('detail') }}">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY" alt="dettagli">
                    <span>Batman: Three Jokers</span>
                </a>
            </div>
            <div class="scheda">
                <a href="{{ url('detail') }}">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX" alt="dettagli">
                    <span>Batman: White Knight Presents: Harley Quinn</span>
                </a>
            </div>
            <div class="scheda">
                <a href="{{ url('detail') }}">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq" alt="dettagli">
                    <span>Catwoman</span>
                </a>
            </div>
            <button>LOAD MORE</button>
        </div>
    </div>

    <div class="extra">
        <div class="icons">
            <section>
              <img src="{{ asset('/storage/assets/img/buy-comics-digital-comics.png') }}" alt="extra_icon" />
              <span>DIGITAL COMICS</span>
            </section>
            <section>
              <img src="{{ asset('/storage/assets/img/buy-comics-merchandise.png') }}" alt="extra_icon" />
              <span>DC MERCHANDISE</span>
            </section>
            <section>
              <img src="{{ asset('/storage/assets/img/buy-comics-subscriptions.png') }}" alt="extra_icon" />
              <span>SUBSCRIPTION</span>
            </section>
            <section>
              <img src="{{ asset('/storage/assets/img/buy-comics-shop-locator.png') }}" alt="extra_icon" />
              <span>COMIC SHOP LOCATOR</span>
            </section>
            <section>
              <img class="prop" src="{{ asset('/storage/assets/img/buy-dc-power-visa.svg') }}" alt="extra_icon" />
              <span>DC POWER VISA</span>
            </section>
        </div>
    </div>
    
@endsection 