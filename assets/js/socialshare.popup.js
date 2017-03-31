jQuery(document).ready(function($) {

    jQuery('.sharer-buttons a').live('click', function(){

        newwindow=window.open($(this).attr('href'),'','height=450,width=700');

        if (window.focus) {newwindow.focus()}

        return false;

    });

});
