<div style="clear: both; margin-bottom: 5px;"> </div>
<a href="javascript:void(0);" onclick="$('issue_details').toggleClassName('detailed');" class="issue_details_detailed_toggler"><?php echo __('Show / hide more details'); ?>&nbsp;&raquo;</a>
<script type="text/javascript">
    require(['domReady', 'thebuggenie/tbg', 'prototype'], function (domReady) {
        domReady(function () {
            Event.observe(window, 'resize', function() {
                if (document.viewport.getWidth() > 900) {
                    $('issue_details').dataset.resizable = true;
                } else {
                    $('issue_details').dataset.resizable = undefined;
                }
            });
    });
</script>
