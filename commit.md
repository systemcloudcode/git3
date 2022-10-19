# declarative commit file  

For documentation purposes, shows commit message, changed elements, provides details.

## commit message:

- child post layout, category title update, and basic post / action navigation

## elements:  

- [x] /themes/understrap-child
- [ ] page
- [ ] post
- [ ] /plugins
- [ ] formidable
- [x] snippets
- [ ] /uploads
- [x] other

## details:

- snippet: test wp_update_category() function for post child navation and update category title
- functions.php: require once taxonomy.php
- single.php: post to action navigation
- page block ([cat_slug]): action to posts navigation
- snippet [header-h1]: hide header when single action
- add space betweeen "": [formidable id="13" entry=[id] fields=" "]
- experiment with .type-post .entry-content layout changes