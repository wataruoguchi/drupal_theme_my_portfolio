#Portfolio website with Drupal 7
###Aims
* Learning Drupal 7
* Building my Portfolio

###Process
[Take a look on my  Gist](https://gist.github.com/wataruoguchi/9da00a876961b8e3aff2)

###Tools
* Git
* Compass
* Sublime Text 2 (Emmet, php validator)

Sass files are compiled by Compass: ``$ compass watch .`` in working directory.

###Check it out!
[Live Website](wataruoguchi.com)

###Feedback
I got some feedback by my friend, [Shumpei](https://github.com/shumpeiKishi/). He's one of quick learners I've ever known, also good hard worker.

>1. JS: Use Drupal.behavior instead of $(document).ready(). http://www.amazeelabs.com/en/blog/drupal-behaviors-quick-how (Checkout Drupal.settings object too. It’s fancy.)

>2. tpl.php: Write php code on tpl.php as less as you can.
eg. node—article.tpl.php -> use template_preprocess_node in your template.php to load image url and add it to variable. Then you can print
http://theming.isaacsonwebdevelopment.com/pre-process-node

>3. Bootstrap: It could be just my preference but I like to add class like “col-xs-12 col-sm-6” instead of just “col-sm-6” because you will lose some css declaration that is applied on all "col-*-*" selector on mobile version such as position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px;
If you did it, you wouldn't have to add left and right margin on #footer > div .copyright

>4. Works page: how about placing a down arrow icon at the bottom of first view? I couldn’t realize that it’s scrollable on first look.

Thanks to him, I explored a little bit more in Drupal world.
