<?php
/**
 * トップページテンプレート
 *
 * @package ADOR'S
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- ヒーローセクション -->
    <section class="hero relative bg-white py-40 md:py-64 overflow-hidden">
        <div class="absolute inset-0 opacity-[0.03]">
            <div class="absolute inset-0" style="background-image: linear-gradient(#000 1px, transparent 1px), linear-gradient(90deg, #000 1px, transparent 1px); background-size: 100px 100px;"></div>
        </div>
        <!-- 装飾ブロブ: 右上の大きな円 -->
        <div class="deco-blob -top-32 -right-32 w-[500px] h-[500px] md:w-[700px] md:h-[700px] deco-blob-animate">
            <svg viewBox="0 0 700 700" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="350" cy="350" r="350" fill="#fd780f" fill-opacity="0.06"/>
            </svg>
        </div>
        <!-- 装飾ブロブ: 左下の有機的シェイプ -->
        <div class="deco-blob -bottom-20 -left-20 w-[300px] h-[300px] md:w-[450px] md:h-[450px]">
            <svg viewBox="0 0 450 450" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M225 0C349.264 0 450 100.736 450 225C450 349.264 349.264 450 225 450C100.736 450 40 380 20 300C0 220 0 180 40 120C80 60 100.736 0 225 0Z" fill="#fd780f" fill-opacity="0.04"/>
            </svg>
        </div>
        <div class="container relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- メインキャッチコピー -->
                <div class="text-center mb-12 md:mb-16 hero-element" data-delay="300">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-gray-900 mb-8 leading-tight tracking-tight">
                        違反ゼロと、<br><span class="text-primary">無駄ゼロ</span>へ。
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-600 font-bold">
                        プロの視点によるサポート
                    </p>
                </div>
                
                <!-- サブコピー -->
                <div class="text-center mb-16 md:mb-20 max-w-4xl mx-auto hero-element" data-delay="600">
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                        防火・防災管理等の消防法令遵守確認（セカンドオピニオン）<br>
                        より安全な事業運営をサポートします。<br>
                        消防査察・指摘に対しての的確なアドバイスによって<br>
                        お客様の負担を軽減します。
                    </p>
                </div>
                
                <!-- 3つの特徴ボックス -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 mb-16">
                    <!-- 左：コスト -->
                    <div class="bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500 hero-element" data-delay="900">
                        <div class="flex items-center mb-6">
                            <svg class="w-12 h-12 text-primary mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                            <h3 class="text-lg font-black text-primary uppercase tracking-tight">コスト</h3>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4 leading-tight">
                            見積の<br>
                            <span class="text-primary">「適正化」</span>
                        </h4>
                        <p class="text-gray-600 leading-relaxed">
                            お客様の立場からコスト管理。売り手の利益ではなく買い手の利益を優先し、セカンドオピニオンとして過剰な設備投資をカットします。
                        </p>
                    </div>
                    
                    <!-- 中央：安全 -->
                    <div class="bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500 hero-element" data-delay="1100">
                        <div class="flex items-center mb-6">
                            <svg class="w-12 h-12 text-primary mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <h3 class="text-lg font-black text-primary uppercase tracking-tight">安全</h3>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4 leading-tight">
                            現場で機能する<br>
                            <span class="text-primary">「安全設計」</span>
                        </h4>
                        <p class="text-gray-600 leading-relaxed">
                            「言われたとおりにしたのに通らない」を防ぐため、地域の消防本部ごとの違いに対応。事前協議から運営まで一貫してサポートします。
                        </p>
                    </div>
                    
                    <!-- 右：手間 -->
                    <div class="bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500 hero-element" data-delay="1300">
                        <div class="flex items-center mb-6">
                            <svg class="w-12 h-12 text-primary mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="text-lg font-black text-primary uppercase tracking-tight">手間</h3>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4 leading-tight">
                            行政協議の<br>
                            <span class="text-primary">「アドバイス・支援」</span>
                        </h4>
                        <p class="text-gray-600 leading-relaxed">
                            複雑な消防署との協議や手続きをアドバイス・支援。法令遵守の観点から施工監理を行い、設計・施工段階でのトラブルを未然に防ぎます。
                        </p>
                    </div>
                </div>
                
                <!-- CTAボタン -->
                <div class="flex flex-col sm:flex-row gap-8 justify-center hero-element" data-delay="1500">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="group inline-flex items-center justify-center px-12 py-5 bg-primary text-white font-bold text-lg rounded-sm hover:bg-primary/90 transition-all duration-500">
                        <span>無料見積診断を申し込む</span>
                        <svg class="w-4 h-4 ml-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/service')); ?>" class="group inline-flex items-center justify-center px-12 py-5 bg-transparent text-gray-900 font-bold text-lg rounded-sm border border-gray-300 hover:border-primary hover:text-primary transition-all duration-500">
                        <span>サービスを見る</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- ヒーロー下部の波形SVG -->
        <div class="section-wave-bottom">
            <svg viewBox="0 0 1440 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="height: 60px; md:height: 80px;">
                <path fill="#fd780f" fill-opacity="0.08" d="M0,40L60,44C120,48,240,56,360,52C480,48,600,32,720,28C840,24,960,32,1080,40C1200,48,1320,56,1380,60L1440,64L1440,100L0,100Z"></path>
                <path fill="#fd780f" fill-opacity="0.15" d="M0,60L60,56C120,52,240,44,360,48C480,52,600,68,720,72C840,76,960,68,1080,60C1200,52,1320,44,1380,40L1440,36L1440,100L0,100Z"></path>
            </svg>
        </div>
    </section>

    <!-- ミッション・価値 -->
    <section class="py-32 md:py-48 bg-white relative overflow-hidden">
        <!-- 大きなオレンジ曲線SVG（画面を横切る装飾） -->
        <div class="deco-blob top-0 left-0 w-full h-full">
            <svg viewBox="0 0 1440 600" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                <path d="M-100,100 C200,250 400,50 720,200 C1040,350 1200,100 1540,250" stroke="#fd780f" stroke-opacity="0.08" stroke-width="200" fill="none"/>
                <path d="M-100,350 C200,200 500,400 800,300 C1100,200 1300,400 1540,300" stroke="#fd780f" stroke-opacity="0.05" stroke-width="150" fill="none"/>
            </svg>
        </div>
        <!-- 装飾円リング -->
        <div class="deco-blob -top-40 -right-40 w-[600px] h-[600px] md:w-[800px] md:h-[800px]">
            <svg viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="400" cy="400" r="380" stroke="#fd780f" stroke-opacity="0.06" stroke-width="3" fill="none"/>
                <circle cx="400" cy="400" r="300" stroke="#fd780f" stroke-opacity="0.04" stroke-width="2" fill="none"/>
            </svg>
        </div>

        <div class="container max-w-4xl relative z-10">
            <div class="text-center">
                <span class="text-primary font-bold tracking-[0.2em] text-sm mb-8 block uppercase scroll-fade-up">
                    Our Mission
                </span>
                <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-12 leading-tight tracking-tight scroll-fade-up" data-delay="100">
                    法令遵守は<br>
                    <span class="text-primary">コスト</span>ではなく<br>
                    <span class="text-primary">投資</span>である。
                </h2>
                <p class="text-lg text-gray-700 leading-loose mb-8 font-medium scroll-fade-up" data-delay="200">
                    消防法・危険物関係法令は、事業を守るための重要なルールです。<br>
                    しかし、複雑な法令解釈や行政手続きは、<br>
                    時にビジネスのスピードを鈍らせる「壁」となりがちです。
                </p>
                <p class="text-lg text-gray-700 leading-loose font-medium scroll-fade-up" data-delay="300">
                    ADOR'Sは、その「壁」を取り払います。<br>
                    売り手側の事情を挟まず、不透明な見積もりを一掃。<br>
                    お客様の利益だけを追求できる独立した立場で、<br>
                    法令遵守を企業の信頼と利益を生む「強み」へと変えます。
                </p>
            </div>
        </div>
    </section>

    <!-- ADOR'Sが選ばれる理由 -->
    <section class="py-32 md:py-40 bg-gray-50 relative overflow-hidden">
        <!-- 装飾ブロブ: 左上の薄いオレンジ -->
        <div class="deco-blob -top-20 -left-20 w-[350px] h-[350px] md:w-[500px] md:h-[500px]">
            <svg viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="250" cy="250" r="250" fill="#fd780f" fill-opacity="0.04"/>
            </svg>
        </div>
        <div class="container relative z-10">
            <div class="text-center mb-20">
                <span class="text-primary font-bold tracking-[0.2em] text-sm mb-6 block uppercase scroll-fade-up">Why Choose Us</span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 tracking-tight scroll-fade-up" data-delay="100">
                    ADOR'Sが選ばれる理由
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-7xl mx-auto">
                <!-- Reason 01: 危険物消火に特化 -->
                <div class="bg-white p-12 border border-gray-200 hover:border-primary hover:shadow-lg transition-all duration-500 scroll-fade-up" data-delay="0">
                    <div class="text-primary text-6xl font-black mb-6">01</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-6 leading-relaxed">
                        「危険物消火」に特化した、<br>高度な専門知識
                    </h3>
                    <p class="text-sm text-gray-700 leading-loose mb-8">
                        工場・倉庫特有の「危険物」に関わる複雑な法規制と設備設計に精通。対象物（油類・電気・化学薬品等）に最適な消火設備をピンポイントで提案します。
                    </p>
                    <div class="border-t border-gray-200 pt-6 space-y-3">
                        <p class="text-xs text-gray-600 leading-relaxed">
                            <strong class="font-bold">対応領域:</strong> 消防法・危険物関係法令、市町村条例、各消防本部指導基準等
                        </p>
                        <p class="text-xs text-primary font-bold">
                            ✓ 法令遵守 + 過不足のない最適スペック
                        </p>
                    </div>
                </div>

                <!-- Reason 02: 適正価格へのコストカット -->
                <div class="bg-white p-12 border border-gray-200 hover:border-primary hover:shadow-lg transition-all duration-500 scroll-fade-up" data-delay="150">
                    <div class="text-primary text-6xl font-black mb-6">02</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-6 leading-relaxed">
                        「適正価格」への<br>コストカット
                    </h3>
                    <p class="text-sm text-gray-700 leading-loose mb-8">
                        取扱製品の制約なく、本当に必要な設備だけを提案。プロの視点で査定し、過剰なスペックを適正化して不透明な見積もりを一掃します。
                    </p>
                    <div class="border-t border-gray-200 pt-6 space-y-3">
                        <p class="text-xs text-gray-600 leading-relaxed">
                            <strong class="font-bold">提供価値:</strong> 設計・見積もりの透明化と過剰設備の排除
                        </p>
                        <p class="text-xs text-primary font-bold">
                            ✓ 工事費用の10%削減を目指した設計提案
                        </p>
                    </div>
                </div>

                <!-- Reason 03: 行政協議の対応・支援 -->
                <div class="bg-white p-12 border border-gray-200 hover:border-primary hover:shadow-lg transition-all duration-500 scroll-fade-up" data-delay="300">
                    <div class="text-primary text-6xl font-black mb-6">03</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-6 leading-relaxed">
                        行政協議の対応・支援で、<br>手直しとトラブルを「ゼロ」に
                    </h3>
                    <p class="text-sm text-gray-700 leading-loose mb-8">
                        所轄消防署の「ローカルルール」を熟知。消防OBによる事前協議や折衝を支援することで、「検査に通らない」「是正工事」といったリスクを未然に防ぎます。
                    </p>
                    <div class="border-t border-gray-200 pt-6 space-y-3">
                        <p class="text-xs text-gray-600 leading-relaxed">
                            <strong class="font-bold">対象:</strong> 建築会社様、設計事務所様の手間とリスクをカット
                        </p>
                        <p class="text-xs text-primary font-bold">
                            ✓ スムーズな着工・引き渡し、確実な法令遵守
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ターゲット別課題解決 -->
    <section class="py-32 md:py-48 bg-white relative overflow-hidden">
        <!-- 斜めカット背景装飾 -->
        <div class="absolute inset-0 z-0" style="clip-path: polygon(0 5%, 100% 0, 100% 95%, 0 100%);">
            <div class="absolute inset-0 bg-primary/[0.03]"></div>
        </div>
        <!-- 装飾ブロブ: 右側の大きな薄いオレンジ円 -->
        <div class="deco-blob top-1/4 -right-32 w-[400px] h-[400px] md:w-[600px] md:h-[600px] deco-blob-animate">
            <svg viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="300" cy="300" r="300" fill="#fd780f" fill-opacity="0.05"/>
            </svg>
        </div>
        <div class="container relative z-10">
            <div class="text-center mb-24">
                <span class="text-primary font-bold tracking-[0.2em] text-sm mb-6 block uppercase scroll-fade-up">Solutions for You</span>
                <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 tracking-tight scroll-fade-up" data-delay="100">
                    あなたの「困った」を解決
                </h2>
                <p class="text-lg text-gray-500 font-medium tracking-wide scroll-fade-up" data-delay="200">
                    事業主・建設会社・設計事務所、それぞれが抱える<br class="md:hidden">具体的な課題に専門家が対応します。
                </p>
            </div>

            <div class="space-y-16 max-w-5xl mx-auto">
                <!-- 事業主様 -->
                <div class="group relative bg-white border-t border-gray-200 rounded-lg pt-16 hover:shadow-lg transition-all duration-500 p-8 md:p-12 scroll-fade-up" data-delay="0">
                    <div class="flex flex-col md:flex-row gap-12 md:gap-24">
                        <div class="flex-shrink-0">
                            <span class="text-6xl font-black text-gray-100 group-hover:text-primary transition-colors duration-500">01</span>
                            <h3 class="text-2xl font-bold text-gray-900 mt-4 tracking-tight">事業主様</h3>
                            <p class="text-sm text-gray-500 mt-2">工場・化学プラント・倉庫等</p>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-gray-900 mb-6 leading-tight">
                                担当者が退職等で<br>ノウハウが消えた...
                            </h4>
                            <p class="text-gray-600 mb-8 text-lg leading-loose">
                                「消防法が分からない」「設備業者の見積もりが適正かわからない」「担当者の退職等でノウハウが消える」―そんなお悩みありませんか？
                            </p>
                            
                            <div class="pl-6 border-l-2 border-primary mb-10">
                                <p class="text-gray-900 font-bold mb-2">✓ 専門家による一貫サポートで法令遵守を継続</p>
                                <p class="text-gray-700 leading-relaxed text-sm">
                                    計画段階で概算費用を把握し、検討をスムーズに。提出された見積書をプロの目で査定し、過剰なスペックを適正化してコスト削減も実現します。
                                </p>
                            </div>

                            <a href="<?php echo esc_url(home_url('/service')); ?>" class="inline-flex items-center text-primary font-bold tracking-widest text-sm hover:opacity-70 transition-opacity uppercase">
                                View More
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 建設会社様 -->
                <div class="group relative bg-white border-t border-gray-200 rounded-lg pt-16 hover:shadow-lg transition-all duration-500 p-8 md:p-12 scroll-fade-up" data-delay="150">
                    <div class="flex flex-col md:flex-row gap-12 md:gap-24">
                        <div class="flex-shrink-0">
                            <span class="text-6xl font-black text-gray-100 group-hover:text-primary transition-colors duration-500">02</span>
                            <h3 class="text-2xl font-bold text-gray-900 mt-4 tracking-tight">建設会社様</h3>
                            <p class="text-sm text-gray-500 mt-2">危険物施設等の建設プロジェクト</p>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-gray-900 mb-6 leading-tight">
                                施工後に消防と行き違いが...<br>手直しが発生
                            </h4>
                            <p class="text-gray-600 mb-8 text-lg leading-loose">
                                「消防設備の知識がない」「施工後に消防と行き違いが起きる」「手直しが発生し損失が出る」―そんなリスクを抱えていませんか？
                            </p>
                            
                            <div class="pl-6 border-l-2 border-primary mb-10">
                                <p class="text-gray-900 font-bold mb-2">✓ 消防交渉・調整の支援でリスクを回避</p>
                                <p class="text-gray-700 leading-relaxed text-sm">
                                    詳細な契約内容で責任分担を明確化。施工監理・コスト管理の観点から、工事の計画通りの進行を支援します。
                                </p>
                            </div>

                            <a href="<?php echo esc_url(home_url('/service')); ?>" class="inline-flex items-center text-primary font-bold tracking-widest text-sm hover:opacity-70 transition-opacity uppercase">
                                View More
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 設計事務所様 -->
                <div class="group relative bg-white border-t border-gray-200 rounded-lg pt-16 hover:shadow-lg transition-all duration-500 p-8 md:p-12 scroll-fade-up" data-delay="300">
                    <div class="flex flex-col md:flex-row gap-12 md:gap-24">
                        <div class="flex-shrink-0">
                            <span class="text-6xl font-black text-gray-100 group-hover:text-primary transition-colors duration-500">03</span>
                            <h3 class="text-2xl font-bold text-gray-900 mt-4 tracking-tight">設計事務所様</h3>
                            <p class="text-sm text-gray-500 mt-2">建築士・大手設計事務所</p>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-gray-900 mb-6 leading-tight">
                                法令精査に時間がかかる...<br>設計漏れが不安
                            </h4>
                            <p class="text-gray-600 mb-8 text-lg leading-loose">
                                「消防法・危険物関係法令の精査に時間がかかる」「設計漏れ（見落とし）のリスク」「各消防本部指導基準等の違い」―そんな課題ありませんか？
                            </p>
                            
                            <div class="pl-6 border-l-2 border-primary mb-10">
                                <p class="text-gray-900 font-bold mb-2">✓ 確認申請前の事前相談で設計時間を大幅カット</p>
                                <p class="text-gray-700 leading-relaxed text-sm">
                                    法令遵守確認で設計ミスを防ぎ、各消防本部指導基準等の違いにも対応。設計時間を短縮して、設計業務に集中できます。
                                </p>
                            </div>

                            <a href="<?php echo esc_url(home_url('/service')); ?>" class="inline-flex items-center text-primary font-bold tracking-widest text-sm hover:opacity-70 transition-opacity uppercase">
                                View More
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- サービス一覧 -->
    <section class="py-32 md:py-48 bg-gray-50 relative overflow-hidden">
        <!-- セクション上部の波形区切り -->
        <div class="section-wave-top">
            <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="height: 40px;">
                <path fill="#fd780f" fill-opacity="0.1" d="M0,30L80,26C160,22,320,14,480,18C640,22,800,38,960,42C1120,46,1280,38,1360,34L1440,30L1440,0L0,0Z"></path>
            </svg>
        </div>
        <div class="container">
            <div class="flex flex-col md:flex-row items-end justify-between mb-24">
                <div>
                    <span class="text-primary font-bold tracking-[0.2em] text-sm mb-6 block uppercase scroll-fade-up">Our Service</span>
                    <h2 class="text-4xl md:text-6xl font-black text-gray-900 tracking-tight scroll-fade-up" data-delay="100">
                        事業内容
                    </h2>
                </div>
                <a href="<?php echo esc_url(home_url('/service')); ?>" class="hidden md:inline-flex items-center text-gray-900 font-bold tracking-widest text-sm hover:text-primary transition-colors uppercase border-b border-gray-900 hover:border-primary pb-1">
                    View All Services
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 消防法コンサルティング -->
                <a href="<?php echo esc_url(home_url('/service#fire-consulting')); ?>" class="group block bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500 scroll-fade-up" data-delay="0">
                    <svg class="w-12 h-12 mb-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">消防法コンサルティング</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4">現状対応は適切か、無駄はないかを専門的視点から整理し、助言・提案します</p>
                    <div class="flex items-center text-sm font-bold text-primary uppercase tracking-wider">
                        Learn More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

                <!-- 危険物施設コンサルティング -->
                <a href="<?php echo esc_url(home_url('/service#hazardous-consulting')); ?>" class="group block bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500 scroll-fade-up" data-delay="150">
                    <svg class="w-12 h-12 mb-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">危険物施設コンサルティング</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4">危険物施設の現行対応を整理・分析し、法令適合性・運用・将来リスクの観点から支援</p>
                    <div class="flex items-center text-sm font-bold text-primary uppercase tracking-wider">
                        Learn More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

                <!-- 消防協議支援 -->
                <a href="<?php echo esc_url(home_url('/service#fire-consultation')); ?>" class="group block bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500 scroll-fade-up" data-delay="300">
                    <svg class="w-12 h-12 mb-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">消防協議支援</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4">消防署との協議に際し、関係法令に基づく論点整理および説明支援を行います</p>
                    <div class="flex items-center text-sm font-bold text-primary uppercase tracking-wider">
                        Learn More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

                <!-- 消防関係書類作成支援 -->
                <a href="<?php echo esc_url(home_url('/service#document-support')); ?>" class="group block bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500 scroll-fade-up" data-delay="450">
                    <svg class="w-12 h-12 mb-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">消防関係書類作成支援</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4">消防関係の各種書類について、記載漏れや現状との整合を確認し助言します</p>
                    <div class="flex items-center text-sm font-bold text-primary uppercase tracking-wider">
                        Learn More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

                <?php /* スマメアプリ — リリース後にコメントを外して表示
                <!-- 日常点検アプリ「スマメ」 -->
                <a href="<?php echo esc_url(home_url('/service#sumame')); ?>" class="group block bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500">
                    <svg class="w-12 h-12 mb-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">日常点検アプリ「スマメ」</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4">スマホで撮影するだけで点検完了。点検漏れ・ミスを防ぎ、教育コストを削減</p>
                    <div class="inline-block bg-primary/10 text-primary text-xs font-bold px-3 py-1 mb-4">NEW TOOL</div>
                    <div class="flex items-center text-sm font-bold text-primary uppercase tracking-wider">
                        Learn More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>
                */ ?>
            </div>
            
            <div class="text-center mt-16 md:hidden">
                <a href="<?php echo esc_url(home_url('/service')); ?>" class="inline-flex items-center text-gray-900 font-bold tracking-widest text-sm hover:text-primary transition-colors uppercase border-b border-gray-900 hover:border-primary pb-1">
                    View All Services
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 解決事例 -->
    <?php
    $works = new WP_Query(array(
        'post_type'      => 'works',
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ));

    if ($works->have_posts()) :
    ?>
    <section class="py-32 md:py-48 bg-white border-b border-gray-100">
        <div class="container">
            <div class="flex flex-col md:flex-row items-end justify-between mb-24">
                <div>
                    <span class="text-primary font-bold tracking-[0.2em] text-sm mb-6 block uppercase">Case Study</span>
                    <h2 class="text-4xl md:text-6xl font-black text-gray-900 tracking-tight">
                        解決事例
                    </h2>
                </div>
                <a href="<?php echo esc_url(home_url('/works')); ?>" class="hidden md:inline-flex items-center text-gray-900 font-bold tracking-widest text-sm hover:text-primary transition-colors uppercase border-b border-gray-900 hover:border-primary pb-1">
                    View All Cases
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-12">
                <?php while ($works->have_posts()) : $works->the_post(); ?>
                <article class="group">
                    <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden mb-8 relative aspect-[4/3]">
                        <div class="absolute inset-0 bg-gray-900/0 group-hover:bg-gray-900/10 transition-colors duration-500 z-10"></div>
                        <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-105')); ?>
                    </a>
                    <?php else : ?>
                    <div class="w-full aspect-[4/3] bg-gray-100 flex items-center justify-center mb-8">
                        <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <?php endif; ?>
                    
                    <div>
                        <time class="text-xs font-bold text-gray-400 mb-3 block tracking-widest uppercase">
                            <?php echo get_the_date('Y.m.d'); ?>
                        </time>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 leading-tight group-hover:text-primary transition-colors duration-300">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="w-8 h-px bg-gray-300 group-hover:w-full group-hover:bg-primary transition-all duration-500"></div>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>
            
            <div class="text-center mt-16 md:hidden">
                <a href="<?php echo esc_url(home_url('/works')); ?>" class="inline-flex items-center text-gray-900 font-bold tracking-widest text-sm hover:text-primary transition-colors uppercase border-b border-gray-900 hover:border-primary pb-1">
                    View All Cases
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>
    <?php
    wp_reset_postdata();
    endif;
    ?>

    <!-- お知らせ -->
    <?php
    $recent_posts = new WP_Query(array(
        'post_type'      => 'news',
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ));

    if ($recent_posts->have_posts()) :
    ?>
    <section class="py-32 md:py-48 bg-gray-50">
        <div class="container max-w-5xl">
            <div class="flex flex-col md:flex-row items-end justify-between mb-24">
                <div>
                    <span class="text-primary font-bold tracking-[0.2em] text-sm mb-6 block uppercase">Information</span>
                    <h2 class="text-4xl md:text-6xl font-black text-gray-900 tracking-tight">
                        お知らせ
                    </h2>
                </div>
                <a href="<?php echo esc_url(home_url('/news')); ?>" class="hidden md:inline-flex items-center text-gray-900 font-bold tracking-widest text-sm hover:text-primary transition-colors uppercase border-b border-gray-900 hover:border-primary pb-1">
                    View All News
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="space-y-8">
                <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                <article class="group bg-white p-8 md:p-10 hover:shadow-xl transition-shadow duration-500 border border-gray-100">
                    <a href="<?php the_permalink(); ?>" class="flex flex-col md:flex-row md:items-center gap-6 md:gap-12">
                        <time class="text-sm font-bold text-gray-400 whitespace-nowrap tracking-widest uppercase group-hover:text-primary transition-colors">
                            <?php echo get_the_date('Y.m.d'); ?>
                        </time>
                        <h3 class="text-xl font-bold text-gray-900 flex-1 leading-relaxed group-hover:text-gray-600 transition-colors">
                            <?php the_title(); ?>
                        </h3>
                        <div class="hidden md:block">
                            <span class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 group-hover:bg-primary group-hover:border-primary group-hover:text-white transition-all duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </span>
                        </div>
                    </a>
                </article>
                <?php endwhile; ?>
            </div>
            
            <div class="text-center mt-16 md:hidden">
                <a href="<?php echo esc_url(home_url('/news')); ?>" class="inline-flex items-center text-gray-900 font-bold tracking-widest text-sm hover:text-primary transition-colors uppercase border-b border-gray-900 hover:border-primary pb-1">
                    View All News
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>
    <?php
    wp_reset_postdata();
    endif;
    ?>

    <!-- CTA Section -->
    <section class="py-32 md:py-48 bg-primary text-white relative overflow-hidden">
        <!-- CTA上部の波形区切り -->
        <div class="section-wave-top">
            <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="height: 50px;">
                <path fill="white" d="M0,30L80,34C160,38,320,46,480,42C640,38,800,22,960,18C1120,14,1280,22,1360,26L1440,30L1440,0L0,0Z"></path>
            </svg>
        </div>
        <div class="container">
            <div class="max-w-4xl mx-auto text-center">
                <span class="text-white/90 font-bold tracking-[0.2em] text-sm mb-8 block uppercase scroll-fade-up">Contact Us</span>
                <h2 class="text-4xl md:text-6xl font-black mb-12 leading-tight tracking-tight scroll-fade-up" data-delay="100">
                    貴社のお悩みに寄り添う<br>ご提案をいたします。
                </h2>
                <p class="text-lg md:text-xl text-white/90 mb-16 leading-loose font-medium max-w-2xl mx-auto">
                    消防法・危険物関係法令に関するお悩みやご質問、<br class="hidden md:inline">
                    まずはセカンドオピニオンとしてお気軽にご相談ください。
                </p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="group inline-flex items-center justify-center px-16 py-6 bg-white text-primary font-bold text-lg rounded-sm hover:bg-gray-100 transition-all duration-500">
                    <span>セカンドオピニオンを相談する</span>
                    <svg class="w-4 h-4 ml-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
