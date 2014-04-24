<?php
/*
    PufferPanel - A Minecraft Server Management Panel
    Copyright (c) 2013 Dane Everitt
 
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program.  If not, see http://www.gnu.org/licenses/.
 */
 
/*
 * PufferPanel Page Actions Function File
 */
namespace Page;

trait components {
	
	public static function redirect($url) {
                
        if(!headers_sent())
			header('Location: '.urldecode($url));
		else
			exit('<meta http-equiv="refresh" content="0;url='.urldecode($url).'"/>');
			
	}
    
    public static function genRedirect(){
        
        $https = (isset($_SERVER['HTTPS'])) ? 'https://' : 'http://';
        return $https.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        
    }
    		
}

trait CURL {

	public function makeConnection() {
	
		return false;
	
	}

}

?>