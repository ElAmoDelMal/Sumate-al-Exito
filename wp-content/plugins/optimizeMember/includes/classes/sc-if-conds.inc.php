<?php
/**
* Shortcode `[opmIf /]`.
*
* Copyright: © 2009-2011
* {@link http://www.optimizepress.com/ optimizePress, Inc.}
* ( coded in the USA )
*
* Released under the terms of the GNU General Public License.
* You should have received a copy of the GNU General Public License,
* along with this software. In the main directory, see: /licensing/
* If not, see: {@link http://www.gnu.org/licenses/}.
*
* @package optimizeMember\opmIf
* @since 3.5
*/
if (realpath (__FILE__) === realpath ($_SERVER["SCRIPT_FILENAME"]))
	exit ("Do not access this file directly.");
/**/
if (!class_exists ("c_ws_plugin__optimizemember_sc_if_conds"))
	{
		/**
		* Shortcode `[opmIf /]`.
		*
		* @package optimizeMember\opmIf
		* @since 3.5
		*/
		class c_ws_plugin__optimizemember_sc_if_conds
			{
				/**
				* Handles the Shortcode for: `[opmIf /]`.
				*
				* These Shortcodes are also safe to use on a Multisite Blog Farm.
				*
				* Is Multisite Networking enabled? Please keep the following in mind.
				* ``current_user_can()``, will ALWAYS return true for a Super Admin!
				* 	*( this can be confusing when testing conditionals )*.
				*
				* If you're running a Multisite Blog Farm, you can Filter this array:
				* 	`ws_plugin__optimizemember_sc_if_conditionals_blog_farm_safe`
				* 	``$blog_farm_safe``
				*
				* @package optimizeMember\opmIf
				* @since 3.5
				*
				* @attaches-to ``add_shortcode("opmIf")`` + _opmIf, __opmIf, ___opmIf for nesting.
				*
				* @param array $attr An array of Attributes.
				* @param str $content Content inside the Shortcode.
				* @param str $shortcode The actual Shortcode name itself.
				* @return inner Return-value of inner routine.
				*/
				public static function sc_if_conditionals ($attr = FALSE, $content = FALSE, $shortcode = FALSE)
					{
						return c_ws_plugin__optimizemember_sc_if_conds_in::sc_if_conditionals ($attr, $content, $shortcode);
					}
			}
	}
?>