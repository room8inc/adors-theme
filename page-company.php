<?php
/**
 * 会社概要ページテンプレート
 *
 * @package ADOR'S
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- ページヘッダー -->
    <section class="page-header bg-primary text-white py-16">
        <div class="container">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">会社概要</h1>
            <p class="text-lg opacity-90">株式会社アドーズについて</p>
        </div>
    </section>

    <!-- 会社情報 -->
    <section class="company-info py-16 lg:py-24">
        <div class="container max-w-4xl">
            <div class="bg-white rounded-lg shadow-sm p-8 lg:p-12 scroll-fade-up">
                <dl class="space-y-6">
                    <div class="flex flex-col md:flex-row border-b border-gray-200 pb-6">
                        <dt class="w-full md:w-1/3 font-bold text-gray-900 mb-2 md:mb-0">会社名</dt>
                        <dd class="w-full md:w-2/3 text-gray-700">株式会社アドーズ</dd>
                    </div>
                    <div class="flex flex-col md:flex-row border-b border-gray-200 pb-6">
                        <dt class="w-full md:w-1/3 font-bold text-gray-900 mb-2 md:mb-0">代表者</dt>
                        <dd class="w-full md:w-2/3 text-gray-700">野村 佳嗣</dd>
                    </div>
                    <div class="flex flex-col md:flex-row border-b border-gray-200 pb-6">
                        <dt class="w-full md:w-1/3 font-bold text-gray-900 mb-2 md:mb-0">事業内容</dt>
                        <dd class="w-full md:w-2/3 text-gray-700">
                            消防法・危険物法 法令対応支援<br>
                            防災・安全管理体制構築コンサルティング<br>
                            行政対応支援・教育支援
                        </dd>
                    </div>
                    <div class="flex flex-col md:flex-row border-b border-gray-200 pb-6">
                        <dt class="w-full md:w-1/3 font-bold text-gray-900 mb-2 md:mb-0">事業開始日</dt>
                        <dd class="w-full md:w-2/3 text-gray-700">
                            <span class="font-bold">2025年9月4日</span>
                        </dd>
                    </div>
                    <div class="flex flex-col md:flex-row border-b border-gray-200 pb-6">
                        <dt class="w-full md:w-1/3 font-bold text-gray-900 mb-2 md:mb-0">所在地</dt>
                        <dd class="w-full md:w-2/3 text-gray-700">
                            愛知県名古屋市中村区名駅5丁目3-8
                        </dd>
                    </div>
                    <div class="flex flex-col md:flex-row border-b border-gray-200 pb-6">
                        <dt class="w-full md:w-1/3 font-bold text-gray-900 mb-2 md:mb-0">対応エリア</dt>
                        <dd class="w-full md:w-2/3 text-gray-700">
                            愛知県・岐阜県・三重県を中心に、全国対応可能
                        </dd>
                    </div>
                    <div class="flex flex-col md:flex-row pb-6">
                        <dt class="w-full md:w-1/3 font-bold text-gray-900 mb-2 md:mb-0">お問い合わせ</dt>
                        <dd class="w-full md:w-2/3 text-gray-700">
                            TEL 052-414-7217<br>
                            FAX 052-414-7038<br>
                            Email: info@adors.co.jp<br>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="text-primary hover:underline">
                                お問い合わせフォームはこちら
                            </a>
                        </dd>
                    </div>
                </dl>
            </div>

            <!-- アクセス -->
            <div class="mt-12 bg-white rounded-lg shadow-sm p-8 lg:p-12 scroll-fade-up">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">アクセス</h2>
                <p class="text-gray-700 mb-6">
                    愛知県名古屋市中村区名駅5丁目3-8
                </p>
                <div class="w-full aspect-[16/9] bg-gray-100 rounded-lg overflow-hidden">
                    <iframe
                        title="株式会社アドーズ アクセスマップ"
                        src="https://www.google.com/maps?q=愛知県名古屋市中村区名駅5丁目3-8&output=embed"
                        class="w-full h-full border-0"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        aria-label="株式会社アドーズの所在地"
                    ></iframe>
                </div>
            </div>

            <!-- メッセージ -->
            <div class="mt-12 bg-gray-50 rounded-lg p-8 lg:p-12 scroll-fade-up">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">私たちの想い</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    企業が自ら法令遵守体制を維持できる仕組みづくりを支援し、現場で機能する運用体制を整えます。
                </p>
                <p class="text-gray-700 leading-relaxed">
                    私たち株式会社アドーズは、売り手側の事情を挟まず、お客様の利益だけを追求できる独立した立場で提案します。
                    消防法・危険物関係法令の専門家として、「法令の壁」を「利益を生む強み」に変えるお手伝いをします。
                </p>
            </div>

            <!-- 専門性と信頼性 -->
            <div class="mt-16">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 text-center scroll-fade-up">専門性と信頼性</h2>
                
                <!-- 保有資格 -->
                <div class="mb-12 bg-white border-2 border-gray-200 rounded-lg p-8 scroll-fade-up" data-delay="100">
                    <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">✓</span>
                        保有資格
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <span class="text-primary mr-3 mt-1">●</span>
                            <span class="text-gray-700">消防設備士</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-primary mr-3 mt-1">●</span>
                            <span class="text-gray-700">元消防職員（予防課・危険物担当）</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-primary mr-3 mt-1">●</span>
                            <span class="text-gray-700">防災士</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-primary mr-3 mt-1">●</span>
                            <span class="text-gray-700">防火管理者</span>
                        </div>
                    </div>
                </div>

                <!-- 体制 -->
                <div class="bg-white border-2 border-gray-200 rounded-lg p-8 scroll-fade-up" data-delay="200">
                    <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">✓</span>
                        体制
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        案件内容に応じて、消防・危険物・防災管理の専門資格者がチームを組成し対応。行政実務視点を踏まえた現場型支援により、机上論ではない実効性ある改善提案を行います。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section bg-primary py-16 lg:py-20">
        <div class="container text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                まずは無料相談から
            </h2>
            <p class="text-lg md:text-xl mb-8 opacity-90">
                お客様の課題をお聞かせください。最適なソリューションをご提案します。
            </p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn bg-white text-primary hover:bg-gray-100 text-lg px-8 py-4 inline-block">
                無料見積診断を申し込む
            </a>
        </div>
    </section>
</main>

<?php
get_footer();

