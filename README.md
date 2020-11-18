# phphtml
phphtml
Some of this was in the process of being refactored all of it works.

Html elements have attributes. The files ending in the word Attribute match the attributes allowed on that element. Html has global attributes that is the Global file other Attribute files inherit/extend that since all html elements have those attributes.

HtmlElement.php is the main file. It is used to create elements within classes. You don't use HtmlElement directly it is only used inside classes to create the actual element code. 

If you need elements that do not exist create a class and use HtmlElement. ImgTag for example you pass a list of attributes as an array, this could be an object if you feel fancy to make one.

 Each key of the array is a key from the matching Attributes class, you supply a value for it. For Example for an ImgTag you use ImgTagAttributes::ALT_ATTRRIBUTE => "value" creating an array of keys and values. 

I created this because there are so many HTML elements some have opening and closing tags and some just one self closing tag. I could never remember which used what so I created classes to make it easier. Same with the Attributes each freakin element has special attributes and global attributes, hence the Attributes classes.

The attributes classes are basically constants to prevent having to remember all that crap.
