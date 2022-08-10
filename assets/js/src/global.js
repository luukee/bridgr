/**
 * File global.js.
 *
 * Handles global javascript for your theme.
 */
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
