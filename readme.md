### This is a base theme for Drupal 7, created by Jen Simmons.  
*I can't give you a unicorn, but I can give you one pony.™*

(http://img.skitch.com/20120209-1reb5phqc8ghj2188g1wbq372c.jpg)  

I made this theme because I've been rolling my own Drupal theme from scratch for every new site for a while now. And I've used the same tricks over and over enough that it's time to bake them into a base theme. I figured I'd put it in a public repository so you can take a peek or use it for your own project.

I don't claim this is The Best Drupal Theme For All Websites Evar. There is a lot of competition for that title in the Drupal base theme world right now, with multiple people claiming their theme theme is Teh Bestest Most 960ResponsiveHTML5FancyBuzzNerdyness. (How something can be both 960-grid and responsive beats me, but I guess it makes for a better sales pitch.) If you want a clickable interface for assigning content to dozens of regions in pre-configured responsive layouts, then checkout the [many](http://drupal.org/project/omega) [themes](http://drupal.org/project/adaptivetheme) [available](http://drupal.org/project/themes).

Pony doesn't have any of that. It's designed for people writing their own custom responsive layout CSS, and therefore doesn't have all the overhead, weight and cost of those other themes. Instead of being flexible enough to be all-things-to-all-sites, Pony focuses on being a tool for web professionals who want simple markup. You can use Pony as a parent theme for your custom-coded site — or even better, use it as a jumping-off point, hack it directly, and create your own codebase. Mostly this project reflects hundreds of hours of research and over a year of punching Drupal 7 in the HTML5 face, trying to get it to behave. If you want shortcuts to what I discovered, then download away. 

Hint: What I've discovered is that Drupal is a total pain in the ass if you want your site's source code to be simple, fast, semantic and modern. It's markup is verbose and unsemantic, and much of the HTML is hardcoded deep inside Drupal where it's very hard to change. I think this is a problem. I want the sites I build to be sleek. I want the same level of quality results that I could get from creating simple HTML templates for another CMS or framework. And I want that for *Drupal,* because otherwise Drupal is pretty awesome. So this project is on a mission to get Drupal to stop doing all that drupally-crap to the HTML. It also represents my personal understanding of many 2012 best practices according to the world's best designers and developers, and my translation of those best practices into Drupal. 


## AN IMPORTANT THING YOU MUST READ ##
_This theme REQUIRES the use of the following modules. REQUIRES. Your results won't be nearly as good without them. Really:_  
Fences — http://drupal.org/project/fences  
HTML5 Tools — http://drupal.org/project/html5_tools  
 
## Pony Admin ##

Pony includes a Pony Admin theme. It's a child of the Seven theme, fixing and overriding a few of the bugs that drive me the nuts. You can read the CSS file to see what it does. 

## Pony Design Kit ##

These days, designing in the browser is the best way to finish out a site's design. Present prototype HTML, CSS and JS to your stakeholders, and let them approve working code instead of frozen pdfs of photoshop drawings. Running code is the best way to create responsive designs and see how they will work on various phones and tablets. I don't mean build out Drupal — I mean create flat HTML files with accompanying CSS to prototype the design. Pony comes with files to get you started with this part of the process. Starter HTML that will match much of what Drupal creates for forms and buttons and such, to save you time later. Why handwrite your HTML (or use someone else's starter kit) with classes and ids that do not match Drupal, only to have to refactor everything later. Start with HTML that is Drupal-like, and get a head start on creating your custom Drupal theme.

## Credits ##

This theme pulls ideas and best practices from all over the web, including these projects:  
320 and Up: http://stuffandnonsense.co.uk/projects/320andup  
HTML5 Boilerplate: http://html5boilerplate.com  
(insert many more here)  
Mothership: http://drupal.org/project/mothership  
Zen 5: http://drupal.org/project/zen  
  
It includes code from the following libraries and projects:  
jQuery Widow Fix: http://matthewlein.com/widowfix  
Respond: https://github.com/scottjehl/Respond  
(add the rest)  
  
  
And thanks to:  
Dan Cederholm  
Andy Clarke  
Jeremy Keith  
Paul Irish  
Divya Manian  
Ethan Marcotte  
Eric Meyers  
John Albin Wilkins  
Jeffrey Zeldman  
for being really smart and generous, and teaching me a ton, both now and years ago. I would not know anything if it weren't for you all. 
 
[pony photo by Rachel Kramer](http://www.flickr.com/photos/rkramer62/5126018092)


## Tools ##

This theme uses SASS. You can ignore (and delete) the SASS files and edit the CSS files directly instead. Or check out SASS. It's cool.
http://sass-lang.com


Tools you might find handy while building your theme include:  
http://responsivepx.com  

