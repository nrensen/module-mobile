<div id="mobile_menu" class="mobile_menu left">
</div>
<div id="mobile_menu_aborter" class="mobile_menu_aborter" onclick="$('body').toggleClassName('mobile_leftmenu_visible');"></div>
<script>
    require(['domReady', 'thebuggenie/tbg', 'prototype'], function (domReady) {
        domReady(function () {
            var mm = $('main_menu');
            if (mm.hasClassName('project_context')) {
                mm.select('div.menuitem_container').each(function(elm) {
                    elm.observe('click', function(e) { elm.toggleClassName('selected');e.preventDefault(); });
                });
            }
        });
    });
</script>
