
<?php 

	class FileManager
	{
		private static $_instance;
		private $path;

		private function __construct(){}
		private function __clone(){}
		private function __wakeup(){}

		static public function getInstance() {
			if(is_null(self::$_instance)) {
				self::$_instance = new self();
			}
			return self::$_instance;
		}

		public function listDirectory() {
			$this->path = isset($_GET['file']) ? $_GET['file'] : __DIR__;
 			echo 'Current directory: <strong>' . $this->path . '</strong>';
			if (is_dir($this->path)) {
	    		$dir = scandir($this->path);
	    		array_shift($dir);
	    			echo '<table>';
	    			echo '<tr>';
	    			echo '<th>' . 'Название' . '</th>';
	    			echo '<th>' . 'Дата' . '</th>';
	    			echo '<th>' . 'Размер' . '</th>';
	    			echo '</tr>';
	    			foreach ($dir as $item) {
	        			if (is_dir($this->path . DIRECTORY_SEPARATOR . $item)) {
	        				echo '<tr>';
	            			echo '<td><a href="'.$_SERVER['PHP_SELF'].'?file=' . realpath($this->path . DIRECTORY_SEPARATOR . $item) . '">' . $item . '</a></td>';
	            			echo '</tr>';
	        			} else {
	        				if(file_exists($item)) {
	        				$date = date("F d Y", fileatime($item));
	        				$size = round(filesize($item)/1024, 2);
	        				echo '<tr>';
	        				echo '<td>' . $item . '</td>';
	        				echo '<td>' . $date .'</td>';
	        				echo '<td>' . $size . 'Kb' . '</td>';
	        				echo '</tr>';
	        				}
	        			}
	    			}
	    			echo '</table>';
			} else {
	    		echo 'Invalid path!';
			}
		}
	}

	FileManager::getInstance()->listDirectory();

?>