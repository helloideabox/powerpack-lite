;(function($) {

	/**
	 * Closes PowerPack templates panel.
	 *
	 * @since 1.0
	 * @access private
	 * @method _closePanel
	 */
	$('.pp-panel .fl-builder-panel-actions .pp-panel-close').on('click', function() {
		$('.pp-panel').stop(true, true).animate({ right: '-350px' }, 500, function(){ $(this).hide(); });
		$('.fl-builder-bar .pp-add-template-button').stop(true, true).fadeIn();
        $('.fl-builder-panel-actions .pp-search-input').val('').trigger('keyup');
	});

    $('.fl-builder-add-content-button').on('click', function() {
        $('.fl-builder-panel-actions .pp-search-input').val('').trigger('keyup').focus();
		setTimeout(function() {
			$('.fl-builder-panel-actions .pp-search-input').focus();
		}, 500);
    });

    /**
     * Panel search
     */
	if ( $('body').hasClass('bb-powerpack-search-enabled') ) {
    	$('.fl-builder-panel .fl-builder-panel-actions').append('<div class="pp-search-bar"> <input type="text" class="pp-search-input" value="" placeholder="Search..." /> </div>');
	}
    $('.fl-builder-panel-actions .pp-search-input').on('keyup', function() {
        if( $(this).val().length >= 3 ) {
            var search_text = $(this).val().toLowerCase();
            $('.fl-builder-panel, .pp-panel').find('.fl-builder-block-title').each(function () {
                if( $(this).text().trim().toLowerCase().search( search_text ) !== -1 ) {
                    $(this).parent().addClass('pp-show-block');
                    $(this).parents('.fl-builder-blocks-section').addClass('fl-active');
                    $(this).parents('.fl-builder-blocks-section-content').find('.fl-builder-block:not(.pp-show-block)').addClass('pp-hide-block');
                    $(this).parent().removeClass('pp-hide-block');
                } else {
                    if( $(this).parent().hasClass('pp-show-block') ) {
                        $(this).parent().removeClass('pp-show-block').addClass('pp-hide-block');
                    }
                }
            });
        } else {
            if( $('.fl-builder-blocks-section.fl-active').length > 1 ) {
                $('.fl-builder-blocks-section').removeClass('fl-active');
            }
            $('.fl-builder-blocks-section-content').removeClass('pp-hide-block');
            $('.fl-builder-block').removeClass('pp-hide-block');
            $('.fl-builder-block').removeClass('pp-show-block');
        }
    });

	/**
	 * Preview
	 */
	$('.pp-preview-button').on('click', function() {
		$('html').toggleClass('pp-previewing');
		if ( $('html').hasClass('pp-previewing') ) {
			$(this).find('span').removeClass('fa-eye').addClass('fa-eye-slash');
			if ( $('.fl-builder-panel').is(':visible') ) {
				$('.fl-builder-panel').stop(true, true).animate({ right : '-350px' }, 500);
			}
			$('.fl-builder-bar').stop(true, true).slideUp(500);
		} else {
			$(this).find('span').removeClass('fa-eye-slash').addClass('fa-eye');
			$('.fl-builder-panel').stop(true, true).animate({ right : 0 }, 500);
			$('.fl-builder-bar').stop(true, true).slideDown(500);
			setTimeout(function() {
				$('.fl-builder-panel-actions .pp-search-input').focus();
			}, 500);
		}
	});

	$(window).load(function() {
		$('.fl-builder-panel-actions .pp-search-input').focus();
	});

})(jQuery);
