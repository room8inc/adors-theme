<?php
/**
 * サービスページテンプレート
 *
 * @package ADOR'S
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- ページヘッダー -->
    <section class="page-header bg-primary text-white py-16 relative overflow-hidden">
        <div class="container relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">サービス</h1>
            <p class="text-lg opacity-90">消防法・危険物関係法令に関する包括的なコンサルティングサービス</p>
        </div>
        <!-- ヘッダー下部の波形区切り -->
        <div class="section-wave-bottom">
            <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="height: 40px;">
                <path fill="white" d="M0,25L60,28C120,31,240,37,360,34C480,31,600,19,720,16C840,13,960,19,1080,25C1200,31,1320,37,1380,40L1440,43L1440,50L0,50Z"></path>
            </svg>
        </div>
    </section>

    <!-- 01. 消防法コンサルティング -->
    <section id="fire-consulting" class="py-16 lg:py-24 bg-white scroll-mt-24 relative overflow-hidden">
        <!-- 装飾ブロブ: 右上 -->
        <div class="deco-blob -top-16 -right-16 w-[300px] h-[300px] md:w-[450px] md:h-[450px]">
            <svg viewBox="0 0 450 450" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="225" cy="225" r="225" fill="#fd780f" fill-opacity="0.04"/>
            </svg>
        </div>
        <div class="container relative z-10">
            <div class="service-detail-item">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="flex items-center mb-6 scroll-fade-up">
                            <svg class="w-12 h-12 text-primary mr-4 scroll-scale-in" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                            </svg>
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                                消防法コンサルティング
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed scroll-fade-up" data-delay="100">
                            消防法関係の現状対応は適切なのか、無駄はないのかを<br>
                            専門的視点から整理し、助言・提案します。
                        </p>
                        <ul class="space-y-6 text-gray-700 mb-12 scroll-fade-up" data-delay="200">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>消防査察対応:</strong> 消防査察の指摘に対し、適切な対応をアドバイス</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>防火管理サポート:</strong> 消防計画の作成・変更、消防訓練など、防火管理者のサポート</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>役割整理:</strong> 自社・管理会社・設備業者などとの役割重複・抜け漏れの整理</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>随時相談対応:</strong> 消防法に関する悩み、困りごとなどのご相談に随時メールなどで対応</span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center bg-primary text-white px-8 py-4 font-bold hover:bg-primary/90 transition-colors">
                            相談・見積もり依頼
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                    <div class="bg-gray-100 rounded-lg h-80 lg:h-96 flex items-center justify-center">
                        <span class="text-gray-400">画像スペース</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 02. 危険物施設コンサルティング -->
    <section id="hazardous-consulting" class="py-16 lg:py-24 bg-gray-50 scroll-mt-24 relative overflow-hidden">
        <!-- セクション上部の波形区切り -->
        <div class="section-wave-top">
            <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="height: 30px;">
                <path fill="#fd780f" fill-opacity="0.08" d="M0,20L120,17C240,14,480,8,720,12C960,16,1200,30,1320,37L1440,44L1440,0L0,0Z"></path>
            </svg>
        </div>
        <div class="container relative z-10">
            <div class="service-detail-item">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1 bg-gray-100 rounded-lg h-80 lg:h-96 flex items-center justify-center">
                        <span class="text-gray-400">画像スペース</span>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="flex items-center mb-6 scroll-fade-up">
                            <svg class="w-12 h-12 text-primary mr-4 scroll-scale-in" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                                危険物施設コンサルティング
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed scroll-fade-up" data-delay="100">
                            危険物施設に関する現行対応を整理・分析し、法令適合性・運用・将来リスクの観点から、<br>
                            合理的な対応方針の形成を支援します。
                        </p>
                        <ul class="space-y-6 text-gray-700 mb-12 scroll-fade-up" data-delay="200">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>許可・届出整理:</strong> 変更・改修に伴う許可・届出要否の整理および、消防署事前協議における論点整理</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>工事計画支援:</strong> 工事計画段階における、消防署協議事項・留意点の整理</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>代替措置検討:</strong> 代替措置・運用対応の可能性について、安全性・コスト面を踏まえた検討および助言</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>管理体制助言:</strong> 危険物の取扱いおよび管理体制について、法令と実務の両面からの助言</span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center bg-primary text-white px-8 py-4 font-bold hover:bg-primary/90 transition-colors">
                            相談・見積もり依頼
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 03. 消防協議支援 -->
    <section id="fire-consultation" class="py-16 lg:py-24 bg-gray-50 scroll-mt-24">
        <div class="container">
            <div class="service-detail-item">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="flex items-center mb-6 scroll-fade-up">
                            <svg class="w-12 h-12 text-primary mr-4 scroll-scale-in" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                                消防協議支援
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed scroll-fade-up" data-delay="100">
                            消防署との協議に際し、関係法令に基づく論点整理および説明支援を行い、<br>
                            過不足のない対応方針の形成を支援します。
                        </p>
                        <ul class="space-y-6 text-gray-700 mb-12 scroll-fade-up" data-delay="200">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>事前整理:</strong> 協議前の事前整理・論点整理をアドバイス</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>指摘対応:</strong> 消防側からの指摘事項の整理と、対応策の助言</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>代替措置検討:</strong> 代替措置・段階的対応が可能かの検討支援</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>将来対応:</strong> 将来的な用途変更、改修等を考慮したうえでの協議を支援</span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center bg-primary text-white px-8 py-4 font-bold hover:bg-primary/90 transition-colors">
                            相談・見積もり依頼
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                    <div class="bg-gray-100 rounded-lg h-80 lg:h-96 flex items-center justify-center">
                        <span class="text-gray-400">画像スペース</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 04. 消防関係書類作成支援 -->
    <section id="document-support" class="py-16 lg:py-24 bg-white scroll-mt-24">
        <div class="container">
            <div class="service-detail-item">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1 bg-gray-100 rounded-lg h-80 lg:h-96 flex items-center justify-center">
                        <span class="text-gray-400">画像スペース</span>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="flex items-center mb-6 scroll-fade-up">
                            <svg class="w-12 h-12 text-primary mr-4 scroll-scale-in" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                                消防関係書類作成支援
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed scroll-fade-up" data-delay="100">
                            消防関係の各種書類について、必要事項の記載漏れ、<br>
                            現状に合っているかなどを助言します。
                        </p>
                        <ul class="space-y-6 text-gray-700 mb-12 scroll-fade-up" data-delay="200">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>書類チェック:</strong> 提出書類の過不足、提出期限切れなどを防ぐアドバイス</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>資料づくり支援:</strong> 消防署・社内双方に伝わる資料づくりを支援</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>改善計画書作成:</strong> 是正指導に対する改善計画書・対応報告書等の作成支援</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>法令整合確認:</strong> 関係法令等と現地の状況との整合を確認し正確な書類の作成支援</span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center bg-primary text-white px-8 py-4 font-bold hover:bg-primary/90 transition-colors">
                            相談・見積もり依頼
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php /* スマメアプリ -- リリース後にコメントを外して表示
    <!-- 05. 日常点検アプリ「スマメ」 -->
    <section id="sumame" class="py-16 lg:py-24 bg-primary-100 scroll-mt-24">
        <div class="container">
            <div class="bg-gradient-to-br from-primary/10 to-white rounded-lg p-8 lg:p-12 border-2 border-primary/20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="inline-block bg-primary text-white text-xs font-bold px-4 py-2 mb-4 uppercase tracking-wider">New Tool</div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                            日常点検アプリ「スマメ」
                        </h2>
                        <p class="text-2xl font-black text-primary mb-6">
                            スマホで撮影するだけで、<br>点検完了。
                        </p>
                        <p class="text-lg text-gray-600 mb-12 leading-relaxed">
                            点検漏れやミスを防ぎ、教育コストを削減します。<br>
                            アプリ内に消防法の設置基準や概要も集約。
                        </p>
                        <ul class="space-y-6 text-gray-700 mb-12">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                <span><strong>撮影だけで確認完了:</strong> 専門知識がなくても、写真を撮るだけで法令に基づいた点検が可能</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span><strong>点検漏れ・ミスを防止:</strong> チェックリスト形式で確実に実施</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span><strong>教育コスト削減:</strong> 新人教育の時間と手間を大幅にカット</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                <span><strong>法令情報も搭載:</strong> 消防法の設置基準や概要をアプリ内で確認可能</span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center bg-primary text-white px-8 py-4 font-bold hover:bg-primary/90 transition-colors">
                            スマメについて問い合わせる
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                    <div class="bg-white rounded-lg h-80 lg:h-96 flex items-center justify-center border-2 border-gray-200">
                        <span class="text-gray-400">スマメアプリ画面</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    */ ?>

    <!-- 料金体系 -->
    <section class="py-32 bg-gray-50 relative overflow-hidden">
        <!-- 装飾ブロブ: 左上 -->
        <div class="deco-blob -top-16 -left-16 w-[350px] h-[350px] md:w-[500px] md:h-[500px] deco-blob-animate">
            <svg viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M250 0C388 0 500 112 500 250C500 388 388 500 250 500C112 500 50 430 20 350C-10 270 10 150 60 80C110 10 112 0 250 0Z" fill="#fd780f" fill-opacity="0.04"/>
            </svg>
        </div>
        <div class="container relative z-10">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-[0.2em] text-sm mb-6 block uppercase scroll-fade-up">Pricing</span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 tracking-tight scroll-fade-up" data-delay="100">
                    料金体系
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                    年間契約とスポット契約を、目的に合わせて選べます。まずは無料ヒアリングから。
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto mb-12">
                <!-- 年間契約（継続支援） -->
                <div class="bg-white border-2 border-primary p-8 rounded-lg relative scroll-fade-up" data-delay="0">
                    <div class="absolute top-0 right-0 bg-primary text-white text-xs font-bold px-3 py-1 uppercase">Recommended</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">年間契約（継続支援）</h3>
                    <div class="mb-6">
                        <div class="text-3xl font-black text-primary mb-2">月額10万円〜</div>
                        <p class="text-sm text-gray-500">継続的な法令管理を支援</p>
                    </div>
                    <div class="mb-6">
                        <p class="text-sm font-bold text-gray-900 mb-3">含まれるサービス</p>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>定期法令チェック</span></li>
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>行政相談・指摘対応支援</span></li>
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>点検・記録様式整備</span></li>
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>社内教育支援</span></li>
                        </ul>
                    </div>
                    <div class="mb-6">
                        <p class="text-sm font-bold text-gray-900 mb-3">こんな企業様におすすめ</p>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>継続的な法令管理体制を構築したい</span></li>
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>社内に専門知識が不足している</span></li>
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>行政対応を安定化させたい</span></li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center bg-primary text-white py-4 px-12 text-lg font-bold hover:bg-primary/90 transition-colors rounded w-full sm:w-auto">
                            無料ヒアリングを申し込む
                        </a>
                    </div>
                </div>

                <!-- スポット契約（個別案件） -->
                <div class="bg-white border-2 border-gray-200 p-8 rounded-lg scroll-fade-up" data-delay="150">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">スポット契約（個別案件）</h3>
                    <div class="mb-6">
                        <div class="text-3xl font-black text-primary mb-2">案件別5万円〜</div>
                        <p class="text-sm text-gray-500">今すぐ困っている案件に対応</p>
                    </div>
                    <div class="mb-6">
                        <p class="text-sm font-bold text-gray-900 mb-3">含まれるサービス</p>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>現地調査・リスク診断</span></li>
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>是正計画作成支援</span></li>
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>行政協議同席支援</span></li>
                        </ul>
                    </div>
                    <div class="mb-6">
                        <p class="text-sm font-bold text-gray-900 mb-3">こんな企業様におすすめ</p>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>行政検査前に診断してほしい</span></li>
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>是正指摘を受けて対応が必要</span></li>
                            <li class="flex items-start"><span class="text-primary mr-2">&#10003;</span><span>設備更新前に専門家の意見がほしい</span></li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center bg-gray-100 text-gray-900 py-4 px-12 text-lg font-bold hover:bg-gray-200 transition-colors rounded w-full sm:w-auto">
                            無料ヒアリングを申し込む
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="inline-block bg-white border border-gray-200 rounded-lg px-6 py-4 text-sm text-gray-600">
                    企業規模・施設数・対応範囲により料金は調整します。交通費・出張費は実費精算です。<br>
                    初回ヒアリングは無料です。お気軽にご相談ください。
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section bg-primary py-16 lg:py-20 relative overflow-hidden">
        <!-- CTA上部の波形区切り -->
        <div class="section-wave-top">
            <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="height: 40px;">
                <path fill="#f9fafb" d="M0,20L120,24C240,28,480,36,720,34C960,32,1200,20,1320,14L1440,8L1440,0L0,0Z"></path>
            </svg>
        </div>
        <div class="container text-center text-white relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                まずは無料相談から
            </h2>
            <p class="text-lg md:text-xl mb-8 opacity-90">
                お客様の課題に合わせた最適なソリューションをご提案します
            </p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn bg-white text-primary hover:bg-gray-100 text-lg px-8 py-4 inline-block">
                無料見積診断を申し込む
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
