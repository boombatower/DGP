Drupal Game Panel
=================

The only game panel you will ever need!


WELCOME
-------
This is a REALLY (and I mean really) basic source server control panel.
The basic goal behind this project is to have an open source model for creating/destroying game servers with the use of a web interface.
There are no security checks currently in place as I plan on integrating with Drupal later down the road - or if anyone forks it - maybe into a CakePHP platform.
However, at this time, I�m just getting the basic idea established and building the core first.
Let me know at longshot902@gmail.com if you have any questions.

TROUBLESHOOTING
---------------
Some things I found during the creation of the project. Please note that I am not actively look for bugs... these are just some things I've noticed.

UPDATING SERVER
---------------
If you try and update your server and you receive a "Failed to set file attributes." error, then you're php/apache session doesn't have permissions to run the update.
To fix this, ensure the wwwrun user is part of the owner group. To find this run a "ls -l" and notice the group permissions. If you're not in that group, you're not updating the server.
