<?php
/**
 * お問い合わせページテンプレート
 *
 * @package ADOR'S
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- ページヘッダー -->
    <section class="page-header bg-primary text-white py-16">
        <div class="container">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">お問い合わせ</h1>
            <p class="text-lg opacity-90">初回ヒアリングは無料です。まずはお気軽にご相談ください</p>
        </div>
    </section>

    <!-- 相談のハードルを下げる -->
    <section class="py-16 bg-gray-50">
        <div class="container max-w-5xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 scroll-fade-up">
                    初回ヒアリングは無料です
                </h2>
                <p class="text-gray-600 text-lg scroll-fade-up" data-delay="100">
                    まずは気軽にご相談ください。専門スタッフが丁寧にお答えします。
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div class="bg-white rounded-lg p-8 border-2 border-gray-200 scroll-fade-up" data-delay="0">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">こんな相談ができます</h3>
                    <ul class="text-sm text-gray-700 space-y-2 mb-4">
                        <li>✓ 消防署から指摘を受けたが対応方法がわからない</li>
                        <li>✓ 法令改正への対応が必要だが社内に知識がない</li>
                        <li>✓ 行政検査前に事前診断してほしい</li>
                        <li>✓ 設備更新を検討しているが適切な計画がわからない</li>
                        <li>✓ 年間契約とスポット契約、どちらが良いか相談したい</li>
                        <li>✓ まずは話を聞いてみたい</li>
                    </ul>
                    <p class="text-sm text-gray-600">
                        どんな些細なことでも構いません。お気軽にご相談ください。
                    </p>
                </div>

                <div class="bg-white rounded-lg p-8 border-2 border-gray-200 scroll-fade-up" data-delay="150">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">お問い合わせ後の流れ</h3>
                    <ol class="text-sm text-gray-700 space-y-2">
                        <li>1. お問い合わせ（フォームまたは電話）</li>
                        <li>2. 初回無料ヒアリング（オンライン可）</li>
                        <li>3. 簡易診断レポート提出</li>
                        <li>4. お見積提示・契約内容のご説明</li>
                        <li>5. 支援開始・継続フォロー</li>
                    </ol>
                </div>
            </div>

            <div class="text-center">
                <a href="#contact-form" class="inline-flex items-center justify-center px-12 py-4 bg-primary text-white text-lg font-bold hover:bg-primary/90 transition-colors rounded">
                    無料ヒアリングを申し込む
                </a>
            </div>
        </div>
    </section>

    <!-- お問い合わせフォーム -->
    <section id="contact-form" class="contact-form-section py-16 lg:py-24">
        <div class="container max-w-4xl">
            <div class="bg-white rounded-lg shadow-sm p-8 lg:p-12 contact-form-wrapper max-w-2xl mx-auto scroll-fade-up">
                <?php
                // Contact Form 7が有効な場合
                if (shortcode_exists('contact-form-7')) {
                    echo do_shortcode('[contact-form-7 id="3b9bb48" title="コンタクトフォーム 1"]');
                } else {
                    // デフォルトのお問い合わせフォーム
                    ?>
                    <form method="post" action="" class="contact-form space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                お名前 <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                メールアドレス <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                電話番号
                            </label>
                            <input type="tel" id="phone" name="phone"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                        </div>

                        <div>
                            <label for="inquiry_type" class="block text-sm font-medium text-gray-700 mb-2">
                                お問い合わせ種別 <span class="text-red-500">*</span>
                            </label>
                            <select id="inquiry_type" name="inquiry_type" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                                <option value="">選択してください</option>
                                <option value="estimate">概算見積もり依頼</option>
                                <option value="consultation">スポット相談</option>
                                <option value="contract">顧問契約の相談</option>
                                <option value="diagnosis">リスク診断</option>
                                <option value="filing">届出作成</option>
                                <!-- <option value="app">スマメ（アプリ）について</option> リリース後に表示 -->
                                <option value="other">その他</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                お問い合わせ内容 <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" name="message" rows="6" required
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"></textarea>
                        </div>

                        <div class="flex items-start">
                            <input type="checkbox" id="privacy" name="privacy" required
                                   class="mt-1 mr-3 h-4 w-4 text-primary border-gray-300 rounded focus:ring-primary">
                            <label for="privacy" class="text-sm text-gray-600">
                                <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="text-primary hover:underline">プライバシーポリシー</a>に同意します
                                <span class="text-red-500">*</span>
                            </label>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary w-full py-4 text-lg">
                                送信する
                            </button>
                        </div>
                    </form>

                    <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                        <p class="text-sm text-blue-800">
                            <strong>※注意:</strong> このフォームはデモ用です。実際の送信機能を利用するには、Contact Form 7プラグインのインストールと設定が必要です。
                        </p>
                    </div>
                    <?php
                }
                ?>
            </div>

            <!-- 連絡先情報 -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-sm p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">お電話でのお問い合わせ</h3>
                    <p class="text-gray-600 mb-2">営業時間: 平日 9:00 - 18:00</p>
                    <p class="text-2xl font-bold text-primary mb-1">TEL 052-414-7217</p>
                    <p class="text-xl font-bold text-gray-700">FAX 052-414-7038</p>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">対応エリア</h3>
                    <p class="text-gray-600">
                        愛知県・岐阜県・三重県を中心に、全国対応可能です。<br>
                        まずはお気軽にお問い合わせください。
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();

