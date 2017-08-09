<style>
.section{
    margin-left: -20px;
    margin-right: -20px;
    font-family: "Raleway",san-serif;
    overflow-x: hidden;
}
.section h1{
    text-align: center;
    text-transform: uppercase;
    color: #808a97;
    font-size: 35px;
    font-weight: 700;
    line-height: normal;
    display: inline-block;
    width: 100%;
    margin: 50px 0 0;
}
.section ul{
    list-style-type: disc;
    padding-left: 15px;
}
.section:nth-child(even){
    background-color: #fff;
}
.section:nth-child(odd){
    background-color: #f1f1f1;
}
.section .section-title img{
    display: table-cell;
    vertical-align: middle;
    width: auto;
    margin-right: 15px;
}
.section h2,
.section h3 {
    display: inline-block;
    vertical-align: middle;
    padding: 0;
    font-size: 24px;
    font-weight: 700;
    color: #808a97;
    text-transform: uppercase;
}

.section .section-title h2{
    display: table-cell;
    vertical-align: middle;
    line-height: 25px;
}

.section-title{
    display: table;
}

.section h3 {
    font-size: 14px;
    line-height: 28px;
    margin-bottom: 0;
    display: block;
}

.section p{
    font-size: 13px;
    margin: 25px 0;
}
.section ul li{
    margin-bottom: 4px;
}
.landing-container{
    max-width: 750px;
    margin-left: auto;
    margin-right: auto;
    padding: 50px 0 30px;
}
.landing-container:after{
    display: block;
    clear: both;
    content: '';
}
.landing-container .col-1,
.landing-container .col-2{
    float: left;
    box-sizing: border-box;
    padding: 0 15px;
}
.landing-container .col-1 img{
    width: 100%;
}
.landing-container .col-1{
    width: 55%;
}
.landing-container .col-2{
    width: 45%;
}
.premium-cta{
    background-color: #808a97;
    color: #fff;
    border-radius: 6px;
    padding: 20px 15px;
}
.premium-cta:after{
    content: '';
    display: block;
    clear: both;
}
.premium-cta p{
    margin: 7px 0;
    font-size: 13px;
    font-weight: 500;
    display: inline-block;
    width: 60%;
}
.premium-cta a.button{
    border-radius: 6px;
    height: 60px;
    float: right;
    background: url(<?php echo YITH_WOCC_ASSETS_URL?>/images/upgrade.png) #ff643f no-repeat 13px 13px;
    border-color: #ff643f;
    box-shadow: none;
    outline: none;
    color: #fff;
    position: relative;
    padding: 9px 50px 9px 70px;
}
.premium-cta a.button:hover,
.premium-cta a.button:active,
.premium-cta a.button:focus{
    color: #fff;
    background: url(<?php echo YITH_WOCC_ASSETS_URL?>/images/upgrade.png) #971d00 no-repeat 13px 13px;
    border-color: #971d00;
    box-shadow: none;
    outline: none;
}
.premium-cta a.button:focus{
    top: 1px;
}
.premium-cta a.button span{
    line-height: 13px;
}
.premium-cta a.button .highlight{
    display: block;
    font-size: 20px;
    font-weight: 700;
    line-height: 20px;
}
.premium-cta .highlight{
    text-transform: uppercase;
    background: none;
    font-weight: 800;
    color: #fff;
}

.section.one{
    background-image: url(<?php echo YITH_WOCC_ASSETS_URL?>/images/01-bg.png); background-repeat: no-repeat; background-position: 85% 75%
}
.section.two{
    background-image: url(<?php echo YITH_WOCC_ASSETS_URL?>/images/02-bg.png); background-repeat: no-repeat; background-position: 15% 100%
}
.section.three{
    background-image: url(<?php echo YITH_WOCC_ASSETS_URL?>/images/03-bg.png); background-repeat: no-repeat; background-position: 85% 75%
}
.section.four{
    background-image: url(<?php echo YITH_WOCC_ASSETS_URL?>/images/04-bg.png); background-repeat: no-repeat; background-position: 15% 100%
}
.section.five{
    background-image: url(<?php echo YITH_WOCC_ASSETS_URL?>/images/05-bg.png); background-repeat: no-repeat; background-position: 85% 75%
}
.section.six{
    background-image: url(<?php echo YITH_WOCC_ASSETS_URL?>/images/06-bg.png); background-repeat: no-repeat; background-position: 15% 100%
}
.section.seven{
    background-image: url(<?php echo YITH_WOCC_ASSETS_URL?>/images/07-bg.png); background-repeat: no-repeat; background-position: 85% 75%
}
.section.eight{
    background-image: url(<?php echo YITH_WOCC_ASSETS_URL?>/images/08-bg.png); background-repeat: no-repeat; background-position: 15% 100%
}
.section.nine{
    background-image: url(<?php echo YITH_WOCC_ASSETS_URL?>/images/09-bg.png); background-repeat: no-repeat; background-position: 85% 75%
}

@media (max-width: 768px) {
    .section{margin: 0}
    .premium-cta p{
        width: 100%;
    }
    .premium-cta{
        text-align: center;
    }
    .premium-cta a.button{
        float: none;
    }
}

@media (max-width: 480px){
    .wrap{
        margin-right: 0;
    }
    .section{
        margin: 0;
    }
    .landing-container .col-1,
    .landing-container .col-2{
        width: 100%;
        padding: 0 15px;
    }
    .section-odd .col-1 {
        float: left;
        margin-right: -100%;
    }
    .section-odd .col-2 {
        float: right;
        margin-top: 65%;
    }
}

@media (max-width: 320px){
    .premium-cta a.button{
        padding: 9px 20px 9px 70px;
    }

    .section .section-title img{
        display: none;
    }
}
</style>
<div class="landing">
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    <?php echo sprintf( __('Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce One-Click Checkout%2$s to benefit from all features!','yith-woocommerce-one-click-checkout'),'<span class="highlight">','</span>' );?>
                </p>
                <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight"><?php _e('UPGRADE','yith-woocommerce-one-click-checkout');?></span>
                    <span><?php _e('to the premium version','yith-woocommerce-one-click-checkout');?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="one section section-even clear">
        <h1><?php _e('Premium Features','yith-woocommerce-one-click-checkout');?></h1>
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_WOCC_ASSETS_URL?>/images/01.png" alt="<?php _e('Only after the first order','yith-woocommerce-one-click-checkout');?>" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WOCC_ASSETS_URL?>/images/01-icon.png" alt="icon 01"/>
                    <h2><?php _e('Only after the first order','yith-woocommerce-one-click-checkout');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('Ease the purchase of products on your shop giving users the freedom to make orders with just one click.%3$sVery often, shipping details are not filled in during a new registration: in this way, giving the freedom to purchase with %1$sone click only after the first purchase%2$s means the plugin will be able to access directly to all shipping information needed for the checkout.', 'yith-woocommerce-one-click-checkout'), '<b>', '</b>','<br>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="two section section-odd clear">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WOCC_ASSETS_URL?>/images/02-icon.png" alt="icon 02" />
                    <h2><?php _e('Shop page','yith-woocommerce-one-click-checkout');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('In addition to the product detail page, activate the "One-Click" button even in the shop page. More and more fast and efficient, %1$sYITH WooCommerce One-Click Checkout%2$s represents the added value of your e-commerce.', 'yith-woocommerce-one-click-checkout'), '<b>', '</b>');?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_WOCC_ASSETS_URL?>/images/02.png" alt="<?php _e('Shop page','yith-woocommerce-one-click-checkout');?>" />
            </div>
        </div>
    </div>
    <div class="three section section-even clear">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_WOCC_ASSETS_URL?>/images/03.png" alt="<?php _e('Exclusion table','yith-woocommerce-one-click-checkout');?>" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WOCC_ASSETS_URL?>/images/03-icon.png" alt="icon 03" />
                    <h2><?php _e( 'Exclusion table','yith-woocommerce-one-click-checkout');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('Don\'t you want to show the button on any product of the shop? Don\'t worry, the plugin helps you in that, dedicating a correlated %1$stable%2$s to add all those products you want to exclude from the plugin behavior.', 'yith-woocommerce-one-click-checkout'), '<b>', '</b>');?>
                </p>
                <p>
                    <?php echo sprintf(__(' The same applies to %1$sproduct categories%2$s. And there\'s more: on the contrary, if you want to restrict the use of the plugin only to certain product categories, you can activate the "Invert Exclusion" option for a nice and easy solution.', 'yith-woocommerce-one-click-checkout'), '<b>', '</b>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="four section section-odd clear">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WOCC_ASSETS_URL?>/images/04-icon.png" alt="icon 04" />
                    <h2><?php _e('Redirect users','yith-woocommerce-one-click-checkout');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('What do users see after the completing the purchase? Your choice! Decide to redirect them to the %1$s"Thank You"%2$s page, the %1$spayment%2$s page or the %1$sproduct%2$s detail page.%3$sIf these solutions are not enough, you can always specify an URL of a specific page, even a page that is not contained in your site domain.', 'yith-woocommerce-one-click-checkout'), '<b>', '</b>','<br>');?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_WOCC_ASSETS_URL?>/images/04.png" alt="Redirect users" />
            </div>
        </div>
    </div>
    <div class="five section section-even clear">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_WOCC_ASSETS_URL?>/images/05.png" alt="<?php _e('Multiple addresses','yith-woocommerce-one-click-checkout');?>" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WOCC_ASSETS_URL?>/images/05-icon.png" alt="icon 05" />
                    <h2><?php _e('Multiple addresses','yith-woocommerce-one-click-checkout');?></h2>
                </div>
                <p>
                    <?php echo sprintf( __('The great new feature of the premium version of the plugin lets users add different %1$sshipping addresses%2$s, choosing the one to use during the purchase.','yith-woocommerce-one-click-checkout'),'<b>','</b>','<br>'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="six section section-odd clear">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WOCC_ASSETS_URL?>/images/06-icon.png" alt="icon 06" />
                    <h2><?php _e('Stripe integration','yith-woocommerce-one-click-checkout');?></h2>
                </div>
                <p>
                    <?php echo sprintf( __( 'The integration with %1$sYITH WooCommerce Stripe%2$s represents the cherry on top of this plugin. If used in combination with the famous payment plugin, your users will be able to complete even the purchase after choosing the one-click action.','yith-woocommerce-one-click-checkout' ),'<b>','</b>','<br>' ) ?>
                </p>
                <p>
                    <?php echo sprintf( __( '%1$sThe payment will be completely safe%2$s and you won\'t have any commitment, as you won\'t collect any sensible data about credit cards as they will be managed by Stripe. In this way, users will be able to truly complete their purchase, without specifying the payment method.','yith-woocommerce-one-click-checkout' ),'<b>','</b>','<br>' ) ?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_WOCC_ASSETS_URL?>/images/06.png" alt='Stripe integration' />
            </div>
        </div>
    </div>
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    <?php echo sprintf( __('Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce One-Click Checkout%2$s to benefit from all features!','yith-woocommerce-one-click-checkout'),'<span class="highlight">','</span>' );?>
                </p>
                <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight"><?php _e('UPGRADE','yith-woocommerce-one-click-checkout');?></span>
                    <span><?php _e('to the premium version','yith-woocommerce-one-click-checkout');?></span>
                </a>
            </div>
        </div>
    </div>
</div>