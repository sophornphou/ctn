<?php
/**
 * @version             $Id: km-KH.localise.php 15628 2011-03-27 05:20:29Z SovannHeng $
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license             GNU General Public License version 2 or later; see LICENSE.txt
 */
// defined('_JEXEC') or die;
/**
 * km-KH localise class
 *
 * @package             Joomla.Site
 * @since               1.6
 */
abstract class km_KHLocalise {    //// !!!! NOTE the use of km_KH for the class !!!// do the same for your language prefix.
        /**
         * Returns the potential suffixes for a specific number of items
         *
         * @param       int $count  The number of items.
         * @return      array  An array of potential suffixes.
         * @since       1.6
         */
        public static function getPluralSuffixes($count) {
                if ($count == 0) {
                        $return =  array('0');
                }
                elseif($count == 1) {
                        $return =  array('1');
                }
                else {
                        $return = array('MORE');
                }
                return $return;
        }
        /**
         * Returns the ignored search words
         *
         * @return      array  An array of ignored search words.
         * @since       1.6
         */
        public static function getIgnoredSearchWords() {
                $search_ignore = array();
                $search_ignore[] = "ក្នុង";
                $search_ignore[] = "អំពី";
                $search_ignore[] = "នៃ";
								$search_ignore[] = "ឬ";
                return $search_ignore;
        }
        /**
         * Returns the lower length limit of search words
         *
         * @return      integer  The lower length limit of search words.
         * @since       1.6
         */
        public static function getLowerLimitSearchWord() {
                return 3;
        }
        /**
         * Returns the upper length limit of search words
         *
         * @return      integer  The upper length limit of search words.
         * @since       1.6
         */
        public static function getUpperLimitSearchWord() {
                return 20;
        }
        /**
         * Returns the number of chars to display when searching
         *
         * @return      integer  The number of chars to display when searching.
         * @since       1.6
         */
        public static function getSearchDisplayedCharactersNumber() {
                return 200;
        }
}
