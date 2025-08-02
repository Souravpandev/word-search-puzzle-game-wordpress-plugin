# Word Search WordPress Plugin

A comprehensive and interactive Word Search puzzle plugin for WordPress that allows you to create, manage, and display engaging word search games on your website with ease.

## ✨ Features

- 🎯 **Unlimited Puzzles**: Create and manage multiple word search puzzles
- 🎨 **Responsive Design**: Works perfectly on all devices and screen sizes
- ⚡ **Interactive Interface**: Users can solve puzzles directly on your site
- 🕒 **Built-in Timer**: Track solving time for each puzzle
- 🖨️ **Print & Export**: Save puzzles as PDF or print them directly
- 🔍 **Word Highlighting**: Interactive word selection and highlighting
- 📱 **Mobile-Friendly**: Touch-optimized for mobile devices
- 📝 **Shortcode Support**: Easily embed puzzles anywhere on your site
- 🎭 **Custom Styling**: Full CSS control over appearance
- 📊 **Category Support**: Organize puzzles with categories
- 🔄 **AJAX-Powered**: Smooth, fast user experience

## 🚀 Installation

1. Download the latest version of the plugin
2. Upload the `word-search` folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Navigate to 'Word Search' in your WordPress admin to get started

## 📖 User Guide

### Creating a New Word Search Puzzle

1. Go to **Word Search > Add New** in your WordPress admin
2. Enter a title for your puzzle (e.g., "Summer Words")
3. In the editor, add your words - one word per line
4. Configure puzzle settings (grid size, difficulty, etc.)
5. Click **Publish** to save your word search

### Displaying Puzzles on Your Site

Use the following shortcode to display a word search:

```
[wordsearch id="123"]
```

**Parameters:**
- `id` (required): The ID of your word search (find it in the Word Search list)
- `show_timer`: Set to "false" to hide the timer (default: true)
- `show_words`: Set to "false" to hide the word list (default: true)

Example with all parameters:
```
[wordsearch id="123" show_timer="true" show_words="true"]
```

### Managing Word Searches

- **Edit**: Go to **Word Search > All Word Searches**, hover over a puzzle, and click "Edit"
- **Delete**: Hover over a puzzle and click "Trash"
- **Categories**: Organize puzzles using the "Word Search Categories" under the Word Search menu

### Customization

#### Styling
Add custom CSS to your theme's `style.css` or use the WordPress Customizer:

```css
/* Example custom styles */
.word-search-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.word-search-grid {
    background: #f9f9f9;
    border: 2px solid #ddd;
}

.word-search-cell {
    border: 1px solid #eee;
    text-align: center;
    font-size: 18px;
    font-weight: bold;
}

.word-search-word-list {
    column-count: 2;
    column-gap: 20px;
}
```

## 🛠️ Plugin Structure

```
word-search/
├── admin/                    # Admin interface files
│   ├── css/                  # Admin-specific styles
│   └── js/                   # Admin JavaScript functionality
│       └── word-search-admin.js  # Admin-side scripts
│
├── includes/                 # Core plugin files
│   ├── class-word-search.php      # Main plugin class
│   ├── class-word-search-activator.php  # Activation logic
│   ├── class-word-search-deactivator.php # Deactivation logic
│   └── wordfind/             # Word search generation engine
│       ├── WordFind.php      # Main word find algorithm
│       └── WordFindGrid.php  # Grid generation and management
│
├── public/                   # Frontend files
│   ├── css/                  # Frontend styles
│   │   └── word-search-public.css
│   └── js/                   # Frontend JavaScript
│       ├── wordfind.js       # Core word find library
│       ├── wordfind-js.js    # Word find utilities
│       ├── word-search-public.js  # Main frontend functionality
│       ├── word-search-timer.js   # Timer functionality
│       └── word-search-print.js   # Print/export functionality
│
├── templates/                # Template files
│   ├── single-wordsearch.php # Single puzzle template
│   └── archive-wordsearch.php # Puzzle archive template
│
├── word-search.php           # Main plugin file
└── README.md                 # This file
```

## 🔧 Development

### Requirements

- PHP 7.4 or higher
- WordPress 5.6 or higher
- MySQL 5.6 or higher
- Node.js (for development)

### Setting Up Development Environment

1. Clone the repository to your WordPress plugins directory
2. Install dependencies:
   ```bash
   cd word-search
   npm install
   ```
3. Make your changes
4. Run tests:
   ```bash
   php tests/test-word-search.php
   ```

### Extending the Plugin

#### Adding New Features
1. Create a new branch for your feature
2. Add your code following WordPress coding standards
3. Document your changes
4. Submit a pull request

#### Filters and Actions

**Filters:**
- `word_search_grid_size`: Modify the default grid size
- `word_search_cell_content`: Customize cell content
- `word_search_word_list`: Modify the word list display

**Actions:**
- `word_search_before_grid`: Content before the puzzle grid
- `word_search_after_grid`: Content after the puzzle grid
- `word_search_completed`: When a user completes a puzzle

## 📝 Changelog

### 1.0.0
- Initial release
- Basic word search functionality
- Admin interface for puzzle management
- Responsive frontend display

## 🤝 Support

For support, feature requests, or bug reports, please:
1. Open an issue on our [GitHub repository](https://github.com/Souravpandev/word-search-puzzle-game-wordpress-plugin/issues)
2. Include WordPress version and PHP version
3. Describe the issue in detail

## 📜 License

This plugin is licensed under the GPL v2 or later.

## 🙏 Credits

- Word search generation powered by WordFind.js
- Built with ❤️ by Sourav Pan
- My website  [WP Optimizelab](https://wpoptimizelab.com/)
- Special thanks to all contributors
