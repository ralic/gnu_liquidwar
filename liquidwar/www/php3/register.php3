<?
/*****************************************************************************/
/* Meta-server which registers game servers                                  */
/* Copyright (C) 2002-2013 Christian Mauduit                                 */
/*                                                                           */
/* This program is free software; you can redistribute it and/or modify      */
/* it under the terms of the GNU General Public License as published by      */
/* the Free Software Foundation; either version 2 of the License, or         */
/* (at your option) any later version.                                       */
/*                                                                           */
/* This program is distributed in the hope that it will be useful,           */
/* but WITHOUT ANY WARRANTY; without even the implied warranty of            */
/* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             */
/* GNU General Public License for more details.                              */
/*                                                                           */
/* You should have received a copy of the GNU General Public License         */
/* along with this program; if not, write to the Free Software               */
/* Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA */
/*                                                                           */
/* Homepage       : http://www.ufoot.org                                     */
/* Contact author : ufoot@ufoot.org                                          */
/*****************************************************************************/

// system page called by servers to register themselves

require 'db.php3';
require 'html.php3';
require 'metaserver.php3';

header("Content-Type: text/plain");

$result=metaserver_register($protocol,
			    $game,
			    $version,
			    $port,
			    $busy_players,
			    $max_players,
			    $password,
			    $comment);

if ($result) 
{
  echo "OK\n";
}
else
{
  echo "error\n";
}

?>
