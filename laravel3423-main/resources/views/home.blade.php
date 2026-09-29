<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0d0e13">
    <meta name="description" content="NEXUS — игровые новости, обзоры и аналитика индустрии.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>NEXUS — медиа об играх</title>
</head>
<body>
    <div class="trendbar">
        <div class="page-wrap trendbar__inner">
            <p><span class="trendbar__label">В тренде</span><a href="#">GTA VI</a><span>·</span><a href="#">Cyberpunk Orion</a><span>·</span><a href="#">RTX 5090</a><span>·</span><a href="#">The Witcher 4</a><span>·</span><a href="#">Steam Spring Sale</a></p>
            <p class="server-status"><span></span> Серверы: онлайн <i></i> v4.8 Cyber Core</p>
        </div>
    </div>

    <header class="site-header">
        <div class="page-wrap nav-row">
            <a class="brand" href="#top" aria-label="NEXUS — главная"><span class="brand__mark">N</span><span>NEXUS</span></a>
            <nav class="primary-nav" aria-label="Основная навигация">
                <a class="is-active" href="#top">Главная</a>
                <a href="#articles">Статьи и лонгриды</a>
                <a href="#articles">Обзоры</a>
                <a href="#articles">Гайды</a>
                <a href="#articles">Железо</a>
                <a href="#articles">Турниры</a>
            </nav>
            <div class="nav-platforms" aria-label="Платформы"><span>PC</span><span>PS5</span><span>XBOX</span><span>SWITCH</span></div>
            <a class="search-box" href="#articles"><span class="search-box__icon"></span><span>Поиск игр, новостей, обзоров...</span></a>
            <button class="icon-button notification-button" type="button" aria-label="Уведомления"><span class="bell-icon"></span><i></i></button>
        </div>
    </header>

    <main id="top">
        <section class="hero-section page-wrap" aria-labelledby="hero-title">
            <div class="hero-story">
                <div class="hero-art art-placeholder"></div>
                <div class="hero-content">
                    <div class="eyebrow-row"><span class="badge badge--violet">В фокусе</span><span class="platform-line">PC · PS5 · Xbox Series X|S</span><span class="meta-pill">12 мин чтения</span><span class="badge badge--amber">Авторский лонгрид</span></div>
                    <h1 id="hero-title">Главный эксклюзив года: почему следующий проект авторов «Ведьмака» изменит жанр RPG навсегда</h1>
                    <p class="hero-description">Первые подробности о революционной боевой системе, бесшовной симуляции открытого мира на движке нового поколения и бескомпромиссной свободе выбора в сюжетных разветвлениях.</p>
                    <div class="hero-bottom">
                        <div class="author author--hero"><span class="avatar avatar--blue">АС</span><span><strong>Алексей Соколов</strong><small>Главный редактор <b>·</b> 28 минут назад <b>·</b> 2.4k просмотров</small></span></div>
                        <div class="hero-actions"><a class="button button--primary" href="#articles">Читать лонгрид <span aria-hidden="true">→</span></a><button class="icon-button" type="button" aria-label="Сохранить статью">⌑</button><button class="icon-button" type="button" aria-label="Поделиться статьёй">↗</button></div>
                    </div>
                </div>
            </div>
            <div class="featured-grid">
                <article class="feature-card">
                    <div class="feature-card__art art-placeholder"><span class="score-badge">8.8</span></div>
                    <div class="feature-card__body"><span class="category category--cyan">Железо · Тест-драйв</span><h2>Тест NVIDIA GeForce RTX 5080 в 4K: революция трассировки или маркетинговый трюк?</h2><p>Замерили фреймрейт в 14 играх, протестировали DLSS 4 с генерацией кадров на ультрах и...</p><div class="card-meta"><span>Максим Ильин</span><span>◷ 14 мин</span></div></div>
                </article>
                <article class="feature-card">
                    <div class="feature-card__art art-placeholder"></div>
                    <div class="feature-card__body"><span class="category category--amber">Гайды и лор</span><h2>Разбор лора: скрытый финал в дополнении для Elden Ring, который пропустили 90% игроков</h2><p>Деконструкция тайной цепочки квестов, зашифрованных описаний артефактов и истинной...</p><div class="card-meta"><span>Елена Власова</span><span>◷ 8 мин</span></div></div>
                </article>
                <article class="feature-card">
                    <div class="feature-card__art art-placeholder"></div>
                    <div class="feature-card__body"><span class="category category--rose">Аналитика · Индустрия</span><h2>Индустрия в кризисе: как бюджеты свыше $250 млн уничтожают классические AAA-игры</h2><p>Анонимные инсайды от ветеранов крупных студий: почему раздутый цикл разработки губит смелые...</p><div class="card-meta"><span>Дмитрий Волков</span><span>◷ 15 мин</span></div></div>
                </article>
            </div>
        </section>

        <section class="content-section page-wrap" id="articles" aria-label="Материалы и подборки">
            <div class="article-column">
                <div class="filter-bar" role="tablist" aria-label="Категории материалов"><a class="filter-tab is-active" href="#articles">Все материалы</a><a class="filter-tab" href="#articles">Обзоры редакции</a><a class="filter-tab" href="#articles">Аналитика</a><a class="filter-tab" href="#articles">Гайды и билды</a><a class="filter-tab" href="#articles">Интервью</a><a class="filter-tab" href="#articles">Мнения</a><button class="filter-more" type="button" aria-label="Другие категории">···</button></div>

                <article class="article-card">
                    <div class="article-card__art art-placeholder"><span class="score-badge">8.5 <small>отлично</small></span></div>
                    <div class="article-card__body"><div class="article-kicker"><span class="tag tag--cyan">PC</span><span class="tag tag--violet">PS5</span><span>·</span><span>Рецензия</span></div><h2>Обзор Dragon Age: The Veilguard — красочное фэнтези, застрявшее между эпохами</h2><p>Великолепный визуальный стиль, драйвовая динамическая боёвка и яркие локации сталкиваются с беззубыми диалогами и...</p><div class="tag-row"><span>◎ Бодрая боёвка</span><span>◎ Оптимизация на ПК</span><span class="tag-row__muted">◎ Пресные качества</span></div><div class="article-meta"><span>Артём Зайцев <b>·</b> Вчера, 18:40</span><span>⌑</span></div></div>
                </article>

                <article class="article-card">
                    <div class="article-card__art art-placeholder"></div>
                    <div class="article-card__body"><div class="article-kicker"><span class="tag tag--violet">Лонгрид</span><span>·</span><span>22 мин чтения</span></div><h2>Эволюция immersive sim: от оригинальной Deus Ex до современных стелс-песочниц</h2><p>Как принципы Уоррена Спектора и Looking Glass Studios сформировали философию абсолютной свободы действий и почему этот культовый жанр...</p><div class="article-meta"><span>Константин Ремизов <b>·</b> 3 дня назад</span><span>⌑</span></div></div>
                </article>

                <article class="article-card">
                    <div class="article-card__art art-placeholder"></div>
                    <div class="article-card__body"><div class="article-kicker"><span class="tag tag--cyan">Железо & девайсы</span><span>·</span><span>10 мин</span></div><h2>Лучшие OLED-мониторы для соревновательных шутеров в 2025 году: полный гид покупателя</h2><p>Сравнение частоты 360 Гц против 480 Гц, защита от выгорания матриц третьего поколения, задержка отклика пикселей 0.03 мс и...</p><div class="article-meta"><span>Лаборатория NEXUS <b>·</b> 4 дня назад</span><span>⌑</span></div></div>
                </article>

            </div>

            <aside class="sidebar" aria-label="Подборки редакции">
                <section class="side-panel releases-panel"><div class="side-heading"><h2><span class="heading-icon heading-icon--cyan">▦</span> Релизы месяца</h2><span class="side-heading__note">Февраль — март</span></div>
                    <div class="release-item"><div class="release-date"><small>ФЕВ</small><strong>28</strong></div><div class="release-info"><strong>Monster Hunter Wilds</strong><span>Capcom · Экшен-RPG</span><small><b>PC</b> <b>PS5</b> <b>XSX</b></small></div><span class="release-status release-status--cyan">12 дн.</span></div>
                    <div class="release-item"><div class="release-date"><small>ФЕВ</small><strong>18</strong></div><div class="release-info"><strong>Avowed</strong><span>Obsidian Entertainment</span><small><b>PC</b> <b>Game Pass</b></small></div><span class="release-status release-status--amber">2 дня</span></div>
                    <div class="release-item"><div class="release-date"><small>ОСЕНЬ</small><strong>25</strong></div><div class="release-info"><strong>Grand Theft Auto VI</strong><span>Rockstar Games · Open World</span><small><b>PS5</b> <b>XSX</b></small></div><span class="release-status release-status--violet">Ожидаем</span></div>
                    <a class="panel-link" href="#footer">Открыть полный трекер релизов 2025</a>
                </section>

                <section class="side-panel editorial-panel"><div class="side-heading"><h2><span class="heading-icon heading-icon--amber">✦</span> Выбор редакции</h2><span class="side-heading__note">Hall of fame</span></div>
                    <ol class="editorial-list"><li><span>01</span><p><strong>Clair Obscur: Expedition 33</strong><small>Самая ожидаемая RPG</small></p><b>9.8</b></li><li><span>02</span><p><strong>Metaphor: ReFantazio</strong><small>Шедевр Atlus</small></p><b>9.5</b></li><li><span>03</span><p><strong>Silent Hill 2 Remake</strong><small>Лучший хоррор года</small></p><b>9.2</b></li><li><span>04</span><p><strong>Astro Bot</strong><small>Триумф платформеров</small></p><b>9.1</b></li></ol>
                </section>
            </aside>
        </section>

        <section class="continuation-section page-wrap" aria-label="Ещё материалы и рассылка">
            <div class="article-column">
                <article class="article-card article-card--last">
                    <div class="article-card__art art-placeholder"></div>
                    <div class="article-card__body"><div class="article-kicker"><span class="tag tag--amber">Подборка</span><span>·</span><span>Steam</span></div><h2>Топ-7 скрытых инди-жемчужин этой весны, стоящих каждого рубля</h2><p>Уникальные авторские механики, медитативные головоломки и атмосферные рогалики от независимых команд, которые заслуживают...</p><div class="article-meta"><span>Мария Снежина <b>·</b> 5 дней назад</span><span>⌑</span></div></div>
                </article>
                <div class="load-more-wrap"><button class="button button--secondary" type="button"><span class="refresh-icon">↻</span> Показать ещё 12 статей</button></div>
            </div>
            <div class="newsletter-panel"><span class="newsletter-icon">✉</span><h2>Еженедельный дайджест NEXUS</h2><p>Только избранные расследования, инсайды и ключевые игровые релизы без спама. Прямо на вашу почту каждую пятницу.</p><form class="newsletter-form" action="#" method="get"><label class="sr-only" for="newsletter-email">Ваш рабочий email</label><input id="newsletter-email" type="email" placeholder="Ваш рабочий email..." required><button class="button button--primary" type="submit">Подписаться бесплатно</button></form><small>Более 42 000 геймеров уже с нами</small></div>
        </section>
    </main>

    <footer class="site-footer" id="footer">
        <div class="page-wrap footer-grid">
            <div class="footer-about"><a class="brand" href="#top"><span class="brand__mark">N</span><span>NEXUS</span></a><p>Премиальное игровое медиа, аналитика индустрии и независимые рецензии. Мы исследуем виртуальные миры с технической точностью и художественной страстью.</p><div class="social-links"><a href="#footer" aria-label="Сообщество">N</a><a href="#footer" aria-label="Видео">▶</a><a href="#footer" aria-label="Трансляции">▷</a><a href="#footer" aria-label="Новости">▣</a><a href="#footer" aria-label="Игры">⌘</a></div></div>
            <div class="footer-column"><h2>Разделы</h2><a href="#articles">Обзоры</a><a href="#articles">Новости</a><a href="#articles">Статьи</a><a href="#articles">База игр</a></div>
            <div class="footer-column"><h2>Платформы</h2><a href="#articles">PC Gaming</a><a href="#articles">PlayStation 5</a><a href="#articles">Xbox Series X|S</a><a href="#articles">Nintendo Switch</a><a href="#articles">Мобильные</a></div>
            <div class="footer-column"><h2>Редакция</h2><a href="#footer">О проекте</a><a href="#footer">Авторы</a><a href="#footer">Вакансии</a><a href="#footer">Реклама</a><a href="#footer">Контакты</a></div>
        </div>
        <div class="page-wrap footer-bottom"><span>© 2025 NEXUS Media. Все права защищены.</span><div><a href="#footer">Политика конфиденциальности</a><a href="#footer">Правила комьюнити</a><span class="age-mark">18+</span></div></div>
    </footer>
</body>
</html>
