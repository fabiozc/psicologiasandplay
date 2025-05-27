# CSS Structure for Psicologia Sandplay Theme

## Overview
The CSS has been completely reorganized into modular, maintainable files. Each section of the home page now has its own dedicated CSS file, making it easier to maintain and update.

## File Structure

### Core CSS Files
- `css/variables.css` - CSS custom properties and design tokens
- `css/base.css` - Base styles and resets
- `css/layout.css` - Layout utilities and grid systems
- `css/typography.css` - Typography styles
- `css/colors.css` - Color system and themes
- `css/spacing.css` - Spacing utilities

### Structural CSS Files
- `css/header.css` - Header and site branding
- `css/navigation.css` - Main site navigation
- `css/section-footer.css` - Footer styles

### Section-Specific CSS Files
- `css/section-hero.css` - Hero section with logo and main image
- `css/section-navigation.css` - Floating navigation below hero
- `css/section-about.css` - About Renata section
- `css/section-quote.css` - Quote section with brown background
- `css/section-sandplay.css` - What is Sandplay section
- `css/section-voices.css` - Jung & Kalff voices section
- `css/section-reflections.css` - Reflections grid section
- `css/section-faq.css` - FAQ accordion section

### Page-Specific CSS Files
- `css/page-home.css` - Home page specific styles and utilities

## Key Features

### CSS Variables
All sections use consistent CSS variables for:
- Colors and gradients
- Typography scales
- Spacing system
- Border radius values
- Shadow depths
- Transition timings
- Container widths

### Responsive Design
Each section includes:
- Mobile-first approach
- Breakpoints at 900px, 600px, and 500px
- Flexible layouts that adapt to screen size
- Optimized typography scaling

### Interactive Elements
- Hover effects with smooth transitions
- Focus states for accessibility
- Transform animations on cards and images
- FAQ accordion functionality

### Accessibility Features
- Proper focus management
- Keyboard navigation support
- Semantic HTML structure
- ARIA attributes where needed
- Color contrast compliance

## JavaScript Functionality

### `js/home-interactions.js`
Provides:
- FAQ accordion functionality
- Sticky navigation behavior
- Smooth scrolling for anchor links
- Image loading animations
- Keyboard accessibility support

## Usage

### Adding New Sections
1. Create a new CSS file: `css/section-[name].css`
2. Import it in `style.css`
3. Use existing CSS variables for consistency
4. Follow the established naming conventions

### Modifying Existing Sections
1. Locate the appropriate section CSS file
2. Make changes using existing variables when possible
3. Test responsive behavior across breakpoints
4. Ensure accessibility is maintained

### CSS Variable Usage
```css
/* Use existing variables */
color: var(--color-brand-primary);
font-family: var(--font-serif);
padding: var(--spacing-large);
border-radius: var(--border-radius-medium);
box-shadow: var(--shadow-depth-1);
transition: var(--transition-medium);
```

## Benefits of This Structure

1. **Maintainability** - Each section is isolated and easy to modify
2. **Consistency** - Shared variables ensure design coherence
3. **Performance** - Modular loading and optimized CSS
4. **Scalability** - Easy to add new sections or pages
5. **Collaboration** - Clear organization for team development
6. **Debugging** - Easy to locate and fix section-specific issues

## Migration Notes

- All inline CSS has been removed from `page-home.php`
- Styles are now properly organized and cached
- JavaScript interactions are properly enqueued
- Theme follows WordPress best practices 