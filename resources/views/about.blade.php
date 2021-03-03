@extends('layout/template')

@section('title', 'Home')

@section('home')

<!-- ======= About Section ======= -->
<section id="faq" class="faq">
    <div class="container mt-5">

        <div class="section-title" data-aos="zoom-out">
            <h2>about</h2>
            <p>{{$nama}}!</p>
            <h5>Menggunakan blade @.for</h5>
        </div>

        <ul class="faq-list">

            <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Sebutkan angka 1 - 10! <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        @for ($i = 1; $i <= 10; $i++) {{ $i }} @endfor </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Berapa nilai kuadrat dari angka 9 - 13? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        @for ($i=9; $i<=13; ++$i) Nilai kuadrat dari {{ $i }} adalah {{ $i * $i }} <br> @endfor
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Berapa luas segitiga sama sisi jika sisinya 4,5,6 cm? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        @for ($i = 4; $i <= 6; $i++) Luas segitiga untuk sisi {{ $i }} cm adalah {{ $i * $i /2  }} cm2 <br> @endfor
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection