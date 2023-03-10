( function() {
	const menu2ScreenWidth = udesign_responsive_menu_2_vars.menu_2_screen_width;
	const menu2Fixed = udesign_responsive_menu_2_vars.menu_2_fixed;
	jQuery( '#navigation-menu' ).meanmenu( {
		meanMenuClose: 'X', // single character you want to represent the close menu button
		meanMenuCloseSize: '18px', // set font size of close button
		meanMenuOpen: '<span></span><span></span><span></span>', // text/markup you want when menu is closed
		meanMenuFixed: menu2Fixed, // fix the position of the menu
		meanRevealPosition: 'right', // left right or center positions
		meanRevealPositionDistance: '0', // Tweak the position of the menu
		meanRevealColour: '', // override CSS colours for the reveal background
		meanRevealHoverColour: '', // override CSS colours for the reveal hover
		meanScreenWidth: menu2ScreenWidth, // set the screen width you want meanmenu to kick in at
		meanNavPush: '', // set a height here in px, em or % if you want to budge your layout now the navigation is missing.
		meanShowChildren: true, // true to show children in the menu, false to hide them
		meanExpandableChildren: true, // true to allow expand/collapse children
		meanExpand: '+', // single character you want to represent the expand for ULs
		meanContract: '-', // single character you want to represent the contract for ULs
		meanRemoveAttrs: false, // true to remove classes and IDs, false to keep them
	} );
}( jQuery ) );
