Asset manager
=============
The asset manager allows an easy way to implement CSS and JS files, if you use different themes in F3. All
you have to do is to create an assets folder in your public folder. In there you create a folder with your
theme name (eg. 'default', if your main theme is called 'default'). There you store all css and js files in
their usual folders.

Save your current theme name in the hive, eg. $f3->set('theme', 'default').

Style sheets
------------
Add a css_assets function in your layout or header file. As parameter you use an array with all css files
you want to add. You can also add external URLs eg from CDNs, the asset manager recognizes them automatically.

Example:

    {{@css_assets(
    "css/bootstrap.min.css",
    "font-awesome/css/font-awesome.css",
    "css/style.css"
    )}}


Javascript
----------
Javascript works the same.

Example:

    {{@js_assets(
    "http://code.jquery.com/jquery-1.10.1.min.js",
    "js/bootstrap.min.js",
    "js/script.js"
    )}}

***

#### License

Copyright (C) 2014 Oliver Hermanni

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.