<?php
// Исправленное меню с корректным отображением дочерних пунктов
?>

<section class="custom-offcanvas-wrapper">
<nav data-bs-theme="dark" class="haader_block_menu navbar navbar-expand-none fullscreen-menu-header" aria-label="Main Navigation">
<div class="bg_menu">
<div class="container-fluid d-flex justify-content-between align-items-center">

<!-- Логотип -->
<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-3 col-3 d-flex justify-content-start justify-content-xxl-start justify-content-xl-start justify-content-lg-start justify-content-md-start desktop-logo">
<div id="logo-tagline-wrap">
<?php 
$current_lang = pll_current_language(); 
if (!is_front_page()) {
    $home_url = pll_home_url($current_lang);
    echo '<a href="' . esc_url($home_url) . '"><img src="/wp-content/uploads/2024/06/header_logo.svg" alt="Logo" width="67" height="67"></a>';
} else {
    echo '<img src="/wp-content/uploads/2024/06/header_logo.svg" alt="Logo" width="67" height="67">';
}
?>
</div>
</div> 

<!-- Горизонтальное меню (для экранов 1280px+) -->
<div class="horizontal-menu desktop-menu">
    <?php 
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'ucv-dropdown-enhanced',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="%1$s" class="navbar-nav horizontal-nav %2$s">%3$s</ul>',
        'walker' => new bootstrap_5_wp_nav_menu_walker()
    ));
    ?>
</div>

<!-- Центральный блок (языки + телефон) -->
<div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4 col-sm-6 col-6 d-flex justify-content-center desktop-contacts">
  
<div class="lang_header"> 
<?php custom_language_switcher(); ?>
</div>     
    
<div class="contacts-phone-head">
<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_709_4865)">
<g clip-path="url(#clip1_709_4865)">
<path d="M5 4.5H9L11 9.5L8.5 11C9.57096 13.1715 11.3285 14.929 13.5 16L15 13.5L20 15.5V19.5C20 20.0304 19.7893 20.5391 19.4142 20.9142C19.0391 21.2893 18.5304 21.5 18 21.5C14.0993 21.263 10.4202 19.6065 7.65683 16.8432C4.8935 14.0798 3.23705 10.4007 3 6.5C3 5.96957 3.21071 5.46086 3.58579 5.08579C3.96086 4.71071 4.46957 4.5 5 4.5Z" stroke="#ACE5FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</g>
<defs>
<clipPath id="clip0_709_4865">
<rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
</clipPath>
<clipPath id="clip1_709_4865">
<rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
</clipPath>
</defs>
</svg>
<?php
$current_lang = pll_current_language();
$phone_numbers = array(
    'ru' => array(
        'display' => '+99450 219 30 13',
        'link' => 'tel:+994502193013'
    ),
    'az' => array(
        'display' => '+99450 219 30 13',
        'link' => 'tel:+994502193013'
    ),
    'uk' => array(
        'display' => '+38 (099) 032-17-58',
        'link' => 'tel:+380990321758'
    )
);
$phone_data = isset($phone_numbers[$current_lang]) ? $phone_numbers[$current_lang] : $phone_numbers['uk'];
$phone_number = $phone_data['display'];
$phone_link = $phone_data['link'];
?>
<a class="d-flex align-items-center gap-2 text-decoration-none" href="<?php echo $phone_link; ?>">
    <?php echo $phone_number; ?>
</a>
</div>
    
</div> 
    
