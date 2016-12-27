(function($){

	FLBuilder.registerModuleHelper('pp-infobox', {

		rules: {
			'box_border_width': {
				number: true
			},
			'icon_font_size': {
				number: true
			},
			'icon_width': {
				number: true
			},
			'image_width': {
				number: true
			},
			'icon_box_size': {
				number: true
			},
			'icon_border_width': {
				number: true
			},
			'icon_border_radius': {
				number: true
			},
			'padding_top': {
				number: true
			},
			'padding_left': {
				number: true
			},
			'title_font_size': {
				number: true
			},
			'text_font_size': {
				number: true
			},
			'pp_infobox_read_more_font_size': {
				number: true
			},
			'animation_duration': {
				number: true
			}
		},

		init: function() {
			var layout = parseInt($('select[name="layouts"]').val());
			var selector = $('#fl-builder-settings-section-type, #fl-builder-settings-section-title, #fl-builder-settings-section-description, #fl-builder-settings-section-pp_infobox_link_type');
			if(5 !== layout) {
				selector.hide();
			}
			$('select[name="layouts"]').on('change', function() {
				layout = parseInt($('select[name="layouts"]').val());
				if(5 !== layout) {
					selector.hide();
				} else {
					selector.show();
				}
			});
		}

	});

})(jQuery);
