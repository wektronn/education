<?php
defined('_JEXEC') or die;

if (JRequest::getCmd("tmpl", "index") == "offline") {
    if (is_file(JPATH_ROOT . "/templates/" . $this->template . "/offline.php")) {
        require_once(JPATH_ROOT . "/templates/" . $this->template . "/offline.php");
    } else {
        if (is_file(JPATH_ROOT . "/templates/system/offline.php")) {
            require_once(JPATH_ROOT . "/templates/system/offline.php");
        }
    }
} else {


    include_once(JPATH_ROOT . "/templates/" . $this->template . '/icetools/vars.php');

    ?>

    <!DOCTYPE html>
    <html xmlns="https://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
    <head>
        <?php if ($this->params->get('responsive_template')) { ?>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php } ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
        <jdoc:include type="head" />
        <meta name="google-site-verification" content="JyFN3ZVoUFHF7Cs4yrJXJEIjKkpQ_BEyj8kuctmSurg" />
        <?php

        // include_once(JPATH_ROOT . "/templates/" . $this->template . '/icetools/css.php');

        $doc->addStyleSheet($this->baseurl. '/templates/' .$this->template. '/css/joomla.css');
        $doc->addStyleSheet($this->baseurl. '/templates/' .$this->template. '/css/modules.css');
        $doc->addStyleSheet($this->baseurl. '/templates/' .$this->template. '/css/general.css');
        $doc->addStyleSheet($this->baseurl. '/templates/' .$this->template. '/css/pages.css');
        if ($this->params->get('responsive_template')) {
            $doc->addStyleSheet($this->baseurl. '/templates/' .$this->template. '/css/responsive.css');
        }
        $doc->addStyleSheet($this->baseurl. '/templates/' .$this->template. '/css/styles/style1.css');
        if ($this->params->get('responsive_template')) {
            $doc->addStyleSheet($this->baseurl. '/templates/' .$this->template. '/css/styles/style1_responsive.css');
        }


        //   $doc->addScript("//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js");
        $doc->addStyleSheet('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        $doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/owl.carousel.css');
        $doc->addStyleSheet("//cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.css");
        $doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/custom.css');

        $doc->addScript("//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js");
        //        $doc->addScript($this->baseurl . '/plugins/content/jllike/js/buttons.js');
        // $doc->addScript("//cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js");
        $doc->addScript("//cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.js");
        $doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/owl.carousel.min.js');
        // $doc->addScript("//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js");
        $doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/equal-columns.js');
        $doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/main.js');
        $doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/chat.js');
        //$doc->addScript($this->baseurl . '/templates/' . $this->template . '/html/com_content/article/table.js');

        ?>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-87269817-1', 'auto');
            ga('send', 'pageview');


        </script>

    </head>

    <body class="<?php echo $pageclass->get('pageclass_sfx'); ?>">
    <script type="text/javascript" src="templates/it_corporate2/js/social_networks.js"></script>


    <div class="container">
        <aside id="sidebar" class="columns clearfix">
            <div id="logo">
                <a href="<?php echo $this->baseurl ?>" class="navbar-brand"></a>
            </div>
            <jdoc:include type="modules" name="mainmenu" />
            <jdoc:include type="modules" name="left" style="sidebar" />
        </aside>
        <section id="content" class="columns">
            <div class="inside">
                <?php if ($this->countModules('search')) { ?>
                    <div id="search">
                        <jdoc:include type="modules" name="search" />
                    </div>
                <?php } ?>
                <?php if ($this->countModules('language')) { ?>
                    <div id="language">
                        <jdoc:include type="modules" name="language" />
                    </div>
                <?php } ?>
                <jdoc:include type="modules" name="breadcrumbs" />
                <?php if ($this->countModules('icecarousel')) { ?>
                    <div id="icecarousel">
                        <jdoc:include type="modules" name="icecarousel" />
                    </div>
                <?php } ?>

                <?php if ($this->countModules('tagline')) { ?>
                    <div id="tagline">
                        <jdoc:include type="modules" name="tagline" />
                    </div>
                <?php } ?>

                <?php if ($this->countModules('services')) { ?>
                    <div id="services" class="clearfix">
                        <jdoc:include type="modules" name="services" />
                    </div>
                <?php } ?>

                <?php if ($this->countModules('mainvideo + mainkotir')) { ?>
                    <div class="kotirov row">

                        <div class="col-md-8">
                            <jdoc:include type="modules" name="mainvideo" />
                        </div>

                        <div class="col-md-4">
                            <jdoc:include type="modules" name="mainkotir" />

                        </div>
                    </div>

                <?php } ?>


                <?php if ($this->countModules('banner')) { ?>
                    <div id="banner" class="clearfix">
                        <jdoc:include type="modules" name="banner" />
                    </div>
                <?php } ?>

                <?php if ($this->countModules('promo1 + promo2 + promo3 + promo4')) { ?>
                    <section id="promo" class="row">

                        <?php if ($this->countModules('promo1')) { ?>
                            <div class="<?php echo $promospan;?>">
                                <jdoc:include type="modules" name="promo1" style="xhtml" />
                            </div>
                        <?php } ?>

                        <?php if ($this->countModules('promo2')) { ?>
                            <div class="<?php echo $promospan;?>">
                                <jdoc:include type="modules" name="promo2" style="xhtml" />
                            </div>
                        <?php } ?>

                        <?php if ($this->countModules('promo3')) { ?>
                            <div class="<?php echo $promospan;?>">
                                <jdoc:include type="modules" name="promo3" style="xhtml" />
                            </div>
                        <?php } ?>

                        <?php if ($this->countModules('promo4')) { ?>
                            <div class="<?php echo $promospan;?>">
                                <jdoc:include type="modules" name="promo4" style="xhtml" />
                            </div>
                        <?php } ?>

                    </section>


                <?php } ?>

                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="bottomcont" />

            </div>


            <!--      + + + +    /* reg form for education pages */ Nastya.Ch   + + + +  -->
            <?php
            $menu = JFactory::getApplication()->getMenu();
            $active = $menu->getActive();
            $itemId = $active->id;
            $itemSection = $active->title;
            ?>

            <?php if (($itemId == "119") || ($itemId == "120") || ($itemId == "121") || ($itemId == "122")):?>

                <div class="education_form">
                    <p class="form_title">Заявка на обучение</p>
                    <div class="form_wrap">

                        <form id="reg_form" method="POST">
                            <p class="required hide_input_form">
                                <input type="text" required class="required" name="section" value="<?php echo $itemSection . " обучение"?>">
                            </p>
                            <p class="form_name">
                                <input type="text" required class="required" name="name" placeholder="Имя">
                            </p>
                            <p class="form_mail">
                                <span class="email_hint">Введите e-mail в форме mybox@mail.com</span>
                                <input type="text" required class="required email_input" name="email" placeholder="E-mail">
                            </p>
                            <p class="form_phone">
                                <input type="text" required class="required" name="phone" placeholder="Phone">
                            </p>
                            <p class="form_name">
                                <input type="text" required class="required" name="town" placeholder="Ваш город">
                            </p>
                            <p class="form_send">
                                <input type="submit" value="Отправить">
                            </p>
                        </form>

                    </div>
                </div>

                <div class="modal_send_form">
                    <div class="send_window">
                        <span class="send_text">Ваша заявка успешно отправлена!</span>
                        <span class="send_btn" onclick="hideShadow()">OK</span>
                    </div>
                </div>
            <?php endif;?>

            <script type="text/javascript">

                $('form#reg_form').submit(function(event) {

                    event.preventDefault();
                    var output = true,
                        array = $(this).serialize();
                    $('input.required', this).addClass('err');
                    var name = this.name,
                        email = this.email,
                        phone = this.phone,
                        town = this.town;

                    $.trim(name.value).length >= 1 ? $(name).removeClass('err') : output = false;
                    $.trim(phone.value).length >= 1 ? $(phone).removeClass('err') : output = false;
                    (/@/.test(email.value)) ? $(email).removeClass('err') : output = false;
                    $.trim(town.value).length >= 1 ? $(name).removeClass('err') : output = false;
                    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){

                        if (output) {
                            $.post('/templates/it_corporate2/post.php', array, function(data) {
                                $('input[type="text"], textarea').val('');
                                $(".wrap-modal div").hide();
                                $(".wrap-modal").fadeIn(100);
                                $("#result").fadeIn(200);
                            });
                        };
                        $(".email_hint").css("display", "none");
                        $(".email_input").css("border-color", "#26373f");
                        $(".modal_send_form").css("display", "flex");
                    } else {
                        $(".email_hint").css("display", "block");
                        $(".email_input").css("border-color", "#ff4c4c");
                    };
                });

                function hideShadow() {
                    $(".modal_send_form").css("display", "none");
                }

                window.onscroll = function() {
                    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
                    $(".modal_send_form").css("top", scrolled);
                };
            </script>
            <!--     - -  - - -    /* reg form for education pages */  Nastya.Ch  - -  - - -  -->


        </section><!-- /content -->

    </div>


    <!-- footer -->
    <footer id="footer">

        <div class="container">
            <jdoc:include type="modules" name="mainmenu" />

            <?php if ($this->countModules('footer1 + footer2 + footer3 + footer4')) { ?>
                <div id="footermods" class="row">

                    <?php if ($this->countModules('footer1')) { ?>
                        <div class="<?php echo $footerspan;?>">
                            <jdoc:include type="modules" name="footer1" style="xhtml" />
                        </div>
                    <?php } ?>

                    <?php if ($this->countModules('footer2')) { ?>
                        <div class="<?php echo $footerspan;?>">
                            <jdoc:include type="modules" name="footer2" style="xhtml" />
                        </div>
                    <?php } ?>

                    <?php if ($this->countModules('footer3')) { ?>
                        <div class="<?php echo $footerspan;?>">
                            <jdoc:include type="modules" name="footer3" style="xhtml" />
                        </div>
                    <?php } ?>

                    <?php if ($this->countModules('footer4')) { ?>
                        <div class="<?php echo $footerspan;?>">
                            <jdoc:include type="modules" name="footer4" style="xhtml" />
                        </div>
                    <?php } ?>

                </div>
            <?php } ?>
            <?/*

        */?>


        </div>


    </footer><!-- footer -->


    <?php if ($this->params->get('go2top')) { ?>
        <a href="#" class="scrollup" style="display: inline; "><?php echo JText::_('TPL_TPL_FIELD_SCROLL'); ?></a>
    <?php } ?>


    <?php if ($this->params->get('styleswitcher')) { ?>
        <script type="text/javascript">

            jQuery.fn.styleSwitcher = function(){
                $(this).click(function(){
                    loadStyleSheet(this);
                    return false;
                });
                function loadStyleSheet(obj) {
                    $('body').append('<div id="overlay" />');
                    $('body').css({height:'100%'});
                    $('#overlay')
                        .fadeIn(500,function(){
                            $.get( obj.href+'&js',function(data){
                                $('#stylesheet').attr('href','<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/styles/' + data + '.css');
                                cssDummy.check(function(){
                                    $('#overlay').fadeOut(1000,function(){
                                        $(this).remove();
                                    });
                                });
                            });
                        });
                }
                var cssDummy = {
                    init: function(){
                        $('<div id="dummy-element" style="display:none" />').appendTo('body');
                    },
                    check: function(callback) {
                        if ($('#dummy-element').width()==2) callback();
                        else setTimeout(function(){cssDummy.check(callback)}, 200);
                    }
                }


                cssDummy.init();
            }


            $('.ice-template-style a').styleSwitcher();
            $('#ice-switcher a').styleSwitcher();


        </script>
    <?php } ?>

    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
        (function(){ var widget_id = '7nrQzTKIVk';var d=document;var w=window;function l(){
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
    <!-- {/literal} END JIVOSITE CODE -->

    </body>
    </html>
<?php } ?>
