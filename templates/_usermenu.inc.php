<div id="mobile_usermenu" class="mobile_menu right">
</div>
<div id="mobile_usermenu_aborter" class="mobile_menu_aborter" onclick="$('body').toggleClassName('mobile_rightmenu_visible');"></div>
<script type="text/javascript">
    require(['domReady', 'thebuggenie/tbg', 'prototype'], function (domReady, TBG) {
        domReady(function () {
            TBG.Core._mobileMenuMover = function () {
                if (document.viewport.getWidth() > 900) {
                    if ($('mobile_usermenu').childElements().size() > 0) {
                        var um = $('user_menu');
                        if (um) {
                            $('header_userinfo_details').insert({after: um.remove()});
                        }
                    }
                    if ($('mobile_menu').childElements().size() > 0) {
                        $('header_userinfo').insert({
                            before: $('main_menu').remove(),
                            after: $('global_submenu').remove()
                        });
                    }
                } else {
                    if ($('mobile_usermenu').childElements().size() == 0) {
                        var um = $('user_menu');
                        if (um) {
                            $('mobile_usermenu').insert(um.remove());
                        }
                    }
                    if ($('mobile_menu').childElements().size() == 0) {
                        $('mobile_menu').insert($('main_menu').remove());
                        $('mobile_menu').insert($('global_submenu').remove());
                    }
                }
            };

            if ($('header_avatar')) {
                $('header_avatar').observe('click', function (e) {
                    $('body').toggleClassName('mobile_rightmenu_visible');
                    e.preventDefault();
                });
            }
            Event.observe(window, 'resize', TBG.Core._mobileMenuMover);
            TBG.Core._mobileMenuMover();
        });
    });
</script>
