<?php

/** @var $atts array */

$caption = empty($atts['caption']) ? 'ОФОРМИТЬ ПОДПИСКУ' : $atts['caption'];
$subscribeCaption = empty($atts['subscribe_caption']) ? 'ПОДПИСАТЬСЯ!' : $atts['subscribe_caption'];

?>
<div class="registration-form registration-form-on-page" style="width:100%">
    <form method="post" class="registration-form-form" style="position:relative;top:0;left:0;transform:unset">
        <div class="head-form widget-area" style="color:#3d3d3d">
            <?php echo $caption ?>
        </div>
        <div class="row">
            <input class="reg_email" type="email" name="email" value="" placeholder="Ваш email"
                   required="required">
        </div>
        <div class="row row-submit">
            <button class="btn submit" type="submit"><?php echo $subscribeCaption ?>
                <span class="arrow">arrow</span>
            </button>
        </div>
    </form>

    <script>
        jQuery(function ($) {
            $('.registration-form.registration-form-on-page .submit').hover(function () {
                $(".registration-form.registration-form-on-page .arrow").css('background', 'url(<?php bloginfo('stylesheet_directory') ?>/img/bg-btn.png) no-repeat scroll 0% 100%');
            });
            $('.registration-form.registration-form-on-page .submit').mouseout(function () {
                $(".registration-form.registration-form-on-page .arrow").css('background', 'url(<?php bloginfo('stylesheet_directory') ?>/img/bg-btn.png) no-repeat scroll 0% 0%');
            });

            function validateEmail(email) {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }

            $(".registration-form-on-page .registration-form-form button.submit").click(function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                var email = $.trim(form.find('.reg_email').val());
                form.find('.reg_email').val(email);
                if (!email) {
                    alert('Пожалуйста введите значение email');
                    return false;
                }

                if (!validateEmail(email)) {
                    alert('Пожалуйста введите правильное значение email');
                    return false;
                }

                window.open("<?php echo esc_html(get_home_url() . $atts['link']) ?>", '_blank');

                $.post('<?php bloginfo('stylesheet_directory') ?>/ajax.php',
                    {email: email},
                    function (data) {
                        if (data && data.status) {
                            if (data.status == 'success') {
                                //alert("Вы успешно подписаны!");
                                alert("Ссылка открылась в новом окне.");
                                //window.open("<?php echo esc_html(get_home_url() . $atts['link']) ?>", '_blank');
                                $('.registration-form-form .reg_email').val('');
                            } else {
                                alert(data.msg);
                            }
                        } else {
                            alert("Произошла ошибка! Пожалуйста, повторите попытку позже.");
                        }
                    }
                ).fail(function () {
                    alert("Произошла ошибка! Пожалуйста, повторите попытку позже.");
                });

                return false;
            });

        });
    </script>
</div>
