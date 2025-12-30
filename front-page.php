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
    <section class="hero relative bg-white py-40 md:py-64 overflow-hidden border-b border-gray-100">
        <div class="absolute inset-0 opacity-[0.03]">
            <div class="absolute inset-0" style="background-image: linear-gradient(#000 1px, transparent 1px), linear-gradient(90deg, #000 1px, transparent 1px); background-size: 100px 100px;"></div>
        </div>
        <div class="container relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- メインキャッチコピー -->
                <div class="text-center mb-12 md:mb-16">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-gray-900 mb-8 leading-tight tracking-tight">
                        事故ゼロと、<br><span class="text-primary">無駄ゼロ</span>へ。
                    </h1>
                </div>
                
                <!-- サブコピー -->
                <div class="text-center mb-16 md:mb-20 max-w-4xl mx-auto">
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                        安全のために、余分なお金を払う必要はありません。<br>
                        メーカー見積もりの「過剰なスペック」をプロの目で適正化し、<br>
                        <strong class="text-primary font-black">最小限のコストで、最大限の実効性</strong>を設計します。
                    </p>
                </div>
                
                <!-- 3つの特徴ボックス -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 mb-16">
                    <!-- 左：コスト -->
                    <div class="bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500">
                        <div class="flex items-center mb-6">
                            <svg class="w-12 h-12 text-primary mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                            <h3 class="text-lg font-black text-primary uppercase tracking-tight">コスト</h3>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4 leading-tight">
                            メーカー見積もりの<br>
                            <span class="text-primary">「適正化」</span>
                        </h4>
                        <p class="text-gray-600 leading-relaxed">
                            言われるがままの過剰な設備投資をカット。セカンドオピニオンとして、コストの無駄を省きます。
                        </p>
                    </div>
                    
                    <!-- 中央：安全 -->
                    <div class="bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500">
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
                            法令順守はあくまで最低ライン。「法的にOK」なだけでなく、万が一の時に本当に命と会社を守る対策を。
                        </p>
                    </div>
                    
                    <!-- 右：手間 -->
                    <div class="bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500">
                        <div class="flex items-center mb-6">
                            <svg class="w-12 h-12 text-primary mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="text-lg font-black text-primary uppercase tracking-tight">手間</h3>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4 leading-tight">
                            行政協議の<br>
                            <span class="text-primary">「完全代行」</span>
                        </h4>
                        <p class="text-gray-600 leading-relaxed">
                            複雑な消防署との協議や手続きをすべて代行。設計・施工後のトラブルを未然に防ぎ、スムーズな進行を実現します。
                        </p>
                    </div>
                </div>
                
                <!-- CTAボタン -->
                <div class="flex flex-col sm:flex-row gap-8 justify-center">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="group inline-flex items-center justify-center px-12 py-5 bg-primary text-white font-bold text-lg rounded-sm hover:bg-primary/90 transition-all duration-500">
                        <span>お問い合わせ</span>
                        <svg class="w-4 h-4 ml-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/service')); ?>" class="group inline-flex items-center justify-center px-12 py-5 bg-transparent text-gray-900 font-bold text-lg rounded-sm border border-gray-300 hover:border-primary hover:text-primary transition-all duration-500">
                        <span>サービスを見る</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ミッション・価値 -->
    <section class="py-32 md:py-48 bg-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.02] pointer-events-none">
             <div class="absolute -top-40 -right-40 w-[800px] h-[800px] rounded-full border border-gray-900"></div>
             <div class="absolute -top-20 -right-20 w-[600px] h-[600px] rounded-full border border-gray-900"></div>
        </div>

        <div class="container max-w-4xl relative z-10">
            <div class="text-center">
                <span class="text-primary font-bold tracking-[0.2em] text-sm mb-8 block uppercase">
                    Our Mission
                </span>
                <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-12 leading-tight tracking-tight">
                    法令遵守は<br>
                    <span class="text-primary">コスト</span>ではなく<br>
                    <span class="text-primary">投資</span>である。
                </h2>
                <p class="text-lg text-gray-700 leading-loose mb-8 font-medium">
                    消防法・危険物法は、事業を守るための重要なルールです。<br>
                    しかし、複雑な法令解釈や行政手続きは、<br>
                    時にビジネスのスピードを鈍らせる「壁」となりがちです。
                </p>
                <p class="text-lg text-gray-700 leading-loose font-medium">
                    ADOR'Sは、その「壁」を取り払います。<br>
                    専門的知見に基づく最適な設備選定と法令解釈で、<br>
                    無駄なコストを削減し、設計・運用の自由度を最大化。<br>
                    法令遵守を、企業の信頼と利益を生む「強み」へと変えます。
                </p>
            </div>
        </div>
    </section>

    <!-- ADOR'Sが選ばれる理由 -->
    <section class="py-32 md:py-40 bg-gray-50">
        <div class="container">
            <div class="text-center mb-20">
                <span class="text-primary font-bold tracking-[0.2em] text-sm mb-6 block uppercase">Why Choose Us</span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 tracking-tight">
                    ADOR'Sが選ばれる理由
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-7xl mx-auto">
                <!-- Reason 01: 危険物消火に特化 -->
                <div class="bg-white p-12 border border-gray-200 hover:border-primary hover:shadow-lg transition-all duration-500">
                    <div class="text-primary text-6xl font-black mb-6">01</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-6 leading-relaxed">
                        「危険物消火」に特化した、<br>高度な専門知識
                    </h3>
                    <p class="text-sm text-gray-700 leading-loose mb-8">
                        工場・倉庫特有の「危険物」に関わる複雑な法規制と設備選定に精通。対象物（油類・電気・化学薬品等）に最適な消火設備をピンポイントで提案します。
                    </p>
                    <div class="border-t border-gray-200 pt-6 space-y-3">
                        <p class="text-xs text-gray-600 leading-relaxed">
                            <strong class="font-bold">対応領域:</strong> 泡消火、不活性ガス（アルゴナイト）、粉末消火など特殊設備
                        </p>
                        <p class="text-xs text-primary font-bold">
                            ✓ 法令遵守 + 過不足のない最適スペック
                        </p>
                    </div>
                </div>

                <!-- Reason 02: メーカー非依存のコストカット -->
                <div class="bg-white p-12 border border-gray-200 hover:border-primary hover:shadow-lg transition-all duration-500">
                    <div class="text-primary text-6xl font-black mb-6">02</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-6 leading-relaxed">
                        メーカー主導ではない、<br>「適正価格」へのコストカット
                    </h3>
                    <p class="text-sm text-gray-700 leading-loose mb-8">
                        中立的な立場からコストを管理。メーカー見積もりをプロの視点で査定し、より安価で確実な代替案を提示。建設コストを大幅削減します。
                    </p>
                    <div class="border-t border-gray-200 pt-6 space-y-3">
                        <p class="text-xs text-gray-600 leading-relaxed">
                            <strong class="font-bold">提供価値:</strong> 設計・見積もりの透明化と無駄の排除
                        </p>
                        <p class="text-xs text-primary font-bold">
                            ✓ 工事費用の10%削減を目指した設計提案
                        </p>
                    </div>
                </div>

                <!-- Reason 03: 行政協議の完全代行 -->
                <div class="bg-white p-12 border border-gray-200 hover:border-primary hover:shadow-lg transition-all duration-500">
                    <div class="text-primary text-6xl font-black mb-6">03</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-6 leading-relaxed">
                        行政協議の完全代行で、<br>手戻りとトラブルを「ゼロ」に
                    </h3>
                    <p class="text-sm text-gray-700 leading-loose mb-8">
                        所轄消防署の「ローカルルール」を熟知。事前協議や折衝を代行することで、「検査に通らない」「是正工事」といったリスクを未然に防ぎます。
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
    <section class="py-32 md:py-48 bg-white">
        <div class="container">
            <div class="text-center mb-24">
                <span class="text-primary font-bold tracking-[0.2em] text-sm mb-6 block uppercase">Solutions for You</span>
                <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-8 tracking-tight">
                    あなたの「困った」を解決
                </h2>
                <p class="text-lg text-gray-500 font-medium tracking-wide">
                    工場・建設会社・設計事務所、それぞれが抱える<br class="md:hidden">具体的な課題に専門家が対応します。
                </p>
            </div>

            <div class="space-y-16 max-w-5xl mx-auto">
                <!-- 事業主様 -->
                <div class="group relative bg-white border-t border-gray-100 pt-16 hover:bg-gray-50 transition-colors duration-500 p-8 md:p-12">
                    <div class="flex flex-col md:flex-row gap-12 md:gap-24">
                        <div class="flex-shrink-0">
                            <span class="text-6xl font-black text-gray-100 group-hover:text-primary transition-colors duration-500">01</span>
                            <h3 class="text-2xl font-bold text-gray-900 mt-4 tracking-tight">事業主様</h3>
                            <p class="text-sm text-gray-500 mt-2">工場・化学プラント・倉庫等</p>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-gray-900 mb-6 leading-tight">
                                担当者が異動して<br>ノウハウが消えた...
                            </h4>
                            <p class="text-gray-600 mb-8 text-lg leading-loose">
                                「消防法が難解で何が必要か分からない」「メーカーの言い値が高いと感じる」「担当者の異動でノウハウが消える」―そんなお悩みありませんか？
                            </p>
                            
                            <div class="pl-6 border-l-2 border-primary mb-10">
                                <p class="text-gray-900 font-bold mb-2">✓ 専門家による一貫サポートで法令遵守を継続</p>
                                <p class="text-gray-700 leading-relaxed text-sm">
                                    計画段階で概算費用を把握し、検討をスムーズに。メーカー見積もりを査定してコスト削減も実現します。
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
                <div class="group relative bg-white border-t border-gray-100 pt-16 hover:bg-gray-50 transition-colors duration-500 p-8 md:p-12">
                    <div class="flex flex-col md:flex-row gap-12 md:gap-24">
                        <div class="flex-shrink-0">
                            <span class="text-6xl font-black text-gray-100 group-hover:text-primary transition-colors duration-500">02</span>
                            <h3 class="text-2xl font-bold text-gray-900 mt-4 tracking-tight">建設会社様</h3>
                            <p class="text-sm text-gray-500 mt-2">危険物施設の建設プロジェクト</p>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-gray-900 mb-6 leading-tight">
                                施工後に消防と行き違いが...<br>手戻りが発生
                            </h4>
                            <p class="text-gray-600 mb-8 text-lg leading-loose">
                                「危険物消火設備の選定知識がない」「施工後に消防と行き違いが起きる」「手戻りが発生し損失が出る」―そんなリスクを抱えていませんか？
                            </p>
                            
                            <div class="pl-6 border-l-2 border-primary mb-10">
                                <p class="text-gray-900 font-bold mb-2">✓ 消防交渉・調整を代行しリスクを完全回避</p>
                                <p class="text-gray-700 leading-relaxed text-sm">
                                    詳細な契約内容で責任分担を明確化。手戻りゼロを実現し、工事を計画通りに進行させます。
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
                <div class="group relative bg-white border-t border-gray-100 pt-16 hover:bg-gray-50 transition-colors duration-500 p-8 md:p-12">
                    <div class="flex flex-col md:flex-row gap-12 md:gap-24">
                        <div class="flex-shrink-0">
                            <span class="text-6xl font-black text-gray-100 group-hover:text-primary transition-colors duration-500">03</span>
                            <h3 class="text-2xl font-bold text-gray-900 mt-4 tracking-tight">設計事務所様</h3>
                            <p class="text-sm text-gray-500 mt-2">建築士・大手設計事務所</p>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-gray-900 mb-6 leading-tight">
                                法令調査に時間がかかる...<br>設計漏れが不安
                            </h4>
                            <p class="text-gray-600 mb-8 text-lg leading-loose">
                                「消防法・危険物法の調査に時間がかかる」「設計漏れ（見落とし）のリスク」「所轄消防署ごとの判断基準の違い」―そんな課題ありませんか？
                            </p>
                            
                            <div class="pl-6 border-l-2 border-primary mb-10">
                                <p class="text-gray-900 font-bold mb-2">✓ 確認申請前の事前相談で調査時間を大幅カット</p>
                                <p class="text-gray-700 leading-relaxed text-sm">
                                    法令遵守確認で設計ミスを防ぎ、所轄消防署ごとの判断基準の違いにも対応。調査時間を短縮して、設計業務に集中できます。
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
    <section class="py-32 md:py-48 bg-gray-50 border-b border-gray-100">
        <div class="container">
            <div class="flex flex-col md:flex-row items-end justify-between mb-24">
                <div>
                    <span class="text-primary font-bold tracking-[0.2em] text-sm mb-6 block uppercase">Our Service</span>
                    <h2 class="text-4xl md:text-6xl font-black text-gray-900 tracking-tight">
                        事業内容
                    </h2>
                </div>
                <a href="<?php echo esc_url(home_url('/service')); ?>" class="hidden md:inline-flex items-center text-gray-900 font-bold tracking-widest text-sm hover:text-primary transition-colors uppercase border-b border-gray-900 hover:border-primary pb-1">
                    View All Services
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 消防設備設置基準の提案 -->
                <a href="<?php echo esc_url(home_url('/service#fire-prevention')); ?>" class="group block bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500">
                    <svg class="w-12 h-12 mb-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">消防設備設置基準の提案</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4">自動火災報知設備、誘導灯、消火栓、防火水槽、動力消防ポンプ等の法令設置基準を提案</p>
                    <div class="flex items-center text-sm font-bold text-primary uppercase tracking-wider">
                        Learn More 
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

                <!-- 危険物消火設備の選定（特化領域） -->
                <a href="<?php echo esc_url(home_url('/service#hazardous-materials')); ?>" class="group block bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500">
                    <svg class="w-12 h-12 mb-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">危険物消火設備の選定</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4">泡消火（油類）・アルゴナイト（電気室）・粉末BC（ナトリウム等）の専門的な選定</p>
                    <div class="inline-block bg-primary/10 text-primary text-xs font-bold px-3 py-1 mb-4">特化領域</div>
                    <div class="flex items-center text-sm font-bold text-primary uppercase tracking-wider">
                        Learn More 
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

                <!-- コストマネジメント -->
                <a href="<?php echo esc_url(home_url('/service#cost')); ?>" class="group block bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500">
                    <svg class="w-12 h-12 mb-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">コストマネジメント</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4">メーカー見積もりの査定・より安価な消火設備の提案で工事費の10%削減を目指す</p>
                    <div class="flex items-center text-sm font-bold text-primary uppercase tracking-wider">
                        Learn More 
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

                <!-- 運用・点検サポート -->
                <a href="<?php echo esc_url(home_url('/service#operation')); ?>" class="group block bg-white border-2 border-gray-100 p-8 hover:border-primary transition-all duration-500">
                    <svg class="w-12 h-12 mb-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">運用・点検サポート</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4">既存点検業者の法令遵守確認（セカンドオピニオン）、防火・防災管理者へのアドバイス</p>
                    <div class="flex items-center text-sm font-bold text-primary uppercase tracking-wider">
                        Learn More 
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

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
    <section class="py-32 md:py-48 bg-white">
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
    <section class="py-32 md:py-48 bg-primary text-white">
        <div class="container">
            <div class="max-w-4xl mx-auto text-center">
                <span class="text-white/90 font-bold tracking-[0.2em] text-sm mb-8 block uppercase">Contact Us</span>
                <h2 class="text-4xl md:text-6xl font-black mb-12 leading-tight tracking-tight">
                    貴社のお悩みに寄り添う<br>ご提案をいたします。
                </h2>
                <p class="text-lg md:text-xl text-white/90 mb-16 leading-loose font-medium max-w-2xl mx-auto">
                    消防法・危険物法に関するお悩みやご質問、<br class="hidden md:inline">
                    プロジェクトのご相談など、何でもお問い合わせください。
                </p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="group inline-flex items-center justify-center px-16 py-6 bg-white text-primary font-bold text-lg rounded-sm hover:bg-gray-100 transition-all duration-500">
                    <span>お問い合わせ</span>
                    <svg class="w-4 h-4 ml-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
