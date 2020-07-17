// This file is part of The Course Module Navigation Block
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/* jshint node: true, browser: false */

/**
 * @copyright  2014 Andrew Nicols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Grunt configuration
 */
"use strict";

module.exports = function(grunt) {
    // Running local with
    // First time npm install
    // nvm use 8.9
    // grunt --moodledir=/Users/mail/OPENSOURCE/moodle-370/

    // Import modules.
    require("grunt-load-gruntfile")(grunt);

    var MOODLE_DIR = grunt.option('moodledir') || '../../';
    grunt.loadGruntfile(MOODLE_DIR + "Gruntfile.js");

    //Load all grunt tasks.
    grunt.loadNpmTasks("grunt-contrib-less");
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks("grunt-contrib-clean");
    grunt.loadNpmTasks("grunt-fixindent");

    grunt.initConfig({
        less: {
            // Compile moodle styles.
            moodle: {
                options: {
                    compress: false
                },
                src: 'less/course_modulenavigation.less',
                dest: 'styles.css'
            }
        },
        eslint: {
            amd: {src: "amd/src"}
        },
        uglify: {
            amd: {
                files: {
                    "amd/build/coursenav.min.js": ["amd/src/coursenav.js"],
                },
                options: {report: 'none'}
            }
        },
        watch: {
            // Watch for any changes to less files and compile.
            files: ["less/*.less"],
            tasks: ["compile"],
            options: {
                spawn: false,
                livereload: true
            }
        },
        fixindent: {
            stylesheets: {
                src: [
                    'styles.css'
                ],
                dest: 'styles.css',
                options: {
                    style: 'space',
                    size: 4
                }
            }
        },
        csslint: {
            strict: {
                options: {
                    import: 2
                },
                src: ['styles.css']
            },
            lax: {
                options: {
                    import: false
                },
                src: ['styles.css']
            }
        }
    });

    // Register tasks.
    grunt.registerTask("default", ["less", "fixindent", "eslint", "uglify"]);
};
