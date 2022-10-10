Instead of creating new markup from scratch every time I make a website, I've created a boilerplate website that comes with many features out of the box. Feel free to use the whole thing or just parts!

Features:
- Responsive
- Mobile Nav
- Utility Classes
- CSS Config file
- Ready to use Hero, Column, Navbar, etc blocks

Working Demo:
https://joshsboiler.netlify.app/


How to use Colors/HSL
- All colors use HSL
- All custom properties use the formate of #, #%, $%
- When use in css, it is called as hsl( var(--custom-prop) )
- This is so you can easily use transparency, for example 0.3 transparency:
    backgroud-color : hsla( var(--custom-prop), 0.3 )

---

UTILITY CLASSES
Use Config file to set generic styles/fonts


COLUMN STYLES
.even-columns-2 -> 2 evenly sized columns, collapse to 1 
.even-columns-3 -> 3 evenly sized columns, collapse to 1 
.even-columns-4 -> 4 evenly sized columns, collapse to 2 then 1

.gap0 - .gap7 


SECTION COLOUR THEMES
base colours
.mid-contrast-theme
.high-contrast-theme


CONTAINER CLASSES
(margin-inline auto, position relative)
extra small - .container-ex-small
small - .container-sm
base - .container
large - .container-lg


POSITIONING CLASSES
margin-left : ml1-ml7
margin-right : mr1-mr7
margin-block : my1-my7
margin-inline : mx1-mx7
margin-inline-auto :  mxa

padding-left : pl1-pl7
padding-right : pr1-pr7
padding-inline : px1-px7
padding-block : px1-px7

text-center : horizontal center
xycenter : horizontal/vertical center (grid)


FONT STYLES
font size : fs1-fs7
