# context-dictionary
A basic bilingual dictionary (EN>ES) that allows entry lookup by entering a word in context (i.e. as part of a sentence). This returns the entry with appropriate word class.

Dependencies

1) WampServer<br/>
2) TreeTagger (Author: Helmut Schmid, CIS, Ludwig-Maximilians-Universität, Germany)<br/>
http://www.cis.uni-muenchen.de/~schmid/tools/TreeTagger/<br/>
3) Perl<br/>
4) Python

Once dependencies are set up and running, open create_dict.html and upload enes_data.xml in order to create/populate the DB tables with the dictionary data.

Next copy the the PHP, XML, XSL and HTML files into an appropriate directory within C:/wamp/www, then copy the .py file into the Python root directory.

Launch using localhost/ followed by the path to contextsearch.html
