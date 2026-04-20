<?php include 'includes/header.php'; ?>

<section id="hero" class="hero-section">
    <div class="container glass-panel">
        <img src="https://github.com/atescey.png" alt="Ceyda Ateşoğlu" class="profile-photo">
        <h1 class="hero-title">Merhaba, Ben <span class="gradient-text">Ceyda Ateşoğlu</span></h1>
        <p class="hero-subtitle">Bilgisayar Mühendisliği Öğrencisi </p>
        <div class="hero-actions">
            <a href="#projeler" class="btn btn-primary">Projelerimi Gör</a>
            <a href="#iletisim" class="btn btn-secondary">Benimle İletişime Geç</a>
        </div>
    </div>
</section>

<section id="hakkimda" class="about-section">
    <div class="container">
        <h2 class="section-title">Hakkımda</h2>
        <div class="about-content">
            <div class="about-text">
                <p>Merhaba, ben Ceyda.

                    Bilgisayar Mühendisliği 2. sınıf öğrencisiyim.
                    Kariyerime İHA takımlarında görev alarak başladım;
                    burada OpenCV, YOLOv8 ve Roboflow kullanarak nesne tespiti üzerine saha tecrübesi edindim.
                    Şu an odağımı yazılımın temellerine çevirerek
                    veri yapıları, algoritmalar ve modern web geliştirme
                    (HTML, CSS, JavaScript) üzerine yoğunlaşıyorum.
                    Geçmişteki otonom sistem tecrübemi, güncel yazılım mimarileri
                    ve yapay zeka vizyonuyla harmanlayarak yenilikçi projeler üretmeye devam ediyorum.
                </p>

            </div>
            <div class="skills">
                <!-- My Pink Stack 🌸 -->
                <span class="skill-tag">JavaScript</span>
                <span class="skill-tag">HTML5 & CSS3</span>
                <span class="skill-tag">Python</span>
                <span class="skill-tag">C</span>
                <span class="skill-tag">Java</span>
                <span class="skill-tag">YOLOv8 & OpenCV</span>
                <span class="skill-tag">Roboflow</span>
                <span class="skill-tag">Siber Güvenlik</span>
                <span class="skill-tag">3D Modelleme</span>
            </div>
        </div>
    </div>
</section>

