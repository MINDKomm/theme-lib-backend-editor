# Theme\Backend\Editor

Opinionated editor improvements for WordPress themes (pre Gutenberg).

- Updates TinyMCE settings:
	- Strips formatting from pasted text
	- Set default block formats: Paragraph, Heading 2 and Heading 3
	- Use custom indentation of `40px`.
- Merges the two rows of buttons into one. Removes all buttons we think are not needed.
- Adds a CSS class `.contentImage` to images inserted into the content editor.

## Installation

You can install the package via Composer:

```bash
composer require mindkomm/theme-lib-backend-editor
```

## Usage

**functions.php**

```php
$editor = new Theme\Backend\Editor();
$editor->init();
```

## Support

This is a library that we use at MIND to develop WordPress themes. You’re free to use it, but currently, we don’t provide any support. 
