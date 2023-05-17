<?php
/*
Template Name: A propos
Template Post Type: page
*/

get_header("dark");
?>

<section class="hero-text back-white">
    <div class="wrap-contain">
        <h1 class="hero-text__title">La santé n’a pas de prix, votre trésorerie oui !</h1>
    </div>
</section>

<section class="apropos-chiffres back-white">
    <div class="wrap-contain first-content">
        <ul class="apropos-chiffres__list">
            <li class="apropos-chiffres__item">
                <p class="apropos-chiffres__number upper-xbold">2007</p>
                <div class="apropos-chiffres__bloc-gris"></div>
                <p class="apropos-chiffres__text">Fondée en 2007, la société i-veos peut compter sur son ancienneté pour vous offrir une expertise affutée de la gestion du tiers payant.</p>
            </li>
            <li class="apropos-chiffres__item">
                <?php 
                $birthdate = 2007;
                $date = date('Y') - $birthdate;
                ?>
                <p class="apropos-chiffres__number upper-xbold"><?php echo $date; ?> ans</p>
                <div class="apropos-chiffres__bloc-gris"></div>
                <p class="apropos-chiffres__text">C’est la durée de la relation avec notre plus ancien client. L’ancienneté de nos clients est de 10 ans en moyenne avec de nouveaux clients recommandés par nos anciens a plus de 80%.</p>
            </li>
            <li class="apropos-chiffres__item">
                <p class="apropos-chiffres__number upper-xbold">6</p>
                <div class="apropos-chiffres__bloc-gris"></div>
                <p class="apropos-chiffres__text">6 points qui définissent la charte de qualité de la Fédération Nationale des Entreprises du Tiers Payant (FNETP) qui protège les professionnels de santé et à laquelle nous sommes adhérents.</p>
            </li>
            <li class="apropos-chiffres__item">
                <p class="apropos-chiffres__number upper-xbold">0€</p>
                <div class="apropos-chiffres__bloc-gris"></div>
                <p class="apropos-chiffres__text">Le coût d’un audit tiers payant ou informatique.</p>
            </li>
            <li class="apropos-chiffres__item">
                <p class="apropos-chiffres__number upper-xbold">4000</p>
                <div class="apropos-chiffres__bloc-gris"></div>
                <p class="apropos-chiffres__text">C’est le nombre de rejets hebdomadaire retraité par notre équipe.</p>
            </li>
            <li class="apropos-chiffres__item">
                <p class="apropos-chiffres__number upper-xbold">500</p>
                <div class="apropos-chiffres__bloc-gris"></div>
                <p class="apropos-chiffres__text">Nombre mensuel de prise en main à distance pour assister nos clients.</p>
            </li>
        </ul>
    </div>
</section>
<section class="apropos-main back-white">
    <div class="wrap-contain first-content">
        <div class="apropos-main__first apropos-main__wrap">
            <div class="apropos-main__image-container">
                <div class="apropos-main__bloc-1 bloc-couleur back-green-3"></div>
                <img src="<?php echo get_template_directory_uri() . '/public/img/apropos1.jpg' ?>" alt="i-veos gestion tiers payant">
            </div>
            <div class="apropos-main__text-container">
                <p class="apropos-main__text text-courant">Fondée en 2007, i-veos est une société indépendante à taille humaine, experte dans la gestion du tiers payant et profondément attachée aux valeurs humaines.</p>
                <p class="apropos-main__text text-courant">Plus qu’un service et un investissement, nous sommes le partenaire des professionnels de santé avec qui nous travaillons. Notre ambition est de créer une relation qui vous offre plus que la gestion de vos impayés; un accompagnement dans les étapes clés de votre activité, une amélioration de votre trésorerie et un changement bénéfique dans la pratique de votre coeur de métier.</p>
            </div>
        </div>
        <div class="apropos-main__second apropos-main__wrap">
            <div class="apropos-main__image-container">
            <div class="apropos-main__bloc-2 bloc-couleur back-green-2"></div>
                <img src="<?php echo get_template_directory_uri() . '/public/img/apropos2.jpg' ?>" alt="i-veos gestion tiers payant">
            </div>
            <div class="apropos-main__text-container">
                <p class="apropos-main__text text-courant">Réfléchis et impliqués, nous trouvons les actions qui servent le mieux votre situation. Votre quotidien évolue ? Nous aussi ! Nous sommes perpétuellement en veille pour vous proposer un service irréprochable toujours en phase avec l’actualité du tiers payant.</p>
                <p class="apropos-main__text text-courant">C’est avec ces valeurs en tête que nous sommes aujourd’hui membre de la Fédération Nationale des Entreprises du Tiers Payant (FNETP) et obéissons à une charte très stricte qui protège les professionnels de santé.</p>
            </div>
        </div>
    </div>
