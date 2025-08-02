# Word Search WordPress Plugin

A powerful and interactive Word Search puzzle plugin for WordPress that allows you to create and manage word search games on your website.

## Features

- Create unlimited word search puzzles
- Simple and intuitive admin interface
- Responsive design that works on all devices
- Customizable grid sizes
- Interactive frontend with word selection and solving features
- Store puzzles in a dedicated database table for better performance
- Shortcode support for easy embedding

## Installation

1. Upload the `word-search` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to 'Word Search' in the WordPress admin menu to create your first puzzle

## Usage

### Creating a New Word Search

1. Go to 'Word Search' > 'Add New' in your WordPress admin
2. Enter a title for your word search
3. Add words to your puzzle, one per line
4. Click 'Publish' to save your word search

### Displaying a Word Search

Use the following shortcode to display a word search on any post or page:

```
[wordsearch id="123"]
```

Replace `123` with the ID of your word search. You can find the ID in the 'Word Search' list in your WordPress admin.

### Customization

You can customize the appearance of your word search puzzles by adding custom CSS to your theme.

## Development

### Requirements

- PHP 7.4 or higher
- WordPress 5.6 or higher
- MySQL 5.6 or higher

### File Structure

```
word-search/
├── admin/                    # Admin interface files
│   ├── css/                  # Admin styles
│   └── js/                   # Admin JavaScript
├── includes/                 # Core plugin files
│   └── wordfind/             # Word search generation library
│       ├── WordFind.php      # Main word find class
│       └── WordFindGrid.php  # Grid handling class
├── public/                   # Frontend files
│   ├── css/                  # Frontend styles
│   └── js/                   # Frontend JavaScript
├── tests/                    # Test files
├── word-search.php           # Main plugin file
└── README.md                 # This file
```

### Running Tests

To run the test suite, navigate to the plugin directory in your terminal and run:

```
php tests/test-word-search.php
```

## Support

For support, please open an issue on the [GitHub repository](https://github.com/yourusername/word-search).

## License

This plugin is licensed under the GPL v2 or later.

## Credits

- Word search generation based on the WordFind library
- Built with ❤️ by [Your Name]
