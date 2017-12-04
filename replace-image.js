/*Change the image url*/
var image_url = 'http://via.placeholder.com/350x150';

jQuery('img').error(function(){
        jQuery(this).attr('src', image_url);
		jQuery(this).parent().attr('href', image_url);
});
