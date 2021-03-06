jQuery(document).ready(function() {
    jQuery('.sos-sortable').sortable();
    jQuery('.sos-conf-trash').bind('click', function() {
        var parent = jQuery(this).parent();
        jQuery('.sos-conf-center > ul').append(parent);
    });
    jQuery('.ui-icon-arrow-1-w').bind('click', function() {
        var parent = jQuery(this).parent();
        jQuery('.sos-conf-left > ul').append(parent);
    });
    jQuery('.ui-icon-arrow-1-e').bind('click', function() {
        var parent = jQuery(this).parent();
        jQuery('.sos-conf-right > ul').append(parent);
    });

    jQuery('.sos-conf-images > span').bind('click', function() {
        var parent = jQuery(this).parent();
        jQuery(parent).find('.sos-image-selected').removeClass('sos-image-selected');
        jQuery(this).addClass('sos-image-selected');
        var id = jQuery(parent).attr('data-id');
        var v = jQuery(this).attr('data-val');
        jQuery('li[data-name="' + id + '"]').attr('data-image', v);
    });
    jQuery('.sos-conf-edit').bind('click', function() {
        var parent = jQuery(this).parent();
        jQuery('.sos-conf-images').hide();
        jQuery('div[data-id="' + jQuery(parent).attr('data-name') + '"]').show();
    });

    jQuery('.sos-conf-images .ui-icon').bind('click', function() {
        jQuery(this).parent().parent().hide();
    });

    jQuery('#btnSave').bind('click', function() {
        var l_alignment = jQuery('[name="left_alignment"]:checked').val();
        var r_alignment = jQuery('[name="right_alignment"]:checked').val();
        var l_items = new Array();
        var r_items = new Array();
        var c_items = new Array();
        jQuery('.sos-conf-left > ul > li').each(function() {
            var item = {};
            item['id'] = jQuery(this).attr('data-name');
            item['image'] = jQuery(this).attr('data-image');
            l_items.push(item);
        });
        jQuery('.sos-conf-right > ul > li').each(function() {
            var item = {};
            item['id'] = jQuery(this).attr('data-name');
            item['image'] = jQuery(this).attr('data-image');
            r_items.push(item)
        });
        jQuery('.sos-conf-center > ul > li').each(function() {
            var item = {};
            item['id'] = jQuery(this).attr('data-name');
            item['image'] = jQuery(this).attr('data-image');
            c_items.push(item)
        });
        var data = {
            action: 'sos_visual_config',
            l_alignment: l_alignment,
            r_alignment: r_alignment,
            l_items: l_items,
            r_items: r_items,
            c_items: c_items,
            l_dimensions: { height: jQuery('#left_height').val(), width: jQuery('#left_width').val() },
            r_dimensions: { height: jQuery('#right_height').val(), width: jQuery('#right_width').val() }
        };
        var oldThis = this;
        jQuery(this).hide();
        jQuery('#sos-saving').show();
        jQuery.post(ajaxurl, data, function(response) {
            var obj = jQuery.parseJSON(response);
            alert(obj.message);
            jQuery(oldThis).show();
            jQuery('#sos-saving').hide();
        });
    });
});