<!-- Кнопка бургер меню -->
<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 d-flex justify-content-end  justify-content-xxl-end justify-content-xl-end justify-content-lg-end justify-content-md-end">
<button class="ucv-navbar-toggler" type="button" id="menuToggle" aria-expanded="false" aria-label="Toggle navigation">
<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 35.3898C27.6041 35.3898 35.3898 27.6041 35.3898 18C35.3898 8.39586 27.6041 0.610169 18 0.610169C8.39586 0.610169 0.610169 8.39586 0.610169 18C0.610169 27.6041 8.39586 35.3898 18 35.3898ZM18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z" fill="#122A41"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.678 21.0508C10.678 20.8823 10.8146 20.7457 10.9831 20.7457H24.4068C24.5753 20.7457 24.7119 20.8823 24.7119 21.0508C24.7119 21.2193 24.5753 21.3559 24.4068 21.3559H10.9831C10.8146 21.3559 10.678 21.2193 10.678 21.0508Z" fill="#122A41"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.678 18C10.678 17.8315 10.8146 17.6949 10.9831 17.6949H24.4068C24.5753 17.6949 24.7119 17.8315 24.7119 18C24.7119 18.1685 24.5753 18.3051 24.4068 18.3051H10.9831C10.8146 18.3051 10.678 18.1685 10.678 18Z" fill="#122A41"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.678 14.9491C10.678 14.7806 10.8146 14.644 10.9831 14.644H24.4068C24.5753 14.644 24.7119 14.7806 24.7119 14.9491C24.7119 15.1176 24.5753 15.2542 24.4068 15.2542H10.9831C10.8146 15.2542 10.678 15.1176 10.678 14.9491Z" fill="#122A41"></path></svg> 
</button>
</div> 

</div> 
</div>
</nav>

    <div class="fullscreen-menu" id="fullscreenMenu"> 
        <div class="menu-content">
            <button class="ucv-close-menu" id="closeMenu">
 <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 35.3898C27.6041 35.3898 35.3898 27.6041 35.3898 18C35.3898 8.39586 27.6041 0.610169 18 0.610169C8.39586 0.610169 0.610169 8.39586 0.610169 18C0.610169 27.6041 8.39586 35.3898 18 35.3898ZM18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M13.0383 13.0381C13.1574 12.919 13.3506 12.919 13.4698 13.0381L22.9618 22.5301C23.0809 22.6493 23.0809 22.8424 22.9618 22.9616C22.8426 23.0807 22.6495 23.0807 22.5303 22.9616L13.0383 13.4696C12.9192 13.3504 12.9192 13.1573 13.0383 13.0381Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M13.0382 22.9616C12.9191 22.8424 12.9191 22.6493 13.0382 22.5301L22.5302 13.0381C22.6494 12.919 22.8426 12.919 22.9617 13.0381C23.0808 13.1573 23.0808 13.3504 22.9617 13.4696L13.4697 22.9616C13.3505 23.0807 13.1574 23.0807 13.0382 22.9616Z" fill="white"></path></svg> </button>
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-12">
                        <div class="fullscreen-block">
                            <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'ucv-mobile-enhanced',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-12">
                        <?php if (function_exists('pll_the_languages')): ?>
                            <div class="language-switcher">
                                <?php
                                $custom_language_names = array(
                                    'uk' => 'UK', 
                                    'en' => 'EN',
                                    'fr' => 'FR',
                                    'ar' => 'ARA'
                                );
                                $languages = pll_the_languages(array('raw' => 1));
                                foreach ($languages as $lang):
                                    $current_class = $lang['current_lang'] ? 'current-lang' : '';
                                    $language_name = isset($custom_language_names[$lang['slug']]) ? $custom_language_names[$lang['slug']] : $lang['name'];
                                    echo '<a href="' . esc_url($lang['url']) . '" class="lang-' . esc_attr($lang['slug']) . ' ' . esc_attr($current_class) . '">' . esc_html($language_name) . '</a>';
                                endforeach;
                                ?>
                            </div>
                        <?php endif; ?>

                        <div class="contacts-header">
                            <span><?php echo pll__('Контакти'); ?></span>
                            <div class="contacts-email"><a href="mailto:ucvcomua2023@gmail.com">ucvcomua2023@gmail.com</a></div>
                          <?php
$current_lang = pll_current_language();
$phone_numbers = array(
    'ru' => array(
        'display' => '+99450 219 30 13',
        'link' => 'tel:+994502193013'
    ),
    'az' => array(
        'display' => '+99450 219 30 13',
        'link' => 'tel:+994502193013'
    ),
    'uk' => array(
        'display' => '+38 (099) 032-17-58',
        'link' => 'tel:+380990321758'
    )
);
$phone_data = isset($phone_numbers[$current_lang]) ? $phone_numbers[$current_lang] : $phone_numbers['uk'];
$phone_number = $phone_data['display'];
$phone_link = $phone_data['link'];
?>

<div class="contacts-phone">
    <a href="<?php echo $phone_link; ?>"><?php echo $phone_number; ?></a>
</div>
                            <div class="contacts-social">
                                <a href="https://t.me/+380990321758"><img loading="lazy" src="/wp-content/uploads/2024/06/telegram.svg" alt="Telegram" width="24" height="25"></a>
                                <a href="viber://chat?number=+380990321758"><img loading="lazy" src="/wp-content/uploads/2024/06/viber.svg" alt="Viber" width="24" height="25"></a>
                                <a href="https://wa.me/380990321758"><img loading="lazy" src="/wp-content/uploads/2024/06/whatsapp.svg" alt="Whatsapp" width="24" height="25"></a>
                            </div> 
                        </div>
                    </div>   
                </div> 
            </div>
        </div>
    </div>
</section>

<style>
    .ucv-navbar-toggler svg {
    width: 50px;
    height: 50px;
    display: block;
    position: relative;
    overflow: hidden;
    padding: 0;
}
.ucv-close-menu svg {
    width: 35px;
    height: 35px;
    display: block;
    position: relative;
    overflow: hidden;
    padding: 0;
    background: #E91E63;
    border-radius: 50%;
}
.fullscreen-menu {
    position: fixed;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    height: 100%;
    background: rgb(245, 251, 255);
    transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
    opacity: 0;
    visibility: hidden;
    z-index: 1050;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.fullscreen-menu.active {
    opacity: 1;
    visibility: visible;
}

.menu-content {
    max-height: 80vh;
    overflow-y: auto;
    max-width: 1000px;
    width: 100%;
}

.ucv-close-menu {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 30px;
    background: none;
    border: none;
    cursor: pointer;
}

.ucv-navbar-toggler {
    border: none;
    background: transparent;
    font-size: 20px;
}

body.no-scroll {
    overflow: hidden;
}
.menu-content {
    scrollbar-width: thin;
    scrollbar-color: #ffffff #153e66;
    -webkit-overflow-scrolling: touch;
    scrollbar-gutter: stable both-edges;
}

.menu-content::-webkit-scrollbar {
    width: 10px;
    height: 8px;
}

.menu-content::-webkit-scrollbar-track {
    background: #153e66;
    border-radius: 5px;
}

.menu-content::-webkit-scrollbar-thumb {
    background: #ffffff;
    border-radius: 5px;
    border: 2px solid #153e66;
}

.menu-content::-webkit-scrollbar-thumb:hover {
    background: #d9d9d9;
}

.menu-content::-webkit-scrollbar:horizontal {
    height: 8px;
}

.menu-content::-webkit-scrollbar-thumb:horizontal {
    background: #ffffff;
    border-radius: 5px;
    border: 2px solid #153e66;
}

.menu-content::-webkit-scrollbar-thumb:horizontal:hover {
    background: #d9d9d9;
}

.menu-content::-webkit-scrollbar-button {
    display: none;
}

.menu-content::-webkit-scrollbar-corner {
    background: #153e66;
}

@supports (-webkit-touch-callout: none) {
    .menu-content {
        -webkit-overflow-scrolling: touch;
        scrollbar-width: thin;
    }
}

/* ГОРИЗОНТАЛЬНОЕ МЕНЮ */
.horizontal-menu {
    display: none;
}

.horizontal-nav {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 2rem;
    margin: 0;
    padding: 0;
    list-style: none;
}

.horizontal-nav > li {
    position: relative;
}

.horizontal-nav a {
    color: #ACE5FF;
    text-decoration: none;
    font-weight: 500;
    padding: 0.5rem 1rem;
    transition: all 0.3s ease;
    white-space: nowrap;
    display: block;
}

.horizontal-nav > li > a:hover {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 4px;
}

/* ДОПОЛНЕНИЯ ДЛЯ DESKTOP DROPDOWN С ПРЕФИКСОМ */
@media (min-width: 1280px) {
    /* Стрелочки для пунктов с подменю */
    .ucv-dropdown-enhanced .menu-item-has-children > a::after,
    .ucv-dropdown-enhanced .dropdown > a::after,
    .ucv-dropdown-enhanced li:has(ul) > a::after {
        content: '▼';
        font-size: 0.7em;
        margin-left: 0.5rem;
        transition: transform 0.3s ease;
        display: inline-block;
    }

    .ucv-dropdown-enhanced .menu-item-has-children:hover > a::after,
    .ucv-dropdown-enhanced .dropdown:hover > a::after,
    .ucv-dropdown-enhanced li:has(ul):hover > a::after {
        transform: rotate(180deg);
    }

    /* Все подменю в десктопе */
    .ucv-dropdown-enhanced ul,
    .ucv-dropdown-enhanced .sub-menu,
    .ucv-dropdown-enhanced .dropdown-menu {
        position: absolute !important;
        top: 100% !important;
        left: 0 !important;
        background: rgba(18, 42, 65, 0.95) !important;
        backdrop-filter: blur(10px) !important;
        border: 1px solid rgba(172, 229, 255, 0.2) !important;
        border-radius: 8px !important;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3) !important;
        padding: 0.5rem 0 !important;
        min-width: 220px !important;
        opacity: 0 !important;
        visibility: hidden !important;
        transform: translateY(-10px) !important;
        transition: all 0.3s ease !important;
        z-index: 1000 !important;
        list-style: none !important;
        margin: 0 !important;
        display: block !important;
    }

    /* Показ подменю при наведении */
    .ucv-dropdown-enhanced li:hover > ul,
    .ucv-dropdown-enhanced li:hover > .sub-menu,
    .ucv-dropdown-enhanced li:hover > .dropdown-menu,
    .ucv-dropdown-enhanced .menu-item-has-children:hover > ul,
    .ucv-dropdown-enhanced .dropdown:hover > ul {
        opacity: 1 !important;
        visibility: visible !important;
        transform: translateY(0) !important;
    }

    /* Ссылки в подменю */
    .ucv-dropdown-enhanced ul a,
    .ucv-dropdown-enhanced .sub-menu a,
    .ucv-dropdown-enhanced .dropdown-menu a {
        color: #ACE5FF !important;
        padding: 0.75rem 1rem !important;
        text-decoration: none !important;
        display: block !important;
        transition: all 0.3s ease !important;
        border-radius: 4px !important;
        background: transparent !important;
        margin: 0 0.25rem !important;
        font-size: 0.95rem !important;
    }

    .ucv-dropdown-enhanced ul a:hover,
    .ucv-dropdown-enhanced .sub-menu a:hover,
    .ucv-dropdown-enhanced .dropdown-menu a:hover {
        background-color: rgba(172, 229, 255, 0.1) !important;
        color: #ffffff !important;
    }

    /* Вложенные подменю (третий уровень) */
    .ucv-dropdown-enhanced ul ul,
    .ucv-dropdown-enhanced .sub-menu .sub-menu {
        top: 0 !important;
        left: 100% !important;
        margin-left: 0.5rem !important;
    }

    /* Обеспечиваем работу многоуровневых меню */
    .ucv-dropdown-enhanced ul li:hover > ul,
    .ucv-dropdown-enhanced .sub-menu li:hover > .sub-menu {
        opacity: 1 !important;
        visibility: visible !important;
        transform: translateY(0) !important;
    }
}

