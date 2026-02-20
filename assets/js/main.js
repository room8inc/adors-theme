// Page Loader
// ローディング中はスクロールを無効化
document.body.classList.add('loading');

// トップページかどうかを判定
const isHomePage = document.getElementById('opening-screen') !== null;

window.addEventListener('load', function() {
  const loader = document.getElementById('page-loader');
  
  if (loader) {
    // ページの読み込みが完了したら少し待つ
    setTimeout(() => {
      // トップページの場合
      if (isHomePage) {
        // オープニング画面を先に完全表示
        const openingScreen = document.getElementById('opening-screen');
        if (openingScreen) {
          openingScreen.style.transition = 'opacity 0.4s ease';
          openingScreen.style.opacity = '1';
          openingScreen.style.pointerEvents = 'auto';
          
          // オープニング画面が表示されたら、ローディング画面を即座に消す
          setTimeout(() => {
            loader.style.display = 'none';
            startOpeningAnimation();
          }, 400);
        }
      } else {
        // その他のページは通常のフェードアウト
        loader.style.opacity = '0';
        setTimeout(() => {
          loader.style.display = 'none';
          document.body.classList.remove('loading');
          startHeroAnimation();
        }, 700);
      }
    }, 800); // 最低表示時間
  }
});

// Opening Animation (トップページ専用)
function startOpeningAnimation() {
  const openingScreen = document.getElementById('opening-screen');
  const openingLogo = document.getElementById('opening-logo');
  const catchLine1 = document.getElementById('catch-line1');
  const catchLine2 = document.getElementById('catch-line2');
  
  if (!openingScreen) return;
  
  // オープニング画面はすでに表示されているので、アニメーション開始
  // ステップ1: ロゴを表示（0.2秒後）
  setTimeout(() => {
    openingLogo.style.opacity = '1';
    openingLogo.style.transform = 'scale(1)';
    
    // ステップ2: キャッチコピー1行目（0.5秒後に短縮）
    setTimeout(() => {
      catchLine1.style.opacity = '1';
      catchLine1.style.transform = 'translateY(0)';
      
      // ステップ3: キャッチコピー2行目（0.4秒後）
      setTimeout(() => {
        catchLine2.style.opacity = '1';
        catchLine2.style.transform = 'translateY(0)';
        
        // ステップ4: オープニング画面をフェードアウト（1.2秒後）
        setTimeout(() => {
          openingScreen.style.transition = 'opacity 1s ease';
          openingScreen.style.opacity = '0';
          
          setTimeout(() => {
            openingScreen.style.display = 'none';
            openingScreen.style.pointerEvents = 'none';
            document.body.classList.remove('loading');
            
            // メインコンテンツのアニメーション開始
            startHeroAnimation();
          }, 1000);
        }, 1200);
      }, 400);
    }, 500);
  }, 200);
}

// Hero Animation
function startHeroAnimation() {
  const heroElements = document.querySelectorAll('.hero-element');
  
  heroElements.forEach((element) => {
    const delay = element.getAttribute('data-delay') || 0;
    setTimeout(() => {
      element.classList.add('animate-in');
    }, parseInt(delay));
  });
}

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  
  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', function() {
      mobileMenu.classList.toggle('hidden');
    });
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href !== '#') {
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    });
  });

  // Add animation on scroll
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fade-in');
      }
    });
  }, observerOptions);

  document.querySelectorAll('.fade-in-section').forEach(el => {
    observer.observe(el);
  });

  // Scroll Animation with Intersection Observer
  const scrollAnimElements = document.querySelectorAll('.scroll-fade-up, .scroll-fade-left, .scroll-fade-right, .scroll-scale-in');

  const scrollObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const delay = entry.target.dataset.delay || 0;
        setTimeout(() => {
          entry.target.classList.add('is-visible');
        }, delay);
        scrollObserver.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15,
    rootMargin: '0px 0px -50px 0px'
  });

  scrollAnimElements.forEach(el => scrollObserver.observe(el));
});

