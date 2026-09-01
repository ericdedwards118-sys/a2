document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) { header.classList.add('scrolled'); }
    else { header.classList.remove('scrolled'); }
  });

  const toggleBtn = document.querySelector('.mobile-toggle');
  const mainNav = document.querySelector('.main-nav');
  if (toggleBtn && mainNav) {
    toggleBtn.addEventListener('click', () => {
      const isOpen = mainNav.style.display === 'flex';
      mainNav.style.display = isOpen ? 'none' : 'flex';
      if (!isOpen) {
        mainNav.style.flexDirection = 'column'; mainNav.style.position = 'absolute';
        mainNav.style.top = '100%'; mainNav.style.left = '0'; mainNav.style.right = '0';
        mainNav.style.background = 'rgba(14, 12, 10, 0.98)'; mainNav.style.padding = '24px';
      }
    });
  }

  const optionCards = document.querySelectorAll('.ginger-option-card');
  const resultTitle = document.getElementById('ginger-custom-title');
  const resultDesc = document.getElementById('ginger-custom-desc');
  const resultBadge = document.getElementById('ginger-custom-badge');

  const gingerMenus = {
    'confitduck': { title: 'The Honey-Ginger Confit & Roasted Duck', desc: 'Slow-poached young ginger rhizomes in orange blossom honey paired with crisp 45-day dry-aged duck breast.', badge: 'Tasting Notes: Warm Zingerone &bull; Crisp Skin &bull; Orange Blossom Essence' },
    'fermentedcrudo': { title: 'The Fermented Wild Ginger Hamachi Crudo', desc: 'Wild lacto-fermented ginger bug emulsion with cold-pressed yuzu and delicate yellowtail amberjack.', badge: 'Tasting Notes: Zesty Lactic Acidity &bull; Sea Salt &bull; Probiotic Purity' },
    'terracottaroast': { title: 'The Clay-Baked Ginger Glazed Heirloom Roots', desc: 'Whole heirloom winter roots roasted inside terracotta clay vessels with smoked ginger glaze and toasted sesame.', badge: 'Tasting Notes: Smoked Gingerol &bull; Earthy Sweetness &bull; Golden Hearth Ember' }
  };

  if (optionCards.length > 0 && resultTitle) {
    optionCards.forEach(card => {
      card.addEventListener('click', () => {
        optionCards.forEach(c => c.classList.remove('active'));
        card.classList.add('active');
        const type = card.getAttribute('data-ginger');
        if (gingerMenus[type]) {
          resultTitle.textContent = gingerMenus[type].title;
          resultDesc.textContent = gingerMenus[type].desc;
          if (resultBadge) resultBadge.textContent = gingerMenus[type].badge;
        }
      });
    });
  }

  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const header = item.querySelector('.faq-header');
    if (header) {
      header.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        faqItems.forEach(i => i.classList.remove('active'));
        if (!isActive) { item.classList.add('active'); }
      });
    }
  });
});