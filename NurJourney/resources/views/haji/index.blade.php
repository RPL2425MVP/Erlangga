<title>NurJourney - Haji</title>
@include('layout.headerA')

<!-- Hero -->
<section class="hero">
    <div class="hero-text">
        <h1>
            Perjalan <span class="highlight">Haji</span> Lebih Nyaman Bersama <span class="highlight">NurJourney</span>
        </h1>
        <p class="subtext">
            “ Wujudkan impian suci Anda bersama NurJourney. Kami mendampingi setiap detik perjalanan haji Anda dengan pelayanan profesional, pengalaman spiritual mendalam, dan cahaya yang menuntun menuju ridha Ilahi. ” 
        </p>
        <div class="hero-buttons">
            <button class="btn-yellow" onclick="window.location.href='konsultasi/'">Konsultasi</button>
            <button class="btn-outline" onclick="document.getElementById('paket').scrollIntoView({ behavior: 'smooth' })">Lihat Paket <span>→</span></button>
        </div>
    </div>

    <div class="hero-image">
        <img src="{{ asset('image/haji.jpeg') }}" alt="Haji">
    </div>
</section>

<!-- Modal Promo -->
<div class="modal-overlay" id="promoModal">
    <div class="modal" data-aos="zoom-in" data-aos-duration="700">
        <div class="modal-image">
            <img src="{{ asset('image/modal.jpg') }}" alt="Promo">
        </div>
        <div class="modal-content">
            <div class="modal-close" id="closeModal">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <small class="modal-label">Penawaran Spesial</small>
            <h3>Jangan Lewatkan Penawaran Terbatas!</h3>
            <p class="modal-desc">
                Raih ketenangan hati, ibadah, lebih nyaman, bersama NurJourney
            </p>
            <div class="modal-offer">
                DP Mulai dari Rp 1.000.000
            </div>
            <div class="modal-footer">
                <button class="btn-konsultasi-offer" onclick="window.loaction.href='/konsultasi'">Konsultasi</button>
                <small class="modal-terms"><span style="color:red;">*</span>S&K Berlaku</small>
            </div>
        </div>
    </div>
</div>

<!-- Paket -->
<section class="pilihan-paket" id="paket">
    <div class="paket-container" data-aos="fade-up" data-aos-duration="900">
        <h2>Pilihan Paket</h2>
        <p>
            Pilih paket Umroh, Haji atau Wisata Halal sesuai impian Anda.
        </p>

        <div class="paket-card-wrapper">
            <!-- Paket 1 -->
            <div class="paket-card" data-aos="fade-right">
                <img src="{{ asset('image/hajiPlus.webp') }}" alt="Haji Plus">
                <div class="paket-content">
                    <h3>Haji Plus</h3>
                    <p>
                        Haji dengan izin resmi pemerintah Indonesia yang memiliki masa tunggu lebih cepat.
                    </p>
                    <div class="paket-price">
                        <span>Mulai dari</span>
                        <span>Rp 50.000.000</span>
                    </div>
                    <a href="#" class="btn-paket">Lihat Selengkapnya</a>
                </div>
            </div>

            <!-- Paket 2 -->
            <div class="paket-card" data-aos="zoom-in">
                <img src="{{ asset('image/hajiFuroda.webp') }}" alt="Haji Furoda">
                <div class="paket-content">
                    <h3>Haji Furoda</h3>
                    <p>
                        Kuota Haji eksklusif resmi dari Arab Saudi haji khusus tanpa waktu tunggu.
                    </p>
                    <div class="paket-price">
                        <span>Mulai dari</span>
                        <span>Rp 33.900.000</span>
                    </div>
                    <a href="#" class="btn-paket">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layout.footer')