# Web-Interactive-Narrative-WPPlugin
This Wordpress plugin creates a story listing page, that created links and allows user to play the narratives in a new window. This is targeted at works from interactive narrative tools that export to a stand alone web format like Inkle's Inky or Twine. The only requirements are that your story is within its own folder under the provided ExportedNarratives directory and the starting point for the sorty is an index.html file e.g.

- ExportedNarratives/
- - My Story 01/
- - - assets/
- - - - image01.png
- - - index.html
- - My Story 02/
- - - index.html


To Use:

* Add "Interactive Narrative Web Export Plugin For Wordpress" to your plugins directory in Wordpress
* Upload your exported narrative to the ExportedNarratives folder (requires access to your site's File manager/CPanel)
* Activate the plugin
* Use the short code [list-web-narratives] to insert a list of the narratives that exist in the directory. The list will create hyperlinks to the stories.
* You are now done, check out the page and see how it looks.
