/**
 * File global.js.
 *
 * Handles global javascript for your theme.
 */

// Add heading classes
const headings = document.querySelectorAll( 'h1,h2' );
headings.forEach( ( el ) => {
	el.classList.add( 'copy__title' );
} );

const subHeadings = document.querySelectorAll( 'h3,h4,h5,h6' );
subHeadings.forEach( ( el ) => {
	el.classList.add( 'copy__caption' );
} );

// https://daltonwalsh.com/blog/using-the-intersection-observer/
const elementsToLoadIn = new Set( [
	...document.querySelectorAll(
		'.animate'
	),
] );

elementsToLoadIn.forEach( ( el ) => {
	el.classList.add( 'loadin' );
} );

const observerOptions = {
	root: null,
	rootMargin: '0px',
	threshold: 0.5,
};

function observerCallback( entries ) {
	entries.forEach( ( entry ) => {
		if ( entry.isIntersecting ) {
			entry.target.classList.add( 'loaded' );
		}
	} );
}

const observer = new IntersectionObserver( observerCallback, observerOptions );

elementsToLoadIn.forEach( ( el ) => observer.observe( el ) );
