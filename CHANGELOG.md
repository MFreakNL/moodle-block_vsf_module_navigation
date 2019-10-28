# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)

# Plugin version.php information
```php
// Example

// Plugin release number corresponds to the lasest tested Moodle version in which the plugin has been tested.
>release = '3.5.7'; // [3.5.7]

// Plugin version number corresponds to the latest plugin version.
>version = 2019010100; // 2019-01-01
```

# How do I make a good changelog?
Guiding Principles
* Changelogs are for humans, not machines.
* There should be an entry for every single version.
* The same types of changes should be grouped.
* The latest version comes first.
* The release date of each version is displayed.

Types of changes
* **Added** for new features.
* **Changed** for changes in existing functionality.
* **Deprecated** for soon-to-be removed features.
* **Removed** for now removed features.
* **Fixed** for any bug fixes.
* **Security** in case of vulnerabilities.

## Version 3.8 (2019.10.28)

### Added
- Update version number
- Convert changelog new structure

<hr>

## Version 3.7 (2019.01.02)
 1. Collapsing menu items.
 
## Version 3.6 (2017.06.20)
  1. Check and update to Moodle version 3.3
  2. Update plugin for MDL-57769 - Course formats: Attribute 'numsections' was removed from topics and weeks, other course formats may want to implement similar changes

## Version 3.5 (2016.11.22)
  1. Compatibility with Moodle 3.2
  2. Add option to show only course titles

## Version 3.4 (2016.10.07)
  1. Add option between downwards arrow and click on title
  2. Show labels in the menu
  3. Add option to show all tabs open

## Version 3.3 (2016.08.01)
  1. Add links on the sections titles. Now each section title point to section page
  2. Add an arrow after sections titles to open menu content.
  
## Version 3.2 (2016.06.23)
  1. Define $myactivityid earlier
  2. Add descriptions to templates
  3. Fix a bug with the option "show the current section only" where link of title section doesn't work
  
## Version 3.1 (2016.06.09)
  1. Add Travis to check code 
  2. Add Gruntfile copyright
  3. Fix bug where activities and resources having a visibility set to "hidden" are shown in the menu (thank to Mathias)
  4. Check for Moodle 3.1
  
## Version 1 (2016.04.26)
  1. First release