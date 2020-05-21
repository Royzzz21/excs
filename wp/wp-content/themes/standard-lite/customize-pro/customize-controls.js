( function( api ) {

	// Extends our custom "standard-lite" section.
	api.sectionConstructor['standard-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );