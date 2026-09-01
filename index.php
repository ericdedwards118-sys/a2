<?php
$site_name = "Ginger Meal Max";
$site_tagline = "Haute Ginger Gastronomy & Botanical Hearth Atelier";
$official_address = "181 Mercer Street, New York, NY 10012, United States";
$official_phone = "+1-888-777-5845";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ginger Meal Max | Haute Ginger Gastronomy & Botanical Hearth Atelier</title>
  <meta name="description" content="Discover Ginger Meal Max: artisanal heirloom ginger cuisine, wood-fired hearth glazes, wild fermented ginger bugs, and fine dining salon in Manhattan.">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' fill='%230E0C0A' stroke='%23FBBF24' stroke-width='4'/><path d='M30 65 Q50 30 70 65 Q55 50 30 65' fill='%23D97706'/><circle cx='50' cy='38' r='6' fill='%23FFFDF5'/></svg>">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0LY0HY7L01');
  </script>
</head>
<body>
  <header class="site-header">
    <div class="container">
      <div class="header-inner">
        <a href="index.php" class="brand-container">
          <div class="brand-logo-icon">🦊</div>
          <div class="brand-text-wrap">
            <span class="brand-logo-text"><?php echo $site_name; ?></span>
            <span class="brand-tagline"><?php echo $site_tagline; ?></span>
          </div>
        </a>
        <nav class="main-nav">
          <a href="index.php" class="nav-link active">Main</a>
          <a href="about.html" class="nav-link">Atelier</a>
          <a href="blog.html" class="nav-link">Journal</a>
          <a href="contact.html" class="nav-link">Reserve Table</a>
        </nav>
        <div class="nav-cta"><a href="contact.html" class="btn-ginger btn-gold">Chef's Table</a></div>
        <button class="mobile-toggle" aria-label="Toggle Navigation"><span></span><span></span><span></span></button>
      </div>
    </div>
  </header>
  <main>
    <!-- Section 1: Hero Showcase -->
    <section class="hero-ginger">
      <div class="container">
        <div class="hero-grid">
          <div>
            <span class="section-tag">Haute Ginger Gastronomy</span>
            <h1 class="hero-title">The Culinary Soul of <span>Heirloom Ginger.</span></h1>
            <p class="hero-subtitle">
              Crafting bespoke seven-course tasting menus, slow-poached ginger confits, wood-fired hearth roasts, and fermented botanical ginger elixirs in our Manhattan dining salon.
            </p>
            <div style="display: flex; gap: 16px; flex-wrap: wrap;">
              <a href="contact.html" class="btn-ginger btn-gold">Reserve Chef's Table</a>
              <a href="about.html" class="btn-ginger btn-outline">Explore Ginger Alchemy</a>
            </div>
            <div class="hero-stats">
              <div class="stat-item"><h4>100% Organic</h4><p>Heirloom Rhizome Harvests</p></div>
              <div class="stat-item"><h4>700&deg;F Hearth</h4><p>Applewood Live Fire Glaze</p></div>
              <div class="stat-item"><h4>7 Courses</h4><p>Circadian Ginger Pacing</p></div>
            </div>
          </div>
          <div class="hero-img-box">
            <img src="assets/images/hero-ginger-dish.jpg" alt="Artisanal haute cuisine dish with glossy honey ginger glaze and edible flowers on black stoneware plate">
          </div>
        </div>
      </div>
    </section>

    <!-- Section 2: Three Pillars of Ginger Gastronomy -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Culinary Pillars</span>
          <h2>The Architecture of Haute Ginger Cuisine</h2>
          <p>Every tasting course unites heirloom rhizome sericulture, thermal gingerol-to-shogaol alchemy, and live hearth wood fire.</p>
        </div>
        <div class="grid-3">
          <div class="ginger-card">
            <div class="card-img-wrap"><img src="assets/images/craft-fresh-rhizome.jpg" alt="Fresh raw organic ginger root rhizomes on rustic wooden cutting board" loading="lazy"><span class="card-tag-pill">Rhizome Selection</span></div>
            <div class="card-body"><h3>Heirloom Rhizome Sericulture</h3><p>Harvesting young pink-tipped ginger rhizomes with delicate cell membranes and low fiber for pristine confit textures.</p><a href="about.html" class="card-link">Explore Rhizome Science &rarr;</a></div>
          </div>
          <div class="ginger-card">
            <div class="card-img-wrap"><img src="assets/images/craft-ginger-glaze.jpg" alt="Sizzling wok skillet with caramelized ginger glaze searing over live hearth flames" loading="lazy"><span class="card-tag-pill">Thermal Glaze</span></div>
            <div class="card-body"><h3>Wood-Fired Hearth Glazing</h3><p>Transforming pungent gingerol into mellow, aromatic zingerone over glowing applewood embers for velvety sweetness.</p><a href="about.html" class="card-link">Explore Hearth Glazes &rarr;</a></div>
          </div>
          <div class="ginger-card">
            <div class="card-img-wrap"><img src="assets/images/craft-ginger-elixir.jpg" alt="Golden botanical ginger infused elixir with lemon slice and fresh herbs" loading="lazy"><span class="card-tag-pill">Fermented Elixir</span></div>
            <div class="card-body"><h3>Wild Probiotic Fermentation</h3><p>Cultivating wild ginger bug ferments with mountain springwater and raw cane sugar, delivering effervescent digestive ease.</p><a href="about.html" class="card-link">Explore Fermentation &rarr;</a></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 3: Signature Ginger Tasting Portfolio -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Tasting Portfolio</span>
          <h2>The Ginger Meal Max Evening Suite</h2>
          <p>Hand-crafted ginger-infused courses tailored for romantic dinners, private banquets, and culinary collectors.</p>
        </div>
        <div class="grid-3">
          <div class="ginger-card"><div class="card-body"><h3>The Young Ginger Hamachi Crudo</h3><p>Wild yellowtail amberjack cured in ginger-infused sea salt with pickled pink rhizome tips and cold-pressed yuzu.</p><a href="contact.html" class="card-link">Reserve Tasting &rarr;</a></div></div>
          <div class="ginger-card"><div class="card-body"><h3>The Smoked Ginger Glazed Duck</h3><p>45-day dry-aged duck breast roasted over applewood coals with black ginger reduction and charred shallots.</p><a href="contact.html" class="card-link">Reserve Tasting &rarr;</a></div></div>
          <div class="ginger-card"><div class="card-body"><h3>The Wild Ginger Honey Tartlet</h3><p>Crisp buckwheat pastry filled with roasted ginger confit, dark chocolate ganache, and ginger blossom cream.</p><a href="contact.html" class="card-link">Reserve Tasting &rarr;</a></div></div>
        </div>
      </div>
    </section>

    <!-- Section 4: Interactive Ginger Course Configurator -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Interactive Tasting Studio</span>
          <h2>Configure Your Ginger Gastronomic Journey</h2>
          <p>Select your preferred ginger preparation method, thermal roasting level, and botanical flavor pairing.</p>
        </div>
        <div class="interactive-ginger-tool">
          <div class="ginger-selector-grid">
            <div class="ginger-option-card active" data-ginger="confitduck"><h4>Honey-Ginger Confit & Duck</h4><p>Slow-poached young ginger, orange honey, 45-day aged duck.</p></div>
            <div class="ginger-option-card" data-ginger="fermentedcrudo"><h4>Fermented Wild Ginger Crudo</h4><p>Lacto-fermented ginger bug, cold-pressed yuzu, yellowtail.</p></div>
            <div class="ginger-option-card" data-ginger="terracottaroast"><h4>Clay-Baked Ginger Roots</h4><p>Terracotta clay roasting, smoked ginger glaze, sesame.</p></div>
          </div>
          <div class="ginger-result-box">
            <div>
              <div id="ginger-custom-badge" style="color: var(--color-golden-zest); font-weight: 700; font-size: 0.88rem; margin-bottom: 6px;">Tasting Notes: Warm Zingerone &bull; Crisp Skin &bull; Orange Blossom Essence</div>
              <h3 id="ginger-custom-title" style="margin-bottom: 8px;">The Honey-Ginger Confit & Roasted Duck</h3>
              <p id="ginger-custom-desc" style="color: var(--color-text-muted); font-size: 0.95rem;">Slow-poached young ginger rhizomes in orange blossom honey paired with crisp 45-day dry-aged duck breast.</p>
            </div>
            <a href="contact.html" class="btn-ginger btn-gold" style="white-space: nowrap;">Reserve Table Experience</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 5: The Master Chef's Manifesto -->
    <section class="section">
      <div class="container">
        <div class="grid-2">
          <div>
            <span class="section-tag">Culinary Manifesto</span>
            <h2 style="font-size: 2.3rem; margin-bottom: 20px;">The Master Saucier: Gingerol Kinetics & Live Hearth Roasting</h2>
            <p style="color: var(--color-text-muted); margin-bottom: 16px;">
              Ginger (*Zingiber officinale*) is the king of culinary aromatics. Unlike synthetic chemical flavor extracts that create one-dimensional heat, natural ginger contains a rich symphony of gingerols, shogaols, and zingerone that transform dynamically under thermal heat.
            </p>
            <p style="color: var(--color-text-muted); margin-bottom: 24px;">
              True ginger gastronomy is a harmonious dialogue between the heat of the hearth, the cellular chemistry of the rhizome, and the palate of the diner:
            </p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 28px;">
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-golden-zest); font-size: 1.2rem; margin-bottom: 4px;">🔥 Thermal Alchemy</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Gentle heat converts sharp gingerol into fragrant, mellow zingerone for balanced sauces.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-golden-zest); font-size: 1.2rem; margin-bottom: 4px;">🏺 Clay Terracotta</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Slow roasting in porous clay pots infuses ingredients with deep smoky ginger aromatics.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-golden-zest); font-size: 1.2rem; margin-bottom: 4px;">🌿 Probiotic Elixirs</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Wild ginger fermentation delivering living enzymes and sparkling digestive ease.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-golden-zest); font-size: 1.2rem; margin-bottom: 4px;">🏛️ Manhattan Dining Salon</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Intimate chef's table and candlelit dining suites at 181 Mercer Street.</p>
              </div>
            </div>
            <div style="display: flex; gap: 16px; align-items: center; flex-wrap: wrap;">
              <a href="about.html" class="btn-ginger btn-gold">Read Kitchen Manifesto &rarr;</a>
              <a href="contact.html" class="btn-ginger btn-outline">Book Private Table</a>
            </div>
          </div>
          <div class="hero-img-box" style="position: relative;">
            <img src="assets/images/about-ginger-kitchen.jpg" alt="Master chef seasoning gourmet ginger dish with fresh herbs in fine dining open hearth kitchen" loading="lazy">
            <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(14, 12, 10, 0.92); backdrop-filter: blur(10px); padding: 14px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
              <span style="font-size: 0.82rem; color: var(--color-golden-zest); font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em;">Manhattan Dining Salon</span>
              <span style="font-size: 0.78rem; color: var(--color-text-muted);">SoHo &bull; 181 Mercer St</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 6: Verified Artisanal Ginger Benchmarks -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Quality Standards</span>
          <h2>Artisanal Culinary Benchmarks</h2>
          <p>Independently certified for organic rhizome purity, zero synthetic flavorings, and heirloom wood fuel.</p>
        </div>
        <div class="grid-3">
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-golden-zest); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">100% Organic</div>
            <h4 style="margin-bottom: 12px;">Heirloom Ginger Rhizomes</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Grown in volcanic soil and harvested early for delicate, fiber-free confit textures.</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-golden-zest); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">700°F Hearth</div>
            <h4 style="margin-bottom: 12px;">Live Applewood Roasting</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Seasoned hardwood coals creating crisp caramelization and fragrant wood-smoke infusions.</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-golden-zest); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">240+ Labels</div>
            <h4 style="margin-bottom: 12px;">Aromatic Cellar Terroirs</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Low-intervention Gewürztraminer, dry Riesling, and skin-contact orange wines paired with ginger.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 7: Manhattan Salon Lookbook -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Manhattan Dining Suite</span>
          <h2>The Mercer Street Dining Salon</h2>
          <p>Experience intimate dinner seatings, open hearth kitchen viewings, and curated wine pairing flights in SoHo.</p>
        </div>
        <div style="border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--color-border); position: relative;">
          <img src="assets/images/lookbook-mercer-dining.jpg" alt="Interior of warm ambient Manhattan dining salon with candlelit tables and fine glassware" style="width: 100%; height: 500px; object-fit: cover;">
          <div style="position: absolute; bottom: 32px; left: 32px; background: rgba(14, 12, 10, 0.92); backdrop-filter: blur(12px); padding: 24px 32px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); max-width: 500px;">
            <h3 style="font-size: 1.35rem; margin-bottom: 8px; color: var(--color-golden-zest);">The Mercer Dining Salon</h3>
            <p style="color: var(--color-text-muted); font-size: 0.9rem; margin-bottom: 16px;">Private seasonal tasting allocations, wood-fired hearth seatings, and curated culinary flights.</p>
            <a href="blog.html" class="card-link">Read Culinary Treatises &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 8: Connoisseur & Critic Testimonials -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Patron Reflections</span>
          <h2>Testimonials from Our Dining Patrons</h2>
          <p>Gastronomy critics, master sommeliers, and culinary enthusiasts on Ginger Meal Max.</p>
        </div>
        <div class="grid-3">
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-golden-zest); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #FFFDF5; font-style: italic; margin-bottom: 20px;">"The balance of honey-poached young ginger confit with 45-day dry-aged duck was breathtaking. The ginger was mellow, aromatic, and deeply satisfying."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Chef Julian Vance</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Executive Chef, Michelin Guide Manhattan</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-golden-zest); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #FFFDF5; font-style: italic; margin-bottom: 20px;">"Pairing the fermented wild ginger crudo with an Alsatian dry Riesling was an inspired stroke of enological genius. Pure harmony on the palate."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Dr. Madeleine Claire</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Sommelier & Wine Editor, Paris</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-golden-zest); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #FFFDF5; font-style: italic; margin-bottom: 20px;">"The private tasting salon at 181 Mercer Street is a haven of warmth and culinary excellence. The clay-baked roots with ginger glaze were magnificent."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Marcus Sterling</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Culinary Patron, New York</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 9: Private Table Reservations -->
    <section class="section">
      <div class="container container-narrow">
        <div style="background: radial-gradient(circle at center, rgba(217, 119, 6, 0.2), transparent 70%), var(--color-card-bg); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 60px 48px; text-align: center;">
          <span class="section-tag">Private Table Allocation</span>
          <h2 style="font-size: 2.3rem; margin-bottom: 16px;">Reserve Your Chef's Table Experience</h2>
          <p style="color: var(--color-text-muted); max-width: 560px; margin: 0 auto 32px;">
            Visit our Manhattan salon at 181 Mercer Street, New York, NY 10012 to savor seven-course ginger tasting menus, or request our private salon allocations.
          </p>
          <div style="display: flex; gap: 12px; justify-content: center; max-width: 500px; margin: 0 auto 24px; flex-wrap: wrap;">
            <input type="email" placeholder="Enter your email address" style="flex: 1; min-width: 240px; padding: 14px 18px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); background: var(--color-subtle-bg); color: var(--color-text-main); font-size: 0.95rem;">
            <a href="contact.html" class="btn-ginger btn-gold">Request Table Seating</a>
          </div>
          <p style="font-size: 0.8rem; color: #8C8070;">Direct table bookings welcomed at +1-888-777-5845.</p>
        </div>
      </div>
    </section>
  </main>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <div class="brand-container" style="margin-bottom: 1.2rem;">
            <div class="brand-logo-icon">🦊</div>
            <div class="brand-text-wrap">
              <span class="brand-logo-text"><?php echo $site_name; ?></span>
              <span class="brand-tagline"><?php echo $site_tagline; ?></span>
            </div>
          </div>
          <p style="font-size: 0.92rem; color: #BDB0A0; line-height: 1.8;">
            Crafting bespoke seven-course tasting menus, slow-poached ginger confits, wood-fired hearth roasts, and fermented botanical ginger elixirs in our Manhattan salon.
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul class="footer-links">
            <li><a href="index.php">Main</a></li>
            <li><a href="about.html">Atelier</a></li>
            <li><a href="blog.html">Journal</a></li>
            <li><a href="contact.html">Reserve Table</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal & Policies</h4>
          <ul class="footer-links">
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms & Conditions</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Dining Disclaimer</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Manhattan Salon</h4>
          <div class="footer-contact-item"><span class="icon">📍</span><span><?php echo $official_address; ?></span></div>
          <div class="footer-contact-item"><span class="icon">📞</span><span><?php echo $official_phone; ?></span></div>
        </div>
      </div>
      <div class="footer-bottom">
        <div>&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All Rights Reserved.</div>
        <div>Haute Ginger Gastronomy &bull; Wood-Fired Hearth Roasting &bull; Organic Sericulture</div>
      </div>
    </div>
  </footer>
  <script src="assets/js/main.js"></script>
</body>
</html>