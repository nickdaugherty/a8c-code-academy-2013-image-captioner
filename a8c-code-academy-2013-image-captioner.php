<?php

/*
Plugin Name: Image Captioner
Description: A8C Meetup 2013 Code Academy Project
Version: 0.1
License: GPL
Author: nickdaugherty, ashthemighty, kristastevens

Copyright 2013 Automattic

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

add_action( 'init', 'image_captioner' );

function image_captioner() {
	if ( has_caption() ) 
		wp_enqueue_style();
		
}

function has_caption() {
	// Determine if there is any post with a caption

	return true;
}