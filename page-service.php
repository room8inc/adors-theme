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
    <section class="page-header bg-primary text-white py-16">
        <div class="container">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">事業内容</h1>
            <p class="text-lg opacity-90">消防法・危険物法に関する包括的なコンサルティングサービス</p>
        </div>
    </section>

    <!-- サービス詳細 -->
    <section class="services-detail py-16 lg:py-24">
        <div class="container">
            <!-- 01. 消防設備設置基準の提案 -->
            <div id="fire-equipment" class="service-detail-item mb-24 scroll-mt-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="flex items-center mb-6">
                            <svg class="w-12 h-12 text-primary mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                            </svg>
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                                消防設備設置基準の提案
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            自動火災報知設備、誘導灯、消火栓、防火水槽、動力消防ポンプなど、<br>
                            法令に基づいた消防設備の設置基準を提案します。
                        </p>
                        <ul class="space-y-6 text-gray-700 mb-12">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>自動火災報知設備:</strong> 建物の用途・規模に応じた最適な感知器配置を提案</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>消火設備:</strong> 消火栓、スプリンクラー、動力消防ポンプの設置基準策定</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>避難設備:</strong> 誘導灯、避難器具、非常口の適切な配置設計</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>消防協議代行:</strong> 所轄消防署との協議を代行し、スムーズな手続きをサポート</span>
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

            <!-- 02. 危険物消火設備の選定 -->
            <div id="hazardous-materials" class="service-detail-item mb-24 scroll-mt-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1 bg-gray-100 rounded-lg h-80 lg:h-96 flex items-center justify-center">
                        <span class="text-gray-400">画像スペース</span>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="flex items-center mb-6">
                            <svg class="w-12 h-12 text-primary mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                            <div>
                                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                                    危険物消火設備の選定
                                </h2>
                                <span class="inline-block text-xs text-white bg-primary font-bold px-3 py-1 mt-2 uppercase tracking-wider">Specialized Field</span>
                            </div>
                        </div>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            化学工場、ガソリンスタンドなど、危険物を取り扱う施設に最適な消火設備を選定。<br>
                            <strong class="text-gray-900">ADOR'Sの特化領域です。</strong>
                        </p>
                        <ul class="space-y-6 text-gray-700 mb-12">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>泡消火設備:</strong> ガソリン・油類（第4類危険物）に適した泡消火システムを提案</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>アルゴナイト消火設備:</strong> 電気室・サーバー室に最適な不活性ガス消火設備を選定</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>粉末消火設備（BC）:</strong> ナトリウム等のアルカリ金属など特殊危険物に対応</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>工作機械用消火設備:</strong> 製造ラインに適した消火システムの設計</span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center bg-primary text-white px-8 py-4 font-bold hover:bg-primary/90 transition-colors">
                            相談・見積もり依頼
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 03. コストマネジメント -->
            <div id="cost" class="service-detail-item mb-24 scroll-mt-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="flex items-center mb-6">
                            <svg class="w-12 h-12 text-primary mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                                コストマネジメント
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            メーカー見積もりの査定および、より安価な消火設備の提案で、<br>
                            <strong class="text-primary text-2xl">工事費の10%削減</strong>を目指します。
                        </p>
                        <div class="bg-primary/5 border-l-4 border-primary p-6 mb-12">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">中立的な立場から、費用を最適化</h3>
                            <p class="text-gray-700 leading-relaxed">
                                設備を「売る」ことが目的のメーカーとは異なり、ADOR'Sは中立的な立場からコストを管理。<br>
                                メーカーから提示された見積もりが適正かどうかをプロの視点で査定（セカンドオピニオン）し、<br>
                                より安価で確実な代替案を提示します。
                            </p>
                        </div>
                        <ul class="space-y-6 text-gray-700 mb-12">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>見積もり査定:</strong> メーカー見積もりの妥当性を専門的視点から精査</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>代替案提案:</strong> 法令を遵守しながら、より安価な消火設備を提案</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>予算管理サポート:</strong> 計画段階での概算費用把握で、検討をスムーズに</span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center bg-primary text-white px-8 py-4 font-bold hover:bg-primary/90 transition-colors">
                            コスト削減相談
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                    <div class="bg-gray-100 rounded-lg h-80 lg:h-96 flex items-center justify-center">
                        <span class="text-gray-400">画像スペース</span>
                    </div>
                </div>
            </div>

            <!-- 04. 運用・点検サポート -->
            <div id="operation" class="service-detail-item mb-24 scroll-mt-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1 bg-gray-100 rounded-lg h-80 lg:h-96 flex items-center justify-center">
                        <span class="text-gray-400">画像スペース</span>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="flex items-center mb-6">
                            <svg class="w-12 h-12 text-primary mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                                運用・点検サポート
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            既存点検業者が法令を遵守しているかの確認（セカンドオピニオン）や、<br>
                            防火・防災管理者への日常点検・消防訓練アドバイスを提供します。
                        </p>
                        <ul class="space-y-6 text-gray-700 mb-12">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>セカンドオピニオン:</strong> 既存業者の点検内容が法令を遵守しているか第三者視点でチェック</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>日常点検アドバイス:</strong> 防火・防災管理者への具体的な点検手順の指導</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>消防訓練サポート:</strong> 効果的な消防訓練の計画立案と実施支援</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>法令適合確認:</strong> 査察前の事前チェックで指摘事項を未然に防止</span>
                            </li>
                        </ul>
                        <div class="bg-gray-50 border border-gray-200 p-6 mb-12">
                            <p class="text-sm text-gray-600 mb-2">💡 <strong class="text-gray-900">こんな不安をお持ちではありませんか？</strong></p>
                            <p class="text-gray-700 leading-relaxed">
                                「消防署の査察で指摘される前に、第三者にチェックしてもらいたい」<br>
                                「点検業者の報告書の内容が正しいのか確認したい」
                            </p>
                        </div>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center bg-primary text-white px-8 py-4 font-bold hover:bg-primary/90 transition-colors">
                            点検サポート相談
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 05. 日常点検アプリ「スマメ」 -->
            <div id="sumame" class="service-detail-item scroll-mt-24">
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
        </div>
    </section>

    <!-- 料金体系 -->
    <section class="py-32 bg-gray-50">
        <div class="container">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-[0.2em] text-sm mb-6 block uppercase">Pricing</span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 tracking-tight">
                    料金体系
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                    明確な料金体系で、予算取りもスムーズに。まずは概算見積もりから。
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto mb-12">
                <!-- スポット対応 -->
                <div class="bg-white border-2 border-gray-200 p-8 rounded-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">スポット対応</h3>
                    <div class="mb-6">
                        <div class="text-3xl font-black text-primary mb-2">時間単価</div>
                        <p class="text-sm text-gray-500">メール1回答・リモート打合せ</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-700 mb-6">
                        <li class="flex items-start">
                            <span class="text-primary mr-2">✓</span>
                            <span>メール1回答</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-primary mr-2">✓</span>
                            <span>リモート打合せ（時間単価）</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-primary mr-2">✓</span>
                            <span>同行料金（交通費＋移動・打合せ時間単価）</span>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block text-center bg-gray-100 text-gray-900 py-3 px-6 font-bold hover:bg-gray-200 transition-colors">
                        見積もり依頼
                    </a>
                </div>

                <!-- 年間顧問 -->
                <div class="bg-white border-2 border-primary p-8 rounded-lg relative">
                    <div class="absolute top-0 right-0 bg-primary text-white text-xs font-bold px-3 py-1 uppercase">Recommended</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">年間顧問</h3>
                    <div class="mb-6">
                        <div class="text-3xl font-black text-primary mb-2">年会費</div>
                        <p class="text-sm text-gray-500">担当者人数により変動</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-700 mb-6">
                        <li class="flex items-start">
                            <span class="text-primary mr-2">✓</span>
                            <span>年会費（担当者人数により変動）</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-primary mr-2">✓</span>
                            <span>各種相談料（無制限）</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-primary mr-2">✓</span>
                            <span>法令適合確認（定期）</span>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block text-center bg-primary text-white py-3 px-6 font-bold hover:bg-primary/90 transition-colors">
                        顧問契約相談
                    </a>
                </div>

                <!-- 設計費用 -->
                <div class="bg-white border-2 border-gray-200 p-8 rounded-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">設計費用</h3>
                    <div class="mb-6">
                        <div class="text-3xl font-black text-primary mb-2">工事費の10%</div>
                        <p class="text-sm text-gray-500">一般防火対象物・危険物施設</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-700 mb-6">
                        <li class="flex items-start">
                            <span class="text-primary mr-2">✓</span>
                            <span>平面図からの消防設備提案</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-primary mr-2">✓</span>
                            <span>危険物消火設備の設計</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-primary mr-2">✓</span>
                            <span>消防協議・調整代行</span>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block text-center bg-gray-100 text-gray-900 py-3 px-6 font-bold hover:bg-gray-200 transition-colors">
                        見積もり依頼
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- リスク診断 -->
                <div class="bg-white border-2 border-gray-200 p-8 rounded-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">リスク診断</h3>
                    <div class="mb-6">
                        <div class="text-2xl font-black text-primary mb-2">建物内火災リスク診断</div>
                        <p class="text-sm text-gray-500">報告書込・調査費別途</p>
                    </div>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block text-center bg-gray-100 text-gray-900 py-3 px-6 font-bold hover:bg-gray-200 transition-colors">
                        診断依頼
                    </a>
                </div>

                <!-- 届出作成 -->
                <div class="bg-white border-2 border-gray-200 p-8 rounded-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">届出作成</h3>
                    <div class="mb-6">
                        <div class="text-2xl font-black text-primary mb-2">各種届出代行</div>
                        <p class="text-sm text-gray-500">防火管理者選任・消防計画等</p>
                    </div>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block text-center bg-gray-100 text-gray-900 py-3 px-6 font-bold hover:bg-gray-200 transition-colors">
                        依頼する
                    </a>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-600 text-sm">
                    ※ 上記は目安です。詳細はお問い合わせください。<br>
                    ※ 初回相談は無料です。お気軽にご連絡ください。
                </p>
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
                お客様の課題に合わせた最適なソリューションをご提案します
            </p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn bg-white text-primary hover:bg-gray-100 text-lg px-8 py-4 inline-block">
                お問い合わせ・無料相談
            </a>
        </div>
    </section>
</main>

<?php
get_footer();

