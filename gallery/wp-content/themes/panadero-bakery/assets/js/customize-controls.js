( function( api ) {

	// Extends our custom "panadero-bakery" section.
	api.sectionConstructor['panadero-bakery'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );