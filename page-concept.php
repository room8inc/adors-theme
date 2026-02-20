<?php
/**
 * コンセプトページテンプレート
 *
 * @package ADOR'S
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- ページヘッダー -->
    <section class="page-header bg-primary text-white py-16 relative overflow-hidden">
        <div class="container relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">コンセプト</h1>
            <p class="text-lg opacity-90">ADOR'Sが大切にしている考え方</p>
        </div>
        <!-- ヘッダー下部の波形区切り -->
        <div class="section-wave-bottom">
            <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="height: 40px;">
                <path fill="white" d="M0,25L60,22C120,19,240,13,360,16C480,19,600,31,720,34C840,37,960,31,1080,25C1200,19,1320,13,1380,10L1440,7L1440,50L0,50Z"></path>
            </svg>
        </div>
    </section>

    <!-- コンセプトメッセージ -->
    <section class="concept-message py-16 lg:py-24 bg-white">
        <div class="container max-w-4xl">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 scroll-fade-up">
                    法令の<span class="text-primary">『壁』</span>を、<br>
                    利益を生む<span class="text-primary">『強み』</span>へ。
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed scroll-fade-up" data-delay="200">
                    単なる法令遵守（守り）にとどまらず、専門家によるコストカットや設計自由度の向上といった「顧客メリット（攻め）」を前面に打ち出し、選ばれる理由を明確にします。
                </p>
            </div>
        </div>
    </section>

    <!-- Before/After 比較セクション -->
    <section class="py-16 lg:py-24 bg-gray-50 relative overflow-hidden">
        <!-- 背景装飾: 大きなオレンジブロブ -->
        <div class="deco-blob -top-20 -left-32 w-[400px] h-[400px] md:w-[600px] md:h-[600px] deco-blob-animate">
            <svg viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M300 0C465.685 0 600 134.315 600 300C600 465.685 465.685 600 300 600C134.315 600 50 520 20 420C-10 320 10 200 60 120C110 40 134.315 0 300 0Z" fill="#fd780f" fill-opacity="0.05"/>
            </svg>
        </div>
        <div class="deco-blob -bottom-20 -right-20 w-[300px] h-[300px] md:w-[450px] md:h-[450px]">
            <svg viewBox="0 0 450 450" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="225" cy="225" r="225" fill="#fd780f" fill-opacity="0.04"/>
            </svg>
        </div>
        <div class="container max-w-6xl relative z-10">
            <div class="text-center mb-12">
                <span class="text-primary font-bold tracking-[0.2em] text-sm mb-4 block uppercase">Before & After</span>
                <h3 class="text-2xl md:text-4xl font-bold text-gray-900 mb-4">
                    ADOR'Sが入ることで、<br class="md:hidden"><span class="text-primary">何が変わるのか</span>
                </h3>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    消防設備の導入プロジェクトにおける、従来の進め方とADOR'S導入後の違いを比較します。
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                <!-- Before（従来の進め方） -->
                <div class="bg-white rounded-xl p-8 md:p-10 relative shadow-lg border border-gray-200 scroll-fade-left">
                    <div class="absolute -top-4 left-6 bg-gray-500 text-white text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-wider">Before</div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2 mt-2">従来の進め方</h4>
                    <p class="text-sm text-gray-500 mb-8">メーカー主導・専門家不在のケース</p>

                    <div class="space-y-5">
                        <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <div class="flex-shrink-0 w-8 h-8 bg-red-50 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 text-sm">コストが不透明</p>
                                <p class="text-xs text-gray-500 mt-1">メーカーの言い値で過剰な設備投資が発生</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <div class="flex-shrink-0 w-8 h-8 bg-red-50 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 text-sm">手戻り・やり直しが発生</p>
                                <p class="text-xs text-gray-500 mt-1">施工後に消防検査で指摘、是正工事で追加費用</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <div class="flex-shrink-0 w-8 h-8 bg-red-50 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 text-sm">リスクの見落とし</p>
                                <p class="text-xs text-gray-500 mt-1">所轄消防の判断基準の違いに気づかず計画が破綻</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <div class="flex-shrink-0 w-8 h-8 bg-red-50 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 text-sm">担当者の負担が大きい</p>
                                <p class="text-xs text-gray-500 mt-1">法令知識がないまま消防署対応を任される</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- After（ADOR'S導入後） -->
                <div class="bg-primary-100 rounded-xl p-8 md:p-10 relative shadow-lg border-2 border-primary/20 scroll-fade-right">
                    <div class="absolute -top-4 left-6 bg-primary text-white text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-wider">After</div>
                    <h4 class="text-xl font-bold text-primary mb-2 mt-2">ADOR'S導入後</h4>
                    <p class="text-sm text-gray-600 mb-8">専門家が伴走するプロジェクト</p>

                    <div class="space-y-5">
                        <div class="flex items-start gap-4 p-4 bg-white rounded-lg border border-primary/15 shadow-sm">
                            <div class="flex-shrink-0 w-8 h-8 bg-primary/15 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 text-sm">適正価格を実現</p>
                                <p class="text-xs text-gray-600 mt-1">中立的な立場で見積査定、工事費10%削減を目指す</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-white rounded-lg border border-primary/15 shadow-sm">
                            <div class="flex-shrink-0 w-8 h-8 bg-primary/15 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 text-sm">最短工期で完了</p>
                                <p class="text-xs text-gray-600 mt-1">事前協議でリスクを排除し、手戻りのない計画を実現</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-white rounded-lg border border-primary/15 shadow-sm">
                            <div class="flex-shrink-0 w-8 h-8 bg-primary/15 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 text-sm">リスクを事前に排除</p>
                                <p class="text-xs text-gray-600 mt-1">所轄消防ごとの判断基準を熟知した専門家が事前対応</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-white rounded-lg border border-primary/15 shadow-sm">
                            <div class="flex-shrink-0 w-8 h-8 bg-primary/15 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 text-sm">担当者の労務を軽減</p>
                                <p class="text-xs text-gray-600 mt-1">消防署との協議・手続きを専門家がアドバイス・支援</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ADOR'Sの最重要介入ポイント -->
    <section class="py-16 lg:py-24 bg-white relative overflow-hidden">
        <!-- 大きなオレンジ波形装飾（セクション全体の背景） -->
        <div class="deco-blob top-0 left-0 w-full h-full">
            <svg viewBox="0 0 1440 500" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                <path d="M-100,50 C200,200 500,0 800,150 C1100,300 1300,50 1540,200" stroke="#fd780f" stroke-opacity="0.06" stroke-width="180" fill="none"/>
            </svg>
        </div>
        <!-- 装飾円: 左下 -->
        <div class="deco-blob -bottom-16 -left-16 w-[250px] h-[250px] md:w-[400px] md:h-[400px]">
            <svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="200" cy="200" r="200" fill="#fd780f" fill-opacity="0.05"/>
            </svg>
        </div>
        <!-- 装飾リング: 右上 -->
        <div class="deco-blob -top-12 -right-12 w-[200px] h-[200px] md:w-[350px] md:h-[350px]">
            <svg viewBox="0 0 350 350" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="175" cy="175" r="160" stroke="#fd780f" stroke-opacity="0.08" stroke-width="3" fill="none"/>
                <circle cx="175" cy="175" r="120" stroke="#fd780f" stroke-opacity="0.05" stroke-width="2" fill="none"/>
            </svg>
        </div>
        <div class="container max-w-5xl relative z-10">
            <div class="text-center mb-12">
                <span class="text-primary font-bold tracking-[0.2em] text-sm mb-4 block uppercase">Key Intervention</span>
                <h3 class="text-2xl md:text-4xl font-bold text-gray-900 mb-4">
                    ADOR'Sが介入する<br class="md:hidden"><span class="text-primary">2つの最重要ポイント</span>
                </h3>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    プロジェクトの成否を決める2つのフェーズに、専門家として深く関与します。
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- 事前協議 -->
                <div class="relative bg-white rounded-xl p-8 md:p-10 shadow-xl scroll-fade-left">
                    <div class="absolute -top-3 left-6 flex items-center gap-2">
                        <span class="bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Point 1</span>
                        <span class="bg-primary-100 text-primary text-xs font-bold px-3 py-1 rounded-full border border-primary/20">着工前のリスク排除</span>
                    </div>
                    <div class="mt-4">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="flex-shrink-0 w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h4 class="text-2xl font-black text-gray-900">事前協議</h4>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            着工前に所轄消防署と綿密に協議し、法令解釈の違いや指導基準のズレを事前に解消。「施工後に通らない」というリスクを排除します。
                        </p>
                        <div class="bg-primary-100 rounded-lg p-5 border border-primary/10">
                            <p class="text-sm font-bold text-gray-900 mb-2">ADOR'Sが実現すること</p>
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li class="flex items-start gap-2">
                                    <span class="text-primary font-bold mt-0.5">--</span>
                                    <span>所轄消防ごとの判断基準の違いに対応した調整</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-primary font-bold mt-0.5">--</span>
                                    <span>手戻り・是正工事を防ぐ事前リスク洗い出し</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-primary font-bold mt-0.5">--</span>
                                    <span>スムーズな着工・引き渡しの実現</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 見積査定 -->
                <div class="relative bg-white rounded-xl p-8 md:p-10 shadow-xl scroll-fade-right">
                    <div class="absolute -top-3 left-6 flex items-center gap-2">
                        <span class="bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Point 2</span>
                        <span class="bg-primary-100 text-primary text-xs font-bold px-3 py-1 rounded-full border border-primary/20">コスト適正化</span>
                    </div>
                    <div class="mt-4">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="flex-shrink-0 w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h4 class="text-2xl font-black text-gray-900">見積査定</h4>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            メーカーから提出された見積もりをプロの目で精査。過剰なスペックを排除し、法令遵守と両立する最適なコスト設計を提案します。
                        </p>
                        <div class="bg-primary-100 rounded-lg p-5 border border-primary/10">
                            <p class="text-sm font-bold text-gray-900 mb-2">ADOR'Sが実現すること</p>
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li class="flex items-start gap-2">
                                    <span class="text-primary font-bold mt-0.5">--</span>
                                    <span>メーカー非依存の中立的な見積査定</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-primary font-bold mt-0.5">--</span>
                                    <span>工事費用の10%削減を目指した設計提案</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-primary font-bold mt-0.5">--</span>
                                    <span>不透明な見積もりを一掃し、適正価格を実現</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 選ばれる理由 -->
    <section class="py-16 lg:py-24 bg-primary-100 relative overflow-hidden">
        <!-- セクション上部の波形区切り -->
        <div class="section-wave-top">
            <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="height: 35px;">
                <path fill="#ffedd5" d="M0,25L80,22C160,19,320,13,480,18C640,23,800,38,960,40C1120,42,1280,30,1360,24L1440,18L1440,50L0,50Z"></path>
            </svg>
        </div>
        <div class="container max-w-4xl">
            <div class="reasons-section">
                <h3 class="text-2xl md:text-3xl font-bold text-center text-gray-900 mb-12 scroll-fade-up">
                    選ばれる5つの理由
                </h3>
                <div class="space-y-8">
                    <div class="reason-item bg-white border border-gray-200 rounded-lg p-8 hover:shadow-lg transition-shadow scroll-fade-up" data-delay="0">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 bg-primary-100 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold text-primary">
                                1
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-3">プロの視点によるサポート</h4>
                                <p class="text-gray-600 mb-3">
                                    防火・防災管理等の消防法令遵守確認（セカンドオピニオン）より安全な事業運営をサポートします。<br>
                                    消防査察・指摘に対しての的確なアドバイスによってお客様の負担を軽減します。
                                </p>
                                <p class="text-sm text-primary font-bold">
                                    -- 消防に関する不安を取り除く
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="reason-item bg-white border border-gray-200 rounded-lg p-8 hover:shadow-lg transition-shadow scroll-fade-up" data-delay="100">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 bg-primary-100 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold text-primary">
                                2
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-3">避難安全検証法による設計自由度の提供</h4>
                                <p class="text-gray-600 mb-3">
                                    仕様規定にとらわれず、避難安全検証法などの性能規定を活用することで、コスト削減と設計自由度を両立。建築士が求める柔軟な提案が可能です。
                                </p>
                                <p class="text-sm text-primary font-bold">
                                    -- 「できない」ではなく「こうすればできる」を提案
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="reason-item bg-white border border-gray-200 rounded-lg p-8 hover:shadow-lg transition-shadow scroll-fade-up" data-delay="200">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 bg-primary-100 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold text-primary">
                                3
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-3">所轄消防署ごとの判断基準の違いに対応できる調整力</h4>
                                <p class="text-gray-600 mb-3">
                                    同じ法令でも、所轄消防署によって解釈や運用が異なるケースに対応。事前協議から本審査まで、円滑な調整を実現します。
                                </p>
                                <p class="text-sm text-primary font-bold">
                                    -- 「言われた通りにしたのに通らない」を防ぐ
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="reason-item bg-white border border-gray-200 rounded-lg p-8 hover:shadow-lg transition-shadow scroll-fade-up" data-delay="300">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 bg-primary-100 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold text-primary">
                                4
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-3">工事費の10%削減を目指すコストマネジメント</h4>
                                <p class="text-gray-600 mb-3">
                                    メーカー見積もりを査定し、より安価な消火設備を提案。過剰な設備を排除して、必要十分な設備構成を実現します。
                                </p>
                                <p class="text-sm text-primary font-bold">
                                    -- 法令遵守とコスト削減の両立
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="reason-item bg-white border border-gray-200 rounded-lg p-8 hover:shadow-lg transition-shadow scroll-fade-up" data-delay="400">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 bg-primary-100 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold text-primary">
                                5
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-3">中立的な立場での提案（メーカー非依存）</h4>
                                <p class="text-gray-600 mb-3">
                                    特定メーカーに依存せず、お客様の利益を最優先に考えた中立的な立場から、最適な設備を選定します。
                                </p>
                                <p class="text-sm text-primary font-bold">
                                    -- 「メーカーの言い値」から解放
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 他社との違い -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="container max-w-4xl">
            <div class="difference-section">
                <h3 class="text-2xl md:text-3xl font-bold text-center text-gray-900 mb-6">
                    メーカー・他社との違い
                </h3>
                <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
                    ニチボウ、Nプラスコンサルティングなど競合他社と比較しても、ADOR'Sは明確な差別化ポイントを持っています。
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-lg p-6 border-2 border-primary/20 scroll-fade-left">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm">vs</div>
                            <h4 class="text-lg font-bold text-gray-900">メーカー</h4>
                        </div>
                        <p class="text-sm text-gray-500 mb-3">メーカーの課題：</p>
                        <ul class="text-sm text-gray-600 mb-4 space-y-1">
                            <li>- 自社製品ありきの提案</li>
                            <li>- 過大な費用提示</li>
                        </ul>
                        <p class="text-sm font-bold text-primary">
                            ADOR'Sの強み：<br>
                            <span class="text-gray-900">中立的な立場で、メーカー提案の過大な費用を適正化。工事費の10%削減を目指します。</span>
                        </p>
                    </div>
                    <div class="bg-white rounded-lg p-6 border-2 border-primary/20 scroll-fade-right">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm">vs</div>
                            <h4 class="text-lg font-bold text-gray-900">一般的なコンサル</h4>
                        </div>
                        <p class="text-sm text-gray-500 mb-3">一般コンサルの課題：</p>
                        <ul class="text-sm text-gray-600 mb-4 space-y-1">
                            <li>- 危険物消火設備の専門性不足</li>
                            <li>- 仕様規定に縛られた提案</li>
                        </ul>
                        <p class="text-sm font-bold text-primary">
                            ADOR'Sの強み：<br>
                            <span class="text-gray-900">危険物消火設備に特化した専門知識。避難安全検証法で設計自由度を提供。</span>
                        </p>
                    </div>
                </div>

                <!-- トータルサポート図 -->
                <div class="mt-12 bg-white border border-gray-200 rounded-xl p-6 md:p-10 shadow-sm scroll-scale-in">
                    <h4 class="text-xl md:text-2xl font-bold text-gray-900 text-center mb-8 md:mb-12">トータルサポート</h4>

                    <div class="relative mx-auto" style="max-width: 460px;">
                        <!-- 装飾リング -->
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 border-2 border-dashed rounded-full pointer-events-none" style="border-color: rgba(253,120,15,0.15); width: 80%; aspect-ratio: 1;"></div>

                        <!-- 上：安全 -->
                        <div class="flex justify-center mb-24 md:mb-32 relative z-[2]">
                            <div class="text-center">
                                <div class="w-[88px] h-[88px] md:w-28 md:h-28 mx-auto rounded-2xl shadow-lg flex items-center justify-center border mb-3 bg-gradient-to-br from-emerald-50 to-emerald-100 border-emerald-200">
                                    <svg class="w-10 h-10 md:w-14 md:h-14 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <p class="text-sm md:text-lg font-bold text-gray-900">安全</p>
                                <p class="text-[10px] md:text-xs text-gray-400 tracking-widest mt-0.5">SAFETY</p>
                            </div>
                        </div>

                        <!-- 中央：ADOR'S -->
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[3]">
                            <div class="w-[80px] h-[80px] md:w-[120px] md:h-[120px] rounded-full shadow-xl border-4 border-white flex flex-col items-center justify-center" style="background: linear-gradient(135deg, #fd780f 0%, #c2410c 100%);">
                                <span class="text-white/80 text-[7px] md:text-[10px] leading-none mb-0.5">株式会社</span>
                                <span class="text-white text-xs md:text-lg font-bold tracking-wider leading-none">ADOR'S</span>
                            </div>
                        </div>

                        <!-- 下：コスト削減 & 法令遵守 -->
                        <div class="flex justify-between px-0 md:px-4 relative z-[2]">
                            <!-- コスト削減 -->
                            <div class="text-center">
                                <div class="w-[88px] h-[88px] md:w-28 md:h-28 mx-auto rounded-2xl shadow-lg flex items-center justify-center border mb-3 bg-gradient-to-br from-sky-50 to-sky-100 border-sky-200">
                                    <svg class="w-10 h-10 md:w-14 md:h-14 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <p class="text-sm md:text-lg font-bold text-gray-900">コスト削減</p>
                                <p class="text-[10px] md:text-xs text-gray-400 tracking-widest mt-0.5">COST</p>
                            </div>

                            <!-- 法令遵守 -->
                            <div class="text-center">
                                <div class="w-[88px] h-[88px] md:w-28 md:h-28 mx-auto rounded-2xl shadow-lg flex items-center justify-center border mb-3 bg-gradient-to-br from-amber-50 to-amber-100 border-amber-200">
                                    <svg class="w-10 h-10 md:w-14 md:h-14 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.97zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.97z"/>
                                    </svg>
                                </div>
                                <p class="text-sm md:text-lg font-bold text-gray-900">法令遵守</p>
                                <p class="text-[10px] md:text-xs text-gray-400 tracking-widest mt-0.5">COMPLIANCE</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 具体的なコスト削減例 -->
                <div class="mt-12 bg-white border-2 border-primary rounded-lg p-8 text-center scroll-fade-up">
                    <div class="inline-block bg-primary text-white text-xs font-bold px-4 py-2 mb-4 uppercase tracking-wider">Cost Reduction</div>
                    <h4 class="text-2xl font-black text-gray-900 mb-4">工事費の10%削減を目指す</h4>
                    <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                        メーカー見積もりを査定し、より安価で適切な消火設備を提案することで、コスト削減と法令遵守を両立します。
                    </p>
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                        <div class="text-center">
                            <div class="text-4xl font-black text-gray-300 mb-2">Before</div>
                            <div class="text-2xl font-bold text-gray-600">メーカー見積もり</div>
                            <div class="text-sm text-gray-500">過剰設備・言い値</div>
                        </div>
                        <div class="text-4xl text-primary font-black">→</div>
                        <div class="text-center bg-primary/5 border border-primary/20 rounded-lg px-6 py-4">
                            <div class="text-4xl font-black text-primary mb-2">After</div>
                            <div class="text-2xl font-bold text-gray-900">ADOR'S提案</div>
                            <div class="text-sm text-primary font-bold">約10%削減</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section bg-primary py-16 lg:py-20 relative overflow-hidden">
        <!-- CTA上部の波形区切り -->
        <div class="section-wave-top">
            <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="height: 40px;">
                <path fill="#f9fafb" d="M0,25L80,28C160,31,320,37,480,34C640,31,800,19,960,16C1120,13,1280,19,1360,22L1440,25L1440,0L0,0Z"></path>
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
                セカンドオピニオンを相談する
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