</section>

<section class="apropos-expertise">

    <div class="txtcenter expertise__wrap">
        <div class="bloc-separation-green"></div>
        <ul class="expertise__list">
            <li class="expertise__item txtcenter">
                <svg id="Groupe_16" data-name="Groupe 16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="85.189" height="59.678" viewBox="0 0 85.189 59.678">
                    <defs>
                        <linearGradient id="linear-gradient" x1="0.182" y1="0.729" x2="1.709" y2="-0.221" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#05668d"/>
                        <stop offset="0.483" stop-color="#00a896"/>
                        <stop offset="1" stop-color="#f0f3bd"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-2" x1="-0.243" y1="0.962" x2="1.121" y2="0.138" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#05668d"/>
                        <stop offset="0.512" stop-color="#00a896"/>
                        <stop offset="1" stop-color="#f0f3bd"/>
                        </linearGradient>
                    </defs>
                    <path id="Tracé_18" data-name="Tracé 18" d="M-4733.271-6588.809a7.235,7.235,0,0,0-6.066-2.347,7.241,7.241,0,0,0-5.3-3.393A7.237,7.237,0,0,0-4749.1-6599a7.234,7.234,0,0,0-3.4-5.3,7.234,7.234,0,0,0-2.192-5.9,7.231,7.231,0,0,0-.878-6.234,7.235,7.235,0,0,0,.473-6.279,7.242,7.242,0,0,0,1.646-6.786,7.286,7.286,0,0,0-1.916-.2c.005-.012.013-.023.019-.037a7.245,7.245,0,0,0-.469-7.17,7.246,7.246,0,0,0-5.934,4.055,7.239,7.239,0,0,0-.622,1.923,7.3,7.3,0,0,0-2.881-1.436,7.244,7.244,0,0,0-1.587,7.008,7.239,7.239,0,0,0,.89,1.886,7.379,7.379,0,0,0-1.6-.223,7.247,7.247,0,0,0-.052,7.187,7.214,7.214,0,0,0,1.272,1.651,7.27,7.27,0,0,0-1.615.126,7.242,7.242,0,0,0,1.485,7.03,7.229,7.229,0,0,0,1.6,1.343,7.213,7.213,0,0,0-1.551.469,7.242,7.242,0,0,0,2.954,6.55,7.22,7.22,0,0,0,1.846.97,7.315,7.315,0,0,0-1.415.789,7.244,7.244,0,0,0,4.286,5.768,7.227,7.227,0,0,0,2.011.553,7.259,7.259,0,0,0-1.213,1.073,7.245,7.245,0,0,0,5.419,4.719,7.231,7.231,0,0,0,2.083.11,7.3,7.3,0,0,0-.957,1.307,7.244,7.244,0,0,0,6.3,3.452,7.221,7.221,0,0,0,2.058-.336,7.312,7.312,0,0,0-.654,1.481,7.245,7.245,0,0,0,6.9,2.025,7.241,7.241,0,0,0,5.059-4.368l.027,0c.027-.09.05-.18.074-.27s.063-.174.091-.263l-.021-.021A7.234,7.234,0,0,0-4733.271-6588.809Zm-28.235-23.993.058,0,.014-.026c.051,0,.1-.006.151-.011-.027.062-.05.125-.075.187C-4761.408-6612.7-4761.456-6612.752-4761.507-6612.8Zm-.109-7.616c.007-.007.012-.015.019-.022l.151.022c-.039.054-.076.111-.113.166-.038-.06-.073-.122-.112-.181C-4761.653-6620.429-4761.635-6620.422-4761.616-6620.418Zm4.941,9.762a3.117,3.117,0,0,1-2.339,2.017,3.113,3.113,0,0,1-.545-3.04,3.114,3.114,0,0,1,2.339-2.017A3.116,3.116,0,0,1-4756.675-6610.656Zm-.736-6.648a3.112,3.112,0,0,1-2.715,1.469,3.112,3.112,0,0,1,.118-3.085,3.113,3.113,0,0,1,2.715-1.469A3.115,3.115,0,0,1-4757.411-6617.3Zm.7-6.651a3.113,3.113,0,0,1-2.967.855,3.114,3.114,0,0,1,.774-2.988,3.11,3.11,0,0,1,2.967-.855A3.112,3.112,0,0,1-4756.708-6623.956Zm-2.95,18.563a.251.251,0,0,0,.008-.027l.146-.043c-.013.064-.022.132-.034.2-.059-.039-.117-.08-.177-.117Zm3.334,6.853c0-.009,0-.019,0-.028l.132-.073c0,.065.007.133.011.2-.066-.025-.132-.053-.2-.076C-4756.361-6598.526-4756.342-6598.531-4756.324-6598.539Zm4.717,5.954.114-.1c.015.066.035.13.053.195-.07-.011-.141-.024-.211-.033.016-.012.033-.021.048-.032C-4751.6-6592.566-4751.606-6592.576-4751.607-6592.585Zm5.884,4.836c.031-.04.061-.081.091-.122.028.059.062.118.092.177-.072,0-.143.007-.213.013.013-.015.027-.028.04-.042C-4745.716-6587.731-4745.72-6587.74-4745.723-6587.749Zm6.782,3.468c.021-.047.042-.093.062-.14.042.053.086.1.129.155-.069.019-.138.037-.206.058.01-.017.021-.033.03-.049Zm1.231-4.125a3.113,3.113,0,0,1,2.935.96,3.113,3.113,0,0,1,.667,3.015,3.116,3.116,0,0,1-2.934-.961A3.113,3.113,0,0,1-4737.71-6588.406Zm-5.93-3.109a3.115,3.115,0,0,1,2.662,1.565,3.113,3.113,0,0,1,.007,3.088,3.117,3.117,0,0,1-2.662-1.565A3.115,3.115,0,0,1-4743.64-6591.515Zm-2.862-2.206a3.113,3.113,0,0,1-.653,3.018,3.113,3.113,0,0,1-2.266-2.1,3.114,3.114,0,0,1,.653-3.019A3.115,3.115,0,0,1-4746.5-6593.721Zm-4.59-4.865a3.113,3.113,0,0,1-1.284,2.809,3.113,3.113,0,0,1-1.764-2.535,3.111,3.111,0,0,1,1.283-2.808A3.112,3.112,0,0,1-4751.092-6598.585Zm-3.444-5.733a3.114,3.114,0,0,1-1.854,2.469,3.111,3.111,0,0,1-1.182-2.853,3.114,3.114,0,0,1,1.853-2.47A3.116,3.116,0,0,1-4754.536-6604.318Zm-5.388-27.64a3.11,3.11,0,0,1,2.549-1.741,3.113,3.113,0,0,1,.2,3.081,3.113,3.113,0,0,1-2.55,1.741A3.112,3.112,0,0,1-4759.924-6631.958Zm-4.292,3a3.115,3.115,0,0,1,2.245,2.12,3.114,3.114,0,0,1-.682,3.012,3.114,3.114,0,0,1-2.245-2.12A3.112,3.112,0,0,1-4764.217-6628.955Zm-1.6,8.372a3.116,3.116,0,0,1,2.647,1.591,3.116,3.116,0,0,1-.022,3.088,3.116,3.116,0,0,1-2.647-1.591A3.117,3.117,0,0,1-4765.815-6620.583Zm.229,8.52a3.116,3.116,0,0,1,2.925.989,3.115,3.115,0,0,1,.639,3.021,3.114,3.114,0,0,1-2.926-.988A3.111,3.111,0,0,1-4765.585-6612.062Zm2.044,8.275a3.111,3.111,0,0,1,3.069.34,3.112,3.112,0,0,1,1.269,2.814,3.113,3.113,0,0,1-3.068-.34A3.111,3.111,0,0,1-4763.542-6603.788Zm3.766,7.646a3.112,3.112,0,0,1,3.07-.324,3.117,3.117,0,0,1,1.842,2.479,3.116,3.116,0,0,1-3.071.323A3.113,3.113,0,0,1-4759.775-6596.142Zm7.642,8.692a3.112,3.112,0,0,1-2.329-2.027,3.114,3.114,0,0,1,2.931-.972,3.112,3.112,0,0,1,2.328,2.027A3.109,3.109,0,0,1-4752.133-6587.45Zm6.994,4.83a3.113,3.113,0,0,1-2.708-1.483,3.114,3.114,0,0,1,2.655-1.576,3.113,3.113,0,0,1,2.708,1.483A3.112,3.112,0,0,1-4745.14-6582.62Zm7.865,3.224a3.112,3.112,0,0,1-2.962-.87,3.114,3.114,0,0,1,2.257-2.108,3.116,3.116,0,0,1,2.962.87A3.111,3.111,0,0,1-4737.274-6579.4Z" transform="translate(4768.536 6636.901)" fill="url(#linear-gradient)"/>
                    <path id="Tracé_19" data-name="Tracé 19" d="M-4614-6614.85a7.183,7.183,0,0,0,1.271-1.651,7.247,7.247,0,0,0-.051-7.187,7.383,7.383,0,0,0-1.6.223,7.254,7.254,0,0,0,.89-1.886,7.244,7.244,0,0,0-1.587-7.008,7.3,7.3,0,0,0-2.882,1.436,7.188,7.188,0,0,0-.623-1.923,7.243,7.243,0,0,0-5.933-4.055,7.244,7.244,0,0,0-.469,7.17c.005.013.013.025.019.037a7.286,7.286,0,0,0-1.916.2,7.241,7.241,0,0,0,1.646,6.786,7.232,7.232,0,0,0,.474,6.279,7.233,7.233,0,0,0-.879,6.234,7.232,7.232,0,0,0-2.191,5.9,7.231,7.231,0,0,0-3.4,5.3,7.235,7.235,0,0,0-4.457,4.449,7.236,7.236,0,0,0-5.3,3.393,7.238,7.238,0,0,0-6.067,2.347,7.236,7.236,0,0,0-1.7,6.463l-.021.021c.027.089.06.176.091.263s.047.181.074.27l.029,0a7.235,7.235,0,0,0,5.058,4.368,7.244,7.244,0,0,0,6.895-2.025,7.23,7.23,0,0,0-.654-1.481,7.223,7.223,0,0,0,2.058.336,7.244,7.244,0,0,0,6.3-3.452,7.346,7.346,0,0,0-.957-1.307,7.224,7.224,0,0,0,2.082-.11,7.246,7.246,0,0,0,5.419-4.719,7.314,7.314,0,0,0-1.213-1.073,7.227,7.227,0,0,0,2.011-.553,7.242,7.242,0,0,0,4.285-5.768,7.3,7.3,0,0,0-1.415-.789,7.223,7.223,0,0,0,1.846-.97,7.243,7.243,0,0,0,2.953-6.55,7.2,7.2,0,0,0-1.551-.469,7.233,7.233,0,0,0,1.6-1.343,7.24,7.24,0,0,0,1.484-7.03A7.252,7.252,0,0,0-4614-6614.85Zm-14.685,22.325c-.069.009-.141.022-.211.033.018-.065.038-.129.053-.195l.115.1c0,.009,0,.019,0,.029C-4628.716-6592.545-4628.7-6592.536-4628.684-6592.524Zm-12.772,8.1c.02.047.041.093.062.14l-.016.023.031.049c-.068-.021-.137-.039-.206-.058C-4641.542-6584.318-4641.5-6584.369-4641.457-6584.421Zm6.754-3.449c.029.041.06.082.09.122a.265.265,0,0,0-.011.027c.013.013.027.027.041.042-.071-.006-.142-.009-.213-.013C-4634.765-6587.753-4634.731-6587.812-4634.7-6587.871Zm10.556-10.77c.044.024.088.049.133.073,0,.009,0,.019,0,.028.018.008.036.013.054.022-.066.023-.133.051-.2.076C-4624.153-6598.507-4624.148-6598.575-4624.146-6598.641Zm5.169-14.009c-.025-.062-.048-.125-.074-.187.05,0,.1.009.151.011a.143.143,0,0,0,.013.026l.058,0C-4618.879-6612.752-4618.927-6612.7-4618.977-6612.649Zm.257-7.769c.019,0,.038-.011.056-.016-.039.06-.075.121-.112.181-.038-.055-.074-.111-.113-.166l.15-.022Zm-1.94-2.683a3.113,3.113,0,0,1-2.967-.855,3.108,3.108,0,0,1-.774-2.989,3.11,3.11,0,0,1,2.967.855A3.112,3.112,0,0,1-4620.661-6623.1Zm-2.382,2.711a3.116,3.116,0,0,1,2.716,1.469,3.118,3.118,0,0,1,.117,3.085,3.11,3.11,0,0,1-2.715-1.469A3.116,3.116,0,0,1-4623.042-6620.39Zm-.073,6.694a3.114,3.114,0,0,1,2.338,2.017,3.115,3.115,0,0,1-.544,3.04,3.115,3.115,0,0,1-2.339-2.017A3.117,3.117,0,0,1-4623.115-6613.7Zm2.317,8.431c-.011-.065-.021-.133-.034-.2l.146.043a.251.251,0,0,0,.008.027l.057.01C-4620.681-6605.345-4620.74-6605.3-4620.8-6605.265Zm6.3-12.229a3.114,3.114,0,0,1-2.646,1.591,3.117,3.117,0,0,1-.022-3.088,3.117,3.117,0,0,1,2.646-1.591A3.114,3.114,0,0,1-4614.5-6617.494Zm-1.62-11.46a3.113,3.113,0,0,1,.682,3.012,3.114,3.114,0,0,1-2.245,2.12,3.116,3.116,0,0,1-.682-3.012A3.116,3.116,0,0,1-4616.119-6628.955Zm-6.841-4.745a3.111,3.111,0,0,1,2.55,1.741,3.111,3.111,0,0,1-.2,3.081,3.113,3.113,0,0,1-2.55-1.741A3.114,3.114,0,0,1-4622.96-6633.7Zm-1.657,26.528a3.113,3.113,0,0,1,1.854,2.47,3.114,3.114,0,0,1-1.182,2.853,3.115,3.115,0,0,1-1.854-2.469A3.114,3.114,0,0,1-4624.617-6607.172Zm-4.626,8.586a3.109,3.109,0,0,1,1.765-2.533,3.113,3.113,0,0,1,1.283,2.808,3.114,3.114,0,0,1-1.765,2.535A3.114,3.114,0,0,1-4629.243-6598.585Zm-4.59,4.865a3.115,3.115,0,0,1,2.266-2.1,3.114,3.114,0,0,1,.652,3.019,3.112,3.112,0,0,1-2.265,2.1A3.113,3.113,0,0,1-4633.833-6593.721Zm-5.524,3.771a3.116,3.116,0,0,1,2.663-1.565,3.115,3.115,0,0,1-.008,3.088,3.115,3.115,0,0,1-2.662,1.565A3.116,3.116,0,0,1-4639.358-6589.95Zm-6.2,2.5a3.11,3.11,0,0,1,2.934-.96,3.114,3.114,0,0,1-.666,3.014,3.118,3.118,0,0,1-2.935.961A3.114,3.114,0,0,1-4645.559-6587.446Zm2.5,8.05a3.113,3.113,0,0,1-2.257-2.108,3.115,3.115,0,0,1,2.962-.87,3.115,3.115,0,0,1,2.258,2.108A3.113,3.113,0,0,1-4643.061-6579.4Zm7.865-3.224a3.111,3.111,0,0,1-2.654-1.576,3.111,3.111,0,0,1,2.707-1.483,3.111,3.111,0,0,1,2.655,1.576A3.113,3.113,0,0,1-4635.2-6582.62Zm6.994-4.83a3.109,3.109,0,0,1-2.93-.973,3.111,3.111,0,0,1,2.329-2.027,3.112,3.112,0,0,1,2.93.972A3.11,3.11,0,0,1-4628.2-6587.45Zm5.8-6.213a3.115,3.115,0,0,1-3.071-.323,3.115,3.115,0,0,1,1.841-2.479,3.112,3.112,0,0,1,3.07.324A3.114,3.114,0,0,1-4622.4-6593.663Zm4.338-7.31a3.116,3.116,0,0,1-3.07.34,3.114,3.114,0,0,1,1.269-2.814,3.113,3.113,0,0,1,3.069-.34A3.113,3.113,0,0,1-4618.062-6600.973Zm2.675-8.068a3.113,3.113,0,0,1-2.925.988,3.114,3.114,0,0,1,.638-3.021,3.117,3.117,0,0,1,2.925-.989A3.114,3.114,0,0,1-4615.388-6609.041Z" transform="translate(4696.989 6636.901)" fill="url(#linear-gradient-2)"/>
                </svg>
                
                <h3 class="expertise__item-title txtcenter">À votre service depuis 2007</h3>
                <p class="expertise__item-text txtcenter">Reposez-vous sur l’expertise de nos collaborateurs et nos méthodes éprouvées.</p>
            </li>
            <li class="expertise__item txtcenter">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="83.382" height="59.453" viewBox="0 0 83.382 59.453">
                <defs>
                    <linearGradient id="linear-gradient" x1="0.191" y1="0.854" x2="0.822" y2="-0.031" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#05668d"/>
                    <stop offset="0.483" stop-color="#00a896"/>
                    <stop offset="1" stop-color="#f0f3bd"/>
                    </linearGradient>
                </defs>
                <path id="Tracé_20" data-name="Tracé 20" d="M-4903.789-6132.378l-14.671-26.488-1.7,1.026c-1.907,1.153-8.057.254-13.481-.539-3.275-.478-6.66-.973-9.919-1.21a20.467,20.467,0,0,0-10.95,1.817,9.847,9.847,0,0,0-3.445,2.726l-.51.843c-2.066-.03-7.073-.421-10.8-3.281l-1.661-1.274-16.248,25.783,6.11,6.11a6.154,6.154,0,0,0-1.763,4.319,6.16,6.16,0,0,0,1.809,4.385,6.185,6.185,0,0,0,4.39,1.819c.153,0,.306-.011.457-.022a6.614,6.614,0,0,0,1.923,4.2,6.649,6.649,0,0,0,4.724,1.957c.1,0,.194-.01.292-.014a5.994,5.994,0,0,0,1.747,3.889,6.033,6.033,0,0,0,4.283,1.773,6.058,6.058,0,0,0,2.07-.369,6.352,6.352,0,0,0,1.637,2.83,6.39,6.39,0,0,0,4.538,1.879,6.389,6.389,0,0,0,4.527-1.867l2.1-2.1c1.946,1.02,5.64,2.67,9.175,2.67a9.279,9.279,0,0,0,2.618-.353,6.987,6.987,0,0,0,3.736-2.62c2.338.187,5.5-.306,6.958-2.979a6.753,6.753,0,0,0,.856-2.787c2.729.379,4.9-.511,6.138-2.52a7.416,7.416,0,0,0,1.179-3.7,6.449,6.449,0,0,0,5.328-1.863c2.257-2.256,1.7-5.033.529-7.146Zm-74.525,11.521a2.371,2.371,0,0,1-.694-1.684,2.366,2.366,0,0,1,.7-1.685l2.453-2.448a2.364,2.364,0,0,1,1.681-.7h0a2.362,2.362,0,0,1,1.684.7,2.357,2.357,0,0,1,.7,1.684,2.361,2.361,0,0,1-.538,1.487l-1.906,1.9c-.114.114-.218.235-.324.355l-.385.385A2.387,2.387,0,0,1-4978.314-6120.857Zm6.771,6a2.828,2.828,0,0,1-.833-2.018,2.833,2.833,0,0,1,.609-1.755l1.974-1.968c.122-.122.235-.25.346-.38l2.123-2.122a2.837,2.837,0,0,1,2.015-.833h0a2.835,2.835,0,0,1,2.017.838,2.837,2.837,0,0,1,.833,2.019,2.84,2.84,0,0,1-.836,2.016l-.917.916-3.3,3.293A2.857,2.857,0,0,1-4971.543-6114.856Zm6.762,5.83a2.212,2.212,0,0,1-.65-1.578,2.218,2.218,0,0,1,.656-1.579l3.261-3.256.918-.918h0l1.147-1.146a2.221,2.221,0,0,1,1.577-.651h0a2.213,2.213,0,0,1,1.578.656,2.212,2.212,0,0,1,.651,1.579,2.213,2.213,0,0,1-.657,1.579l-2.683,2.68-.5.5-.008.009-2.134,2.132A2.235,2.235,0,0,1-4964.781-6109.026Zm7.99,4.234a2.6,2.6,0,0,1,0-3.663l.5-.5,2.082-2.077a2.577,2.577,0,0,1,1.832-.756h0a2.572,2.572,0,0,1,1.833.762,2.574,2.574,0,0,1,.757,1.834,2.58,2.58,0,0,1-.762,1.833l-2.574,2.568A2.6,2.6,0,0,1-4956.792-6104.792Zm41.752-16.237c-1.636,1.636-4.275.21-4.521.07l-14.911-9.795a1.908,1.908,0,0,0-2.643.546,1.909,1.909,0,0,0,.547,2.643l14.737,9.682c.228.314.8,1.379-.27,3.116-1.03,1.673-4.387.174-4.8-.019l-12.747-7.908a1.908,1.908,0,0,0-2.627.616,1.907,1.907,0,0,0,.615,2.627l12.559,7.792a2.165,2.165,0,0,1-.095,2.371c-.638,1.167-2.879,1.071-3.862.93l-10.886-7.257a1.908,1.908,0,0,0-2.646.528,1.908,1.908,0,0,0,.529,2.646l9.544,6.363a3.269,3.269,0,0,1-1.095.552c-2.52.743-6.313-.716-8.62-1.871a6.445,6.445,0,0,0,.257-1.788,6.367,6.367,0,0,0-1.872-4.534,6.356,6.356,0,0,0-4-1.856c.006-.115.017-.229.017-.344a6.011,6.011,0,0,0-1.766-4.279,6.013,6.013,0,0,0-4.276-1.776,6.343,6.343,0,0,0-.83.068,6.607,6.607,0,0,0-1.891-3.884,6.627,6.627,0,0,0-4.714-1.96h-.01a6.634,6.634,0,0,0-3.014.723,6.156,6.156,0,0,0-1.46-2.338,6.161,6.161,0,0,0-4.381-1.822,6.1,6.1,0,0,0-4.188,1.632l-3.964-3.964,12.462-19.775a22.732,22.732,0,0,0,9.155,2.789l-6.834,11.292,1.629.987c4.4,2.667,10.906,3.788,16.963-6.02.84-1.36,3.16-.974,3.92-.8l28.858,20.039C-4915.7-6124.5-4913.821-6122.248-4915.04-6121.029Zm.736-7.338-29.068-20.184-.282-.087a10.077,10.077,0,0,0-2.884-.423,6.315,6.315,0,0,0-5.65,2.811c-3.205,5.187-6.354,6.98-10.021,5.609l7.39-12.216a7.152,7.152,0,0,1,2.311-1.646,16.983,16.983,0,0,1,8.675-1.279c3.12.228,6.437.712,9.643,1.181,5.959.871,10.886,1.591,14.156.771l11.4,20.584Z" transform="translate(4987.171 6159.669)" fill="url(#linear-gradient)"/>
                </svg>

                <h3 class="expertise__item-title txtcenter">Une entreprise à taille humaine</h3>
                <p class="expertise__item-text txtcenter">Cela vous garantie une relation et un suivi privilégié avec votre interlocuteur i-veos.</p>
            </li>
            <li class="expertise__item txtcenter">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="59.514" height="60.12" viewBox="0 0 59.514 60.12">
                <defs>
                    <linearGradient id="linear-gradient" x1="0.25" y1="0.557" x2="4.051" y2="-0.312" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#05668d"/>
                    <stop offset="0.512" stop-color="#00a896"/>
                    <stop offset="1" stop-color="#f0f3bd"/>
                    </linearGradient>
                    <linearGradient id="linear-gradient-2" x1="-1.257" y1="0.902" x2="2.314" y2="0.085" xlink:href="#linear-gradient"/>
                    <linearGradient id="linear-gradient-3" x1="-3.565" y1="1.43" x2="1.396" y2="0.295" xlink:href="#linear-gradient"/>
                </defs>
                <g id="Groupe_17" data-name="Groupe 17" transform="translate(4241.744 6467.527)">
                    <path id="Tracé_21" data-name="Tracé 21" d="M-4229.681-6456.4h-3.491v-11.132h-3.387v11.132h-3.492a1.694,1.694,0,0,0-1.693,1.694v13.782a1.693,1.693,0,0,0,1.693,1.693h3.492v31.818h3.387v-31.818h3.491a1.693,1.693,0,0,0,1.693-1.693V-6454.7A1.694,1.694,0,0,0-4229.681-6456.4Zm-1.694,13.782h-6.981v-10.395h6.981Z" transform="translate(0 0)" fill="url(#linear-gradient)"/>
                    <path id="Tracé_22" data-name="Tracé 22" d="M-4168.421-6435.553h-3.49v-31.975h-3.388v31.975h-3.491a1.694,1.694,0,0,0-1.694,1.694v13.781a1.694,1.694,0,0,0,1.694,1.694h3.491v10.976h3.388v-10.976h3.49a1.694,1.694,0,0,0,1.694-1.694v-13.781A1.694,1.694,0,0,0-4168.421-6435.553Zm-1.693,13.782h-6.982v-10.395h6.982Z" transform="translate(-38.382 0)" fill="url(#linear-gradient-2)"/>
                    <path id="Tracé_23" data-name="Tracé 23" d="M-4107.161-6447.165h-3.492v-20.362h-3.387v20.362h-3.491a1.694,1.694,0,0,0-1.694,1.693v13.782a1.694,1.694,0,0,0,1.694,1.693h3.491v22.589h3.387V-6430h3.492a1.694,1.694,0,0,0,1.694-1.693v-13.782A1.693,1.693,0,0,0-4107.161-6447.165Zm-1.694,13.781h-6.982v-10.394h6.982Z" transform="translate(-76.764 0)" fill="url(#linear-gradient-3)"/>
                </g>
                </svg>


                <h3 class="expertise__item-title txtcenter">Un service personnalisé</h3>
                <p class="expertise__item-text txtcenter">Plutôt qu’une offre packagée, nous vous proposons des conseils et services adaptés à vos véritables besoins.</p>
            </li>
            <li class="expertise__item txtcenter">
                <img src="<?php echo get_template_directory_uri() . '/public/img/logo-fnetp.png' ?>" alt="Logo FNETP" height="47" style="margin-bottom:18px;">

                <h3 class="expertise__item-title txtcenter">Membre de la FNETP</h3>
                <p class="expertise__item-text txtcenter">i-veos est membre de la Fédération Nationale des Entreprises du Tiers Payant et obéit à une charte qualité très stricte qui protège les professionnels de santé</p>
            </li>
        </ul>
    </div>
    
