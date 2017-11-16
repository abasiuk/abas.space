/**
 * Created by Everad on 01.11.2017.
 */

jQuery(document).ready(function () {
    var box = jQuery('section.work').find('.work-box'),
        boxHeight = 100,
        top = 200;

    box.each(function (index) {
        var h = parseInt(jQuery(this).css('height')) + 60;
        boxHeight += h;
        jQuery(this).css('top', top + 'px');
        top += h;
    });

    jQuery('section.work').find('.container').css('height', boxHeight + "px");
    console.log(boxHeight);
});