Config loader
=============
The config loader reads all config files from a folder. Just include
the file in your source.

If you use .htaccess based staging it allows to read files from a
folder based on the stage.

You can set a stage in your .htaccess file like:

    SetEnv STAGE production

Eg. you have different DB settings for your production server (as you
should ;) ). Now your config folder should contain 1 extra folder. In

    config/db.ini

you have your regular settings for your development system. And in

    config/production/db.ini

you have the live db settings. As they are loaded after the regular
config files they overwrite all settings. Of course both ini files
should have the same structure, like

    [DB]
    host=localhost
    port=3306
    dbname=your_database
    username=root
    password=

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