<section id="projeler" class="projects-section">
    <div class="container">
        <h2 class="section-title">Açık Kaynak Projelerim</h2>
        <div class="project-grid">
            <?php
            // GitHub'dan çekilen (özel istenilenler dahil) tüm aktif projeler
            $projects = [
                ['name' => 'Cey-Core-Studio-Web', 'url' => 'https://github.com/atescey/Cey-Core-Studio-Web', 'desc' => 'Cey Core Studio için tasarlanmış web projesi arayüzü.', 'lang' => 'HTML', 'gradient' => 'linear-gradient(45deg, #f472b6, #ec4899)'],
                ['name' => 'afet-yardim-sistemi', 'url' => 'https://github.com/atescey/afet-yardim-sistemi', 'desc' => 'JavaScript kullanılarak geliştirilmiş afet yardım platformu.', 'lang' => 'JavaScript', 'gradient' => 'linear-gradient(45deg, #8b5cf6, #3b82f6)'],
                ['name' => 'memory-card-game', 'url' => 'https://github.com/atescey/memory-card-game', 'desc' => 'HTML, CSS ve JS ile geliştirilmiş animasyonlu, süreli Hafıza Oyunu.', 'lang' => 'JavaScript', 'gradient' => 'linear-gradient(45deg, #f1e05a, #f59e0b)'],
                ['name' => 'DiaryApp', 'url' => 'https://github.com/atescey/DiaryApp', 'desc' => 'Python tabanlı kişisel günlük (diary) masaüstü uygulaması.', 'lang' => 'Python', 'gradient' => 'linear-gradient(45deg, #3572A5, #8b5cf6)'],
                ['name' => 'Telemetry-Client-Server', 'url' => 'https://github.com/atescey/Telemetry-Client-Server', 'desc' => 'Python ile geliştirilmiş telemetri istemci-sunucu sistemi.', 'lang' => 'Python', 'gradient' => 'linear-gradient(45deg, #ec4899, #8b5cf6)'],
                ['name' => 'gamestudio-offer', 'url' => 'https://github.com/atescey/gamestudio-offer', 'desc' => 'Oyun stüdyoları için hazırlanmış web tabanlı teklif platformu.', 'lang' => 'HTML', 'gradient' => 'linear-gradient(45deg, #10b981, #3b82f6)'],
                ['name' => 'Q-line', 'url' => 'https://github.com/atescey/Q-line', 'desc' => 'JavaScript ve algoritmalarla tasarlanmış sıra bekleme/yönetim çözümü.', 'lang' => 'JavaScript', 'gradient' => 'linear-gradient(45deg, #10b981, #f1e05a)'],
                ['name' => 'Global-News-Agency-2100', 'url' => 'https://github.com/atescey/Global-News-Agency-2100', 'desc' => 'Kapsamlı bir global haber ajansı modern ön yüz tasarımı.', 'lang' => 'HTML', 'gradient' => 'linear-gradient(45deg, #f59e0b, #ef4444)'],
                ['name' => 'profile-card', 'url' => 'https://github.com/atescey/profile-card', 'desc' => 'CSS ile estetik ve duyarlı olarak tasarlanmış profil kartı bileşeni.', 'lang' => 'CSS', 'gradient' => 'linear-gradient(45deg, #6366f1, #ec4899)'],
                ['name' => 'DijitalKartvizit', 'url' => 'https://github.com/atescey/DijitalKartvizit', 'desc' => 'Modern tasarımlı dijital etkileşimli kartvizit projesi.', 'lang' => 'HTML', 'gradient' => 'linear-gradient(45deg, #fbbf24, #d97706)'],
                ['name' => 'data-analysis-mini', 'url' => 'https://github.com/atescey/data-analysis-mini', 'desc' => 'Python kullanılarak geliştirilmiş mini veri analizi projesi.', 'lang' => 'Python', 'gradient' => 'linear-gradient(45deg, #38bdf8, #3b82f6)'],
                ['name' => 'gamestudio', 'url' => 'https://github.com/atescey/gamestudio', 'desc' => 'Oyun stüdyosu konsepti için web tasarım pratikleri.', 'lang' => 'HTML', 'gradient' => 'linear-gradient(45deg, #a78bfa, #8b5cf6)'],
                ['name' => 'CalculatorApp', 'url' => 'https://github.com/atescey/CalculatorApp', 'desc' => 'Java tabanlı basit, arayüzlü ve işlevsel hesap makinesi.', 'lang' => 'Java', 'gradient' => 'linear-gradient(45deg, #b026ff, #ec4899)'],
            ];

            foreach ($projects as $p) {
                $langClass = strtolower($p['lang']);

                // Web projeleri için canlı sayfa (Live Page) ekran görüntüsünü çeker
                // Diğerleri (Python, Java, C vb.) için GitHub OpenGraph görsellerini kullanır.
                if (in_array($p['lang'], ['HTML', 'CSS', 'JavaScript'])) {
                    // Sayfanın gerçek canlı ekran görüntüsünü getiren güvenilir bir servis
                    $imageUrl = 'https://image.thum.io/get/width/800/crop/800/https://atescey.github.io/' . $p['name'] . '/';
                } else {
                    $imageUrl = 'https://opengraph.githubassets.com/1/atescey/' . $p['name'];
                }

                echo '<a href="' . $p['url'] . '" target="_blank" class="project-card">';
                $imageUrl = 'https://opengraph.githubassets.com/1/atescey/' . $p['name'];
                echo '    <div class="project-image" style="background-image: url(\'' . $imageUrl . '\'); background-size: cover; background-position: center;"></div>';
                echo '    <div class="project-info">';
                echo '        <h3>' . $p['name'] . '</h3>';
                echo '        <p>' . $p['desc'] . '</p>';
                if ($p['lang'] != 'null' && $p['lang'] != '') {
                    echo '        <span class="lang-tag ' . $langClass . '">' . $p['lang'] . '</span>';
                }
                echo '    </div>';
                echo '</a>';
            }
            ?>
        </div>
    </div>
</section>

<section id="iletisim" class="contact-section">
    <div class="container glass-panel">
        <h2 class="section-title">İletişim</h2>

        <!-- Formspree Entegrasyonu (KENDI_ID_NUMARANI_YAZ kısmını değiştirmelisin) -->
        <form action="https://formspree.io/f/mgorzjvo" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Adınız</label>
                <input type="text" id="name" name="name" required placeholder="Adınız Soyadınız">
            </div>
            <div class="form-group">
                <label for="email">E-posta</label>
                <input type="email" id="email" name="_replyto" required placeholder="ornek@mail.com">
            </div>
            <div class="form-group">
                <label for="message">Mesajınız</label>
                <textarea id="message" name="message" rows="5" required
                    placeholder="Merhaba, projenizle ilgili..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Gönder</button>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>