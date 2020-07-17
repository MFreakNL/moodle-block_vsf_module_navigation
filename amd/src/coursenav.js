// This file is part of Moodle - http://moodle.org/
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

/**
 *
 * Tested in Moodle 3.9
 *
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @package     block_vsf_module_navigation
 * @copyright   2020 MFreak.nl
 * @author      Luuk Verhoeven
 **/

/* eslint no-console: ["error", { allow: ["warn", "error" , "log"] }] */
/* eslint-disable no-invalid-this */
define(['jquery'], function($) {

    var module = {

        /**
         * Grouping sets of li items.
         */
        add_classes: function() {
            var i = 0;

            $('.block_vsf_module_navigation li').each(function() {
                var $el = $(this);
                if ($el.hasClass('child')) {
                    $el.attr('data-group', i);
                } else if ($el.hasClass('parent')) {
                    i++;
                    $el.attr('data-group', i);
                }
            });
        },

        /**
         * Open accordion if available.
         * - Show the current section only.
         * @param $li
         */
        open_accordion: function($li) {
            console.log('open_accordion', $li);
            $li.closest('.section-collapse').addClass('show').attr('id');
        },

        /**
         * Open or close a group.
         */
        toggle_on_click_groups: function() {
            $('.block_vsf_module_navigation i.fa').on('click', function(e) {
                e.preventDefault();
                var $li = $(this).parent().parent().parent();

                if ($li.hasClass('parent') || $li.hasClass('child')) {
                    var groupint = $li.data('group');

                    // Open accordion.
                    module.open_accordion($li);

                    // Open all the items.
                    module.toggle_group(groupint);

                    // Show the correct arrow icon.
                    module.toggle_arrow_icon(groupint);
                }
            });
        },

        /**
         * Start the module.
         */
        start: function() {
            console.log('start()');

            this.add_classes();
            this.collapse_active();

            this.toggle_on_click_groups();
        },
        /**
         * Collapse items
         */
        collapse_active: function() {
            var $li = $('.block_vsf_module_navigation li a.active').parent();
            if ($li.hasClass('parent') || $li.hasClass('child')) {
                var groupint = $li.data('group');

                // Open accordion.
                module.open_accordion($li);

                // Open all the items.
                this.toggle_group(groupint);

                // Show the correct arrow icon.
                this.toggle_arrow_icon(groupint);
            }
        },

        /**
         * Toggle group items.
         * @param {int} group
         */
        toggle_group: function(group) {
            var items = $('.block_vsf_module_navigation li[data-group="' + group + '"]').not('.parent');

            if (items.last().hasClass('open') === false) {
                console.log('open');
                items.addClass('open').show();
            } else {
                console.log('close');
                items.removeClass('open').hide();
            }
        },

        /**
         * Toggle icon if group is open or not.
         *
         * @param {int} group
         */
        toggle_arrow_icon: function(group) {
            var $parent = $('.block_vsf_module_navigation li[data-group="' + group + '"].parent');
            var $right = $parent.find('i.fa-arrow-right');

            if ($right.length) {
                $right.attr('class', 'fas fa fa-arrow-down');
            } else {
                $parent.find('i.fa-arrow-down').attr('class', 'fas fa fa-arrow-right');
            }
        }

    };

    return {
        /**
         * Init called directly from Moodle.
         */
        init: function() {

            console.log('vsf module navigation v2.0');

            $(document).ready(function($) {
                if ($('.block_vsf_module_navigation').length) {
                    module.start();
                }
            });
        }
    };
});