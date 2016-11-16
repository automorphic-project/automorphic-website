Description
-----------
This is a new version of the website for the [Automorphic project](http://automorphic.newark.rutgers.edu), enabling a comment system, improved tag lookup and a full-powered online view of its contents.


Configuration
-------------

Below you will find rough instructions to create a local copy of the Stacks project website on your system. Requirements:

1. Apache with mod-rewrite and php enabled
2. php-sqlite
3. UNIX command line tools, in particular make, python, and git
4. a recent version of TeX Live (2012 or later is fine)
5. a directory `base`
6. the url `http://localhost:8080` points to `base/automorphic-website`

Here are the instructions:

1. clone `automorphic-website` using `git clone https://github.com/automorphic-project/automorphic-website`

2. change directories to `automorphic-website/` and initialize the submodules using `git submodule init` and `git submodule update`

3. change directories to `automorphic-website/` and clone the Stacks project into the (not yet existing) `tex/` subdirectory using `git clone git://github.com/automorphic-project/automorphic-project tex`

4. change one occurence of `http://automorphic.newark.rutgers.edu/tag/` in `automorphic-website/tex/scripts/tag_up.py` to `http://localhost:8080/tag/

5. run `make tags` in `automorphic-website/tex/`

6. clone `automorphic-tools` in the `base` directory using `git clone https://github.com/automorphic-project/automorphic-tools`

7. change directories to `automorphic-tools` and create the database by calling `python create.py`

8. back in the `base` directory execute the following commands:

        mkdir automorphic-website/database
        chmod 0777 automorphic-website/database
        mv automorphic-tools/automorphic.sqlite automorphic-website/database
        chmod 0777 automorphic-website/database/automorphic.sqlite
This will create a directory with the database in it with the correct permissions for the webserver. To set permissions for the cache correctly execute

        chmod 0777 automorphic-website/php/cache
9. change directory into automorphic-website and edit the file `conf.ini` setting database = "database/automorphic.sqlite", directory = "", and project = "/path/to/base/automorphic-website/tex"

10. sanity check: at this point if you point your browser to `http://localhost:8080` you should not get an error concerning the database

11. get the correct styling in EpicEditor by executing

        ln -s ../../../../../css/automorphic-editor.css js/EpicEditor/epiceditor/themes/editor/automorphic-editor.css
        ln -s ../../../../../css/automorphic-preview.css js/EpicEditor/epiceditor/themes/preview/automorphic-preview.css
from the `automorphic-website` directory

12. make XyJax work by editing the last line of `automorphic-website/js/XyJax/extensions/TeX/xypic.js` and replacing `MathJax.Ajax.loadComplete("[MathJax]/extensions/TeX/xypic.js");` by `MathJax.Ajax.loadComplete("/js/XyJax/extensions/TeX/xypic.js");`

13. change directories to `automorphic-tools` and update the database by calling `python update.py` as well as `python macros.py`

14. create a directory `automorphic-website/data` by executing `mkdir automorphic-website/data`, change directories to `automorphic-tools`, and create the graph files by calling `python graphs.py`

Please contact the maintainer or create an issue if you encounter problems.


Updating the website
--------------------

1. Update the `automorphic-website/tex` folder using `git pull`
2. run `make tags` as in step 5 above
3. Run steps 13 and 14 above
