# Pronobis Demenzbetreuung Wordpress Theme

![alt text](http://www.pronobis.nrw/wp-content/themes/pronobis/screenshot.png)


## Description
A wordpress theme developed as a project for my bachelor thesis in computer sciences. Go to the deployed website: [http://www.pronobis.nrw](http://pronobis.nrw)

## Features
- watch project including livereload with browsersynch and compile sass to css to via gulp
- build project with minification, concatenation, prefixing, uglifying ...

## Requirements
- Node.js (https://nodejs.org/) including npm (https://www.npmjs.com/)

## Vendor
- animate.css
- normalize.css
- flexboxgrid.css
- jQuery

## Quick Start
<pre>
  <code>$ cd .../pronobis/wp-content/themes/pronobis/</code>
  <code>$ npm install</code>
  <code>$ npm run watch</code> OR <code>$ npm run build</code>
</pre>

## Note
Don't forget to edit localhost path in gulpfile.js, set wordpress database configuration properly and regenerate permalinks.
