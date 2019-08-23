<?php

// try the parse method
// add in some spaces to check trimming
Tag::fromStrings(["Wombat", "Fish ", " Spoons "]);

// get all the tags
// a collection with "Wombat", "Fish", and "Spoons" Tags
Tag::all();

// try again, with some new tags and some old
Tag::fromStrings(["Fish", "Penguin", "Koala "]);

// get all the tags
// a collection with "Wombat", "Fish", "Spoons"
// "Penguin" and "Koala" tags
// Fish should only appear once
Tag::all();
