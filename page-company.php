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
            <p class="text-lg opacity-90">ADOR'Sについて</p>
        </div>
    </section>

    <!-- 会社情報 -->
    <section class="company-info py-16 lg:py-24">
        <div class="container max-w-4xl">
            <div class="bg-white rounded-lg shadow-sm p-8 lg:p-12">
                <dl class="space-y-6">
                    <div class="flex flex-col md:flex-row border-b border-gray-200 pb-6">
                        <dt class="w-full md:w-1/3 font-bold text-gray-900 mb-2 md:mb-0">会社名</dt>
                        <dd class="w-full md:w-2/3 text-gray-700">ADOR'S（アドーズ）</dd>
                    </div>
                    <div class="flex flex-col md:flex-row border-b border-gray-200 pb-6">
                        <dt class="w-full md:w-1/3 font-bold text-gray-900 mb-2 md:mb-0">事業内容</dt>
                        <dd class="w-full md:w-2/3 text-gray-700">
                            消防法および危険物法に関するコンサルタント事業<br>
                            <span class="text-sm text-gray-600">（消防設備設置基準の提案、危険物消火設備の選定、コストマネジメント、運用・点検サポート、日常点検アプリ「スマメ」）</span>
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
                            【名古屋事業所】<br>
                            〒XXX-XXXX<br>
                            愛知県名古屋市XXX<br>
                            <span class="text-sm text-primary font-bold">（2025年6月20日 開設予定）</span>
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
                            TEL: 0120-XXX-XXX<br>
                            Email: info@adors.co.jp<br>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="text-primary hover:underline">
                                お問い合わせフォームはこちら
                            </a>
                        </dd>
                    </div>
                </dl>
            </div>

            <!-- メッセージ -->
            <div class="mt-12 bg-gray-50 rounded-lg p-8 lg:p-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">私たちの想い</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    法令遵守は「守り」だけではありません。適切な専門知識と提案により、コストを削減し、設計の自由度を高め、お客様のビジネスを強くすることができます。
                </p>
                <p class="text-gray-700 leading-relaxed">
                    私たちADOR'Sは、消防法・危険物法に関する専門家として、お客様の課題解決をサポートし、「法令の壁」を「利益を生む強み」に変えるお手伝いをします。
                </p>
            </div>

            <!-- 専門性と信頼性 -->
            <div class="mt-16">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 text-center">専門性と信頼性</h2>
                
                <!-- 保有資格 -->
                <div class="mb-12 bg-white border-2 border-gray-200 rounded-lg p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">✓</span>
                        保有資格
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <span class="text-primary mr-3 mt-1">●</span>
                            <span class="text-gray-700">消防設備士（甲種・乙種）</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-primary mr-3 mt-1">●</span>
                            <span class="text-gray-700">危険物取扱者（甲種）</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-primary mr-3 mt-1">●</span>
                            <span class="text-gray-700">一級建築士</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-primary mr-3 mt-1">●</span>
                            <span class="text-gray-700">消防設備業許可（準備中）</span>
                        </div>
                    </div>
                </div>

                <!-- 業界経験 -->
                <div class="mb-12 bg-white border-2 border-gray-200 rounded-lg p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">✓</span>
                        業界経験
                    </h3>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        創業メンバーは、消防設備業界での豊富な経験を持ち、大手企業のプロジェクトにも多数関与してきました。
                    </p>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-primary mr-3">•</span>
                            <span>消防設備設計・施工：15年以上の実務経験</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-primary mr-3">•</span>
                            <span>危険物施設コンサルティング：10年以上の実務経験</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-primary mr-3">•</span>
                            <span>避難安全検証法による性能設計：多数の実績</span>
                        </li>
                    </ul>
                </div>

                <!-- 業界団体との関係 -->
                <div class="bg-white border-2 border-gray-200 rounded-lg p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">✓</span>
                        業界団体との関係
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        ハツタ会（初田製作所関連会）などの業界団体と連携し、最新の法令情報や技術動向を常にキャッチアップしています。
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
                お問い合わせ・無料相談
            </a>
        </div>
    </section>
</main>

<?php
get_footer();

