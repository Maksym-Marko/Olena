/**
 * This file contains styles for the editor and frontend
 *
 * @package Olena Theme
 * @author Maksym Marko <support@markomaksym.com.ua>
 *
 * @link https://markomaksym.com.ua/
 */

/*
 * Core blocks customization
 */

/* block: "core/button" */
/** the property sets a bright style to a button */
wp.blocks.registerBlockStyle( 'core/button', 
    {
        name: 'bright',
        label: 'Bright Button',
    }
);

/** the property sets a "main" outline style to a button */
wp.blocks.registerBlockStyle( 'core/button', 
    {
        name: 'main-outline',
        label: 'Main Outline',
    }
);

/* block: "core/group" */
/** the property sets position:relative and overflow:hidden to a group */
wp.blocks.registerBlockStyle( 'core/group', 
    {
        name: 'animation-wrapper',
        label: 'Wrapper',
    }
);

/* block: "core/group" */
/** the property sets position:fixed to a group when page is scrolled down */
wp.blocks.registerBlockStyle( 'core/group', 
    {
        name: 'freeze-on-scroll',
        label: 'Freeze',
    }
);

/** the property sets animation (fixed on the page scroll) to a group */
wp.blocks.registerBlockStyle( 'core/group', 
    {
        name: 'animation-pointer',
        label: 'Pointer',
    }
);

/** the property sets animation (display an element on the page scroll) to a group */
wp.blocks.registerBlockStyle( 'core/group', 
    {
        name: 'animation-descriptor',
        label: 'Descriptor',
    }
);

/** the property sets box-shadow to a group */
wp.blocks.registerBlockStyle( 'core/group', 
    {
        name: 'highlighted',
        label: 'Highlighted',
    }
);

/* block: "core/post-template" */
wp.blocks.registerBlockStyle( 'core/post-template', 
    {
        name: 'grid-modern',
        label: 'Grid Modern',
    }
);

/** add padding for a search field */
wp.blocks.registerBlockStyle('core/search',
    {
        name: 'high-search',
        label: 'High Search',
    }
);

/** core/categories modern list */
wp.blocks.registerBlockStyle('core/categories',
    {
        name: 'modern-list',
        label: 'Modern List',
    }
);

/** core/query-pagination-numbers modern list */
wp.blocks.registerBlockStyle('core/query-pagination-numbers',
    {
        name: 'rounded-numbers',
        label: 'Rounded',
    }
);

/** core/post-terms rounded */
wp.blocks.registerBlockStyle('core/post-terms',
    {
        name: 'rounded-terms',
        label: 'Rounded',
    }
);

/** core/post-author blog style */
wp.blocks.registerBlockStyle('core/post-author',
    {
        name: 'blog-style',
        label: 'Blog Style',
    }
);

/** core/post-navigation-link blog style */
wp.blocks.registerBlockStyle('core/post-navigation-link',
    {
        name: 'blog-style',
        label: 'Blog Style',
    }
);

/** core/comments blog style */
wp.blocks.registerBlockStyle('core/comments',
    {
        name: 'blog-style',
        label: 'Blog Style',
    }
);