/* МОБИЛЬНОЕ МЕНЮ С ПРЕФИКСОМ - ТОЛЬКО ФУНКЦИОНАЛЬНОСТЬ ПОКАЗА/СКРЫТИЯ */
.ucv-mobile-enhanced .menu-item-has-children > a::after,
.ucv-mobile-enhanced .dropdown > a::after,
.ucv-mobile-enhanced li:has(ul) > a::after {
    content: '';
    width: 20px;
    height: 20px;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23153E66' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='5' y1='12' x2='19' y2='12'%3E%3C/line%3E%3C/svg%3E") no-repeat center;
    background-size: contain;
    margin-left: auto;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.ucv-mobile-enhanced .menu-item-has-children.submenu-open > a::after,
.ucv-mobile-enhanced .dropdown.submenu-open > a::after,
.ucv-mobile-enhanced li:has(ul).submenu-open > a::after {
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23153E66' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='12' y1='5' x2='12' y2='19'%3E%3C/line%3E%3Cline x1='5' y1='12' x2='19' y2='12'%3E%3C/line%3E%3C/svg%3E") no-repeat center;
    background-size: contain;
    transform: rotate(90deg);
}

.ucv-mobile-enhanced > li > a {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.ucv-mobile-enhanced ul ul {
    position: static !important;
    background: rgba(21, 62, 102, 0.05) !important;
    border: none !important;
    box-shadow: inset 0 2px 8px rgba(21, 62, 102, 0.1) !important;
    padding: 0.5rem 0 !important;
    margin: 0.5rem 0 0 1rem !important;
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
    min-width: auto !important;
    border-left: 3px solid rgba(21, 62, 102, 0.2) !important;
    border-radius: 8px !important;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, opacity 0.3s ease;
}

.ucv-mobile-enhanced .submenu-open > ul {
    max-height: 1000px !important;
    opacity: 1 !important;
}

.ucv-mobile-enhanced ul ul a {
    color: rgba(21, 62, 102, 0.8) !important;
    font-size: 0.9rem !important;
    padding: 0.3rem 1rem !important;
    border-bottom: 1px solid rgba(21, 62, 102, 0.05) !important;
}

.ucv-mobile-enhanced ul ul a:hover {
    color: #E91E63 !important;
    background-color: rgba(233, 30, 99, 0.05) !important;
}

/* Адаптивность */
@media (min-width: 1280px) {
    .horizontal-menu {
        display: block;
        flex: 1;
        margin-left: 2rem;
    }
    
    .ucv-navbar-toggler {
        display: none;
    }
    
    .lang_header {
        display: block !important;
    }
    
    .desktop-logo {
        flex: 0 0 auto;
    }
    
    .desktop-contacts {
        flex: 0 0 auto;
        gap: 2rem;
    }
    
    .contacts-phone-head {
        color: #ACE5FF;
    }
    
    .contacts-phone-head a {
        color: #ACE5FF;
        text-decoration: none;
    }
    
    .contacts-phone-head:hover,
    .contacts-phone-head a:hover {
        color: #ffffff;
    }
}

@media (max-width: 1279px) {
    .horizontal-menu {
        display: none;
    }
    
    .ucv-navbar-toggler {
        display: block;
    }
    
    .lang_header {
        display: none !important;
    }
}

/* Fallback для старых браузеров */
@supports not (backdrop-filter: blur(10px)) {
    .ucv-dropdown-enhanced ul {
        background: rgba(18, 42, 65, 0.98) !important;
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById('menuToggle');
    const closeMenu = document.getElementById('closeMenu');
    const fullscreenMenu = document.getElementById('fullscreenMenu');

    // Инициализация dropdown функциональности
    function initDropdowns() {
        // Только для desktop версии (1280px+)
        if (window.innerWidth >= 1280) {
            const desktopMenu = document.querySelector('.ucv-dropdown-enhanced');
            if (desktopMenu) {
                const menuItems = desktopMenu.querySelectorAll('li');
                
                menuItems.forEach(function(item) {
                    const submenu = item.querySelector('ul, .sub-menu, .dropdown-menu');
                    const link = item.querySelector('a');
                    
                    if (submenu && link) {
                        // Добавляем класс для идентификации
                        item.classList.add('has-submenu');
                        
                        // Hover события
                        item.addEventListener('mouseenter', function() {
                            showSubmenu(submenu);
                        });
                        
                        item.addEventListener('mouseleave', function() {
                            hideSubmenu(submenu);
                        });
                        
                        // Click события (дополнительно)
                        link.addEventListener('click', function(e) {
                            if (!link.href || link.href.endsWith('#')) {
                                e.preventDefault();
                                toggleSubmenu(submenu);
                            }
                        });
                    }
                });
            }
        }
        
        // Для мобильной версии - инициализация подменю
        const mobileMenu = document.querySelector('.ucv-mobile-enhanced');
        if (mobileMenu) {
            const menuItems = mobileMenu.querySelectorAll('li');
            
            menuItems.forEach(function(item) {
                const submenu = item.querySelector('ul, .sub-menu');
                const link = item.querySelector('a');
                
                if (submenu && link) {
                    // Добавляем класс для идентификации
                    item.classList.add('has-submenu');
                    
                    // По умолчанию подменю раскрыты
                    item.classList.add('submenu-open');
                    
                    // Обработчики клика
                    link.addEventListener('click', function(e) {
                        if (!link.href || link.href.endsWith('#')) {
                            e.preventDefault();
                        }
                        
                        // Переключаем состояние подменю
                        if (item.classList.contains('submenu-open')) {
                            item.classList.remove('submenu-open');
                        } else {
                            item.classList.add('submenu-open');
                        }
                    });
                }
            });
        }
    }

    // Показать подменю
    function showSubmenu(submenu) {
        if (submenu && window.innerWidth >= 1280) {
            submenu.style.opacity = '1';
            submenu.style.visibility = 'visible';
            submenu.style.transform = 'translateY(0)';
            submenu.style.display = 'block';
        }
    }

    // Скрыть подменю
    function hideSubmenu(submenu) {
        if (submenu && window.innerWidth >= 1280) {
            submenu.style.opacity = '0';
            submenu.style.visibility = 'hidden';
            submenu.style.transform = 'translateY(-10px)';
        }
    }

    // Переключить подменю
    function toggleSubmenu(submenu) {
        if (submenu && window.innerWidth >= 1280) {
            const isVisible = submenu.style.opacity === '1';
            if (isVisible) {
                hideSubmenu(submenu);
            } else {
                showSubmenu(submenu);
            }
        }
    }

    // Открытие мобильного меню
    if (menuToggle) {
        menuToggle.addEventListener('click', function () {
            fullscreenMenu.classList.add('active');
            document.body.classList.add('no-scroll');
            
            // Инициализируем подменю после открытия
            setTimeout(function() {
                initDropdowns();
            }, 100);
        });
    }

    // Закрытие меню по кнопке
    if (closeMenu) {
        closeMenu.addEventListener('click', function () {
            fullscreenMenu.classList.remove('active');
            document.body.classList.remove('no-scroll');
        });
    }

    // Закрытие меню при клике вне его области
    document.addEventListener('click', function (event) {
        if (fullscreenMenu && !fullscreenMenu.contains(event.target) && 
            menuToggle && !menuToggle.contains(event.target)) {
            fullscreenMenu.classList.remove('active');
            document.body.classList.remove('no-scroll');
        }
        
        // Закрыть все dropdown в desktop версии при клике вне меню
        if (window.innerWidth >= 1280) {
            const desktopMenu = document.querySelector('.ucv-dropdown-enhanced');
            if (desktopMenu && !desktopMenu.contains(event.target)) {
                const allSubmenus = desktopMenu.querySelectorAll('ul, .sub-menu, .dropdown-menu');
                allSubmenus.forEach(function(submenu) {
                    hideSubmenu(submenu);
                });
            }
        }
    });

    // Остановка распространения кликов внутри меню
    if (fullscreenMenu) {
        fullscreenMenu.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    }

    // Обработка ресайза окна
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            // Закрываем мобильное меню при переходе на desktop
            if (window.innerWidth >= 1280 && fullscreenMenu.classList.contains('active')) {
                fullscreenMenu.classList.remove('active');
                document.body.classList.remove('no-scroll');
            }
            
            // Переинициализируем dropdown
            initDropdowns();
        }, 250);
    });

    // Первичная инициализация
    initDropdowns();
});
</script>
</rewritten_file>