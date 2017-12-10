<?php 

	include 'models/Messaggio.php';

	class DataGate{
			
			public static function getLastConvertationByIdChat($id_chat){
				$sql = "SELECT * FROM messaggio WHERE cancellato = 'NO';";
				$ris = $this->getConnection()->query($sql);
				
				$array = Array();

				while ($row = $ris->fetch_assoc()) {
					array_push($array,new Messaggio($row));	
				}
				return $array;
			}
			
			private static function getConnection(){
				return new mysqli('localhost', 'root', '', 'chat');
			}
	}


?>