</section>

<section class="apropos-equipe back-dark">
    <div class="wrap-contain">
        <h2 class="apropos-equipe__title txtcenter upper-xbold">L'équipe</h2>

        <?php if( have_rows('collaborateurs') ): ?>

        <ul class="apropos-equipe__list">

        <?php while( have_rows('collaborateurs') ): the_row(); 

            // vars
            $photo = get_sub_field('photo');
            $nom = get_sub_field('nom');
            $poste = get_sub_field('poste');
            $email = get_sub_field('email');

            ?>

            <li class="apropos-equipe__item">


                <?php if($photo): ?>
                <div class="apropos-equipe__photo has_photo" style="background-image:url(<?php echo $photo; ?>);"></div>
                <?php else : ?>
                <div class="apropos-equipe__photo no_photo"></div>
                <?php endif; ?>

                <p class="apropos-equipe__nom text-25"><?php echo $nom; ?></p>
                <p class="apropos-equipe__poste"><?php echo $poste; ?></p>

                <!-- <?php if($email): ?>
                <a href="mailto:<?php echo $email; ?>" class="apropos-equipe__email">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28.844" height="20.281" viewBox="0 0 28.844 20.281">
                        <g id="Groupe_83" data-name="Groupe 83" transform="translate(1 1)">
                            <path id="Tracé_555" data-name="Tracé 555" d="M-4576.27-4684.253h-19.486v-18.281h26.844v18.281h-7.357" transform="translate(4595.756 4702.534)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                            <path id="Tracé_556" data-name="Tracé 556" d="M-4568.913-4702.534l-13.422,10.507-13.422-10.507" transform="translate(4595.756 4702.534)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                        </g>
                    </svg>
                </a>
                <?php endif; ?> -->

            </li>

        <?php endwhile; ?>

        </ul>

        <?php endif; ?>
    </div>
    <div class="vert-lines-equipe">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
        <div class="line line4"></div>
        <div class="line line5"></div>
    </div>
