( function( document ) {
    'use strict';

    let isRunning = false;
    let focusList = [];
    let focusIndex = 0;

    const mappings = {
        a: 'link',
        button: 'button',
        h2: 'heading',
        p: 'paragraph',
        img: 'image',

    };

    function computeAccessibleName( element ) {
        const content = element.textContent.trim();

        if ( element.getAttribute( 'aria-label' ) ) {
            return element.getAttribute( 'aria-label' );
        } else if ( element.getAttribute( 'alt' ) ) {
            return element.getAttribute( 'alt' );
        }

        return content;
    }

    const announcers = {



        link( element ) {
            say( ` ${ computeAccessibleName( element ) }. Щоб перейти нажміть Enter.` );
        },

        button( element ) {
            say( `Кнопка ${ computeAccessibleName( element ) }. Щоб нажати на кнопку нажміть Enter.` );
        },

        heading( element ) {
            const level = element.getAttribute( 'aria-level' ) || element.tagName[ 1 ];

            say( `Heading level ${ level }, ${ computeAccessibleName( element ) }` );
        },

        paragraph( element ) {
            say( element.textContent );
        },

        image( element ) {
            say( `Image, ${ computeAccessibleName( element ) }` );
        },

        default( element ) {
            say( `  ${ computeAccessibleName( element ) }` );
        }


    };

    function addStyles() {
        const styleElement = document.createElement( 'style' );

        styleElement.textContent = `[tabindex="-1"] {
			outline: none;;
		}
		[data-sr-current] {
			outline: 5px rgba( 0, 0, 0, .7 ) solid !important;
		}
		html[data-sr-current] {
			outline-offset: -5px;
		}`;

        document.head.appendChild( styleElement );
    }

    function say( speech, callback ) {
        const text = new SpeechSynthesisUtterance( speech );

        if ( callback ) {
            text.onend = callback;
        }

        speechSynthesis.cancel();
        speechSynthesis.speak( text );
    }

    function computeRole( element ) {
        const name = element.tagName.toLowerCase();

        if ( element.getAttribute( 'role' ) ) {
            return element.getAttribute( 'role' );
        }

        return mappings[ name ] || 'default';
    }

    function announceElement( element ) {
        const role = computeRole( element );

        if ( announcers[ role ] ) {
            announcers[ role ]( element );
        } else {
            announcers.default( element );
        }
    }

    function createFocusList() {
        focusList.push( ...document.querySelectorAll( ' body >:not( [aria-hidden=true] )' ) );

        focusList = focusList.filter( ( element ) => {
            const styles = getComputedStyle( element );

            if ( styles.visibility === 'hidden' || styles.display === 'none' ) {
                return false;
            }

            return true;
        } );

        focusList.forEach( ( element ) => {
            element.setAttribute( 'tabindex', element.tabIndex );
        } );
    }

    function getActiveElement() {
        if ( document.activeElement && document.activeElement !== document.body ) {
            return document.activeElement;
        }

        return focusList[ 0 ];
    }

    function focus( element ) {
        if ( element === document.body ) {
            element = document.documentElement;
        }

        element.setAttribute( 'data-sr-current', true );
        element.focus();

        announceElement( element );
    }

    function moveFocus( offset ) {
        const last = document.querySelector( '[data-sr-current]' );

        if ( last ) {
            last.removeAttribute( 'data-sr-current' );
        }

        if ( offset instanceof HTMLElement ) {
            focusIndex = focusList.findIndex( ( element ) => {
                return element === offset;
            } );

            return focus( offset );
        }

        focusIndex = focusIndex + offset;

        if ( focusIndex < 0 ) {
            focusIndex = focusList.length - 1;
        } else if ( focusIndex > focusList.length - 1 ) {
            focusIndex = 0;
        }

        focus( focusList[ focusIndex ] );
    }

    function start() {
        say( 'Screen reader on', () => {
            moveFocus( getActiveElement() );

            isRunning = true;
        } );
    }

    function stop() {
        const current = document.querySelector( '[data-sr-current]' );

        if ( current ) {
            current.removeAttribute( 'data-sr-current' );
        }

        focusIndex = 0;
        isRunning = false;

        say( 'Screen reader off' );
    }

    function keyDownHandler( evt ) {
        if (  evt.keyCode === 32 ) {
            evt.preventDefault();

            if ( !isRunning ) {
                start();
            } else {
                stop();
            }
        }

        if ( !isRunning ) {
            return false;
        }

        if ( evt.altKey && evt.keyCode === 40 ) {
            evt.preventDefault();

            moveFocus( evt.shiftKey ? -1 : 1 );
        } else if ( evt.keyCode === 9 ) {
            setTimeout( () => {
                moveFocus( document.activeElement );
            }, 0 );
        }
    }


    createFocusList();

    document.addEventListener( 'keydown', keyDownHandler );
    }( document ) );

// var body = document.getElementsByTagName('body')[0];
// var btn = document.getElementsByClassName('na')[0];
// var btnMain = document.getElementsByClassName('nax')[0];
// var txt = document.getElementsByClassName('txt')[0];
// var decFnt = document.getElementById('decreaseFont');
// var incFnt = document.getElementById('increaseFont');
// var defFont = body.style.fontSize;
// var setDefFnt = document.getElementById('default');
//
// var getFontSize = function (b) {
//     return parseFloat(getComputedStyle(b, null).fontSize);
// };
//
//
// incFnt.addEventListener('click', function(){
//
//     body.style.fontSize = getFontSize(body) + 140+'%';
//     btn.style.fontSize = getFontSize(btn) +10+'px';
//     txt.style.fontSize = getFontSize(txt)+10+'px';
//     btnMain.style.fontSize = getFontSize(btnMain)+10+'px';
//
//
// }, false);
//
//
// setDefFnt.addEventListener('click', function(){
//     body.style.fontSize = defFont;
//     btn.style.fontSize = defFont;
//     txt.style.fontSize = defFont;
// }, false);
//

var min=16;
var max=22;
function plusSize() {
    var p  = document.getElementsByClassName('p');
    for(i=0;i<p.length;i++) {
        if(p[i].style.fontSize) {
            var s = parseInt(p[i].style.fontSize.replace("px",""));
        } else {
            var s = 16;
        }
        if(s!=max) {
            s += 2;
        }
        p[i].style.fontSize = s+"px"
    }
}
function minusSize() {
    var p = document.getElementsByClassName('p');
    for(i=0;i<p.length;i++) {
        if(p[i].style.fontSize) {
            var s = parseInt(p[i].style.fontSize.replace("px",""));
        } else {
            var s = 16;
        }
        if(s!=min) {
            s -= 2;
        }
        p[i].style.fontSize = s+"px"
    }
}


