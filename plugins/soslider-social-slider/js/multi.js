var lastSelected = null;

function SOSlider_RBTE_MediaSelect(id) {
    lastSelected = id;
    tb_show('', 'media-upload.php?type=imageTB_iframe=true');
    var oldF = window.send_to_editor;
    var oldR = window.tb_remove;
    window.send_to_editor = function(html) {
        imgurl = jQuery('img',html).attr('src');
        jQuery('#' + lastSelected).val(imgurl);
        tb_remove();
        window.send_to_editor = oldF;
    }
    window.tb_remove = function() {
        oldR();
        window.tb_remove = oldR;
    }
    return false;
}

