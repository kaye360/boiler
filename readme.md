# BoilerPlate Website
Instead of creating new markup from scratch every time I make a website, I've created a boilerplate website that comes with many features out of the box. Feel free to use the whole thing or just parts!

## Live Demo:
https://www.joshkaye.ca/projects/boiler/

## Features:
- Responsive
- Mobile Nav
- Utility Classes
- Ready to use:
  - Hero
  - Columns
  - Responsive navbar with dropdown menus
  - Styled forms and buttons
- PHP header and footer includes
- Use CSS Config file to set generic styles/fonts
- Comes with SVG Social Icons



## How to use Colors/HSL
- All colors use HSL
- All custom properties use the formate of #, #%, $%
- When use in css, it is called as hsl( var(--custom-prop) )
- This is so you can easily use transparency, for example 0.3 transparency:
    backgroud-color : hsla( var(--custom-prop), 0.3 )

---


### UTILITY CLASSES
These are classes I find commonly reused


### COLUMN STYLES
- .even-columns-2 -> 2 evenly sized columns, collapse to 1 
- .even-columns-3 -> 3 evenly sized columns, collapse to 1 
- .even-columns-4 -> 4 evenly sized columns, collapse to 2 then 1

#### COLUMN MODIFIERS
- .gap-0 - .gap-7 
- justify-items-center
- align-items-center

### SECTION COLOUR THEMES
- base colours (no class needed)
- .mid-contrast-theme
- .high-contrast-theme

### CONTAINER CLASSES
- (All containers have: margin-inline auto, position relative, padding-inline-default)
- extra small - .container-ex-small
- small - .container-sm
- base - .container
- large - .container-lg
- full height - .full-height

### POSITIONING CLASSES
- ml, mr, mt, mb, mx, my (Margin - left, right, top, bottom, inline, block)
- mxa (margin-inline-auto)
- pl, pr, pt, pb, px, py, pxd, pyd (Padding - left, right, top, bottom, inline, block, inline-default, block-default)

- text-center : horizontal center
- xycenter : horizontal/vertical center (Uses grid)

### FONT STYLES
- fs1 to fs7 (7 responsive sizes that grow and shrink with viewport width)
- clr-pri-1 to clr-pri-7 (7 shades of primary color) 
- clr-sec-1 to clr-sec-7 (7 shades of secondary color) 
- clr-ter-1 to clr-ter-7 (7 shades of tertiary color) 

### IMAGE STYLES
- .cover-image -> Image full height, object-fit : cover
- .width-100 -> width : 100%
- .avatar -> circular image

## TODO
- add phone/email to navbar
- back to top button
- aria