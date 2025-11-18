<title>NurJourney - Haji</title>
@include('layout.headerA')

<!-- Hero -->
<section class="hero">
    <div class="hero-text">
        <h1>
            Temukan <span class="highlight">Dunia,</span> Rasakan Berkah di Setiap Perjalanan
        </h1>
        <p class="subtext">
            “ NurJourney menghadirkan pengalaman wisata halal dan liburan keliling dunia yang nyaman, berkesan, dan penuh makna.”
        </p>
        <div class="hero-buttons">
            <button class="btn-yellow" onclick="window.location.href='konsultasi/'">Konsultasi</button>
            <button class="btn-outline" onclick="document.getElementById('paket').scrollIntoView({ behavior: 'smooth' })">Lihat Paket <span>→</span></button>
        </div>
    </div>

    <div class="hero-image">
        <img src="{{ asset('image/heroWH.jpg') }}" alt="Haji">
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
            Tour ke Korea dengan fasilitas lengkap & didampingi oleh tour guide.
        </p>

        <div class="paket-card-wrapper">
            <!-- Paket 1 -->
            <div class="paket-card" data-aos="fade-right">
                <img src="{{ asset('image/tour-korea.jpg') }}" alt="Tour Korea">
                <div class="paket-content">
                    <h3>Tour Korea</h3>
                    <p>
                        Paket umroh dengan harga lebih terjangkau.
                    </p>
                    <div class="paket-price">
                        <span>Mulai dari</span>
                        <span>Rp 27.900.000</span>
                    </div>
                    <a href="#" class="btn-paket">Lihat Selengkapnya</a>
                </div>
            </div>

            <!-- Paket 2 -->
            <div class="paket-card" data-aos="zoom-in">
                <img src="{{ asset('image/tour-turki.jpg') }}" alt="Tour Turkiye">
                <div class="paket-content">
                    <h3>Tour Turkiye</h3>
                    <p>
                        Tour ke Turkiye dengan fasilitas lengkap & didampingi oleh tour guide.
                    </p>
                    <div class="paket-price">
                        <span>Mulai dari</span>
                        <span>Rp 47.900.000</span>
                    </div>
                    <a href="#" class="btn-paket">Lihat Selengkapnya</a>
                </div>
            </div>

            <!-- Paket 3 -->
            <div class="paket-card" data-aos="fade-left">
                <img src="{{ asset('image/tour-jepang.jpeg') }}" alt="Tour Jepang">
                <div class="paket-content">
                    <h3>Tour Jepang</h3>
                    <p>
                        Tour ke Jepang dengan fasilitas lengkap & didampingi oleh tour guide
                    </p>
                    <div class="paket-price">
                        <span>Mulai dari</span>
                        <span>Rp 55.400.000</span>
                    </div>
                    <a href="#" class="btn-paket">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layout.footer')