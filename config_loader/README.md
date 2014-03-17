Config loader
=============
The config loader reads all config files from a folder. If you use
.htaccess based staging it allows to read files from a folder based
on the stage.

You can set a stage in your .htaccess file like:

    SetEnv STAGE production

Eg. you have different DB settings for your production server (as you
should ;) ). Now your config folder should contain 1 extra folder. In

config/db.ini

you have your regular settings for your development system. And in

config/production/db.ini

you have the live db settings.

The ini files should have the same structure of course.