</section>

<section class="apropos-thibaut back-white">
    <div class="apropos-thibaut__photo"></div>
    <div class="apropos-thibaut__text-container">
        <p class="apropos-thibaut__citation text-25">“Après avoir travaillé pendant 10 ans en officine, j’ai crée IVEOS en 2007 avec l’objectif d’accompagner et d’apporter un véritable soutien logistique à mes clients. La santé n’a pas de prix, votre trésorerie oui.”</p>
        <p class="apropos-thibaut__nom upper-xbold text-25">Louis-Thibaut Vétillard</p>
        <p class="apropos-thibaut__poste">Directeur général</p>
        <a href="mailto:&#108;%74v&#64;&#105;-&#118;e%6f%73%2e%66&#114;" class="apropos-thibaut__email no-transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="28.844" height="20.281" viewBox="0 0 28.844 20.281">
                <g id="Groupe_83" data-name="Groupe 83" transform="translate(1 1)">
                    <path id="Tracé_555" data-name="Tracé 555" d="M-4576.27-4684.253h-19.486v-18.281h26.844v18.281h-7.357" transform="translate(4595.756 4702.534)" fill="none" stroke="#162C32" stroke-miterlimit="10" stroke-width="2"/>
                    <path id="Tracé_556" data-name="Tracé 556" d="M-4568.913-4702.534l-13.422,10.507-13.422-10.507" transform="translate(4595.756 4702.534)" fill="none" stroke="#162C32" stroke-miterlimit="10" stroke-width="2"/>
                </g>
            </svg>
        </a>
    </div>
</section>

<?php 
get_template_part( 'template-parts/se-faire-rappeler' );

get_footer(); ?>